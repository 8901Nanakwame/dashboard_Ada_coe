<!doctype html>
<html lang="en">

<head>
  <title>crud index page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous">
<style>
  img {
  height: 100px; /* set the height of the image */
  width: 150px; /* set the width of the image */
  max-width: 100%; /* set the maximum width of the image */
}


</style>
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

    <!-- creating of tables -->
    <div class="table-responsive-md">
      <table class="table table-light">
        <thead>
          <tr class="text-center">
            <th scope="col-1">id </th>
            <th scope="col-2">title</th>
            <th scope="col-2">heading</th>
            <th scope="col-3">content</th>
            <th scope="col-1">date</th>
            <th scope="col-3">image</th>
            <th scope="col-2">action</th>
          </tr>
        </thead>
        <tbody>
          <?php  
          require_once "conn.php";
          $sql_query = "SELECT * FROM event";
          if ($result = $conn->query($sql_query)) {
            while ($row = $result->fetch_assoc()) {
              $id = $row['id'];
              $name = $row['title'];
              $subject = $row['head'];
              $massage = $row['content'];
              $date = $row['date'];
              $image = $row['image'];

              // specify the path to the upload folder
              $path = "uploads/";
          ?>
              <tr class="trow">
                <td><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $subject; ?></td>
                <td >
                <button   type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
        content
    </button>  
                
                </td>
                <td><?php echo (date("D, M j, Y ", strtotime($date))); ?></td>


                <!-- concatenate the path and the image name in the src attribute -->
                <td><img  src="<?php echo $path.$image; ?>" alt="<?php echo $name; ?>"></td>

                <!-- use proper indentation and spacing -->
                <td><button id="update" action="#?id=<?php echo $row['id']; ?>"
                    class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    update
                  </button></td>

<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

              </tr>


          <?php
            }
          }
          ?>

          </tr>
        </tbody>
      </table>
    </div>


   
  </main>
  <footer>
    <!-- place footer here -->
  </footer>







    
    <!-- Scrollable Modal -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable  ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Scrollable Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <p>   <?php echo $massage; ?> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



<!-- Vertically centered modal -->
<div class="modal-dialog modal-dialog-centered">


</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




    <!-- Button to trigger the modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imageModal">
        Open Image Modal
    </button>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="image.jpg" class="img-fluid" alt="Image">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>






  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
      $("#update").click(function() { // select the element with id "hello"
        console.log.text("<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>"); // write hello in a paragraph with id "para"
      });

    </script>


</script>

</body>





</html>
