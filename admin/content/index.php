<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style type="text/css" media="all">
  .sidebar-nav ul li a {
    font-size: 26px;
    text-decoration: none;
    display: block;
    padding: 6px 10px;
    transition: 0.5s;
}
.sidebar-nav ul li a:hover {
    background-color: #eeeeee;
    border-radius: 4px;
}
.sidebar-nav .offcanvas {
    width: 220px;
    border: none;
}
.sidebar-nav .offcanvas ul li a span {
    font-size: 18px;
    position: relative;
    top: -4px;
    transition: 0.5s;
}
.sidebar-nav .offcanvas.show ul li a:hover span {
    padding-left: 10px;
}
.sidebar-nav .dropdown-toggle::after {
    position: relative;
    top: 3px;
}

</style>
  <title>admin Panel </title>
</head>
<body>
  <header>
    
  </header>
  <main>
   
     
    <div class="d-block  sidebar-nav">
    <nav class="navbar navbar-dark bg-success fixed-top">
          
            <!-- displaying of content  -->
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menus List -->
            
            <div class="offcanvas offcanvas-start shadow" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-body">
                    <ul class="navbar-nav">
                      <li><a href="../index.php"><i class="bi bi-pencil-square"></i> <span class="item-text">Applications</span></a></li>
                      <li><a href="admin/content/index.php"><i class="bi bi-calendar3"></i> <span class="item-text">ANNOUNCEMENT</span></a></li>
                        <li><a href="#"><i class="bi bi-people"></i> <span class="item-text">Audience</span></a></li>
                             </ul>
              </div>
            </div>


       
    </nav>
</div>








 
  </main>
  <section>
  <br>
  <br>
  <br>
 
<div class="row justify-content-center ">
    <div class="cool">

    <!-- create connection -->
      <?php include('../../form/announcement/dis_annoucement.php') ?>
      
    </div>
  </div>
</div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html 