<?php
 session_start();
  if(!isset($_SESSION['username'])){
  header('location:home.php');
  }
  $con = mysqli_connect('localhost', 'root');
  mysqli_select_db($con,'quizdbase');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   </head>
   <body>
     <div class="container text-center" >
      <br><br>
    	<h1 class="text-center text-success text-uppercase animateuse"> akash21cent Quiz World</h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white display-1"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>

	         <?php
    
            if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
            // Counting number of checked checkboxes.
            $count = count($_POST['quizcheck']);
            // print_r($_POST);
            ?>

        	<td>
            <?php
            echo "Out of 5, You have attempt ".$count." option."; ?>,
            </td>
        
          	
            <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];
            
            $q= " select * from questions ";
            $query = mysqli_query($con,$q);
            $result=0;
            $i = 1;
            while($rows = mysqli_fetch_array($query)) {
               $checked = $rows['ans_id']== $selected[$i];

            			 if($checked){
                   $result ++;
                  }

                  $i++;
 
            	}
            	?>
            
    		<tr>
    			<td>
    				Your Total score
                </td>
                
    			<td colspan="2">
	    	<?php 
	            echo " Your score is ". $result.".";
	            }
	            else{
	            echo "<b>Please Select Atleast One Option.</b>";
	            }
	            } 
	          ?>
	          </td>
            </tr>

            <?php 

            $name = $_SESSION['username'];
             $result = " insert into usersession(name,u_q_id, u_a_id) values ('$name','5','$result') ";
            $result= mysqli_query($con,$result); 
           
            ?>


      </table>

      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>












<!-- 

<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

 $con = mysqli_connect('localhost','root');
    if($con){
      echo"connection";
    }
   
    mysqli_select_db($con,'quizdatabases');


    if(isset($_POST['submit'])){

      if(!empty($_POST['quizcheck'])){

        $count = count($_POST['quizcheck']);
          echo "you count is". $count;

          $selected = $_POST['quizcheck'];
          print_r($selected);

          $q = " select * from question ";
          $query = mysqli_query($con,$q);

          $result = 0;
          $i = 1;
          while ( $rows = mysqli_fetch_array($query)) {
            
              print_r($rows['ans_id']);

              $stored  = $rows['ans_id'] == $selected[$i];

              if($stored){

                $result++;

              }

              $i++;

          }

          echo $result;

      }

    }


?> -->