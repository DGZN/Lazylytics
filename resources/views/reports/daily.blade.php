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
	}

	</style>


@endsection

@section('content')

	<div class="container report-panel devices">
		
		<div id="daily-line" style="height: 350px; width: 250px;"></div>

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
		    { y: '2006', a: 100, b: 90 },
		    { y: '2007', a: 75,  b: 65 },
		    { y: '2008', a: 50,  b: 40 },
		    { y: '2009', a: 75,  b: 65 },
		    { y: '2010', a: 50,  b: 40 },
		    { y: '2011', a: 75,  b: 65 },
		    { y: '2012', a: 100, b: 90 }
		  ],
		  xkey: 'y',
		  ykeys: ['a', 'b'],
		  labels: ['Series A', 'Series B']
		});

	</script>

@endsection
