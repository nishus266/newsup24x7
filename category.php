<?php
$code = $_GET['code'];
if($code==100)
  $category="राजनीति";
if($code==101)
  $category="खेल";
if($code==102)
  $category="व्यापार";
if($code==103)
  $category="टैकनोलजी";
if($code==104)
  $category="स्वास्थ्य";
if($code==105)
  $category="यात्रा";
if($code==106)
  $category="मनोरंजन";

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
     <title>Newsup24x7.com </title>


    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body style="font-family: 'Hind',sans-serif;">
  <?php include 'nav.php'; ?>
  <div class="featured-post-area" style="margin-top:1em;">
      <div class="container">

        <?php
        $code = $_GET['code'];
        include 'connect.php';
        $query = "SELECT * from mainpost where category=$code order by post_id DESC;";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
          echo "
          <div class=\"container\" style=\"margin-top:50px;\">
            <div class=\"row\">
              <a href=\"#\" class=\"post-title\">
                  <h6 style=\"font-size:25px;\">".$row['title']."</h6>
              </a>
            </div>
            <div class=\"row\" style=\"margin-top:20px;\">
            <div class=\"col-sm-6\">
              <div class=\"post-thumb\">
                  <a href=\"#\"><img src=\"".$row['image']."\" style=\"width:80%;height:80%;\" alt=\"\"></a>
              </div>

            </div>
            <div class=\"col-sm-6\">
              <div class=\"single-blog-post featured-post\">
                  <div class=\"post-data\">
                      <a href=\"#\" class=\"post-catagory\">".$category."</a>

                      <div class=\"post-meta\">
                          <p class=\"post-excerp\"><span style=\"font-weight:bold;\">".substr($row['article'], 0, 1000)."<a href=\"news.php?var=".$row['post_id']."\" style=\"font-size:17px;text-decoration: none;color:#A13123;font-weight:bold;\"> और पढो...</a></p>

                      </div>
                  </div>
              </div>
            </div>
          </div>
          </div>
              ";
         }

         ?>






   </div>
 </div>

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
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
