<html class="gr__thepetedesign_com"><head>
	<meta charset="utf-8">
	<title>Countdown To Christmas</title>
	<meta name="title" content="Countdown To Christmas">
	<meta name="description" content="A festive christmas countdown">
	<link rel="shortcut icon" id="favicon" href="favicon.ico">
    <meta name="keywords" content="christmas,xmas,countdown,fesitve">
    <meta name="author" content="Eartharoid, The Pete Design">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
	<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="let_it_snow/jquery.let_it_snow.js"></script>
  <style>
    html {
      height: 100%;
    }
    body {
      background: #090b44; /* Old browsers */
      background: -moz-radial-gradient(center, ellipse cover, #090b44 0%, #00001c 100%); /* FF3.6+ */
      background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#090b44), color-stop(100%,#00001c)); /* Chrome,Safari4+ */
      background: -webkit-radial-gradient(center, ellipse cover, #090b44 0%,#00001c 100%); /* Chrome10+,Safari5.1+ */
      background: -o-radial-gradient(center, ellipse cover, #090b44 0%,#00001c 100%); /* Opera 12+ */
      background: -ms-radial-gradient(center, ellipse cover, #090b44 0%,#00001c 100%); /* IE10+ */
      background: radial-gradient(ellipse at center, #090b44 0%,#00001c 100%); /* W3C */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#090b44', endColorstr='#00001c',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
      padding: 0;
      text-align: center;
      font-family: 'open sans';
      position: relative;
      margin: 0;
      height: 100%;
      padding-bottom: 50px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
    }



    a {
      text-decoration: none;
    }


    h1, h2 {
      width: 100%;
      float: left;
    }
    h1 {
      margin-top: 100px;
      color: #1D3185;
      text-shadow: 0 1px 5px rgba(0,0,0,0.5);
      margin-bottom: 5px;
      font-size: 70px;
      letter-spacing: -4px;
    }
    h2 {
      color: #3C487A;
      font-weight: bold;
      margin-top: 0;
      margin-bottom: 10px;
    }

    .pointer {
      position: fixed;
      bottom: 10px;
      left: 50%;
      margin-left: -245px;
      color: #2744BE;
      font-family: 'Open Sans', cursive;
      font-weight: 400;
      font-style: italic;
      font-size: 14px;
      margin-top: 15px;
    }
    pre {
      margin: 80px auto;
    }
    pre code {
      padding: 35px;
      border-radius: 5px;
      font-size: 15px;
      background: rgba(0,0,0,0.1);
      border: rgba(0,0,0,0.05) 5px solid;
      max-width: 500px;
    }


    .main {
      float: left;
      width: 100%;
      margin: 0 auto;
    }


    .main h1 {
      padding:20px 50px;
      float: left;
      width: 100%;
      font-size: 60px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-weight: 100;
      margin: 0;
      padding-top: 25px;
      font-family: 'Pacifico';
      letter-spacing: 2px;
    }

    .main h1.demo1 {
      background: #1ABC9C;
    }

    .reload.bell {
      font-size: 12px;
      padding: 20px;
      width: 45px;
      text-align: center;
      height: 47px;
      border-radius: 50px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
    }

    .reload.bell #notification {
      font-size: 25px;
      line-height: 140%;
    }

    .reload, .btn{
      display: inline-block;
      border: 4px solid #A2261E;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      background: #CC3126;
      display: inline-block;
      line-height: 100%;
      padding: 0.7em;
      text-decoration: none;
      color: #2744BE;
      width: 100px;
      line-height: 140%;
      font-size: 17px;
      font-family: open sans;
      font-weight: bold;
    }
    .reload:hover{
      background: #A2261E;
    }
    .btn {
      width: 200px;
      color: #2744BE;
      border: none;
      margin-left: 10px;
      background: rgba(0, 0, 0, 0.31);
    }
    .clear {
      width: auto;
    }
    .btn:hover, .btn:hover {
      background: rgba(0,0,0,0.5);
    }
    .btns {
      width: 410px;
      margin: 50px auto;
    }
    .credit {
      font-style: italic;
      text-align: center;
      color: #1D3185;
      padding: 10px;
      margin: 0 0 40px 0;
      float: left;
      width: 100%;
    }

    .pointer a {
      color: #2744BE;
      text-decoration: none;
      font-weight: bold;
    }

    .credit a {
      color: #2744BE;
      text-decoration: none;
      font-weight: bold;
    }

    .back {
      position: absolute;
      top: 0;
      left: 0;
      text-align: center;
      display: block;
      padding: 7px;
      width: 100%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      background: rgba(0, 0, 0, 0.35);
      font-weight: bold;
      font-size: 13px;
      color: #2744BE;
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
    }
    .back:hover {
      background: rgba(0, 0, 0, 0.85);
    }
    canvas {
      display: block;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      position: fixed;
    }
    .header {
      position: relative;
    }
    canvas.flare {
      opacity: 0.5;
    }
	</style>
	<script>
	  $(document).ready( function() {
	     $("canvas.flare").let_it_snow({
  	      windPower: 0,
  	      speed: 0,
  	      color: "#392F52",
  	      size:120,
  	      opacity: 0.00000001,
  	      count: 40,
  	      interaction: false
  	    });
  	    $("canvas.snow").let_it_snow({
    	      windPower: 3,
    	      speed: 1,
    	      count: 250,
    	      size: 0,
    	  });
    	  $("canvas.flake").let_it_snow({
    	      windPower: -3,
    	      speed: 1,
    	      count: 20,
    	      size: 10,
    	      image: "let_it_snow/white-snowflake.png"
    	  });

	  });
		</script>
  </head>
  <body data-gr-c-s-loaded="true" class="js"><img src="let_it_snow/white-snowflake.png" style="display: none" id="lis_flake">

  <canvas width="1440" height="777" class="flare"></canvas>
  <canvas width="1440" height="777" class="snow"></canvas>
  <canvas width="1440" height="777" class="flake"></canvas>
  
  <!--CONTENT-->
  <center>
					<br>
					<h1>CHRISTMAS COUNTDOWN...</h1>
					<div id="cntdwn">
						<script>
							TargetDate = "25/12/2017 12:00 AM";
							BackColor = "black";
							ForeColor = "white";
							CountActive = true;
							CountStepper = -1;
							LeadingZero = true;
							DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
							FinishMessage = "Merry Christmas!";
						</script>
					</div>

				</center>
<script src="let_is_snow/countdown.js"></script>


</body></html>