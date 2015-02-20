<?php namespace App\Http\Controllers;

use App\Trace;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Services\GoogleAnalytics;

class HomeController extends Controller {

	private $GoogleAnalytics;

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct( GoogleAnalytics $GoogleAnalytics )
	{
		//$this->middleware('auth');
		$this->GoogleAnalytics = $GoogleAnalytics;

	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		if( ! $this->GoogleAnalytics->isLoggedIn() ) return \Redirect::to( $this->GoogleAnalytics->getLoginUrl() );


        $metadata   = $this->metadata();
        $dimensions = $metadata['dimensions'];
        $metrics    = $metadata['metrics'];
         
        return \View::make('reports', [ 

            'dimensions' => $dimensions, 
            'metrics' => $metrics

        ]);

	}

	public function GAlogin()
	{

		return  \Redirect::to( $this->GoogleAnalytics->getLoginUrl() ); 

	}

	public function login()
	{
	    
	    if( \Input::has('code') ){
	    
	        $code = \Input::get('code');

	        $this->GoogleAnalytics->login($code);
	         
	        return "Go to the home <a href='/'>page</a>";
	    }
	    else{

	        return "Invalide request parameters";

	    }

	}

	public function accounts()
	{
    	
    	$accounts = $this->GoogleAnalytics->accounts();
 
    	return $accounts;
	
	}

	public function properties( $account_id )
	{
    
    	$properties = $this->GoogleAnalytics->properties( $account_id );
 
    	return $properties;

	}

	public function views( $account_id, $property_id )
	{
    	
    	$views = $this->GoogleAnalytics->views( $account_id ,$property_id );
 
    	return $views;

	}

	public function metadata()
	{
    	
    	$metadata = $this->GoogleAnalytics->metadata();
 
    	return $metadata;
	}

	public function segments()
	{
    
    	$segments = $this->GoogleAnalytics->segments();
 
    	return $segments;

	}

	public function builder()
	{

		if( ! $this->GoogleAnalytics->isLoggedIn() ) return \Redirect::to( $this->GoogleAnalytics->getLoginUrl() );


        $metadata   = $this->metadata();
        $dimensions = $metadata['dimensions'];
        $metrics    = $metadata['metrics'];
         
        return \View::make('builder', [ 

            'dimensions' => $dimensions, 
            'metrics' => $metrics

        ]);


	}

	public function packaged()
	{
    
		if( ! $this->GoogleAnalytics->isLoggedIn() ) return \Response::json([

	        'message'   => 'Login required'

	    ]);
	    
	    if( ! \Input::has('report_package') || ! \Input::has('report_range') ) return \Response::json([ 'message'   => 'Invalid request' ]);

	 
	    $view =  'ga:' . \Input::get('view');

	    $payload = $this->buildPackagePayload( $view, \Input::get('report_package'), \Input::get('report_range') );

	    $report = $this->GoogleAnalytics->report( $payload );

	    foreach ( $report['columnHeaders'] as $key => $column ) {
	    
	    	$report['columnHeaders'][$key]['name'] = ucfirst( str_replace( 'ga:', '', $report['columnHeaders'][$key]['name'] ) );

	    }

	    $reportView = ( isset($payload['report_view']) ? $payload['report_view'] : 'report' );
	 
	    return \View::make( $reportView , [ 

	    	'columns' => $report['columnHeaders'], 
	    	'items' => $report['items'], 
	    	'totalResults' => $report['totalResults' ] 

	    ]);

	}


	public function report()
	{
    
		if( ! $this->GoogleAnalytics->isLoggedIn() ) return \Response::json([

	        'message'   => 'Login required'

	    ]);
	    
	    if( ! \Input::has('dimensions') || ! \Input::has('metrics') || ! \Input::has('view') ) return \Response::json([ 'message'   => 'Invalid request' ]);

	 
	    $payload = array(

	    	'view'		  => 'ga:' . \Input::get('view'),
	    	'dimensions'  => \Input::get('dimensions'),
	    	'metrics'	  => \Input::get('metrics'),
	    	'filters'	  => ( ! is_null( \Input::get('filters') )       ? \Input::get('filters')            : '' ),
	    	'sort'		  => ( ! is_null( \Input::get('sort') )          ? \Input::get('sort')               : '' ),
	    	'max_results' => ( ! is_null( \Input::get('max_results') )   ? \Input::get('max_results') : '1000' ),
	    	'range' 	  => array(

	    		'start_date' => ( ! is_null( \Input::get('start_date') ) ? \Input::get('start_date') : '2015-01-01' ),
	    		'end_date'   => ( ! is_null( \Input::get('end_date')   ) ? \Input::get('end_date')   : '2015-02-15' )

	    	)


	    );


	    $report = $this->GoogleAnalytics->report( $payload );


	    foreach ( $report['columnHeaders'] as $key => $column ) {
	    
	    	$report['columnHeaders'][$key]['name'] = str_replace( 'ga:', '', $report['columnHeaders'][$key]['name'] );

	    }

	    foreach ( $report['items'] as $key => $item ) {

	    	if ( ! is_array($item) ) continue;

	    	foreach( $item as $subKey => $value ) {

	    		if ( floatval($value) <= 0 ) continue;

	    		$report['items'][$key][$subKey] = number_format( floatval($value), 0 );

	    	}

	    }
	 
	    return \View::make('report', [ 

	    	'columns' => $report['columnHeaders'], 
	    	'items' => $report['items'], 
	    	'totalResults' => $report['totalResults' ] 

	    ]);

	}

	private function buildPackagePayload( $view, $package, $range )
	{
		
		$payload = [];

		switch ( $package ) {
			
			case 'basic':
				
				$payload['dimensions']  = ['ga:userType'];
				$payload['metrics']     = ['ga:users'];

				break;

			case 'devices':
				
				$payload['dimensions']  = ['ga:deviceCategory'];
				$payload['metrics']     = ['ga:users'];
				$payload['report_view'] = 'reports.devices';

				break;

			case 'countries':
				
				$payload['dimensions']  = ['ga:country'];
				$payload['metrics']     = ['ga:users'];
				$payload['filters']     = 'ga:users>10';
				$payload['sort']	    = '-ga:users';
				$payload['max_results'] = '100';

				break;

			case 'regions':
				
				$payload['dimensions']  = ['ga:region'];
				$payload['metrics']     = ['ga:users'];
				$payload['filters']     = 'ga:region!=(not set);ga:users>20';
				$payload['sort']	    = '-ga:users';

				break;

			case 'technologies':
				
				$payload['dimensions']  = ['ga:operatingSystem'];
				$payload['metrics']     = ['ga:users'];
				$payload['filters']     = 'ga:operatingSystem!=(not set)';
				$payload['sort']	    = '-ga:users';
				$payload['max_results']	= '25';

				break;

			case 'daily':
				
				$payload['dimensions']  = ['ga:date'];
				$payload['metrics']     = ['ga:users'];

				break;

				
			
			default:
				# code...
				break;
		}

		$payload['view'] = $view;

		$payload['range'] = array(

			'start_date' => '2015-01-01',
			'end_date'   => '2015-02-01'

		);

		return $payload;
	}

}
