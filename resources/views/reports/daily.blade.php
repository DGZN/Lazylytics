@extends('barebones')

@section('header-styles')

	<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">


	<style>

	.container.report-panel{
		width: 500px;
	}

	#daily-line{
		position: relative;
		margin: 0 auto;
		margin-bottom: 400px;
		width: 1200px;
		height: 450px;
	}

	</style>


@endsection

@section('content')

	<div class="container report-panel devices">		
		
		<div id="daily-line" style="width: 1200px;"></div>

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

		  	{ y: "{{ $item[0] }}" , a: "{{ $item[1] }}" },

		  @endforEach


		  ],

		  xkey: 'y',
		  ykeys: ['a'],
		  labels: ['Users'],
		  
		});

	</script>

@endsection
