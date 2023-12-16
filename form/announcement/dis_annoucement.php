
<style>
  img {
  height: 100px; /* set the height of the image */
  width: 150px; /* set the width of the image */
  max-width: 100%; /* set the maximum width of the image */
}



</style>
</head>

<div class="container-lg">
  <h2 class="text-center text-capitalize "> announcement dashboard</h2>

<h3 class="textcenter "><a class="btn bg-success px-4 h3 text-center " href="<?php echo"../../form/announcement/announcement_create.php"?>">insert data</a></h3>


  <header>
    <!-- place navbar here -->
  </header>
  <center><h3>    <?php

if (isset($_GET['success'])) {
  echo urldecode($_GET['success']);
  # code...
}
?></h3></center>
  <main>


    <!-- creating of tables -->
    <div class="table-responsive sportlight_table ">
      <table class="table table-light">
        <thead>
          <tr class="text-center">
            <th scope="col-1">id </th>
            <th scope="col-2">title</th>
            <th scope="col-2">heading</th>
            <th scope="col-3">content</th>
            <th scope="col-1">date</th>
            <th scope="col-3">orderly</th>
            <th scope="col-2" colspan="2">action</th>
            <th scope="col-3">Preview</th>

          </tr>
        </thead>
        <tbody>
          <?php  
 include("../../form/display/conn.php");

          $sql_query = "SELECT * FROM announcement";
          if ($result = $conn->query($sql_query)) {
            while ($row = $result->fetch_assoc()) {
              $id = $row['id'];
              $name = $row['title'];
              $header = $row['head'];
              $massage = $row['content'];
              $date = $row['date'];
              $orderly = $row['orderly'];
              $description =$row['description'];

              // specify the path to the upload folder
              $path = "uploads/";
          ?>
              <tr class="trow">
                <td><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $header; ?></td>
                <td >
                <?php echo $description; ?>
 
                
                </td>
                <td><?php echo (date("D, M j, Y ", strtotime($date))); ?></td>

                <td><?php echo $orderly; ?></td>
                <!-- concatenate the path and the image name in the src attribute -->

                <!-- use proper indentation and spacing -->
<td><a  class="btn bg-success text-white" href="../../form/announcement/announcement_upd_form.php?id=<?php echo $row['id']; ?>">update</a> </td>
<td><a  class="btn bg-danger text-white" href="../../form/announcement/delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
<td><a  class="btn bg-secondary text-white" href="../../form/announce.php?id=<?php echo $row['id']; ?>">Preview</a></td>
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







    






  <!-- Bootstrap JavaScript Libraries -->
     <script>
      $("#update").click(function() { // select the element with id "hello"
        console.log.text("<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>"); // write hello in a paragraph with id "para"
      });

    </script>


</script>

