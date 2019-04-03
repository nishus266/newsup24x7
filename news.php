<?php
$code= $_GET['var'];
include 'connect.php';
$query = "SELECT * from mainpost where post_id=$code;";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result)) {
       $title = $row['title'];
       $image = $row['image'];
       $article = $row['article'];

}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="fonts.googleapis.com/css?family=Hind"; rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- Title -->
     <title><?php echo($title); ?></title>


    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
<style>
.imtv{
  height:400px;
  width:70%;
}
@media (max-width: 768px) {
.imtv{
  margin-left:10%;
  width:80%;
  height:300px;
}
}
</style>
</head>

<body style="font-family: 'Hind',sans-serif;">
  <?php include 'nav.php'; ?>


  <div class="container" style="margin-top:50px;">

    <div class="row">

        <img src="<?php echo($image); ?>" class="imtv" alt="">
    </div>
    <div class="row" style="margin-top:30px;">
      <a href="#" class="post-title">
          <h2><?php echo($title) ; ?></h2>
      </a>
    </div>
    <div class="row" style="margin-top:30px;">
      <a href="#" class="post-title">
          <p style="font-size:20px;"><?php echo($article) ; ?></p>
      </a>
    </div>


  </div>

  <div style="width:120px;height:60px;position:fixed;top:50%;right:0px;background:green;padding:12px;border-radius:5px;"><a href="whatsapp://send?text=<?php echo $title ?> Read News on: http://newsup24x7.com/news.php?var=<?php echo $code ?>" ><i class="fab fa-whatsapp" style="color:white;font-size:25px;"> Share</i></a></div>

  <script src="js/jquery/jquery-2.2.4.min.js"></script>
  <!-- Popper js -->
  <script src="js/bootstrap/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <!-- All Plugins js -->
  <script src="js/plugins/plugins.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
  </body>
  </html>
