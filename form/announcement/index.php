
  <?php  

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
              $description = $row['description'];

              // specify the path to the upload folder
              $path = "display/uploads/";
              
          ?>

<style>
/* .sportlightimg{
  height: 10px;
  width: 10px;
}

.conerme{
display: flex;
flex-direction: row;
position: relative;

}

.conerme>{
  position: absolute;
} */


.sportcard .card-img-top{
    width: 30pc;
    height: 12pc;
  }

  .sportcard {
    margin-top: 0.7pc;
  }
</style>
<!-- content of the announcement -->






<div class="card sportcard  ">
            <div class="container-lg">
              <div class="row justify-content-center  ">
        
                <div class="col">
                  
                  <div class="card-body ">
                    <a  href="refered.php?id=<?php echo $row['id']; ?>"  style="text-decoration: none">
                    <div class="conerme">

<img class="card-img-top img-thumbnail  "  height="10px"  src="<?php echo $path.$image; ?>" alt="<?php echo $heder; ?>" ></td>
</div>
                        <h3 class="mt-0  "><?php echo $heder ?></h3>
                      

                    </a>
                    <p class="card-text"> <?php echo $description  ?></p>
                    <p class="card-text"><b class="text-muted"> Date : <?php echo (date("D, M j, Y ", strtotime($date))); ?></b></p>
                  </div>
                </div>
              </div>
            </div>
            </div>
          
          
    
          <?php
            }
            mysqli_close($conn);
          }
          ?>

