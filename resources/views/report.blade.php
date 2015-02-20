@extends('barebones')

@section('header-styles')
	
<style>
.container.report-panel{
	width: 500px;
}
</style>

@endsection

@section('content')
<div class="container report-panel">
			<br/>
	  		<div class="row">
				<table class="table">
					<tr>
						@foreach ($columns as $column)
							<th> {{ $column['name'] }} </th>
						@endforeach
					</tr>
					@foreach ($items as $item)
						<tr>
						@foreach ($item as $it)
							<td> {{ $it }} </td>
						@endforeach
						</tr>
					@endforeach
				</table>
			</div><!-- /.row -->
		</div>
@endsection
