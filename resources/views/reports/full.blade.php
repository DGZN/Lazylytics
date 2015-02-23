@extends('report-header')

@section('header-styles')

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="/css/morris.css">

<style>

body { 

	background: #1d2939;

}


#daily-line{
  position: relative;
  top: 10px;
  margin: 0 auto;
  width: 100%;
  min-width: 800px;
  height: 550px;
  cursor: pointer;
}

#report_range {
  position: relative;
  margin: 0 auto;
  top: 20px;
  left: 10px;
  cursor: pointer;
  margin-bottom: 50px;
  line-height: 24px;
  height: 40px;
  background-color: #1d2939;
  text-align: center;
  font-size: 15px;
  font-weight: 200;
  color: #bec1c6;
  font-family: 'Lato', sans-serif;
  border: 0px solid rgba(64,64,64,.3);
  display: block;
}

#report_range_slider {
  position: relative;
  margin: 0 auto;
  top: 50px;
  cursor: pointer;
  display: none;
}

.morris-hover {
  font-weight: bold;
  font-size: 26px;
}

.row.stats {
  margin-bottom: 1em;
}



</style>

@endsection

@section('content')

<div class="container-fluid">

	<div class="contentpanel">

      <div class="row">

        <div class="col-md-1 col-md-offset-11">

          <select class="form-control" name="report_range" id="report_range">
            <!-- <option value="" selected disabled>--- Date Range ---</option> -->
            <option value="today" data-report-range="Today">Today</option>
            <option value="one_month" data-report-range="In The Past Month">1 Month</option>
            <option value="seven_days" data-report-range="In The Last Week" selected>1 Week</option>
            <option value="three_months" data-report-range="In The Past 3 Months" >3 Months</option>
            <option value="one_year" data-report-range="In The Last Year" >1 Year</option>
          </select>

        </div>

      </div>

      <div class="row stats">

        <div class="col-sm-6 col-md-4">
          <div class="panel panel-success panel-stat">
            <div class="panel-heading">

              <div class="stat">
                
                <div class="row">
                  
                  <!-- <div class="col-xs-4">
                    <img src="images/is-user.png" alt="">
                  </div> -->
                    
                    <h1 id="sessions">{{ number_format( $report['sessions'] ) }}</h1>

                    <small class="stat-label">SESSIONS</small>

                </div>

                <div class="mb15"></div>

                <!-- <div class="row">
                  <div class="col-xs-6">
                    <small class="stat-label">PAGES / VISIT</small>
                    <h4>7.80</h4>
                  </div>

                  <div class="col-xs-6">
                    <small class="stat-label">% NEW VISITS</small>
                    <h4>76.43%</h4>
                  </div>
                </div> --><!-- row -->
              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6 col-md-4">
          <div class="panel panel-danger panel-stat">
            <div class="panel-heading">

              <div class="stat">
                <div class="row">

                  <!-- <div class="col-xs-4">
                    <img src="images/is-document.png" alt="">
                  </div> -->

                    <h1 id="pageviews">{{ number_format( $report['pageviews'] ) }}</h1>

                    <small class="stat-label">PAGE VIEWS</small>

                </div>

                <div class="mb15"></div>

                <!-- <small class="stat-label">Avg. Visit Duration</small>
                <h4>01:80:22</h4> -->

              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

        <div class="col-sm-6 col-md-4">
          <div class="panel panel-primary panel-stat">
            <div class="panel-heading">

              <div class="stat">
                <div class="row">
                  <!-- <div class="col-xs-4">
                    <img src="images/is-document.png" alt="">
                  </div> -->
                  <div class="col-xs-8">
                     
                    <h1 id="bounceRate"> {{ number_format( $report['bounceRate'] ) }} %</h1>
                    
                    <small class="stat-label">BOUNCE RATE</small> 

                  </div>
                </div><!-- row -->

                <div class="mb15"></div>

                <!-- <small class="stat-label">% Bounce Rate</small>
                <h4>34.23%</h4> -->

              </div><!-- stat -->

            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->

      </div><!-- row -->
	
	</div>

  <!-- Daily Traffic Report -->

  <div class="container-fluid daily-report-panel devices">
    
    <input type="hidden" id="display-panel-type" value="inline">

    <div id="daily-line" style="width: 100%;"></div>

  </div>

