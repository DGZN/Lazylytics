@extends('app')

@section('header-styles')

<link rel="stylesheet" type="text/css" href="/css/jquery.datetimepicker.css" >

<style>

/*---------------------------------
|				   
|        Packaged Reports
|
|----------------------------------
|
|
|
|
*/

.form-control.ga-select-groups {
	height: 350px;
}

.btn.btn-primary.generate-report {
	position: relative;
	margin-top: 15px;
	margin-bottom: 20px;
}


#reportModal .modal-dialog {

	 width: 600px; 

}

/*---------------------------------
|				   
|        Vertical Tab
|
|----------------------------------
|
|
|
|
*/

/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #5A55A3;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}


</style>

@endsection

@section('content')

<div class="container-fluid">

	<!-- Vertical Tabl -->

	<div class="report-generator col-lg-12 col-md-12 bhoechie-tab-container">

		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bhoechie-tab-menu">

		    <div class="list-group">

		      <a href="#" class="list-group-item active text-center">
		      
		        <h4 class="glyphicon glyphicon-briefcase"></h4> <br/>Packaged Reports
		      
		      </a>
		      
		      <a href="#" class="list-group-item text-center">
		      
		        <h4 class="glyphicon glyphicon-cog"></h4> <br/> Advanced Reports
		      
		      </a>

		      <a href="#" class="list-group-item text-center">
		      
		        <h4 class="glyphicon glyphicon-cog"></h4> <br/> Generated Reports Reports
		      
		      </a>

		    </div>

		    <p></p>

		</div>

		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 bhoechie-tab">
	      
			<!-- Packaged Reports Tab -->

			<div class="bhoechie-tab-content active">
							
							<div class="col-lg-12 col-md-10 col-sm-10 col-xs-10 pull-right">


								<form method="POST" action="packaged" id="ga-packaged-reports" >

									<fieldset>
									
									<input type="hidden" name="_token" value="{{ Session::token() }}">
									<input type="hidden" name="account" value="54979859">
									<input type="hidden" name="property" value="UA-54979859-1">
									<input type="hidden" name="view" value="91404392">

									<br>

									<div class="form-group">

										<div class="row">

											<div class="col-md-12">

												<div class="col-md-6">

												  	<h4>Reports</h4> <br>

												  	<select class="form-control" name="report_package" id="report_package">
														  <!-- <option value="" selected disabled>--- Report Type ---</option> -->
														  <option value="basic" data-report-type="Basic Overview">Basic</option>
														  <option value="devices" data-report-type="Device Types" selected>Device Types</option>
														  <option value="daily" data-report-type="Daily Activity" >Daily Traffic Report</option>
														  <option value="countries" data-report-type="Traffic by Top 100 Countries" >Countries</option>
														  <option value="regions" data-report-type="Traffic by Top Regions" >Regions</option>
														  <option value="technologies" data-report-type="Popular Operating Systems" >Operating Systems</option>
														</select>

												</div>

												<div class="col-md-6">
												  	
												  	<h4>Time Range</h4> <br>

												  	<select class="form-control" name="report_range" id="report_range">
												  		<!-- <option value="" selected disabled>--- Date Range ---</option> -->
														  <option value="today" data-report-range="Today">Today</option>
														  <option value="seven_days" data-report-range="In The Last Week">Past Week</option>
														  <option value="one_month" data-report-range="In The Past Month">Past Month</option>
														  <option value="three_months" data-report-range="In The Past 3 Months" selected>Past 3 Months</option>
														  <option value="one_year" data-report-range="In The Last Year">1 Year</option>
														</select>

												</div>


											</div>

										</div>

									</div>


									

									<div class="form-group">
									  <div class="col-md-2 pull-right">
									    <div class="pull-right">
									      <button type="submit" name="generate_report" class="btn btn-primary generate-report btn-lg">Generate Report!</button>
									    </div>
									  </div>
									</div>

									<br><br>

								</form>

							</div>

			</div>
	      
	      	<!-- Advanced Reports Tab -->

			<div class="bhoechie-tab-content">
							
				<div class="col-lg-12 col-md-10 col-sm-10 col-xs-10 pull-right">

					<form method="POST" action="report" id="ga-query-builder" >

						<fieldset>
						
							<input type="hidden" name="_token" value="{{ Session::token() }}">
							<input type="hidden" name="account" value="54979859">
							<input type="hidden" name="property" value="UA-54979859-1">
							<input type="hidden" name="view" value="91404392">
							<input type="hidden" name="sort" value="-ga:users">
			 
							<br>

							<div class="form-group">

								<div class="row">

									<div class="col-md-12">

										<div class="col-md-3">
										  	
										  	<h4>From</h4>

										  	<input type="text" id="start-datetimepicker" name="start_date" value="2015-01-01" >

										</div>

										<div class="col-md-3">
										  	
										  	<h4>To</h4>

										  	<input type="text" id="end-datetimepicker" name="end_date" value="2015-02-15" >

										</div>

										<div class="col-md-3">
										  	
										  	<h4>Filters</h4>

										  	<input type="text" id="filters" name="filters"  >

										</div>

										<div class="col-md-3">
										  	
										  	<h4>Max Results</h4>

										  	<input type="text" id="max_results" name="max_results" value="100" >

										</div>

									</div>

								</div>

							</div>


							<div class="form-group">
							  
							  <div class="col-md-6">

							  	<h4>Dimensions</h4>

							    <select id="dimensions" name="dimensions[]" id="dimensions" class="form-control ga-select-groups" multiple>
							      @foreach( $dimensions as $key => $group )
							        <optgroup label="{{ $key }}" >
							        @foreach( $group as $dimension )
							          <option value="{{ $dimension->id }}">{{ $dimension->attributes->uiName }}</option>
							        @endforeach
							        </optgroup>
							      @endforeach
							    </select>

							  </div>

							</div>
			          
							<div class="form-group">

							  <div class="col-md-6">

								<h4>Metrics</h4>

							    <select id="metrics" name="metrics[]" id="metrics" class="form-control ga-select-groups" multiple>
							      @foreach( $metrics as $key => $group )
							        <optgroup label="{{ $key }}" >
							        @foreach( $group as $metric )
							          <option value="{{ $metric->id }}">{{ $metric->attributes->uiName }}</option>
							        @endforeach
							        </optgroup>
							      @endforeach
							    </select>

							  </div>

							</div>

							<div class="form-group">

							  <div class="col-sm-offset-2 col-sm-10">
							    <div class="pull-right">
							      <button type="submit" name="generate_report" class="btn btn-primary generate-report btn-lg">Generate Report!</button>
							    </div>
							  </div>

							</div>

						</fieldset>

						<br><br>

					</form>

				</div>

	      	</div>

	      	<!-- Generated Reports Tab -->

			<div class="bhoechie-tab-content">
							
				<div class="col-lg-12 col-md-10 col-sm-10 col-xs-10 pull-right">

					<div class="row">

					  <div class="col-sm-6 col-md-4">

					    <div class="thumbnail">

					      <img src="" alt="">

					      <div class="caption">

					        <h3>Thumbnail label</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      
					      </div>

					    </div>

					  </div>

					  <div class="col-sm-6 col-md-4">

					    <div class="thumbnail">

					      <img src="" alt="">

					      <div class="caption">

					        <h3>Thumbnail label</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      
					      </div>

					    </div>

					  </div>

					  <div class="col-sm-6 col-md-4">

					    <div class="thumbnail">

					      <img src="" alt="">

					      <div class="caption">

					        <h3>Thumbnail label</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      
					      </div>

					    </div>

					  </div>

					  <div class="col-sm-6 col-md-4">

					    <div class="thumbnail">

					      <img src="" alt="">

					      <div class="caption">

					        <h3>Thumbnail label</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      
					      </div>

					    </div>

					  </div>

					  <div class="col-sm-6 col-md-4">

					    <div class="thumbnail">

					      <img src="" alt="">

					      <div class="caption">

					        <h3>Thumbnail label</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      
					      </div>

					    </div>

					  </div>

					  <div class="col-sm-6 col-md-4">

					    <div class="thumbnail">

					      <img src="" alt="">

					      <div class="caption">

					        <h3>Thumbnail label</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      
					      </div>

					    </div>

					  </div>

					  <div class="col-sm-6 col-md-4">

					    <div class="thumbnail">

					      <img src="" alt="">

					      <div class="caption">

					        <h3>Thumbnail label</h3>
					        <p>...</p>
					        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      
					      </div>

					    </div>

					  </div>

					</div>

				</div>

			</div>

	  	</div>

	</div>

	<!-- Report Panel -->

	<div class="row">

		<div class="col-md-12" id="generated-report">

		</div>

	</div>
	
