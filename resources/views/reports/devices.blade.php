@extends('barebones')

@section('header-styles')

	<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">


	<style>

	.container.report-panel{
		width: 500px;
	}

	#devices-donut{
		position: relative;
		margin: 0 auto;
	}

	</style>


@endsection

@section('content')

	<div class="container report-panel devices">
		
		<div id="devices-donut" style="height: 350px; width: 250px;"></div>

	</div>

@endsection

@section('footer-scripts')

	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	
	<script src="/js/morris.js"></script>	
	
	<script src="/js/raphael-min.js"></script>	

	<script type="text/javascript">

	
		new Morris.Donut({
		  element: 'devices-donut',
		  data: [

		  @forEach ( $items as $item )

		  	{label: "{{ ucfirst($item[0]) }}" , value: "{{ ucfirst($item[1]) }}" },

		  @endforEach


		  ]
		});	

	</script>

@endsection
