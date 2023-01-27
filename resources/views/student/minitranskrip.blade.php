

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  
  <title>CodePen - Responsive modern counter</title>
  
  
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Marck+Script|Roboto:100,400,500,900'>
  
<style>
* {
  box-sizing: border-box;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}

h1, p, h2, h3, h4, ul, li, div {
  margin: 0;
  padding: 0;
}

body{
  margin:0px;
}


.wrap{
  display:none;
}

.logo div{
  text-transform:uppercase;
}

.logo .cx{
    font-size: 50px;
    color: #535353;
    margin: 10px 10px 0px;
    font-weight: 900;
}

.logo .cd{
    font-size: 32px;
    color: #535353;
    margin: -40px 139px 0px;
    font-weight: 900;
}

.logo .line{
    position: absolute;
    height: 1px;
    width: calc( 100% - 350px );
    background: #535353;
    margin: -15.5px 165px;
}

.logo .line .days{
    text-align: center;
    font-size: 16px;
    font-weight: 900;
    color: #000000;
    margin: -18px 10px;
}

.logo .cc{
    font-size: 32px;
    color: #b51936;
    margin: -14px 12px 0px;
    font-weight: 400;
}

.social{
    float: right;
    position: absolute;
    right: 0px;
    margin: -25px 40px;
}

.social a{
  text-decoration:none;
}

.social i{
    color: #535353;
    margin:0px 8px;
}

main .container{
   width: 1200px;
   margin: 100px auto;
}

.counter-box{
}

.counter-box .message:nth-of-type(1){
    width: 200px;
    border-left: 1px solid black;
    padding: 0px 25px;
}

.counter-box .message:nth-of-type(3){
    margin: 65px 0px;
    text-align: right;
    width: 100%;
}
.counter-box .message:nth-of-type(4){
    margin: -60px 0px;
    text-align: right;
    width: 100%;
}
.counter-box .message span{
    font-size: 28px;
    color: #111;
    text-transform: uppercase;
    letter-spacing: 10px;
    text-align: center;
}

.counter-box .message span b{
    font-weight: normal;
    letter-spacing: 10px;
}

.counter-box .message span b:before{
    content: "";
    position: absolute;
    width: 180px;
    height: 3px;
    background: #b51936;
    transform: rotate(-1deg);
    margin: 15px -5px;

}

#counter{
    display: flex;
    margin: 80px 0px 120px;
}

.day, .hou, .min, .sec{
  width: 100%;
}

#counter .time{
	color: #b51936;
    padding: 10px;
    font-size: 137px;
    float: left;
    width: 100%;
    text-align: center;
    font-weight: 900;
}

#counter .call{
    font-size: 20px;
    color: #535353;
    text-transform: uppercase;
    float: left;
    margin: -15px 10px 0px;
    text-align: center;
    width: 100%;
}

header .container{
  margin: 40px;
}

.pulse{
    color:red;
    animation: pound 0.35s infinite alternate;
    -webkit-animation: pound 0.35s infinite alternate;
}
@-webkit-keyframes pound {
  to {
    transform: scale(1.1);
  }
}
@keyframes pound {
  to {
    transform: scale(1.1);
  }
}


.loading-page {
  background: #FFF;
  width: 100vw;
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.loading-page .counter {
  text-align: center;
}
.loading-page .counter h1 {
    color: #080808;
    font-size: 20px;
    margin-top: -10px;
}
.loading-page .counter hr {
  background: #080808;
  border: none;
  height: 1px;
}
.loading-page .counter {
  position: relative;
  width: 200px;
}
.loading-page .counter h1.abs {
  position: absolute;
  top: 0;
  width: 100%;
}
.loading-page .counter .color {
  width: 0px;
  overflow: hidden;
  color: #f60d54;
}



@media only screen and (max-width: 1300px){
	
	main .container {
    width: 900px;
    margin: 90px auto;
	}
	
	#counter .time {
    color: #b51936;
    padding: 10px;
    font-size: 100px;
    float: left;
    width: 100%;
    text-align: center;
    font-weight: 900;
	}
	
	#counter .call {
    font-size: 15px;
    color: #535353;
    text-transform: uppercase;
    float: left;
    margin: -15px 10px 0px;
    text-align: center;
    width: 100%;
	}
	
	.counter-box .message span {
    font-size: 20px;
    color: #535353;
    text-transform: uppercase;
    letter-spacing: 10px;
    text-align: center;
	}
	
	.counter-box .message span b:before {
    content: "";
    position: absolute;
    width: 148px;
    height: 3px;
    background: #b51936;
    transform: rotate(-1deg);
    margin: 11px -5px;
	}
}


@media only screen and (max-width: 900px){
	
	main .container {
    width: 600px;
    margin: 90px auto;
	}
	
	#counter .time {
	color: #b51936;
    padding: 10px;
    font-size: 65px;
    float: left;
    width: 100%;
    text-align: center;
    font-weight: 900;
	}
	
	#counter .call {
    font-size: 12px;
    color: #535353;
    text-transform: uppercase;
    float: left;
    margin: -15px 10px 0px;
    text-align: center;
    width: 100%;
	}
	
	.counter-box .message span {
    font-size: 20px;
    color: #111;
    text-transform: uppercase;
    letter-spacing: 10px;
    text-align: center;
	}
	
	.counter-box .message span b:before {
    content: "";
    position: absolute;
    width: 112px;
    height: 3px;
    background: #b51936;
    transform: rotate(-1deg);
    margin: 11px -5px;
	}
	
	footer{
		margin: 130px 0px;
	}
	
	footer main .container {
		font-size: 12px;
	}
}

