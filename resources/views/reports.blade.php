@extends('app')

@section('header-styles')
<style>
select[multiple] {
  height: 130px;
}
</style>
@endsection

@section('content')
<div class="container">
  <br/>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form class="form-horizontal" role="form" action="/report" method="POST">

      <input type="hidden" name="_token" value="{{ Session::token() }}">
        <fieldset>
          <!-- Form Name -->
          <legend>Google Analytics explorer</legend>
          
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Account</label>
            <div class="col-sm-9">
              <!-- <select id="account" name="account" class="form-control">
                  <option value="0">Loading accounts...</option>
              </select> -->
              <input type="text" name="account" value="54979859">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Property</label>
            <div class="col-sm-9">
              <!-- <select id="property" name="property" class="form-control">
                
              </select> -->
              <input type="text" name="property" value="UA-54979859-1">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">View</label>
            <div class="col-sm-9">
              <!-- <select id="view" name="view" class="form-control">
                
              </select> -->
              <input type="text" name="view" value="91404392">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Dimensions</label>
            <div class="col-sm-9">
              <select id="dimensions" name="dimensions[]" id="dimensions" class="form-control" multiple>
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
            <label class="col-sm-3 control-label" for="textinput">Metrics</label>
            <div class="col-sm-9">
              <select id="metrics" name="metrics[]" id="metrics" class="form-control" multiple>
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
                <button type="submit" class="btn btn-primary">Get report</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
</div>
@endsection