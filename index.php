<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php

	session_start();
	if(!isset($_SESSION['username'])){
		header('location:login.php');
	}

	?>
	<?php include 'links.php';?>
	<?php include 'style.php';?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5 " href="#">COVID TRACKER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="#sympid">symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="indiacorona.php">indiaCorona</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
    </ul>
   
  </div>
</nav>

<div class="container">

	<a class="float-right" href="logout.php"> LOGOUT </a>

	<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>

	</div>

<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/unity.png" width="300" height="300">
				
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>LET'S STAY AT HOME AND KEEP SAFE FROM COR<span class="corona_round"><img src="images/corona.png"></span>NA VIRUS.</h1>

			</div>
		</div>

	</div width-100 height-100>

</div>

<!--corona update part-->
<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppdercase text-center">COVID-19 LIVE UPDATE WORLDWIDE</h3>	
	</div>
	<div class="d-flex justify-content-around align-items-center count_style">
		<div class="table-responsive">
			<table class="table table-bordered table-striped text-center " id="tval">
				<tr>
					
					<th>Country</th>
					<th>TotalConfirmed</th>
					<th>TotalRecovered</th>
					<th>TotalDeaths</th>
					<th>NewConfirmed</th>
					<th>NewRecovered</th>
					<th>NewDeaths</th>
				</tr>


			</table>

		</div>
		
	</div>
</section>
<!--about section-->


<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>ABOUT COVID-19</h1>
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="images/about corona.jpg " class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>WHAT IS CORONA</h2>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.
The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.</p>
    		<p>HOW IT SPREADS:
Coronavirus disease spreads primarily through contact with an infected person when they cough or sneeze. It also spreads when a person touches a surface or object that has the virus on it, then touches their eyes, nose, or mouth.</p>
		</div>
	</div>
</div>
<!--SYMPTOMS-->

<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>CORONAVIRUS SYMPTOMS</h1>
	</div>
	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">
                     <figcaption>COUGH</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/runnynose.png" class="img-fluid" width="120" height="120">
                     <figcaption>RUNNY NOSE</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/COLD.png" class="img-fluid" width="120" height="120">
                     <figcaption>COLD</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/fever.png" class="img-fluid" width="120" height="120">
                     <figcaption>FEVER</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/tiredness.png" class="img-fluid" width="120" height="120">
                     <figcaption>TIREDNESS</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/difficultybreathing.png" class="img-fluid" width="120" height="120">
                     <figcaption>DIFFICULTY BREATHING</figcaption>
			</figure>
		</div>

	</div>
	</div>
	<!--PREVENTION-->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header  text-center mb-5 mt-4">
		<h1>6 STEPS PREVENTION AGAINST CORONAVIRUS</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/handwash.png" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>wash your hands regularly for 20 seconds ,with soap and water or alcohol-based hand rub. <span class="color_change">To see how to wash hand  </span><a href="https://www.youtube.com/watch?v=IisgnbMfKvI" target="_blank">click here</a></p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/mask.png" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>cover your nose and mouth with a disposal tissue or flexed elbow when you cough or sneeze.<span class="color_change">How to cover your face </span><a href="https://www.youtube.com/watch?v=A_ariGyzOmQ" target="_blank">click here</a></p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/distance people.png" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>avoid close contact (1 meter or 3 feet ) with people who are unwell.<span class="color_change">To know what is social distancing </span><a href="https://www.youtube.com/watch?v=bYQjssb7xdk" target="_blank">click here</a></p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/quarantine.png" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>stay home and self-isolate from others in the household if you feel unwell.<span class="color_change">To know what is home quarantine is </span><a href="https://www.youtube.com/watch?v=MRAgEzpJhUc" target="_blank">click here</a></p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/television.png" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>stay informed by wathing news & follow the recommended practise <span class="color_change">To get the news </span><a href="https://www.youtube.com/results?search_query=live+channel+in+bangladesh" target="_blank">click here</a></p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/service.png" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>if you have fever ,cough and difficulty breathing ,seek medicine care early <span class="color_change">Call the helpline number</span> 1075</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!--contact us-->

<div class="container-fluid  pt-5 pb-5" id="contactid">
	<div class="section_header  text-center mb-5 mt-4">
		<h1>CONTACT WITH US</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">

