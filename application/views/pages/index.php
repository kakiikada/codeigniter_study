<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>hoge</title>
    <link rel="stylesheet" href="../base.css">
    <style media="screen">
    *{
      padding:0;
      margin:0;
    }

    html,body{
      height:100%;
      width:100%;
    }

    .container{
      max-width:1000px;
      margin:0 auto;
    }

    a{
      text-decoration: none;
    }

    header{

    }

    header li{
      float:left;
      list-style:none;
      margin:15px;
    }


    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <h1><?php $title ?></h1>
        <ul>
          <li><a href="#">一つ目</a></li>
          <li><a href="#">二つ目</a></li>
          <li><a href="#">三つ目</a></li>
        </ul>
      </div>
    </header>
  </body>
</html>
