<!Doctype html>
<html>
<head>
 <title></title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="shortcut icon" HREF="./image/logo.png">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="stylesheet" type="text/css" href="./style/navbc.css">
    <link rel="stylesheet" type="text/css" href="./style/contact.css">

</head>
<body>

<div class="wrapper">
  <div class="bgimage">
    <div class="menu">
      <nav>

          <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>

          <div class="logod" onclick="home()">
			    </div>
					<script type="text/javascript">
			       function home(){
			         location.href="index.php"
			       }
			    </script>

          <ul class="nav-links">
          <li><a href="home.php" id="onlink"> HOME </a></li>
					<li><a href="Training.php"> TRAINING </a></li>
					<li><a href="self-def.php"> self-def </a></li>
					<li><a href="aboutus.php"> About US </a></li>
					<li><a href="logout.php"> Logout </a></li>
			    </ul>
        </nav>

    </div>

    






<div class="container">
<h1 class="text-center"> CONTACT US</h1>
<br>
<div class="col-lg-8 m-auto">
<form id="myform" action="insertphp.php" method="POST">
<div class="form">
<label> email:</label>
<input type="text" name="email" class="form-control" required>
</div>

<div class="form">
<label> subject:</label>
<input type="text" name="subject" class="form-control" required>
</div>

<div class="form">
<label> comments:</label>
<input type="text" name="comments" class="form-control" required>
</div>

<input type="submit" name="submit" id="submit" value="submit" class="btn btn-success">

</form>
</div>
</div>


<script type="text/javascript">

$(document).ready(function(){

var form = $('#myform');

$('#submit').click(function(){

$.ajax({

url: form.attr("action"),
type: 'POST' ,
data: $("#myform input").serialize(),

success: function(data){
    console.log(data);
}


});

});
});


<div class="footer">
  <div class="footer-content">
    <div class="footer-sectionone">
      <h1><br>Feel free to ask us anything</br></h1>
       <h2>If you do like our website submit your feedback in the contact form below</h2>
      <div class="fcontact">
        <span></i> &nbsp;+91-7208391418</span>
        <span></i> &nbsp;martialarts487@gmail.com</span>
      <!--  <a href="contact.php" style="text-decoration: none">Contact form</a>-->
      </div>
    </div>
    <div class="footer-sectiontwo">
        <div id="map">
        </div>
    </div>
  </div>
  <div class="fdown">
  Made by Clane | Varian | Gladstone | Rickie
  </div>

  </div>

<script src="../jss/nav.js"></script>

<script>
function initMap() {
var uluru = {lat: 19.243400, lng: 72.855832};
var map = new google.maps.Map(
    document.getElementById('map'), {zoom: 8, center: uluru});
var marker = new google.maps.Marker({position: uluru, map: map});
}
  </script>

  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
  </script>





</body>
</html>