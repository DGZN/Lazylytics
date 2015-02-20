@extends('app')

@section('header-styles')

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

@endsection

@section('content')

<style>

/*---------------------------------
|				
|             Side Menu
|
|----------------------------------
|
|
|
|
*/
.p-set
{
    padding-top:120px;
     line-height:30px;
     color:#fff;
     font-size:16px;
}
.hr-set {
    border-top:1px solid rgba(0, 0, 0, 0)!important;
    margin-bottom:20px;
}
.hr-set-two {
    border-top:1px solid rgba(0, 0, 0, 0.05)!important;
    margin-bottom:5px;
}

#side-menu {
    height:100%;
    position:fixed;
    top:-1000px;
    left:-250px;
    background-color:#CF2545;
    color:#fff;
    z-index:999;
    overflow:auto;
    max-width:500px;

}
 #side-menu ul {
        list-style:none;
        padding:0px;
    }

        #side-menu ul li {
          border-bottom:1px solid rgba(95, 87, 88, 0.2);
padding: 20px 25px;
display:inline-block;
        }
         #side-menu ul li a i {
             padding-right:10px;
        }

            #side-menu ul li a,#side-menu ul li a:hover {
                color:#fff;
                text-decoration:none;
font-size: 16px;
            }
  
.logo-text {
    padding: 20px 30px;
cursor: pointer;
font-size:20px;
font-weight:900;

}
.menu-close-icon {
    padding:0px 10px;
    cursor: pointer;
    color:#000;
    font-size:25px;
  
}
.menu-open-icon {
    cursor:pointer;
    color:#000;
    padding:180px 30px;
    padding:180px 25px;
    position:fixed;
}

/*---------------------------------
|				
|             Carousel
|
|----------------------------------
|
|
|
|
*/

