<?php
  include 'config.php';

  if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){
    $Nama = $_POST ['Nama'];
    $Email = $_POST ['Email'];
    $Telp = $_POST ['Telp'];
    $Hari = $_POST ['Hari'];
    $AMPM = $_POST ['AMPM'];
    $Ruangan = $_POST ['Ruangan'];

    $query = "INSERT INTO reservasi VALUES(null, '$Nama', '$Email', '$Telp', '$Hari', '$AMPM', '$Ruangan')";
    $sql = mysqli_query($conn, $query);
        
    if($sql){
      header("location: payment.php");
   

    } else {
      echo $query;

    }
  
    
  } else if($_POST['aksi'] == "edit"){
    $id_user = $_POST ['id_user'];
    $Nama = $_POST ['Nama'];
    $Email = $_POST ['Email'];
    $Telp = $_POST ['Telp'];
    $Hari = $_POST ['Hari'];
    $AMPM = $_POST ['AMPM'];
    $Ruangan = $_POST ['Ruangan'];

    $query = "UPDATE reservasi SET Nama='$Nama', Email='$Email', Telp='$Telp', Hari='$Hari', AMPM='$AMPM', Ruangan='$Ruangan' WHERE id_user = '$id_user';";
    $sql = mysqli_query($conn, $query);
    header("location: payment.php");
    }
  }
    if(isset($_GET['hapus'])){
      $id_user = $_GET['hapus'];
      $query = "DELETE FROM reservasi WHERE id_user = '$id_user';";
      $sql = mysqli_query ($conn, $query);
      
  
      if($sql){
        header("location: datacafe.php");

  
      } else {
        echo $query;
  
      }
    }
  
   ?>
  