@media only screen and (max-width: 600px){
	
	main .container {
    width: 300px;
    margin: 90px auto;
	}
	
	.logo .line .days{
		display:none;
	}
	
	#counter {
		display: block;
		margin: 50px 0px;
		position: relative;
	}
	
	.day, .hou, .min, .sec {
		width: 100%;
		height: 140px;
	}
	
	#counter .time {
	color: #b51936;
    padding: 10px;
    font-size: 65px;
    float: left;
    width: 100%;
    text-align: center;
    font-weight: 900;
	}
	
	#counter .call {
    font-size: 12px;
    color: #535353;
    text-transform: uppercase;
    float: left;
    margin: -15px 0px 0px;
    text-align: center;
    width: 100%;
	}
	
	.counter-box .message span {
    font-size: 20px;
    color: #535353;
    text-transform: uppercase;
    letter-spacing: 10px;
    text-align: center;
	}
	
	.counter-box .message span b:before {
    content: "";
    position: absolute;
    width: 112px;
    height: 3px;
    background: #b51936;
    transform: rotate(-1deg);
    margin: 11px -5px;
	}
	
	footer{
    height: 35px;
    margin: 150px 0px 0px;
	}
	
  footer .container {
    width: 300px;
    margin: 0px auto;
  }

}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <div class='loading-page'>
  <div class='counter'>
    <h1>0%</h1>
    <hr>
  </div>
</div>
<div class='wrap'>
  <header>
    <div class='container'>
      <div class='logo'>
        <div class='cx'>Time</div>
        <div class='cd'>to</div>
        <div class='cc'>exam</div>
        <div class='line'>
          <div class='days' id='lDays'></div>
        </div>
      </div>
      <div class='social'>
        <a href='#'>
          <i class='fa fa-facebook'></i>
        </a>
        <a href='#'>
          <i class='fa fa-twitter'></i>
        </a>
        <a href='#'>
          <i class='fa fa-youtube'></i>
        </a>
      </div>
    </div>
  </header>
  <main>
    <div class='container'>
      <div class='counter-box'>
        <div class='message'>
          <span>Dear students</span>
        </div>
        <div id='counter'>
          <div class='day'>
            <div class='time' id='cDays'></div>
            <span class='call'>days</span>
          </div>
          <div class='hou'>
            <div class='time' id='cHours'></div>
            <span class='call'>houres</span>
          </div>
          <div class='min'>
            <div class='time' id='cMinutes'></div>
            <span class='call'>minutes</span>
          </div>
          <div class='sec'>
            <div class='time' id='cSeconds'></div>
            <span class='call'>seconds</span>
          </div>
        </div>
        <div class='message'>
          <span>
            AREPP EDIT NI JADI MINI TRANSKRIP
          </span>
        </div>        
      </div>
    </div>
    <footer>
      <div class='container'>
        
        <span>Kat view student Mini transkrip</span>
        <i class='fa fa-heart pulse'></i>
        <span>by Daniel sayunk</span>
      </div>
    </footer>
  </main>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
      <script id="rendered-js" >
$(document).ready(function () {


  // loading page
  var counter = 0;
  var c = 0;
  var i = setInterval(function () {
    $(".loading-page .counter h1").html(c + "%");
    $(".loading-page .counter hr").css("width", c + "%");
    counter++;
    c++;
    if (counter == 101) {
      clearInterval(i);
      $('.loading-page').fadeOut();
      $('.wrap').show();
    }
  }, 10);


  // counter
  var end = new Date('04/5/2019 10:00 AM');

  var _second = 1000;
  var _minute = _second * 60;
  var _hour = _minute * 60;
  var _day = _hour * 24;
  var timer;

  function showRemaining() {
    var now = new Date();
    var distance = end - now;
    if (distance < 0) {

      clearInterval(timer);
      console.log('Czas matury');

      return;
    }
    //days
    if (Math.floor(distance / _day).length == "1") {
      days = Math.floor(distance / _day) + "0";
    } else {
      days = Math.floor(distance / _day);
    };

    // hours

    if (Math.floor(distance % _day / _hour).length == "1") {
      hours = Math.floor(distance % _day / _hour) + "0";
    } else {
      hours = Math.floor(distance % _day / _hour);
    };


    //minutes
    if (Math.floor(distance % _hour / _minute).length == "1") {
      minutes = Math.floor(distance % _hour / _minute) + "0";
    } else {
      minutes = Math.floor(distance % _hour / _minute);
    };

    //seconds

    if (Math.floor(distance % _minute / _second).length == "1") {
      seconds = Math.floor(distance % _minute / _second) + "0";
    } else {
      console.log(Math.floor(distance % _minute / _second));
      seconds = Math.floor(distance % _minute / _second);
    };

    document.getElementById('cDays').innerHTML = days;

    document.getElementById('lDays').innerHTML = days + " dni";
    document.getElementById('cHours').innerHTML = hours;
    document.getElementById('cMinutes').innerHTML = minutes;
    document.getElementById('cSeconds').innerHTML = seconds;
  }

  timer = setInterval(showRemaining, 1000);

});
//# sourceURL=pen.js
    </script>

  

</body>

</html>
 
