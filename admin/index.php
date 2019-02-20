<?php
session_start();
if($_SESSION['user']){
  header('Location:dashboard.php');
}
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = test_input($_POST["user"]);
  $ad_password = test_input($_POST["password"]);
  include '../connect.php';
  $query="SELECT * FROM admin_login WHERE puser='$user' AND ppass='$ad_password';";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0){
          session_start();
          $_SESSION["user"] = $user;
          header('Location: dashboard.php');
          exit();
    }
    else{
      $error= "Sorry wrong data Please try again";
    }


}

function test_input($data) {
  $data = htmlspecialchars($data);
  return $data;
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


  <section style="float:left;width:100%;margin-top:70px;">

    <br><h1 align="center">Sign-in</h1>
    <div class="content" style="width: 50%;margin-left: auto;margin-right: auto;"><br>
      <p><?php echo($error); ?> </p>
    <strong>Please Sign-in to your account</strong><br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" name="user">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    </div>
  </section>

   <?php //include 'nav.php'; ?>
   <script src="../script/main.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