</div>

@endsection

@section('footer-scripts')

  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  
  <script src="/js/morris.js"></script> 
  
  <script src="/js/raphael-min.js"></script>  

  <script type="text/javascript">

    $(document).ready(function(){

      var range_range_select = $( "#report_range" )

      var slider = $( "<div id='report_range_slider'></div>" ).insertAfter( range_range_select ).slider({

        min: 1,
        max: 5,
        range: "min",

        value: range_range_select[0].selectedIndex + 5,
        
        slide: function( event, ui ) {

          console.log(ui.value - 1)
          range_range_select[0].selectedIndex = ui.value - 1;

          report_range = $('#report_range option:selected').val()
          updateReport( report_range )

        }

      });


      $( "#report_range" ).change(function() {
      
        //slider.slider( "value", this.selectedIndex + 1 );

        report_range = $('#report_range option:selected').val()
        updateReport( report_range )

      });

      dailyLineGraph = Morris.Line({
      
        element: 'daily-line',
        
        data: [

        @forEach ( $report['items'] as $item )

          { y: "{{ $item[0] }}" , Users: "{{ $item[1] }}", Sessions: "{{ $item[2] }}", Pageviews: "{{ $item[5] }}" },

        @endforEach


        ],

        xkey: 'y',
        ykeys: ['Pageviews','Sessions'],
        labels: ['Pageviews','Sessions'],
        lineWidth: 2.5,
        lineColors: ['#337ab7','#4cae4c','rgba(136,136,136,1)'],
        pointSize: 0,
        fillOpacity: '1.0',
        axes: true,
        grid: false,
        gridTextFamily: 'Lato',
        gridTextSize: 12,
        gridTextColor: 'rgba(255,255,255,.8)',
        gridTextWeight: 400,
        hideHover: true,

        yLabelFormat: function(y){

          return y.toString()

        }
        
      });

    })

    function updateReport( range ) {
      
      $('#daily-line').fadeOut(1200)

      $.ajax({

        type: "POST",
        url: '/update',
        data: {

                'report_range' : range,
                '_token'       : "{{ Session::token() }}"

        },

        success: function(data) {

          if ( data.status ) {

            $('#sessions').html( data.sessions )

            dailyLineGraph.setData( data.lineData )

            $('#daily-line').fadeIn(1500)

            var currentSessionCount = parseFloat( $('#sessions').html() )

            $('#sessions').countTo({ 

              from: 0, 
              to: parseFloat( data.sessions ),
              speed: 1000,
              refreshInterval: 50,

              formatter: function (value, options) {
          
               return number_format( value.toFixed(options.decimals) );
        
              },

            })

            $('#pageviews').countTo({ 

              from: 0, 
              to: parseFloat( data.pageviews ),
              speed: 1000,
              refreshInterval: 100,

              formatter: function (value, options) {
          
               return number_format( value.toFixed(options.decimals) );
        
              },


            })

            $('#bounceRate').countTo({ 

              from: 0, 
              to: parseFloat( data.bounceRate ),
              speed: 200,
              refreshInterval: 1,

              formatter: function (value, options) {
          
                return value.toFixed(options.decimals) + '%';
        
              }

            })

          
          } else {

            alert('There was an error updating your report... We\'re sorry!')

          }


          
        },

        error: function(e){

          console.error(e)

        }

      });

    }

    function clearStats() {

      $('#sessions').html('0')

      $('#pageviews').html('0')

      $('#bounceRate').html('0%')

    }

    function number_format(x) {
      
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    }

  </script>

@endsection



