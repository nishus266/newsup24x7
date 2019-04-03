<?php
session_start();
if($_SESSION['user']){
  $user= $_SESSION['user'];
}
else{
  header('Location:index.php');
}
?>


<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Nishant Sharma">
<link rel="icon" href="images/logo.png">
<title>Admin Section | Newsup24x7.com </title>
    <!-- CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="../css/main.css" >
</head>
<body style="background:#DDDDDD;">
<button type="button" class="btn btn-danger" style="margin-top:70px;float:right;margin-right:10px;" onclick="my(1)">Logout</button>

<section style="width:100%;float:left;margin-top:40px;">
         <hr style="width:90%;">
         <button type="button" class="btn btn-danger" style="margin-top:10px;margin-left:5%;" onclick="fun(1)">Post Top News</button>
          <hr style="width:90%;">
</section>
<div id="latest" style="width:80%;margin-top:20px;height:700px;border-radius:5px;background:#cccccc;position:fixed;top:0px;left:10%;display:none;">
  <button type="button" class="btn btn-danger" style="margin-top:10px;float:right;margin-right:10px;" onclick="fun(2)"><i class="fas fa-times-circle"></i></button>

<div class="container" style="margin-top:30px;">
  <form method="post" action="main-post.php" enctype = "multipart/form-data">
    <div class="form-group">
      <label for="exampleFormControlInput1">Title</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Article</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="article" rows="3" style="height:250px;"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Category</label>
      <select class="form-control" id="exampleFormControlSelect1" name="category">
          <option value="100">राजनीति</option>
          <option value="101">खेल</option>
          <option value="102">व्यापार</option>
          <option value="103">टैकनोलजी</option>
          <option value="104">स्वास्थ्य</option>
          <option value="105">यात्रा</option>
          <option value="106">मनोरंजन</option>
          <option value="107">शिक्षा</option>
          <option value="108">अंतरराष्ट्रीय</option>
        </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Main Post</label>
      <select class="form-control" id="exampleFormControlSelect1" name="main">
          <option value="YES">YES</option>
          <option value="NO" selected>NO</option>

        </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Upload Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>

  </form>
</div>
</div>
   <?php //include 'nav.php'; ?>
   <script src="../script/main.js"></script>
  <script>
  function fun(a){
    if(a==1){
       var m= document.getElementById('latest');
       m.style.display="block";
    }
    if(a==2){
       var m= document.getElementById('latest');
       m.style.display="none";
    }
  }
  </script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
