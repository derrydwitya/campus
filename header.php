<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow|PT+Sans&amp;subset=latin">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<style>.art-content .art-postcontent-0 .layout-item-0 { border-top-width:1px;border-top-style:solid;border-top-color:#B2C2D1;margin-top: 10px;margin-bottom: 10px;  }
.art-content .art-postcontent-0 .layout-item-1 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">

<div class="art-textblock art-object736962669" data-left="0%">
        <div class="art-object736962669-text"><p style="color: #DDEBF3; font-size:50px;font-family:'PT Sans Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;font-weight:normal;font-style:normal;text-decoration:none">Informasi Perguruan Tinggi Kota Bandung</p></div>
    
</div>
            </div>

                <div id="art-flash-area">
                    <div id="art-flash-container">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="884" height="500" id="art-flash-object">
                    	<param name="movie" value="container.swf">
                    	<param name="quality" value="high">
                    	<param name="scale" value="default">
                    	<param name="wmode" value="transparent">
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=3&amp;clipx=-551&amp;clipy=0&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=2000&amp;cliph=500&amp;width=884&amp;height=500&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=false&amp;hasBottomCorners=true">
                        <param name="swfliveconnect" value="true">
                    	<!--[if !IE]>-->
                    	<object type="application/x-shockwave-flash" data="container.swf" width="884" height="500">
                    	    <param name="quality" value="high">
                    	    <param name="scale" value="default">
                    	    <param name="wmode" value="transparent">
                        	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=3&amp;clipx=-551&amp;clipy=0&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=2000&amp;cliph=500&amp;width=884&amp;height=500&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=false&amp;hasBottomCorners=true">
                            <param name="swfliveconnect" value="true">
                    	<!--<![endif]-->
                    		<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"></a></div>
                    	<!--[if !IE]>-->
                    	</object>
                    	<!--<![endif]-->
                    </object>
                    </div>
                    </div>
                    
</header>
<?php
if(isset($_SESSION['username'])){
?>
<nav class="art-nav clearfix">
    <ul class="art-hmenu"><li><a href="home.php" class="active">Home</a></li><li><a href="Kampus_Controller.php?action=select" class="active">Perguruan Tinggi</a></li>
	
	<!--<li><a href="tutorial.php" class="active">Petunjuk Pemakaian</a></li>-->
	
	<?php
	if($_SESSION['username']=='admin'){
	?>
		<li><a href="user_admin_verifikasi_view.php" class="active">Verifikasi</a></li>
	<?php
	}
	?>
	
	<li><a href="tentang.php" class="active">Tentang Aplikasi</a></li>
	
	<li><a href="logout_process.php" class="active">Logout</a></li></ul> 
    </nav>
<?php
}
?>

<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><div class="art-block clearfix">
        <div class="art-blockcontent"></div>
</div><article class="art-post art-article">
<div style="overflow:auto">
