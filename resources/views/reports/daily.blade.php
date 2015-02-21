@extends('barebones')

@section('header-styles')

	<link rel="stylesheet" href="/css/morris.css">


	<style>

	.container.daily-report-panel{
		
	}

	#daily-line{
		position: relative;
		top: 5px;
		margin: 0 auto;
		width: 100%;
		min-width: 800px;
		height: 450px;
	}

	.morris-hover {
		font-weight: bold;
		font-size: 26px;
	}

	</style>


@endsection

@section('content')

	<div class="container-fluid daily-report-panel devices">

	<!-- <div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Daily Traffic Report</h3>
	  </div>
	  <div class="panel-body">
	    Panel content
	  </div>
	</div> -->	
		
		<input type="hidden" id="display-panel-type" value="inline" >

		<div id="daily-line" style="width: 100%;"></div>

	</div>

@endsection

@section('footer-scripts')

	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	
	<script src="/js/morris.js"></script>	
	
	<script src="/js/raphael-min.js"></script>	

	<script type="text/javascript">

		Morris.Line({
		  
		  element: 'daily-line',
		  
		  data: [

		  @forEach ( $items as $item )

		  	{ y: "{{ $item[0] }}" , Users: "{{ $item[1] }}" },

		  @endforEach


		  ],

		  xkey: 'y',
		  ykeys: ['Users'],
		  labels: ['Users'],
		  lineWidth: 3,
		  pointSize: 0,
		  fillOpacity: '1.0',
		  hideHover: true,

		  yLabelFormat: function(y){

		  	return y.toString()

		  }
		  
		});

	</script>

@endsection
