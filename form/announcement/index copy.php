<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>


  <?php  
          require_once "../display/conn.php";
          $sql_query = "SELECT * FROM event order by orderly";
          if ($result = $conn->query($sql_query)) {
            while ($row = $result->fetch_assoc()) {
              $id = $row['id'];
              $title = $row['title'];
              $heder = $row['head'];
              $massage = $row['content'];
              $date = $row['date'];
              $orderly = $row['orderly'];
              $image = $row['image'];

              // specify the path to the upload folder
              $path = "../display/uploads/";
          ?>


<!-- content of the announcement -->

<div class="card   ">
            <div class="container-lg">
              <div class="row justify-content-center ">
                <div class="col-4">
                  <img class="card-img-top"  src="<?php echo $path.$image; ?>" alt="<?php echo $heder; ?>"  height="100pc"></td>
                  
                </div>
                <div class="col-8">
                  
                  <div class="card-body">
                    <a  href="../refered.php?id=<?php echo $row['id']; ?>"  style="text-decoration: none">
                        <h5 class="mt-0"><?php echo $heder ?></h5>
                      

                    </a>
                    <p class="card-text"> <?php echo $title  ?></p>
                    <p class="card-text"><b class="text-muted"> Date : <?php echo (date("D, M j, Y ", strtotime($date))); ?></b></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
    
          <?php
            }
          }
          ?>


  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>