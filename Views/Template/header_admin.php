<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="decreption" content="Tienda Virtual Abel OSH">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Abel OSH">
<meta name="theme-color" content="#009688">
<title><?= $data['page_tag'] ?></title> 
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" href="<?= media(); ?>/css/stylesd.css">
    
    <!--Material ICON-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
    rel="stylesheet">
    
    <!----===== Iconscout CSS ===== -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
    rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   
</head>
<body>
<?php require_once("nav_admin.php");  ?>

<section class="dashboard">  
    
<div class="top">
           <i class="uil uil-bars sidebar-toggle"></i>
           

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>


            <ul class="logout-mode">         

                <div class="mode-toggle">
                <span class="material-icons-sharp active">light_mode</span>
                <span class="material-icons-sharp">dark_mode</span>
                </div>

            </li>
            </ul>
            
            <img src="<?= media(); ?>/imagenes/perfil4.jpg" alt="">
        </div>

        