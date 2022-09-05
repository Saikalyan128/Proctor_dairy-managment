<?php
  $host="localhost";
  $user="root";
  $password="";
  $db='proctor dairy';

  $connect= mysqli_connect($host,$user,"");
  mysqli_select_db($connect,$db);


  session_start();
  if(isset($_POST['bb']))
  {
    $usn=$_POST['s_usn'];
    $password=$_POST['s_password'];

    $q="select * from student where s_usn= '".$usn."' AND password ='.$password.'";
    $result = mysqli_query($connect,$q); 

    $_SESSION['usn']=$usn;
    $_SESSION['password']=$password;
     
    if(mysqli_num_rows($result)>=0)
    {
      header("Location:project/interface.html");
    }  
  }
?>

