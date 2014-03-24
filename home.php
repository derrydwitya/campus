<?php
if(!session_id()) {
    session_start();
}
if(isset($_SESSION['username'])){
include 'header.php';
?>
<marquee>Selamat Datang<br> di Informasi Perguruan Tinggi </marquee>
<?php
include 'footer.php';
}else{
	header('Location:login_view.php');
}
?>