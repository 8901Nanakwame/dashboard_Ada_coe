<?php session_start()?>
<html>
<head>
  <meta charset="UTF-8">
  <meta required name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>form</title>
<style>
*{
  
margin: 0pc;
padding: 0pc;

}

body{

background: rgba(41, 78, 85, 1.0);
background: radial-gradient(at left bottom, rgba(41, 78, 85, 1.0), rgba(180, 124, 81, 1.0));
}

 input ,textarea{
width: 40pc;

}

.cover{
  border: 4px;
  border-radius: 2em;
}

</style>

</head>
<?php 
$url = $_SERVER['REQUEST_URI'];
$display1 = '  
<div class="mb-3"  >
<label for="" class="text-white"> this is will be displayed on the  main page <strong>it musbe less than 4mb</strong> </label>
<input type="file" class="form-control" id="image"  name="mainimage" placeholder="image">
</div>';

$insertdata= 'sportlight_insertdata';
$updatedata= 'sportlight_updatedata';

$ANNOUNCEMENT_insertdata= 'ANNOUNCEMENT_insertdata';
$ANNOUNCEMENT_updatedata= 'ANNOUNCEMENT_updatedata';
$ANNOUNCEMENT_createdata= 'ANNOUNCEMENT_createdata';

if (strpos($url, $insertdata)!==false) {
  echo'<center><H1> SIGIN IN SPORTLIGHT </h1></center>';

  $show1=$display1;
  $action ='display\event.php';
 
}elseif(strpos($url, $updatedata)!==false) {
  echo'<center><h1>UPDATE SPORTLIGHT  DATA</h1></center>';
  $action ='display/.php';

}elseif(strpos($url, $ANNOUNCEMENT_updatedata)!==false) {
  echo'<center><h1> UPDATE ANNOUNCEMENT DATA</h1></center>';
  $action="announcement/announcement_update.php";

}
elseif(strpos($url, $ANNOUNCEMENT_insertdata)!==false) {
  echo'<center><h1> UPDATE ANNOUNCEMENT DATA</h1></center>';

}
elseif(strpos($url, $ANNOUNCEMENT_createdata)!==false) {
  echo'<center><h1>  CREATE ANNOUNCEMENT DATA</h1></center>';
  $action ='announcement/announcement.php';
 
}
else{
  echo'<center><H1>SIGIN IN</h1></center>';

}

?>


<body>

<!--input form-->
  echo'<center><h1>UPDATE SPORTLIGHT  DATA</h1></center>';

<div class="container-md   bg-dark cover">
  <div class="row justify-content-center align-content-center"> 
<div class="col-12 col-md-5 mt-5 mb-3 ps-3  d-flex  flex-row">
  <img src="SRCLOGO.jpeg" class="img-fluid rounded-circle justify-content-center align-content-center"  alt="adacoe SRC LOGO ">
</div>
 
<div class="col-12 col-md-7"> 
<div class="form m-3  ">
<form action="display\event.php " method="post" class="mt-5 " accept-charset="utf-8"  enctype="multipart/form-data">
 
  <div class=" mb-3">
    <input type="text" class="form-control border-bottom"  required name="title" id="floatingInput" placeholder="title">
  </div>
  
 
  <div class=" mb-3">
    <input type="text" class="form-control border-bottom" required name="head" id="floatingInput" placeholder="head">
  </div>

  <div class=" mb-3">
    <textarea class="form-control border-bottom" required name="description" id="floatingInput" placeholder="a summary description of the page " cols="20" rows="3"></textarea>
  </div>
  
  
  <div class=" mb-3">
    <textarea class="form-control border-bottom"  name="content" id="floatingInput" placeholder="content" cols="30" rows="3"></textarea>
  </div>

  <div class=" mb-3">
    <textarea class="form-control border-bottom"  name="content2" id="floatingInput" placeholder="content" cols="30" rows="3"></textarea>
  </div>
  

  <div class="mb-3">
    <input type="date" class="form-control"  required name="date" id="date" placeholder="date">
  </div>

  <div class="mb-3">
    <input type="number" class="form-control" required name="orderly"  id="orderly" placeholder="orderly">
  </div>

  <div class="mb-3"  >
<label for="" class="text-white"> this is will be displayed on the  main page <strong>it musbe less than 4mb</strong> </label>
<input type="file" class="form-control" id="image"  name="mainimage" placeholder="image">
</div>


<div class="mb-3">
<label for="" class="text-white"> this is for image in the blog  <strong>it musbe less than 2mb</strong></label>
<input type="file" class="form-control" id="image"  name="image" placeholder="image">
</div>

  <center><button type="submit" class="btn btn-primary" >Submit</button></center>
</form>
</div>
</div>
</div>
<h3 class="text-white text-capitalize text-center">
  <?php 

if (isset($_GET['error'])) {
  echo urldecode($_GET['error']);
} 


?></h3>
</div>
<?php
// start the session


?>



</body><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>





