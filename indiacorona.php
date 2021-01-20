<!DOCTYPE html>
<html>
<head>
    <?php include 'links.php';?>
	<?php include 'style.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title></title>
	
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
        <h1 class="text-center mt-4 heading">Track Covid Tonight</h1>
        <canvas id="myChart"></canvas>
    </div>
    <div class="myList"></div>
    <script src="./scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

<!--corona update part-->
<section class="corona_update container-fluid">
	<div class="mb-3 mt-5">
		<h3 class="text-uppdercase text-center">COVID-19 LIVE UPDATE</h3>	
	</div>
	<div class="d-flex justify-content-around align-items-center count_style">
		<div class="table-responsive">
			<table class="table table-bordered table-striped text-center " id="tval">
				<tr>
					
					<th>Last Updated Time</th>
					<th>State</th>
					<th>Confirmed</th>
					<th>Active</th>
					<th>Recovered</th>
					<th>Deaths</th>
					
				</tr>

                <?php

                $data = file_get_contents('https://api.covid19india.org/data.json');
                $coranalive = json_decode($data, true);

                $statescount = count($coranalive['statewise']);




                $i=1;
                while($i < $statescount){
                ?>

                <tr>
                    <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
                    <td><?php echo $coranalive['statewise'][$i]['state'] ?></td>
                    <td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
                    <td><?php echo $coranalive['statewise'][$i]['active'] ?></td>
                    <td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
                    <td><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
                </tr>    

                <?php 

                $i++;
                }


                ?>
                
			</table>

		</div>
		
	</div>

    

</section>


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


</script>
</body>
</html>

