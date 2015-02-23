@extends('report-header')

@section('header-styles')

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>


<style>

body { 

	background: #1d2939;

}

</style>

@endsection

@section('content')

<div class="container-fluid">

	<div class="contentpanel">

      <div class="row">

        <div class="col-sm-6 col-md-3">
          <div class="panel panel-success panel-stat">
            <div class="panel-heading">

              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="images/is-user.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">VISITORS</small>
                    <h1>900</h1>
                  </div>
                </div><!-- row -->

                <div class="mb15"></div>

                <div class="row">
                  <div class="col-xs-6">
                    <small class="stat-label">PAGES / VISIT</small>
                    <h4>7.80</h4>
                  </div>

                  <div class="col-xs-6">
                    <small class="stat-label">% NEW VISITS</small>
                    <h4>76.43%</h4>
                  </div>
                </div><!-- row -->
              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6 col-md-3">
          <div class="panel panel-danger panel-stat">
            <div class="panel-heading">

              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="images/is-document.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">% Unique Visitors</small>
                    <h1>54.40%</h1>
                  </div>
                </div><!-- row -->

                <div class="mb15"></div>

                <small class="stat-label">Avg. Visit Duration</small>
                <h4>01:80:22</h4>

              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6 col-md-3">
          <div class="panel panel-primary panel-stat">
            <div class="panel-heading">

              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="images/is-document.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Page Views</small>
                    <h1>300k+</h1>
                  </div>
                </div><!-- row -->

                <div class="mb15"></div>

                <small class="stat-label">% Bounce Rate</small>
                <h4>34.23%</h4>

              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6 col-md-3">
          <div class="panel panel-dark panel-stat">
            <div class="panel-heading">

              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="images/is-money.png" alt="">
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label">Today's Earnings</small>
                    <h1>$655</h1>
                  </div>
                </div><!-- row -->

                <div class="mb15"></div>

                <div class="row">
                  <div class="col-xs-6">
                    <small class="stat-label">Last Week</small>
                    <h4>$32,322</h4>
                  </div>

                  <div class="col-xs-6">
                    <small class="stat-label">Last Month</small>
                    <h4>$503,000</h4>
                  </div>
                </div><!-- row -->

              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->

      <div class="row">
        <div class="col-sm-8 col-md-9">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-8">
                  <h5 class="subtitle mb5">Daily Traffic Report</h5>
                  <p class="mb15"></p>
                  <div id="basicflot" style="width: 100%; height: 300px; margin-bottom: 20px; padding: 0px; position: relative;"><canvas class="flot-base" width="543" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 543px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 278px; left: 28px; text-align: center;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 278px; left: 111px; text-align: center;">1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 278px; left: 194px; text-align: center;">2.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 278px; left: 277px; text-align: center;">3.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 278px; left: 359px; text-align: center;">4.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 278px; left: 442px; text-align: center;">5.0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 77px; top: 278px; left: 525px; text-align: center;">6.0</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 258px; left: 9px; text-align: right;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 215px; left: 9px; text-align: right;">2.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 172px; left: 9px; text-align: right;">5.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 129px; left: 9px; text-align: right;">7.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 86px; left: 1px; text-align: right;">10.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 43px; left: 1px; text-align: right;">12.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">15.0</div></div></div><canvas class="flot-overlay" width="543" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 543px; height: 300px;"></canvas><div class="legend"><div style="position: absolute; width: 77px; height: 42px; top: 16px; left: 42px; opacity: 0.85; background-color: rgb(255, 255, 255);"> </div><table style="position:absolute;top:16px;left:42px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #1CAF9A;overflow:hidden"></div></div></td><td class="legendLabel">Uploads</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #428BCA;overflow:hidden"></div></div></td><td class="legendLabel">Downloads</td></tr></tbody></table></div></div>
                </div><!-- col-sm-8 -->
                <div class="col-sm-4">
                  <h5 class="subtitle mb5">MOBILE DEVICES</h5>
                  <p class="mb15"></p>

                  <span class="sublabel">CPU Usage (40.05 - 32 cpus)</span>
                  <div class="progress progress-sm">
                    <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-primary"></div>
                  </div><!-- progress -->

                  <span class="sublabel">Memory Usage (32.2%)</span>
                  <div class="progress progress-sm">
                    <div style="width: 32%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                  </div><!-- progress -->

                  <span class="sublabel">Disk Usage (82.2%)</span>
                  <div class="progress progress-sm">
                    <div style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger"></div>
                  </div><!-- progress -->

                  <span class="sublabel">Databases (63/100)</span>
                  <div class="progress progress-sm">
                    <div style="width: 63%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning"></div>
                  </div><!-- progress -->

                  <span class="sublabel">Domains (2/10)</span>
                  <div class="progress progress-sm">
                    <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                  </div><!-- progress -->

                  <span class="sublabel">Email Account (13/50)</span>
                  <div class="progress progress-sm">
                    <div style="width: 26%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                  </div><!-- progress -->


                </div><!-- col-sm-4 -->
              </div><!-- row -->
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-sm-9 -->

        <div class="col-sm-4 col-md-3">

          <div class="panel panel-default" style="height: 394px;">
            <div class="panel-body">
            <h5 class="subtitle mb5">Operating Systems</h5>
            <div id="donut-chart2" class="ex-donut-chart"><svg height="298" version="1.1" width="235" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#d9534f" d="M117.5,220.66666666666669A71.66666666666667,71.66666666666667,0,0,0,186.3918314804908,129.25090720122142" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#d9534f" stroke="#ffffff" d="M117.5,223.66666666666669A74.66666666666667,74.66666666666667,0,0,0,189.27567558897647,128.42420099104L220.83774722073622,119.37636080183215A107.5,107.5,0,0,1,117.5,256.5Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#1caf9a" d="M186.3918314804908,129.25090720122142A71.66666666666667,71.66666666666667,0,0,0,120.01074349410605,77.37732706594988" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#1caf9a" stroke="#ffffff" d="M189.27567558897647,128.42420099104A74.66666666666667,74.66666666666667,0,0,0,120.11584438455701,74.3791686640594L121.0909470904075,46.56292126874227A102.5,102.5,0,0,1,216.0313403732601,120.75420448546787Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#428bca" d="M120.01074349410605,77.37732706594988A71.66666666666667,71.66666666666667,0,0,0,50.160193400043,124.47528678676346" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#428bca" stroke="#ffffff" d="M120.11584438455701,74.3791686640594A74.66666666666667,74.66666666666667,0,0,0,47.34131777492851,123.44867088481402L21.188416141921962,113.92395668339425A102.5,102.5,0,0,1,121.0909470904075,46.56292126874227Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#5bc0de" d="M50.160193400043,124.47528678676346A71.66666666666667,71.66666666666667,0,0,0,73.36291931182745,205.46263560476837" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#5bc0de" stroke="#ffffff" d="M47.34131777492851,123.44867088481402A74.66666666666667,74.66666666666667,0,0,0,71.5153205853458,207.82618779287498L54.37371017854391,229.75469976030826A102.5,102.5,0,0,1,21.188416141921962,113.92395668339425Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#428bca" d="M73.36291931182745,205.46263560476837A71.66666666666667,71.66666666666667,0,0,0,117.47748525301964,220.66666313005845" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#428bca" stroke="#ffffff" d="M71.5153205853458,207.82618779287498A74.66666666666667,74.66666666666667,0,0,0,117.47654277523907,223.6666629820144L117.46779867583041,251.4999949418278A102.5,102.5,0,0,1,54.37371017854391,229.75469976030826Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="117.5" y="139" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-stretch: normal; font-size: 15px; line-height: normal; font-family: Arial;" font-size="15px" font-weight="800" transform="matrix(2.1078,0,0,2.1078,-130.1716,-163.4069)" stroke-width="0.47441860465116276"><tspan dy="5.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Chrome</tspan></text><text x="117.5" y="159" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; line-height: normal; font-family: Arial;" font-size="14px" transform="matrix(1.4931,0,0,1.4931,-57.934,-74.4514)" stroke-width="0.6697674418604651"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text></svg></div>
            </div><!-- panel-body -->
          </div><!-- panel -->

        </div><!-- col-sm-3 -->

      </div><!-- row -->

      <div class="row">

        <div class="col-sm-7">

          <div class="table-responsive">
            <table class="table table-bordered mb30">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
          </div><!-- table-responsive -->

        </div><!-- col-sm-7 -->

        <div class="col-sm-5">

          <div class="panel panel-success">
            <div class="panel-heading padding5">
              <div id="line-chart" class="ex-line-chart" style="position: relative;"><svg height="248" version="1.1" width="462" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.328125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="35.875" y="211" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><text x="35.875" y="164.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">17.5</tspan></text><text x="35.875" y="118" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">35</tspan></text><text x="35.875" y="71.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">52.5</tspan></text><text x="35.875" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">70</tspan></text><text x="437" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,6)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="372.2587288909174" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,6)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="307.51745778183476" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,6)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="242.77618667275217" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,6)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="177.8575422181652" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,6)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="113.1162711090826" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,6)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="48.375" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" fill-opacity="0.5" transform="matrix(1,0,0,1,0,6)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="none" stroke="#fdd2a4" d="M48.375,211L113.1162711090826,144.57142857142856L177.8575422181652,131.28571428571428L242.77618667275217,157.85714285714286L307.51745778183476,118L372.2587288909174,78.14285714285714L437,64.85714285714286" stroke-width="2px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#ffffff" d="M48.375,78.14285714285714L113.1162711090826,51.571428571428584L177.8575422181652,91.42857142857143L242.77618667275217,104.71428571428572L307.51745778183476,78.14285714285714L372.2587288909174,51.571428571428584L437,38.285714285714306" stroke-width="2px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="48.375" cy="211" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="113.1162711090826" cy="144.57142857142856" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="177.8575422181652" cy="131.28571428571428" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="242.77618667275217" cy="157.85714285714286" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="307.51745778183476" cy="118" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="372.2587288909174" cy="78.14285714285714" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="437" cy="64.85714285714286" r="4" fill="#fdd2a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="48.375" cy="78.14285714285714" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="113.1162711090826" cy="51.571428571428584" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="177.8575422181652" cy="91.42857142857143" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="242.77618667275217" cy="104.71428571428572" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="307.51745778183476" cy="78.14285714285714" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="372.2587288909174" cy="51.571428571428584" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="437" cy="38.285714285714306" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg></div>
            </div>
            <div class="panel-body">
              <div class="tinystat pull-left">
                <div id="sparkline" class="chart mt5"><canvas width="59" height="30" style="display: inline-block; width: 59px; height: 30px; vertical-align: top;"></canvas></div>
                <div class="datainfo">
                  <span class="text-muted">Average Sales</span>
                  <h4>$630,201</h4>
                </div>
              </div><!-- tinystat -->
              <div class="tinystat pull-right">
                <div id="sparkline2" class="chart mt5"><canvas width="59" height="30" style="display: inline-block; width: 59px; height: 30px; vertical-align: top;"></canvas></div>
                <div class="datainfo">
                  <span class="text-muted">Total Sales</span>
                  <h4>$139,201</h4>
                </div>
              </div><!-- tinystat -->
            </div>
          </div><!-- panel -->

        </div><!-- col-sm-6 -->
      </div><!-- row -->

      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="panel panel-default widget-photoday">
            <div class="panel-body">
              <a href="" class="photoday"><img src="images/photos/photo1.png" alt=""></a>
              <div class="photo-details">
                <h4 class="photo-title">Strawhat In The Beach</h4>
                <small class="text-muted"><i class="fa fa-map-marker"></i> San Franciso, California, USA</small>
                <small>By: <a href="">ThemePixels</a></small>
              </div><!-- photo-details -->
              <ul class="photo-meta">
                <li><span><i class="fa fa-eye"></i> 32,102</span></li>
                <li><a href="#"><i class="fa fa-heart"></i> 1,003</a></li>
                <li><a href="#"><i class="fa fa-comments"></i> 52</a></li>
              </ul>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6 col-md-4">
          <div class="panel panel-default panel-alt widget-messaging">
          <div class="panel-heading">
              <div class="panel-btns">
                <a href="" class="panel-edit"><i class="fa fa-edit"></i></a>
              </div><!-- panel-btns -->
              <h3 class="panel-title">Messaging</h3>
            </div>
            <div class="panel-body">
              <ul>
                <li>
                  <small class="pull-right">Dec 10</small>
                  <h4 class="sender">Jennier Lawrence</h4>
                  <small>Lorem ipsum dolor sit amet...</small>
                </li>
                <li>
                  <small class="pull-right">Dec 9</small>
                  <h4 class="sender">Marsha Mellow</h4>
                  <small>Lorem ipsum dolor sit amet...</small>
                </li>
                <li>
                  <small class="pull-right">Dec 9</small>
                  <h4 class="sender">Holly Golightly</h4>
                  <small>Lorem ipsum dolor sit amet...</small>
                </li>
                <li>
                  <small class="pull-right">Dec 10</small>
                  <h4 class="sender">Jennier Lawrence</h4>
                  <small>Lorem ipsum dolor sit amet...</small>
                </li>
                <li>
                  <small class="pull-right">Dec 9</small>
                  <h4 class="sender">Marsha Mellow</h4>
                  <small>Lorem ipsum dolor sit amet...</small>
                </li>
              </ul>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6 col-md-4">
          <div class="panel panel-dark panel-alt widget-quick-status-post">
          <div class="panel-heading">
              <div class="panel-btns">
                <a href="" class="panel-close">×</a>
                <a href="" class="minimize">−</a>
              </div><!-- panel-btns -->
              <h3 class="panel-title">Quick Status Post</h3>
            </div>
            <div class="panel-body">
              <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#post-status" data-toggle="tab"><i class="fa fa-pencil"></i> <strong>Status</strong></a></li>
                <li><a href="#post-photo" data-toggle="tab"><i class="fa fa-picture-o"></i> <strong>Photo</strong></a></li>
                <li><a href="#post-checkin" data-toggle="tab"><i class="fa fa-map-marker"></i> <strong>Check-In</strong></a></li>
              </ul>
              <div class="tab-content">
                <div id="post-status" class="tab-pane active">
                  <input type="text" class="form-control" placeholder="What's your status?">
                </div>
                <div id="post-photo" class="tab-pane">
                  <input type="text" class="form-control" placeholder="Choose photo">
                </div>
                <div id="post-checkin" class="tab-pane">
                  <input type="text" class="form-control" placeholder="Search location">
                </div>
                <button class="btn btn-primary btn-block mt10">Submit Post</button>
              </div><!-- tab-content -->

            </div><!-- panel-body -->
          </div><!-- panel -->

          <div class="mb20"></div>

          <div class="row">
            <div class="col-xs-6">
              <div class="panel panel-warning panel-alt widget-today">
                <div class="panel-heading text-center">
                  <i class="fa fa-calendar-o"></i>
                </div>
                <div class="panel-body text-center">
                  <h3 class="today">Fri, Dec 13</h3>
                </div><!-- panel-body -->
              </div><!-- panel -->
            </div>

            <div class="col-xs-6">
              <div class="panel panel-danger panel-alt widget-time">
                <div class="panel-heading text-center">
                  <i class="glyphicon glyphicon-time"></i>
                </div>
                <div class="panel-body text-center">
                  <h3 class="today">4:50AM PST</h3>
                </div><!-- panel-body -->
              </div><!-- panel -->
            </div>
          </div>
        </div><!-- col-sm-6 -->

      </div>
	
	</div>

</div>

@endsection

@section('footer-scripts')

	<script type="text/javascript">


	</script>

@endsection