.carousel-indicators .active{ background: #31708f; } .content{ margin-top:20px; } .adjust1{ float:left; width:100%; margin-bottom:0; } .adjust2{ margin:0; } .carousel-indicators li{ border :1px solid #ccc; } .carousel-control{ color:#31708f; width:5%; } .carousel-control:hover, .carousel-control:focus{ color:#31708f; } .carousel-control.left, .carousel-control.right { background-image: none; } .media-object{ margin:auto; margin-top:15%; } @media screen and (max-width: 768px) { .media-object{ margin-top:0; } }

/*---------------------------------
|				   
|           Vertical Tab
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
  margin-left: 50px;
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


/*---------------------------------
|				
|       Google Style Cards 
|
|----------------------------------
|
|
|
|
*/

.card {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card {
  margin-top: 10px;
  box-sizing: border-box;
  border-radius: 2px;
  background-clip: padding-box;
}
.card span.card-title {
    color: #fff;
    font-size: 24px;
    font-weight: 300;
    text-transform: uppercase;
}

.card .card-image {
  position: relative;
  overflow: hidden;
}
.card .card-image img {
  border-radius: 2px 2px 0 0;
  background-clip: padding-box;
  position: relative;
  z-index: -1;
}
.card .card-image span.card-title {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 16px;
}
.card .card-content {
  padding: 16px;
  border-radius: 0 0 2px 2px;
  background-clip: padding-box;
  box-sizing: border-box;
}
.card .card-content p {
  margin: 0;
  color: inherit;
}
.card .card-content span.card-title {
  line-height: 48px;
}
.card .card-action {
  border-top: 1px solid rgba(160, 160, 160, 0.2);
  padding: 16px;
}
.card .card-action a {
  color: #ffab40;
  margin-right: 16px;
  transition: color 0.3s ease;
  text-transform: uppercase;
}
.card .card-action a:hover {
  color: #ffd8a6;
  text-decoration: none;
}

/*---------------------------------
|				
|        Box Material Design
|
|----------------------------------
|
|
|
|
*/

@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

body {padding-top:50px;}

.box {
    border-radius: 3px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding: 10px 25px;
    text-align: right;
    display: block;
    margin-top: 60px;
}
.box-icon {
    background-color: #57a544;
    border-radius: 50%;
    display: table;
    height: 100px;
    margin: 0 auto;
    width: 100px;
    margin-top: -61px;
}
.box-icon span {
    color: #fff;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}
.info h4 {
    font-size: 26px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.info > p {
    color: #717171;
    font-size: 16px;
    padding-top: 10px;
    text-align: justify;
}
.info > a {
    background-color: #03a9f4;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    transition: all 0.5s ease 0s;
}
.info > a:hover {
    background-color: #0288d1;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    transition: all 0.5s ease 0s;
}


/*---------------------------------
|	       
|				   Google Tooltip
|
|----------------------------------
|
|
|
|
*/

.fab {
  cursor: pointer;
}
.fab-backdrop {
  color: rgba(255, 255, 255, 0);
}
.fab-primary, .fab-secondary {
  transition: all 0.35s ease-in-out;
}
.fab.active .fab-primary {
  opacity: 0;
  transform: rotate(225deg);
}
.fab-secondary {
  opacity: 0;
  transform: rotate(-225deg);
}
.fab.active .fab-secondary {
  opacity: 1;
  transform: rotate(0);
  margin-top: -2px;
}



#inbox .show-on-hover:hover > ul.dropdown-menu {
    display: block;    
    
}
#inbox .show-on-hover {
    position: absolute;
    bottom: 50px;
    right: 50px;
}
#inbox .btn-io{
    border-radius: 50%;
    height: 54px;
    width: 54px;
    padding: 0 !important;
    box-shadow: 0px 3px 7px 0px rgba(202, 124, 124, 0.72);
}
#inbox .dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
top: auto;
bottom: 100%;
margin-bottom: 1px;
margin-bottom: -5px;
padding-bottom: 30px;
}
#inbox .dropdown-menu-right {
right: 0 !Important;
left: auto !Important;
}
#inbox .dropdown-menu {
position: absolute;
top: 100%;
left: 0;
z-index: 1000;
display: none;
float: left;
min-width: 50px;
padding: 5px 0;
margin: 2px 0 0;
font-size: 14px;
text-align: center;
list-style: none;
background-color: rgba(255, 255, 255, 0) !Important;
-webkit-background-clip: padding-box;
background-clip: padding-box;
border: none;
border-radius: 0px;
-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0) !Important;
box-shadow: 0 6px 12px rgba(0, 0, 0, 0) !Important;
}
#inbox .fa-iox{
    font-size: 22px;
}
#inbox .dropdown-menu > li > a {
display: block;
padding: 0;
padding-top: 4px;
margin-top: 20px;
clear: both;
font-weight: normal;
line-height: 1.42857143;
color: #333;
background: #fff;
white-space: nowrap;
width: 40px;
height: 40px;
border: solid 1px #ccc;
border-radius: 50px;
font-size: 21px;
box-shadow: 0px 3px 7px 0px rgba(203, 203, 203, 0.72);
}
#inbox .dropdown-menu > li:first-child>a {
    background: #6E4320 !important;
    color: #fff !important;
}
#inbox .dropdown-menu > li:last-child>a {
    background: #D3A516;
    color: #fff;
}
#inbox .dropdown-menu > li:nth-child(3)>a {
    background: #3C80F6;
    color: #fff;
}
#inbox .dropdown-menu > li:nth-child(2)>a {
    background: #2CAC26;
    color: #fff;
}
#inbox .fa-iosm{
    
    margin-top: 7px;
}

</style>

