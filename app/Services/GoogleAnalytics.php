<?php namespace App\Services;

class GoogleAnalytics{
    
	public function __construct( \Google_Client $client ) 
    {
	    
		$this->client = $client;
		
        $this->client->setClientId('354545452053-bmmgpfqaijb2n47jmua6b71ahe1vi4cl.apps.googleusercontent.com' );
        $this->client->setClientSecret('MD-UPcUCT03MrnImCsiO__ln' );
        $this->client->setDeveloperKey( 'AIzaSyBIQx18M5W_38_fbnqjQexFdN30XBzvuHo' );
        $this->client->setRedirectUri('http://lazylytics.io/gaOauth');
        $this->client->setScopes(array('https://www.googleapis.com/auth/analytics'));

	}
	
	public function isLoggedIn()
	{
	    
	    if ( \Session::has( 'GoogleAnalytics_oAuthToken' ) ) {

	      $this->client->setAccessToken( \Session::get('GoogleAnalytics_oAuthToken') );

	      return true;

	    }
	 
	    return $this->client->getAccessToken();
	}
	 
	public function login( $code ) 
	{     

			$this->client->authenticate( $code );
	    $token = $this->client->getAccessToken();

	  	\Session::put( 'GoogleAnalytics_oAuthToken', $token );
	             
	    return $token;
	
	}
	 
	public function getLoginUrl() 
	{
	  
	    return $this->client->createAuthUrl();

	}

	public function accounts()
	{

    if( ! $this->isLoggedIn() ) return \Redirect::to( $this->getLoginUrl() );
     
    $service = new \Google_Service_Analytics( $this->client );

    $management_accounts = $service->management_accounts->listManagementAccounts();
    
    $accounts = [];
 
    foreach ( $management_accounts['items'] as $account ) {

        $accounts[] = [ 'id' => $account['id'], 'name' => $account['name'] ];

    }
 
    return $accounts;

	}

	public function properties( $account_id )
	{
  
    if( ! $this->isLoggedIn() ) return \Redirect::to( $this->getLoginUrl() );

 
    try {

        $service = new \Google_Service_Analytics( $this->client );

        $management_webproperties = $service->management_webproperties->listManagementWebproperties( $account_id );
        
        $properties = [];
 
        foreach ( $management_webproperties['items'] as $property ) {

            $properties[] = [ 'id' => $property['id'], 'name' => $property['name'] ];

        }
 
        return json_encode($properties);

    } catch ( \Google_ServiceException $e ) {

        return Response::json([

            'status'    => 0,
            'code'      => 3,
            'message'   => $e->getMessage()

        ]);

    }
 
	}

	public function views( $account_id, $property_id )
	{
  
        if( ! $this->isLoggedIn() ) return \Redirect::to( $this->getLoginUrl() );
             
        try {

            $service = new \Google_Service_Analytics( $this->client );

            $management_profiles = $service->management_profiles->listManagementProfiles( $account_id, $property_id );
            
            $views = [];
     
            foreach ( $management_profiles['items'] as $view ) {

                $views[] = [ 'id' => $view['id'], 'name' => $view['name'] ];

            }
     
            return json_encode($views);

        } catch ( \Google_ServiceException $e ) {
            
            return Response::json([
                'status'    => 0,
                'code'      => 3,
                'message'   => $e->getMessage()
            ]);

        }

	}

	public function metadata()
	{
  
        $gcurl = new \Google_IO_Curl( $this->client );

        $response = $gcurl->makeRequest( 

            new \Google_Http_Request( "https://www.googleapis.com/analytics/v3/metadata/ga/columns" )
        );
     
        $data = json_decode( $response->getResponseBody() );
         
        $items           = $data->items;
        $data_items      = [];
        $dimensions_data = [];
        $metrics_data    = [];
     
        foreach( $items as $item ) {

            if( $item->attributes->status == 'DEPRECATED' )
                continue;
     
            if( $item->attributes->type == 'DIMENSION' )
                $dimensions_data[ $item->attributes->group ][] = $item;
     
            if( $item->attributes->type == 'METRIC' )
                $metrics_data[ $item->attributes->group ][] = $item;

        }
     
        $data_items['dimensions'] = $dimensions_data;
        $data_items['metrics'] = $metrics_data;
     
        return $data_items;
	
	}

	public function segments()
	{
    
        if( ! $this->isLoggedIn() ) return \Redirect::to( $this->getLoginUrl() );
        
        $service = new \Google_Service_Analytics( $this->client );

        $segments = $service->management_segments->listManagementSegments();
     
        return (Array) $segments;

	}

	public function report( $payload )
	{

        $dimensions = implode( ",", $payload['dimensions'] );
        $metrics    = implode( ",", $payload['metrics'] );

        $options = array( 'dimensions' => $dimensions, 'segment'    => 'gaid::-1' );
            
        // Move to payload builder 

        ( ! empty($payload['sort'])        ? $options['sort']        = $payload['sort'] : '');
        ( ! empty($payload['filters'])     ? $options['filters']     = $payload['filters'] : '');
        ( ! empty($payload['max_results']) ? $options['max-results'] = $payload['max_results'] : '');
     
        try {

            $analytics = new \Google_Service_Analytics($this->client);
            
            $data = $analytics->data_ga->get( $payload['view'], $payload['range']['start_date'], $payload['range']['end_date'], $metrics, $options );

            \Log::info( 'Processed: [ ' . $data->selfLink . ' ]' );

            $response = [

                'items'         => isset( $data['rows'] ) ? $data['rows'] : [],
                'columnHeaders' => $data['columnHeaders'],
                'totalResults'  => $data['totalResults']

            ];
     
        } catch ( \Google_ServiceException $ex ){
            
            return \Response::json([

                'message'   => 'Google Analytics Internal Server Error: (Technical details) ' . $ex->getErrors()[0]['message']

            ]);

        }
     
        return $response;

	}

}