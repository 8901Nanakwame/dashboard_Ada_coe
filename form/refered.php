<!doctype html>
<html lang="en">


<?php 

$id =  $_GET["id"];
 require_once "display/conn.php";
 $sql_query = "SELECT * FROM event where  id=".$id ;
 if ($result = $conn->query($sql_query)) {
   while ($row = $result->fetch_assoc()) {
     $title = $row['title'];
     $heder1 = $row['head'];
     $message  = $row['content'];
     $content2  = $row['content2'];
     $date1 = $row['date'];

     $image = $row['image'];
     $description = $row['description'];

     // specify the path to the upload folder
     $path = "display/uploads/";
   
     }
          }
          ?>

<head>
  <title><?php echo $title?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<meta name="description" content="<?php echo $description ?>">
<meta name="keywords" content="adacoe">
<meta name="author" content="lnks">



<style>

/* background  */
  
  body {
  
      color: inherit;
      background-image: linear-gradient(110deg, hsla(215.11, 100%, 50%, 0.73) 0%, hsla(56.94,96.08%,80%,0.5906601847912172) 82%), repeating-conic-gradient(from 183deg at 20% 55%, hsla(347.94,85.09%,44.71%,0.09971980462060914) 37%, #8ebba6fa 50%), repeating-radial-gradient(circle at 74% 43%, hsla(240,6.88%,62.94%,0.3835688639649819) 23%, hsla(58.13,76.19%,8.24%,0.5237777640338341) 56%);
    
        
    }
  


  .img-border{
 
    padding: 1em 0.5em;
  }
 .imghead .card-img-top{
    width: 100vw;
    height: 30pc;
  }

  @font-face {
    font-family: 'HEAD';
    src: url(head.otf);
    font-weight: normal;
    font-style: normal;
  }

  .heading{
    font-family: HEAD;
    font-size: 2.4PC;

  }
article{
  font-family: 'Times New Roman';
  font-weight: normal;
  font-size: 1.9pc;
  color: black;
  
}
.content-card{
  background-color: transparent;
  color: black;

}



</style>


</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>


<!-- creating an article -->




  


<div class="card imghead m-5 p-0">
  <div class="img-border p-0 ">
          
    <img class="card-img-top img-fluid "   src="<?php echo $path.$image; ?>" alt="<?php echo $heder1; ?>"  height="20pc" alt="Title">
  </div>
  

  </div>


<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8">

      <div class="card content-card">
               <div class="card-body">
          <h1 class="card-title text-center heading p-2 "> <?php echo $heder1 ?></h1>
          
          <h4 class="card-title"></h4>
          <p class="card-text ">

      
      <article> <?php echo htmlspecialchars_decode($message);  ?>      </article>
      <article class="mt-2"> <?php echo htmlspecialchars_decode($content2);  ?>      </article>

      
          </p>
        </div>
      </div>
     </div>  


     <div class="col-12 col-md-4">
       <h3 class="text-capitalize text-center "> sportlight </h3>
      <!-- sportlight -->

      <?php include('announcement/index.php') ?>
     </div>
  </div>
  

</div>






  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>