<!-- form fields-->
<form action=" " method="POST">

  <div class="form-group">
    <label >username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="name@gmail.com" autocomplete="off" required>
  </div>
    <div class="form-group">
    <label >mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
<div class="form-group">
	
<label> select symptoms</label><br>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox1" name="coronasym[]" value="cold">
  <label class="custom-control-label" for="custom-checkbox1"> cold</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox2" name="coronasym[]" value="fever">
  <label class="custom-control-label" for="custom-checkbox2"> fever</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox3" name="coronasym[]" value="breath">
  <label class="custom-control-label" for="custom-checkbox3"> difficulty in breath</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox4" name="coronasym[]" value="feeling weak">
  <label class="custom-control-label" for="custom-checkbox4"> feeling weak</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox5" name="coronasym[]" value="no symp">
  <label class="custom-control-label" for="custom-checkbox5"> no symp</label>
</div>
</div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1" >Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form >
			</div>
		</div>
	</div>
	</div>

<!--top cursor-->
<button onclick="topFunction()" id="gotoTop" title="Go to top">Top</button>
<!--FOOTER-->
<footer class="container mt-5">
	<div class="footer_style text-white  text-center container-fluid">
		<p>@Copyright by Aditya Rastogi</p>
	</div>
	<!-- Add font awesome icons -->
	<a href="https://www.facebook.com/aditya.rastogi.777158/" class="fa fa-facebook"></a>
	<a href="https://twitter.com/AdityaR05678214" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-pinterest"></a>  
	<a href="https://www.linkedin.com/in/aditya-rastogi-06971516b/" class="fa fa-linkedin"></a>  
	<a href="#" class="fa fa-instagram"></a>  
	<a href="#" class="fa fa-youtube"></a>  
	<a href="#" class="fa fa-google"></a>  
	<a href="#" class="fa fa-snapchat-ghost"></a>  
	<a href="#" class="fa fa-skype"></a>
</footer> 
 
<script type="text/javascript">

	
	// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("gotoTop").style.display = "block";
    } else {
        document.getElementById("gotoTop").style.display = "none";
    }
   
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
 
     $('html, body').animate({scrollTop:0}, 'slow');
}

function fetch(){

	$.get("https://api.covid19api.com/summary",

			function(data){

				//console.log(data['Countries'].length);
			 var tval= document.getElementById('tval');
			 for(var i=1;i<(data['Countries'].length);i++){

			 	var x = tval.insertRow();
			 	x.insertCell(0);

			 	tval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
			 	tval.rows[i].cells[0].style.background ='#7a4a91';
			 	tval.rows[i].cells[0].style.color ='#fff';
				
				x.insertCell(1);
			 	tval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
			 	tval.rows[i].cells[1].style.background ='#4bb7d8';
			 	
			 	x.insertCell(2);
			 	tval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
			 	tval.rows[i].cells[2].style.background ='#f36e23';
			 	
			 	x.insertCell(3);
			 	tval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
			 	tval.rows[i].cells[3].style.background ='#4bb7d8';
			 
			 	x.insertCell(4);
			 	tval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
			 	tval.rows[i].cells[4].style.background ='#9cc850';
			 	
			 	x.insertCell(5);
			 	tval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
			 	tval.rows[i].cells[5].style.background ='#f36e23';

			 	x.insertCell(6);
			 	tval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['NewDeaths'];
			 	tval.rows[i].cells[6].style.background ='#4bb7d8';



			 }
			}


		)
}


</script>
</body>
</html>

<?php

include 'dbcon.php';

if (isset($_POST['submit'])) {

 $username =$_POST['username'];
 $email =$_POST['email'];
 $mobile =$_POST['mobile'];
 $symp =$_POST['coronasym'];
 $msg =$_POST['msg'];

 $chk = "";

 foreach ($symp as $chk1 ) {
 	$chk .= $chk1. ",";
 }
  $insertquery = " insert into coronatable(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$msg')";
  $query = mysqli_query( $conn, $insertquery);
  if($query){
	?>
	<script>
		alert("inserted successful");
	</script>

	<?php
 }else{
	?>

	<script>
		alert("not inserted");
	</script>
	<?php
 }

 }
 
 ?>