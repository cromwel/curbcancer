<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>WELCOME|MEDHELP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medi Cure Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- toggle menu links -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- //menu links -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<!-- effect9 links -->
<link href="css/ihover.css" rel="stylesheet" media="all">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
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

<style>
		.container{

	/*background-image: images/pattern.png;*/

  background-color: #f0f0f0;

}

</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>

   <section class="button">
					<button id="showLeftPush"><img src="images/menu.png" alt=""></button>
		   </section>
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
				<h3>Menu</h3>
						<a href="index.html" class="active">HOME</a>
						<a href="about.html">ABOUT</a>
						<a href="blog.html">BLOG</a>
						
						<a href="contact.html">CONTACT</a>
		    </nav>

		    	<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
  <div class="container">
   

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

                 <div class="row" id="title"><?php

            	   echo "<h1 >you said YES to: Any new skin change?</h1>"; 

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

                 <div class="row" ><?php

            	   echo "<h1 >you said NO to: Any new skin change?</h1 >"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">
                       	 <p> <?php echo"<br>  It may not be of any importance but always make sure tthat you keep an eye to your skin. Its advisable that skin checkups should be done after every month. click here for more information on skin. <br><br>" ; ?></p>
                       		
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                         <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />
                  		</div>
				</div><?php

				}          


 if ($answer2 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1 >you said YES to: Recent change in a wart or mole?</h1 >"; 

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

            	   echo "<h1 >you said NO to: Recent change in a wart or mole?</h1 >"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>  this is a good start. its however important to keep your skins protected. One of the things that people do not know is that sunburns are as dangerous. Actually if you ever get sunburns for five times or more, your chances of cancer infection is doubled. lets protect lives. Prevention is better than cure .<br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="images/3.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php

				} 


            if ($answer3 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1 >Did you say YES?: Indigestion or trouble swallowing?</h1 >"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>  We are not saying that you are a victim of the same but if you experience this pain for more than two weeks to three without any necessary change make a doctor’s appointment. However, some of these factors leading to throut cancer can be avoided. These include:smoking,excessive alcohol consumption, vitamin A deficiency,exposure to asbestos, poor dental hygiene.<br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic1.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php

				} 



          
            if ($answer3 == "B") {?>

                 <div class="row"><?php

            	   echo "<h1 >Did you say NO?: Indigestion or trouble swallowing?</h1 >"; 
            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>  Nice! All you need is just to maintain. Remember your life can be controlled and that anything prevented is more cured. visit our site at kanini/comxa.com and get it all. All you need is allitle of regular body check ups. Try it and you will never have a regreting chance<br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic2.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}



               if ($answer4 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1 >Did you say YES?: Thickening or lump in the breast or other parts of the body?</h1 >"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>  Every person should know the symptoms and signs of breast cancer, and any time an abnormality is discovered, it should be investigated by a healthcare professional.Most people who have breast cancer symptoms and signs will initially notice only one or two, and the presence of these symptoms and signs do not automatically mean that you have breast cancer.By performing monthly breast self-exams, you will be able to more easily identify any changes in your breast.  Be sure to talk to your healthcare professional if you notice anything unusual<br><br>" ; ?></p>

                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic3.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}


           if ($answer4 == "B") {?>

                 <div class="row"><?php

            	   echo "<h1 >Did you say NO?: Thickening or lump in the breast or other parts of the body?</h1 >"; 

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

            	   echo "<h1 >Did you say YES?: Unusual vaginal bleeding or discharge?</h1 >"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> Most adults have been infected with HPV at some time. An infection may go away on its own. But sometimes it can cause genital warts or lead to cervical cancer. That's why it's important for women to have regular Pap tests. It may not mean that you got cancer but its high adviced that byou should go see a doctor with immediate effect.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic9.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}

		 
		  if ($answer5 == "B") {?>

                 <div class="row"><?php

            	   echo "<h1 >Did you say NO?: Unusual vaginal bleeding or discharge?</h1 >"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>   Well this means you good to go and that all you need to do is just have some regular checkups with your body. However, it shouldnt be like a block fro you to go checking for anything fishy in your body. Go get cheked you never know, rwmember prevention is better than cure. <br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}


		       
		  if ($answer6 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1 >Did you say YES?: Do you have white patches inside the mouth or white spots on the tongue?</h1 >"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>Well while this may not be a sign of any cancerous cells, it is a sign to some types of cancer eg. mouth cancer. persistent period of this should send you to a doctor. Act befor its too late. we live because we can, lets embrace the fighting of cancer<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}




		  
		  if ($answer6 == "B") {?>

                 <div class="row"><?php

            	   echo "<h1 >Did you say NO?: Do you have white patches inside the mouth or white spots on the tongue?</h1 >"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>Your doctor can use a variety of tests to stage your throat cancer. Imaging tests like a CT scan or an MRI will allow your doctor to take a closer look at the chest, neck and head, giving them a better picture of the disease’s progression.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}


if ($answer7 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1 >Did you say NO?: Do you have Sores that do not heal?</h1 >"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> 	In the case of large tumors and tumors that have spread to the lymph nodes and other organs or tissue, your doctor may recommend radiation, as well as chemotherapy. Chemotherapy is a drug that kills and slows the growth of malignant cell<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}


	if ($answer7 == "B") {?>

                 <div class="row"><?php

            	   echo "<h1 >Did you say NO?: Do you have Sores that do not heal?</h1 >"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix. <br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}

		    
if ($answer8 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1>Did you say YES?: Any Change in bowel habits or bladder function?</h1>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> Cervical cancer occurs when abnormal cells on the cervix camera.gif grow out of control. The cervix is the lower part of the uterus that opens into the vagina. Cervical cancer can often be successfully treated when it's found early. It is usually found at a very early stage through a Pap test.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}

		  
if ($answer8 == "B") {?>

                 <div class="row"><?php

            	   echo "<h1>Did you say NO?: Any Change in bowel habits or bladder function?</h1>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> Most cervical cancer is caused by a virus called human papillomavirus, or HPV. You can get HPV by having sexual contact with someone who has it. There are many types of the HPV virus. Not all types of HPV cause cervical cancer. Some of them cause genital warts, but other types may not cause any symptoms <br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}


if ($answer9 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1>Did you say YES?: Brain tumour?</h1>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix.	Your doctor may also do a Pap test and take a sample of tissue (biopsy) if you have symptoms of cervical cancer, such as bleeding after sex.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}



		 
if ($answer9 == "B") {?>

                 <div class="row"><?php

            	   echo "<h1>Did you say NO?: Brain tumour?</h1>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix.Your doctor may also do a Pap test and take a sample of tissue (biopsy) if you have symptoms of cervical cancer, such as bleeding after sex.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}



if ($answer10 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1>Did you say YES?: Prolonged, unexplained pain?</h1>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> 	As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix.Your doctor may also do a Pap test and take a sample of tissue (biopsy) if you have symptoms of cervical cancer, such as bleeding after sex. <br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}

		      
		 
if ($answer10 == "B") {?>

                 <div class="row"><?php

            	   echo "<p>Did you say NO ?: Prolonged, unexplained pain?</p>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix.Your doctor may also do a Pap test and take a sample of tissue (biopsy) if you have symptoms of cervical cancer, such as bleeding after sex.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}


		     
if ($answer11 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1>Did you say YES?: Any case of Fatigue?</h1>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br>As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix.Your doctor may also do a Pap test and take a sample of tissue (biopsy) if you have symptoms of cervical cancer, such as bleeding after sex.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}





		 
if ($answer11 == "B") {?>

                 <div class="row"><?php

            	   echo "<p>Did you say NO?:Any case of Fatigue?</p>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix.Your doctor may also do a Pap test and take a sample of tissue (biopsy) if you have symptoms of cervical cancer, such as bleeding after sex. <br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}

		      
if ($answer12 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1>Did you say YES?: Any Prolonged fever?</h1>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix.Your doctor may also do a Pap test and take a sample of tissue (biopsy) if you have symptoms of cervical cancer, such as bleeding after sex.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}
		 
if ($answer12 == "B") {?>

                 <div class="row"><?php

            	   echo "<h1>Did you say NO?: Any Prolonged fever?</h1>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix.Your doctor may also do a Pap test and take a sample of tissue (biopsy) if you have symptoms of cervical cancer, such as bleeding after sex.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}   



		       
if ($answer13 == "A") {?>

                 <div class="row"><?php

            	   echo "<h1>Did you say NO?: Do you have any Unexplained weight loss?</h1>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix.Your doctor may also do a Pap test and take a sample of tissue (biopsy) if you have symptoms of cervical cancer, such as bleeding after sex.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}




		 
if ($answer13 == "B") {?>

                 <div class="row"><?php

            	   echo "<p>Did you say NO?: Do you have any Unexplained weight loss?</p>"; 

            	  ?>
            	 </div>

            	 <div class="row">
                       	<div class="col-md-6 col-sm-6">

                             <p> <?php echo"<br> As part of your regular pelvic exam, you should have a Pap test. During a Pap test, the doctor scrapes a small sample of cells from the surface of the cervix to look for cell changes. If a Pap test shows abnormal cell changes, your doctor may do other tests to look for precancerous or cancer cells on your cervix.Your doctor may also do a Pap test and take a sample of tissue (biopsy) if you have symptoms of cervical cancer, such as bleeding after sex.<br><br>" ; ?></p>
                       	</div>

                 		<div class="col-md-6 col-sm-6">

                        	 <img src="IMAGES1/pic7.jpg" height="150px" width="300px" />

                  		</div>
				</div><?php
			}
            // if ($answer5) { $totalCorrect++; }
            
            // echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>



</div>

<div class="copy-right">
	<div class="container">
		<p> &copy; 2016 Medi Help. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> THE U-TEAM</a></p>
	</div>
</div>
<!-- //copy-right -->
<!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>