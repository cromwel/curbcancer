 <?php
/*include ("connect.php");

if(isset($_POST['btn-signup']))
{
 $uname=mysql_real_escape_string($_POST['uname']);
 $email=mysql_real_escape_string($_POST['email']);
 $pass=mysql_real_escape_string($_POST['pass']);

$sql="INSERT INTO  `users`( `username`, `email`, `password`) 
      VALUES ('$uname','$email','$pass')";

$query=mysql_query($sql);*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Curb Cancer</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    
</head>

<body>

	<div class= "container" >

		<h1>GENERAL CANCER SYMPTOMS TO LOOK OUT FOR</h1>
		
		<form action="results.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                  <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">CSS Stands for...</a>
                </h5>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required/>
                        <label for="question-1-answers-A"> Yes </label>
                 
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B"> No</label>
                </div>
            </div>
        </div>
                    
                
                </li>
                
                <li>

                    
                 <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Internet Explorer 6 was released in...</a>
                </h5>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse in">
                <div class="panel-body">
                    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/>
                        <label for="question-2-answers-A"> Yes</label>
                  
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B"> No</label>
                </div>
            </div>
        </div>
                
                </li>
                
                <li>
                 <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">SEO Stand for...</a>
                </h5>
            </div>
            <div id="collapseThree" class="panel-collapse collapse in">
                <div class="panel-body">
                   <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/>
                        <label for="question-3-answers-A"> Yes</label>
        
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B"> No</label>
                </div>
            </div>
        </div>

                
                </li>
                
                <li>
                 <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">A 404 Error..</a>
                </h5>
            </div>
            <div id="collapseFour" class="panel-collapse collapse in">
                <div class="panel-body">
                   <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/>
                        <label for="question-3-answers-A"> Yes</label>
        
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B"> No</label>
                </div>
            </div>
        </div>
                
                </li>
                
                <li>
                 <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Your favorite website is</a>
                </h5>
            </div>
            <div id="collapseFive" class="panel-collapse collapse in ">
                <div class="panel-body">
                   <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/>
                        <label for="question-5-answers-A"> Yes</label>
        
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B"> No</label>
                </div>
            </div>
        </div>
                
                
                </li>
            
            </ol>
         <button type="button" class="btn btn-primary">Submit</button>
            </div>
            
		
		</form>
	
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

</body>

</html>