<div id="side-menu" class="move-me" >
        <hr class="hr-set" />
        <span class="logo-text" >COMPANY NAME   </span>  <i  class="menu-close-icon glyphicon glyphicon-align-justify"></i> 
        <hr class="hr-set-two" />

        <ul  >
            <li>
             <a href="#" > <i class="glyphicon glyphicon-home"></i>    Home</a>
            </li>
            <li>
             <a href="#" >  <i class="glyphicon glyphicon-th"></i>  Features</a>
            </li>
            <li>
              <a href="#" > <i class="glyphicon glyphicon-time"></i>  Pricing</a>
            </li>
             <li>
              <a href="#" >  <i class="glyphicon glyphicon-user"></i>  Developer</a>
            </li>
             <li>
               <a href="#" > <i class="glyphicon glyphicon-map-marker"></i> Contact</a>
            </li>
        </ul>
    <div class="intro-txt">
         <br />
    <i><strong>Company Ovewview </strong></i>
        <hr />
      <p>
             Nunc at viverra risus. In euismod quam ac dictum varius. 
             Nunc at viverra risus. 
             In euismod quam ac dictum varius.
             <br>
            check more snippets from <a href="http://www.designbootstrap.com/" target="_blank" style="text-decoration:none;color:#000">by :DesignBootstrap </a>
            <a href="http://www.designbootstrap.com/" target="_blank" style="text-decoration:none;color:#000"> here </a>
         </p>
    
    </div>
   

       
    </div>
     <!-- SIDE MENU SECTION END-->  
		

