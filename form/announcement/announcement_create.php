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



<body>

<!--input form-->
<center><h1>  CREATE ANNOUNCEMENT DATA</h1></center>


<div class="container-md   bg-dark cover">
  <div class="row justify-content-center align-content-center"> 
<div class="col-12 col-md-5 mt-5 mb-3 ps-3  d-flex  flex-row">
  <img src="SRCLOGO.jpeg" class="img-fluid rounded-circle justify-content-center align-content-center"  alt="adacoe SRC LOGO ">
</div>
 
<div class="col-12 col-md-7"> 
<div class="form m-3  ">
<form action="announcement.php" method="post" class="mt-5 " accept-charset="utf-8"  enctype="multipart/form-data">
 
<?php 
if (isset($_GET['error'])) {
 
  
 echo '
 <

  <div class=" mb-3">
  <input type="text" class="form-control border-bottom" value="'.$_SESSION["title"].'" required name="title" id="floatingInput" placeholder="title">
  </div>
  
  <div class=" mb-3">
  <input type="text" class="form-control border-bottom" value="'.$_SESSION["head"].'" required name="head" id="floatingInput" placeholder="head">
  </div>
  
  <div class=" mb-3">
  <textarea class="form-control border-bottom" required name="description" id="floatingInput" placeholder="a summary description of the page " cols="20" rows="3">'.$_SESSION["description"].'</textarea>
  </div>
  
  <div class=" mb-3">
  <textarea class="form-control border-bottom" required name="content" id="floatingInput" placeholder="content" cols="30" rows="3">'.$_SESSION["content"].'</textarea>
  </div>
  
  <div class=" mb-3">
  <textarea class="form-control border-bottom" required name="content2" id="floatingInput" placeholder="content" cols="30" rows="3">'.$_SESSION["content2"].'</textarea>
  </div>
  
  <div class="mb-3">
  <input type="date" class="form-control" value="'.$_SESSION["date"].'" required name="date" id="date" placeholder="date">
  </div>
  
  <div class="mb-3">
  <input type="number" class="form-control" value="'.$_SESSION["orderly"].'" required name="orderly"  id="orderly" placeholder="orderly">
  </div>
  

  
  <div class="mb-3">
  <label > the image must be less that <strong>2 MB</strong> for the blog image</label>
  <input type="file" class="form-control" id=image  name=image placeholder="'.$_SESSION["image"].'">
  </div>
  
  <center><button  id=myForm type=submit class=btn btn-primary >Submit</button></center>
  ';


}else{
  echo '
  
  
<div class=" mb-3">
<input type="hidden" class="form-control border-bottom"  required name="title" id="floatingInput" placeholder="title">
</div>


<div class=" mb-3">
<input type="text" class="form-control border-bottom" required name="head" id="floatingInput" placeholder="head">
</div>



<div class=" mb-3">
<textarea class="form-control border-bottom" required name="description" id="floatingInput" placeholder="a summary description of the page " cols="20" rows="3"></textarea>
</div>

<div class=" mb-3">
  <textarea class="form-control border-bottom" required name="content" id="floatingInput" placeholder="content" cols="30" rows="3"></textarea>
</div>

<div class=" mb-3">
  <textarea class="form-control border-bottom" required name="content2" id="floatingInput" placeholder="content" cols="30" rows="3"></textarea>
</div>

<div class="mb-3">
  <input type="date" class="form-control"  required name="date" id="date" placeholder="date">
</div>

<div class="mb-3">
  <input type="number" class="form-control" required name="orderly"  id="orderly" placeholder="orderly">
</div>


<div class="mb-3">
<label > the image must be less that <strong> 2 MB</strong> for the blog image</label>
  <input type="file" class="form-control" id="image"  name="image" placeholder="image">
</div>


';
}

?>
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





