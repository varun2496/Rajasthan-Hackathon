<?php   
session_start();  
if(!isset($_SESSION["sess_user"]))
{  
    header("Location:loginn.php");  
} else 
{
 ?>
<html>
<body>
<head>
<style>

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width:80px;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

#myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 17px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: auto;
    border: 1px solid #ddd;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
#d1
{
height:800px;
width:800px;
background-color:cyan;
margin:20px 20px 20px 120px;
font-size:20px;
padding:20px 20px 20px 20px;


}
</style>






</style>
<link rel="stylesheet" href="log.css">	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR - Responsive HTML &amp; Bootstrap Template</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	

</head>
<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="img/him2.png" alt="" class="img-responsive logo" height="250px" width="250px"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#hm" >Online Help</a></li>
					        <li ><a id="mn" class="menu" href="#symp">Symptom Checker</a></li>
					       <li><a class="menu" href="logout.php">Log Out</a></li>
					      
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->
<p>Welcome, <?=$_SESSION['sess_user'];?></p>







<iframe id="#hm" src="https://fxo.io/m/pp7mbbvk" width="100%" height="65%" style="border: 3px solid #f9f9fb; width: 100%; height: 65%;"></iframe>






<section class="about text-center" id="symp">
		<div class="container">
			<div class="row">
					<h2>Symptom Checker</h2>
				<h4>
				
				Checking
				</h4>
		<div id="d1">
Age group:     <br/>    
<select>
  <option value="<10">less than 10</option>
  <option value=">10<30">greater than 10 and less 30</option>
  <option value=">30<60">between 30 and 60</option>
  <option value=">30<60">between 30 and 60</option>
  <option value=">60">greater than 60</option>
</select>
<br>

     Gender: <br> Male <input type="radio" name="male"  />  Female<input type="radio"  name="male" onclick="myFunction()"/>   <br> 

Symptoms:        <br>
<p>Please Click the button to show symptoms</p>

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Symptom Checker </button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a onclick="fn()" href ="GetSelectedItem(el)" id="my">Abdominal Pain</a>
    <a href="Back Pain">Back Pain</a>
    <a href="Blood in stool">Blood in stool</a>
    <a href="Chest Pain">Chest Pain</a>
    <a href="Cough">Cough</a>
    <a href="Dark Urine">Dark Urine</a>
    <a href="Diarrhoea">Diarrhoea</a>
  <a href="Dizziness/nausea">Dizziness</a>
  <a href="Fatigue">Fatigue</a>
  <a href="Fever">Fever</a>
  <a href="Gas">Gas</a>
  <a href="Headache">Headache</a>
  <a href="Joint Pain">Joint Pain</a>
  <a href="Loss of apetite">Loss of apetite</a>
  <a href="Rashes">Rashes</a>
  <a href="Vertigo">Vertigo</a>
  
  </div>
</div>




<br>
<br><input  type="text"     name="birfthth" maxlength="15"/><br>
<br> <input type="text"     name="birtfhh" maxlength="15"/><br>

            
<br>
<input type="button" onclick="check(this.form)" value="search"/>
</form>


</div>

		
		
		
		
		
		
		
		
		
		
		
		</div>
</div>		
	</section><!-- end of about section -->





<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>


</body>

</html>
  <?php
}  
?>