<div class="container">

 
    


	<div class="row">
    <div class="col-md-6">
       <h1>    <strong> <i class="menu-open-icon glyphicon glyphicon-align-justify"></i> </strong></h1>
    </div>


	</div>

		<!-- Vertical Tabl -->

		<div class="row">
        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-plane"></h4><br/>Flight
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-road"></h4><br/>Train
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>Hotel
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Restaurant
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Credit Card
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
                      <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Flight Reservation</h3>
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                    </center>
                </div>
            </div>
        </div>
  	
  	</div>

  	<br><br>

    <!-- Cards -->

    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <div class="card">
                <div class="card-image">
                    <span class="card-title">Material Cards</span>
                </div>
                
                <div class="card-content">
                    <p>Cards for display in portfolio style material design by Google.</p>
                </div>
                
                <div class="card-action">
                    <a href="#" target="new_blank">Link</a>
                    <a href="#" target="new_blank">Link</a>
                    <a href="#" target="new_blank">Link</a>
                    <a href="#" target="new_blank">Link</a>
                    <a href="#" target="new_blank">Link</a>
                </div>
            </div>
        </div>

    </div>

    <br><br>

    <!-- Box Material -->

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <a href="" class="btn">Link</a>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-css3"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <a href="" class="btn">Link</a>
                </div>
            </div>
        </div>

		</div>

		<br><br>

		<!-- Carosel with spinner -->

		<div class="row">

  		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 

  			<!-- Indicators --> 
  			
  			<ol class="carousel-indicators"> 
  			
  				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> 
  				<li data-target="#carousel-example-generic" data-slide-to="1"></li> 
  				<li data-target="#carousel-example-generic" data-slide-to="2"></li> 

  			</ol> 

  			<!-- Wrapper for slides --> 

  			<div class="carousel-inner"> 
				
					<div class="item active"> 

						<div class="row"> 

							<div class="col-xs-12"> 

								<div class="thumbnail adjust1"> 

									<div class="col-md-2 col-sm-2 col-xs-12"> 

										<img class="media-object img-rounded img-responsive" src="http://placehold.it/100"> 

									</div> 

									<div class="col-md-10 col-sm-10 col-xs-12"> 

										<div class="caption"> 

											<p class="text-info lead adjust2"> I can't wait to test this out. </p> 

											<p> <span class="glyphicon glyphicon-thumbs-up"> </span> This is a testimonial window. Feedback of user can be displayed here.</p> 

											<blockquote class="adjust2"> 

												<p> Abhijit Goswami </p> 

												<small> <cite title="Source Title"> <i class="glyphicon glyphicon-globe"></i> www.example1.com</cite></small> 

											</blockquote> 

										</div> 

									</div> 

								</div> 

							</div> 

						</div> 

					</div> 

					<div class="item"> 

						<div class="row"> 

							<div class="col-xs-12"> 

								<div class="thumbnail adjust1"> 

									<div class="col-md-2 col-sm-2 col-xs-12"> 

										<img class="media-object img-rounded img-responsive" src="http://placehold.it/100"> 

									</div> 

									<div class="col-md-10 col-sm-10 col-xs-12"> 

										<div class="caption"> 

											<p class="text-info lead adjust2"> I can't wait to test this out. </p> 

											<p> <span class="glyphicon glyphicon-thumbs-up"></span> This is a testimonial window. Feedback of user can be displayed here.</p> 

											<blockquote class="adjust2"> 

												<p> Abhijit Goswami </p> 

												<small> <cite title="Source Title"><i class="glyphicon glyphicon-globe"></i> www.example2.com</cite></small> 

											</blockquote> 

										</div> 

									</div> 

								</div> 

							</div> 

						</div> 

					</div> 

					<div class="item"> 

						<div class="row"> 

							<div class="col-xs-12"> 

								<div class="thumbnail adjust1"> 

									<div class="col-md-2 col-sm-2 col-xs-12"> 

										<img class="media-object img-rounded img-responsive" src="http://placehold.it/100"> 

									</div> 

								<div class="col-md-10 col-sm-10 col-xs-12"> 

									<div class="caption"> 

										<p class="text-info lead adjust2"> I can't wait to test this out. </p> 

										<p><span class="glyphicon glyphicon-thumbs-up"></span> This is a testimonial window. Feedback of user can be displayed here.</p> 

										<blockquote class="adjust2"> 

											<p>Abhijit Goswami</p> 

											<small> 

												<cite title="Source Title"> 

													<i class="glyphicon glyphicon-globe"> </i> www.example3.com 

												</cite>

											</small> 

										</blockquote> 

									</div> 

								</div> 

							</div> 

						</div> 

					</div> 

				</div> 

				<!-- Controls --> 

				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> 

					<span class="glyphicon glyphicon-chevron-left"></span> 

				</a> 

				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> 

					<span class="glyphicon glyphicon-chevron-right"></span> 

				</a>

			</div> 

		</div>

		<br><br>

		<!-- Google Tooltip -->

		<div class="row">

		  <div id="inbox">

          <div class="fab btn-group show-on-hover dropup">
              <div data-toggle="tooltip" data-placement="left" title="Compose" style="margin-left: 42px;">
          <button type="button" class="btn btn-danger btn-io dropdown-toggle" data-toggle="dropdown">
            <span class="fa-stack fa-2x">
                <i class="fa fa-circle fa-stack-2x fab-backdrop"></i>
                <i class="fa fa-plus fa-stack-1x fa-inverse fab-primary"></i>
                <i class="fa fa-pencil fa-stack-1x fa-inverse fab-secondary"></i>
            </span>
          </button></div>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="Coffee"><i class="fa fa-coffee"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="LiveChat"><i class="fa fa-comments-o"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="Reminders"><i class="fa fa-hand-o-up"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="Invites"><i class="fa fa-ticket"></i></a></li>
          </ul>
        </div>

      </div>

		</div>



</div>

@endsection

@section('footer-scripts')

	<script type="text/javascript">

		/*-------------------------------
		|
		|         Google Tooltip 
		|
		|--------------------------------
		|
		|
		*/

		$('.fab').hover( function() {

		    $(this).toggleClass('active');

		});

		$(function() {

		  $('[data-toggle="tooltip"]').tooltip()

		})

		/*-------------------------------
		|	        
		|						Side Menu 
		|
		|--------------------------------
		|
		|
		*/

		$(document).ready(function() {
    
	    $('.menu-close-icon').click(function (e) {
	    
	    	e.preventDefault();

	      $('#side-menu').animate({ left: '-250px', top: '-1000px' });
	       
	    });

	    $('.menu-open-icon').click(function (e) {
	    
	        e.preventDefault();

	        $('#side-menu').animate({ left: '0px', top: '0px' });
	       
	    });

 		});

		/*-------------------------------
		|	        
		|				   Vertical Tabs 
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


