<?php
session_start();
include "library.php";


if(isset($_SESSION['id_user'])){

if(isset($_GET['id_user'])){
$id_user=$_GET['id_user'];
}

if(empty($_GET['id_user'])){
$id_user=$_SESSION['id_user'];
}
$link=koneksi_db();
$query=mysql_fetch_array(mysql_query("select * from user where id_user='$id_user'",$link));
$nama_depan=$query['nama_depan'];
$nama_belakang=$query['nama_belakang'];
$photo=$query['foto_profil'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Test Teknis PT. SEVIMA</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<?php echo include"header.php";?>
<div class="container">
        <div class="jumbotron">
        </div>

<div class="row" style="background-color:#0C9">
        <div class="col-md-2"><!--mulai colmd 2-->

    <div class="row">
        <div class="col-md-12">
            <div class="thumbnail">
                <img src="foto/<?php echo $photo;?>" class="thumbnail">
                <div class="caption">
                    <h4><?php echo $nama_depan.' '.$nama_belakang;?></h4>
                </div>
            </div>
        </div>

                    <?php include"bagiankiri.php";?>

</div>
        </div><!--akhir colmd 2-->
        <div class="col-md-6"><!--mulai colmd 6-->

            <div class="row">
  <div class="col-md-1">

            </div>
<div class="col-md-9">
<form action="updatestatus.php" method="post">
<div class="row">
<div class="form-group">
<textarea maxlength="255" cols="40" rows="4" name="update" class="form-control" placeholder="Tulis status.."></textarea>
<button type="submit" class="btn btn-primary pull-left" value="POST" name="kirim">POST</button>
</div>
</div>
</form>
<?php
$query1 = mysql_query("SELECT * FROM status JOIN user USING(id_user) WHERE dihapus = 't' ORDER BY id_status DESC");
while($row=mysql_fetch_array($query1)){
  $id_status=$row['id_status'];
  $id_us=$row['id_user'];
  $isi_status=$row['isi_status'];
  $tanggal_status=$row['tanggal_status'];
$nm_dp=$row['nama_depan'];
$nm_blk=$row['nama_belakang'];
$fot=$row['foto_profil'];
?>
<hr>
  <div class="row" style="background-color:#9F3">
    <div class="media"><!-- class media sudah disediakan bootstrap lho -->
      <a href="#" class="pull-left"><!-- Sementara href nya kosong dulu,ntar diganti link ke profil-->
        <img src="<?php echo'foto/'.$fot;?>" class="media-object img-rounded" width="50" height="50" alt="Sample Image"></a>
        <div class="media-body"><!-- isi media nama, tanggal, ama status -->
          <h4 class="media-heading"><?php echo $nm_dp.' '.$nm_blk;?><small><i> <?php echo $tanggal_status; ?></i></small></h4>
          <p><?php echo $isi_status; ?></p>
        </div> <!-- akhir media-body-->
      </div><!-- akhir media -->
      <div class="row">
        <!--kode komentar disni ntar-->
      </div>
</div><!-- akhir row tampil isi status -->
<?php
}
?>
</div>
<div class="col-md-2">

</div>
</div><!--/.STATUS-->



     </div><!--akhir colmd 6-->
            <div class="col-md-4"><!--mulai colmd 4-->
     </div><!--akhir colmd 4-->
        </div>
<?php
footer();
?>
</div> <!-- END CONTAINER -->
</body>
</html>
<?php
}else{
header("Location:index.php");
}
?>
