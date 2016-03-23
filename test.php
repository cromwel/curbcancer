<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
    <h1 >Get your results</h1>

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

            	   echo "<p>you said YES to: Any new skin change?</p>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>  While change in skin texture and all that about your skin may not be any Skin cancers' sign, its always good to keep a high check and a regular one to avoid anything that may come as  a result. Some skin diseases include melanoma, basal cell, and squamous cell. Basal and squamous cell are common and treatment is very effective. Malignant melanoma can be difficult to treat. Early diagnosis and treatment can increase the survival rate from melanoma. Keep working for your health <br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php

				}       


            if ($answer1 == "B") {?>

                 <div class="row"><?php

            	   echo "you said NO to: Any new skin change?"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">
                       		 <img src="IMAGES1/pic7.jpg" height="100px" width="100px" />

                      
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                         <p> <?php echo"<br>  It may not be of any importance but always make sure tthat you keep an eye to your skin. Its advisable that skin checkups should be done after every month. click here for more information on skin. <br><br>" ; ?></p>
                  		</div>
				</div><?php

				}          


 if ($answer2 == "A") {?>

                 <div class="row"><?php

            	   echo "<p>you said YES to: Recent change in a wart or mole?</p>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>  A wart is a a small, hard, benign growth on the skin, caused by a virus. it may not be cancerous cells but when detected should be checked immediately to avoid any repercussions that may come with the same.When skin warts appear, it can seem as if the harmless growths came out of nowhere.But common warts are actually an infection in the top layer of skin, caused by viruses in the human papillomavirus, or HPV, family. When the virus invades this outer layer of skin, usually through a tiny scratch, it causes rapid growth of cells on the outer layer of skin – creating the wart. your health is our jhappiness take the first step.<br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php

				} 

             if ($answer2 == "B") {?>

                 <div class="row"><?php

            	   echo "<p>you said NO to: Recent change in a wart or mole?</p>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>  this is a good start. its however important to keep your skins protected. One of the things that people do not know is that sunburns are as dangerous. Actually if you ever get sunburns for five times or more, your chances of cancer infection is doubled. lets protect lives. Prevention is better than cure .<br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php

				} 


            if ($answer3 == "A") {?>

                 <div class="row"><?php

            	   echo "<p>Did you say YES?: Indigestion or trouble swallowing?</p>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>  We are not saying that you are a victim of the same but if you experience this pain for more than two weeks to three without any necessary change make a doctor’s appointment. However, some of these factors leading to throut cancer can be avoided. These include:smoking,excessive alcohol consumption, vitamin A deficiency,exposure to asbestos, poor dental hygiene.<br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php

				} 



          
            if ($answer3 == "B") {?>

                 <div class="row"><?php

            	   echo "<p>Did you say NO?: Indigestion or trouble swallowing?</p>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>  Nice! All you need is just to maintain. Remember your life can be controlled and that anything prevented is more cured. visit our site at kanini/comxa.com and get it all. All you need is allitle of regular body check ups. Try it and you will never have a regreting chance<br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}



               if ($answer4 == "A") {?>

                 <div class="row"><?php

            	   echo "<p>Did you say YES?: Thickening or lump in the breast or other parts of the body?</p>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>  Every person should know the symptoms and signs of breast cancer, and any time an abnormality is discovered, it should be investigated by a healthcare professional.Most people who have breast cancer symptoms and signs will initially notice only one or two, and the presence of these symptoms and signs do not automatically mean that you have breast cancer.By performing monthly breast self-exams, you will be able to more easily identify any changes in your breast.  Be sure to talk to your healthcare professional if you notice anything unusual<br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}


           if ($answer4 == "B") {?>

                 <div class="row"><?php

            	   echo "<p>Did you say NO?: Thickening or lump in the breast or other parts of the body?</p>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> You good to go. Most often, these symptoms are not due to cancer, but any breast cancer symptom you notice should be investigated as soon as it is discovered. If you have any of these symptoms, you should tell your healthcare provider so that the problem can be diagnosed and treated <br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}


		  if ($answer5 == "A") {?>

                 <div class="row"><?php

            	   echo "<p>Did you say YES?: Unusual vaginal bleeding or discharge?</p>"; 
            	   
            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> You good to go. Most often, these symptoms are not due to cancer, but any breast cancer symptom you notice should be investigated as soon as it is discovered. If you have any of these symptoms, you should tell your healthcare provider so that the problem can be diagnosed and treated <br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>