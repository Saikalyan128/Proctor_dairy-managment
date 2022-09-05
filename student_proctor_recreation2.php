<?php
 $host="localhost";
 $user="root";
 $password="";
 $db='proctor dairy';
  session_start();
 $connect= mysqli_connect($host,$user,"");
 mysqli_select_db($connect,$db);
 
 $usn=$_SESSION['usn'];
 $password=$_SESSION['password'];
 

 $q="select * from proctor,student
    where proctor.p_id=student.pid and
    s_usn= '".$usn."'   AND student.password ='".$password."'";
 $result = mysqli_query($connect,$q); 
 $row=mysqli_fetch_array($result);

?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="recreation_2.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="frame">
      <div class="card">

        <div class="profile">
          <img
            class="img"
            src="data:image/png;base64,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"
          />
          
          <p class="name" name="name" style="font-size: 20px">Name: <?php echo $row['p_name']  ?></p> 
          <p class="usn" name="usn"   style="font-size: 20px">Proctor id: <?php echo $row['p_id']  ?></p>
          <p class="name" style="font-size: 18px">BRANCH: <?php echo $row['branch']  ?></p>
        </div>
        <div class="stats">
          <div class="box">
            <span class="value" style="font-size: 30px">Qualification</span>
            <span class="parameter" style="font-size: 17px">
            <?php echo $row['qualification'] ?></span
            >
          </div>

          <div class="box">
            <span: class="value" style="font-size: 30px">Experience:</span>
            <span class="parameter" style="font-size: 17px"><?php echo $row['experience']  ?> years</span>
          </div>
        </div>
        
        
      </div>
    </div>
  </body>
</html>