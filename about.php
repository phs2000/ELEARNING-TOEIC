    <!-- Page Content 
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Thông tin về  <em>EFF</em></h1>
           
          </div>
        </div>
      </div>
    </div>
  -->
    <div class="team" style="margin: 0">
      <div class="container">
        <div class="row">
    
          <div class="col-md-12">
              <?php
                         require 'connect.php';
                         $sql="SELECT * from intro";
                         $result = $conn->query($sql); 
                         if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc())
                          {
                            echo $row["noidung"];
                          }
                        }
                ?>
            
            
          </div>
          
        </div>
      </div>
    </div> 