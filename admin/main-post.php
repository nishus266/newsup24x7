<?php
session_start();
if($_SESSION['user']){
  $user= $_SESSION['user'];
}
else{
  header('Location:index.php');
}
?>
<?php
$title = $_POST['title'];
$article= $_POST['article'];
$category = $_POST['category'];
$main= $_POST['main'];
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];


      $tmp = explode('.', $_FILES['image']['name']);
      $file_ext = end($tmp);
      $expensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"../upload/".$file_name);
    }else{
       print_r($errors);
    }

     $photo="upload/".$file_name;
     include '../connect.php';
     $time = date("l jS \of F Y h:i:s A");
     $query= "SELECT max(post_id) as counter from mainpost;";
     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_assoc($result)) {
         $counter= $row['counter'];
      }
     $counter=$counter+1;
     $query="INSERT INTO mainpost values($counter, '$title', '$article', '$category', '$time' ,'$photo', '$main');";
     $result = mysqli_query($conn, $query);
     if($result){
          header('Location: dashboard.php');
     }else{
       echo $article;
     }


    }



 ?>
