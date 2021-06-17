<?php require_once 'php_action/core.php';   ?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Otomasyonu</title>

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- bootstrap theme --> 
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">

    <!-- font awesome-->
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/fontawesome.min.css">

    <!-- custom css-->
    <link rel="stylesheet" type="text/css" href="custom/css/custom.css">

    <!-- dataTables-->
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" >    
    <!-- file input -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/fileinput/css/fileinput.min.css">
    <!-- jquery -->
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>

    <!-- jquery ui -->
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui/jquery-ui.min.css">
    <script type="text/javascript" src="assets/jquery-ui/jquery-ui.min.js"></script>

    <!-- bootstrap js -->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>



</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="#" style="color: #4723C8 "><i class="glyphicon glyphicon-object-align-left" style="color: #4723C8 "></i> Market Otomasyonu</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      
      <ul class="nav navbar-nav navbar-right" id="navSetting">
      <li id="navAnasayfa"><a href="index.php" style="color: #344FA1"><i class="glyphicon glyphicon-list-alt" style="color: #344FA1"> </i> Ana Sayfa </a></li>
        <li id="navBrand"><a href="marka.php" style="color: #344FA1"><i class="glyphicon glyphicon-btc" style="color: #344FA1"></i> Marka </a></li>
        <li id="navCategories"><a href="kategoriler.php" style="color: #344FA1"><i class="glyphicon glyphicon-th-list" style="color: #344FA1"></i> Kategoriler </a></li>
        <li id="navProduct"><a href="urunler.php" style="color: #344FA1"><i class="glyphicon glyphicon-apple" style="color: #344FA1"></i> Urunler </a></li>
        <li class="dropdown" id="navSiparis">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #344FA1"><i class="glyphicon glyphicon-shopping-cart" style="color: #344FA1"></i> Siparisler <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a id="topNavSiparisEkle" href="siparisler.php?o=add" style="color: #29AC55"><i class="glyphicon glyphicon-plus" style="color: #29AC55"></i>Siparis Ekle</a></li>
            <li><a id="topNavSiparisYonet" href="siparisler.php?o=manord" style="color: #150E56"><i class="glyphicon glyphicon-edit" style="color: #150E56"></i>Siparisleri Yonet</a></li>
           
          </ul>
        </li>
        <li id="navReport"><a href="report.php" style="color: #C70039"><i class="glyphicon glyphicon-check" style="color: #C70039"></i> Report </a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #29AC55"> <i class="glyphicon glyphicon-user" style="color: #29AC55"></i> Hesabim <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="topNavSetting"><a href="setting.php"><i class="glyphicon glyphicon-wrench"></i> Ayarlar </a></li>
            <li id="topNavLogout"><a href="logout.php" style="color: #CF1913"><i class="glyphicon glyphicon-log-out" style="color: #CF1913"></i> Cikis </a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
