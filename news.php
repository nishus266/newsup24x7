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


    <!-- Title -->
     <title><?php echo($title); ?></title>


    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body style="font-family: 'Hind',sans-serif;">
  <?php include 'nav.php'; ?>


  <div class="container" style="margin-top:50px;">

    <div class="row">

        <img src="<?php echo($image); ?>" style="width:70%;height:400px;" alt="">
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
