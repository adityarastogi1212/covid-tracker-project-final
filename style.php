<style type="text/css">

html{
	scroll-behavior: smooth;
}
	*{

		margin:0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Muli', sans-serif;
}
.row{
	margin-left: 0!important;
	margin-right: 0!important;
	}
.nav_style{
  background-color: #a29bfe!important;

}
.nav_style a{
	color:white;
}
.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{

	font-size: 3rem;
}
.corona_round img{

	animation: corona 3s linear infinite;
}
@keyframes corona{
	0% {transform: rotate(0);}
	100% {transform: rotate(360deg);}
}
.leftside img{
	animation: unity 5s linear infinite;
}
@keyframes unity
{
	0% {transform: scale(0.75);}

	20% {transform: scale(1);}

	40% {transform: scale(0.75);}

	60% {transform: scale(1);}

	80% {transform: scale(0.75);}

	100% {transform: scale(0.75);}
}
/* corona update*/
.corona_update{

	margin: 0 0 30px 0; 
}
.corona_update h3{
	color: #ff7675;
}
.corona_update h1{

	font-size: 2rem;
	text-align: center;
}


.sub_section{
	background-color: #fbfafd;

}
.container-fluid {
	    padding-bottom: 0rem!important;
}
.footer_style{
	background-color: #a29bfe!important;
}
.footer_style p{
	margin-bottom: 0!important;
}
#gotoTop{
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding:10px;
	border-radius: 10px;
}
#gotoTop:hover{
	background: #606060;
}

/*responsive section*/
@media(max-width: 780px){

.main_header{
	height: 700px; 
	text-align: center;
}
.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;

	}
	.count_style{
		display: inline!important;
	}
	.count_style p{
		text-align: center;
	}
	.about_res{
		margin-left: 0!important;
	}

}
.color_change{
	color: red;


}
/* Style all font awesome icons */
.fa {
  margin-left: 60px;		
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook 
.fa-facebook {
  background: #3B5998;
  color: white;
}*/

/* Twitter 
.fa-twitter {
  background: #55ACEE;
  color: white;
}*/

</style>