</div>

<!-- Report Modal -->

<div class="modal fade bs-example-modal-lg" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="reportModalLabel">
        	
        </h4>
      </div>
      <div class="modal-body" id="report-modal">
        ...
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!---->

<!-- Shadow DOM -->

<div id="shadow-dom" style="display: none; width: 1px; height: 1px; overflow: hidden; "></div>

<!---->

@endsection


@section('footer-scripts')

	<script src="/js/jquery.datetimepicker.js"></script>

	<script type="text/javascript">

		

		$(document).ready(function() {

    		/*-------------------------------
			|	        
			|          Datetimepicker
			|
			|--------------------------------
			|
			|
			*/

    		$('#start-datetimepicker').datetimepicker({

    			format: 'Y-m-d'

    		});

    		$('#end-datetimepicker').datetimepicker({

    			format: 'Y-m-d'

    		});

    		reportModal = $('#reportModal')

    		reportModal.on('shown.bs.modal', function () {
    		
    			$('#myInput').focus()

 			});

 			reportModal.on('hidden.bs.modal', function (e) {
  			
				//reportModal.html('')
			
			})

    		/*------------------------------------
			|	        
			|  Google Analytics Packaged Reports
			|
			|-------------------------------------
			|
			|
			*/

    		$('#ga-packaged-reports').submit(function() {

			    $('#generated-report').html('')

			    $.ajax({

					type: "POST",
					url: '/packaged',
					data: $("#ga-packaged-reports").serialize(),

					success: function(data) {

						$('#shadow-dom').html(data)

						var displayPanelType = ( $('#display-panel-type').val() != undefined ) ? $('#display-panel-type').val() : 'modal'

						$('#shadow-dom').html('')

						switch ( displayPanelType ) {

						    case 'inline':
						        
						    	$('#generated-report').html( data )

						        break;
						    
						    case 'modal':
						        
								if ( displayPanelType === 'inline' ) return $('#generated-report').html( data )

								$('#report-modal').html(data)

								report_type = $('#report_package option:selected').data('report-type')

								report_range = $('#report_range option:selected').data('report-range')

								$('#reportModalLabel').html( report_type + ' ' + report_range )

								reportModal.modal('show')

						        break;
						    
						}
						
					},

					error: function(e){

						console.error(e)

					}

				});

			    //return false;

			});

    		/*-------------------------------
			|	        
			| Google Analytics Query Builder
			|
			|--------------------------------
			|
			|
			*/

    		$('#ga-query-builder').submit(function() {

			    $.ajax({

					type: "POST",
					url: '/report',
					data: $("#ga-query-builder").serialize(),

					success: function(data) {

						$('#report-modal').html(data)

							reportModal.modal('show');
						
					},

					error: function(e){

						console.error(e)

					}

				});

			    return false;

			});

				
  			
  		})


 		/*-------------------------------
		|	        
		|				 Vertical Tabs 
		|
		|--------------------------------
		|
		|
		*/

 		$(document).ready( function() {

		    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
		      
		        e.preventDefault();
		        $(this).siblings('a.active').removeClass("active");
		        $(this).addClass("active");
		        var index = $(this).index();
		        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
		        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");

		    });

		});

	</script>

@endsection



