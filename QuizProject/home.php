<?php
 session_start();
  if(!isset($_SESSION['username'])){
  header('location:home.php');
  }



  $con = mysqli_connect('localhost', 'root');
  if($con){
      echo "success!";
  }
  else{
      echo "Error";
  }
  mysqli_select_db($con,'quizdbase');


 ?>
<!doctype html>
<html>

<head>
    <title>Home Page</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <br>
<div class="container">


<h1 class=" text-center text-primary">AKASH21CENT WEBDEVELOPEMENT QUIZ</h1>
<h2 class=" text-success" ><h3 class ="text-center">  Welcome, <?php echo $_SESSION['username']; ?> </h3>

<div class="col-lg-8 m-auto d-block">
<div class="card-header">
<h3 class=" card-center"> Welcome <?php echo $_SESSION['username']; ?>
 you have to select only one out of 4. Best of Luck!</h3>
</div>
<br>

<form action="check.php" method="POST">

<?php
for( $i = 1; $i<=2; $i++){
$q = "select * from questions where qid =$i";
$query = mysqli_query($con, $q);
while( $rows = mysqli_fetch_array($query)){
  ?>
  <div class=" card">
    <h4 class=" card-header"> <?php echo $rows['question'] ?></h4>

<?php

$q = "select * from answers where ans_id =$i";
$query = mysqli_query($con, $q);
while( $rows = mysqli_fetch_array($query)){
?>

<div class=" card-body">

  <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]"
  value="<?php echo $rows['aid'];?>">

  <?php echo $rows['answer']; ?>

</div>



  <?php
}
}
}
?>
<input type="submit" name="submit" value="submit" class=" btn btn-success m-auto d-block"> 
</form>
<br>
 <a href="LoginPage.php" class=" btn btn-primary">LOGOUT</a>
</div>
</div>


</body>
</html>    