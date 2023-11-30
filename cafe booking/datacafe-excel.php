<?php
    include 'config.php';
    $query = "SELECT * FROM  reservasi;";
    $sql = mysqli_query($conn, $query);
    $no = 0;
 

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=datacafe-excel.xls");

    
?>


  
    
    <div class="table-responsive">
     
   <table class="table align-middle table-bordered table-hover">
          <thead>
            <tr>
              <th><center>No.</center></th>
              <th>Nama</th>
              <th>Email</th>
              <th>Telp</th>
              <th>Hari</th>
              <th>AM/PM</th>
              <th>Room</th>
            </tr>
          </thead>
          <tbody>
          <?php
          while($result = mysqli_fetch_assoc($sql)){

          
          
          ?>
            <tr>
              <td><center>
              <?php echo ++$no; ?>.
              </center></td>
              <td>
              <?php echo $result['Nama']; ?>
              </td>
              <td>
              <?php echo $result['Email']; ?>
              </td>
              <td>
              <?php echo $result['Telp']; ?>
              </td>
              <td>
                <?php echo $result['Hari']; ?>
              </td>
              <td>
              <?php echo $result['AMPM']; ?>
              </td>
              <td>
              <?php echo $result['Ruangan']; ?>
              </td>
              <td>
              </tr>
              
              <?php
              }
              ?>

            </tbody>
          </table>

            

    </div>
</div> 
