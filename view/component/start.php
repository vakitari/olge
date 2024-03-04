<?php 
session_start();1 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Noto+Serif+JP&family=Oswald:wght@200..700&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
  <style>
    .body-logo {
      width: 90%;
      height: 70px;
      background: #000;
      margin-left: 50px;
      color: white;
      font-family: "Oswald", sans-serif;
      display: flex;

    }

    .body-logo h1 {
      margin: 10px;
    }

    .nav-container {
      width: 100%;
      height: 70px;
      display: flex;
    }
    .vert{
      height: 60px;
      width: 5px;
      background:white;
    }
    .part{
      display: flex;
      margin: auto;
      margin-top: 0px;

    }
    .part p{
      margin: 16px;
      margin-left: 20px;
    }
  </style>
</head>

<body>

  <div class="nav-container">
    <img src="img/logo.png" alt="123">

    <div class="body-logo">
      <h1>Olge ink</h1>

      <div class="part">
        <div class="vert"></div>
        <p>Профиль</p>
      </div>
      <div class="part">
        <div class="vert"></div>
        <p>Профиль</p>
      </div>
      <div class="part">
        <div class="vert"></div>
        <p>Профиль</p>
      </div>
    </div>

  </div>
  <div class="container">
    <div class="row">
      