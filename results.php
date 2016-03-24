<!DOCTYPE html>
<html>
<head>
<title>welcome|status check</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medi Cure Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //for-mobile-apps -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- toggle menu links -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- //menu links -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<!-- effect9 links -->
<link href="css/ihover.css" rel="stylesheet" media="all">


<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>

	
	<!-- start-smoth-scrolling -->

</head>
<body>

	<div id="page-wrap">

		<h1 style= "color: blue; ">This is your status. Please check the advice given below</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
           	$answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
            $answer11 = $_POST['question-11-answers'];
            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
        
            // $totalCorrect = 0;
            
            if ($answer1 == "A") {?>

                 <div class="row"><?php

            	   echo "you said yes to: Any new skin change?"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6 col-lg-6">

                             <p> <?php echo"<br>  skin change may not be a seriuos <br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6 col-lg-6">

                        	 <img src="IMAGES1/pic7.jpg" height="100px" width="100px" />

                  		</div
				</div><?php

				}                


              if ($answer1 == "B") {echo "you said no to: Any new skin change?"; echo "<br><br>";}

            if ($answer2 == "A") {echo "sorry"; echo"<br><br>"; }
             if ($answer2 == "B") {echo "sorry"; echo"<br><br>";}

           if ($answer3 == "A") { echo "sURE" ; echo"<br><br>";}
           if ($answer3 == "B") { echo "sorry" ;echo"<br><br>";}

            if ($answer4 == "A") { echo "sorry";echo"<br><br>";}
            if ($answer4 == "B") { echo "LOOK at you" ; echo"<br><br>";}


		    if ($answer5 == "A") { echo "sorry" ; echo"<br><br>";}
		    if ($answer5 == "B") { echo "sorry" ; echo"<br><br>";}


		        if ($answer6 == "A") { echo "sorry" ; echo"<br><br>";}
		    if ($answer6 == "B") { echo "sorry" ; echo"<br><br>";}



		        if ($answer7 == "A") { echo "sorry" ; echo"<br><br>";}
		    if ($answer7 == "B") { echo "sorry" ; echo"<br><br>";}

		        if ($answer8 == "A") { echo "sorry" ; echo"<br><br>";}
		    if ($answer8 == "B") { echo "sorry" ; echo"<br><br>";}


            if ($answer1 == "A") {echo "you said yes to: Brain tumour?"; echo"<br>  The most common symptoms of brain tumours that people first go to the doctor with are headaches and fits (seizures). But do remember that brain tumours are rare and there are much more common reasons for both these symptoms. So if you have either of these, do go to the doctor as soon as possible. But remember that there is most likely another cause of the symptoms <br><br>" ; }
		        if ($answer9 == "A") { echo "sorry" ; echo"<br><br>";}
		    if ($answer9 == "B") { echo "sorry" ; echo"<br><br>";}


		        if ($answer10 == "A") { echo "sorry" ; echo"<br><br>";}
		    if ($answer10 == "B") { echo "sorry" ; echo"<br><br>";}


		        if ($answer11 == "A") { echo "sorry" ; echo"<br><br>";}
		    if ($answer11 == "B") { echo "sorry" ; echo"<br><br>";}

		        if ($answer12 == "A") { echo "sorry" ; echo"<br><br>";}
		    if ($answer12 == "B") { echo "sorry" ; echo"<br><br>";}

		        if ($answer13 == "A") { echo "sorry" ; echo"<br><br>";}
		    if ($answer13 == "B") { echo "sorry" ; echo"<br<br>";}
            // if ($answer5) { $totalCorrect++; }
            
            // echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>


	<div class="copy-right">
	<div class="container">
		<p> &copy; 2016 Medi Cure. All Rights Reserved | Design by<a href="http://w3layouts.com/"> THE U-TEAM</a></p>
	</div>
</div>
<!-- //copy-right -->
<!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
	     <script src="js/jquery-1.11.1.min.js"></script>
		 <script src="js/bootstrap.js"></script>
	<!-- js -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>

</html>


















