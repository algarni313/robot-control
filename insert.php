<?php
$server ="localhost";
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['submit'])){

    if(!empty($_POST['motor1'])) && !empty($_POST['motor2']) && !empty($_POST['motor3'])
     && !empty($_POST['motor4']) && !empty($_POST['motor5']) && !empty($_POST['motor6']){
         $motor1 = $_POST[number_format];
         $motor2 = $_POST[number_format];
         $motor3 = $_POST[number_format];
         $motor4 = $_POST[number_format];
         $motor5 = $_POST[number_format];
         $motor6 = $_POST[number_format];

         $query = "insert into slider (number_format) values ('$motor1' , '$motor2' ,'$motor3'
          ,'$motor4' ,'$motor5' ,'$motor6' )";

          $run = mysqli_query($conn,$query) or die(mysqli_error());
          if($run){
              echo "slider submitted succesfully";
          }

          else {

            echo "slider not submitted ";
          }



    }
     else{
         echo " all values required";
     }
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RobotSlider</title>
</head>

<style>
    *{
        padding: 0;
        margin: 0;
    }

    #motor  {
        background-color: chartreuse;
        color: darkviolet;
        height: 50px;
        text-align: center;
        line-height: 50px;

    }
    #footer {
        background-color: rgb(255, 0, 34);
        color: rgb(241, 235, 243);
        height: 50px;
        text-align: center;
        line-height: 50px;
        position: fixed;
        bottom: 0;
    }
    .main {
        width: 60%;
        margin: 24 auto;
        position: relative;
        padding-top: 100px;
        padding-left: 100px ;

    }

    #slider {
        -webkit-appearance:none ;
        width: 100%;
        height: 7px;
        outline: none;
        border-radius: 3px;

    }/*
    #slider {
        height: 104px;
        width: 48px;
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        z-index: auto;
    }
    */
    body{
        background-color: rgb(231, 194, 25);
    }
    </style>
<body>
    <header id="motor"><h2>motors</h2></header>
    <slider action="insert.php" method="POST">
    <div class="main">
        <input type="range" min="0" max="180" value="50" id="slider">
        <h1> motor1 </h1>
        <input type="range" min="0" max="180" value="50" id="slider">
        <h1> motor2 </h1>
        <input type="range" min="0" max="180" value="50" id="slider">
        <h1>motor3 </h1>
        <input type="range" min="0" max="180" value="50" id="slider">
        <h1>motor4 </h1>
        <input type="range" min="0" max="180" value="50" id="slider">
        <h1>motor5 </h1>
        <input type="range" min="0" max="180" value="50" id="slider">
        <h1>motor6 </h1>
        
        <button type="submit" name="submit">submit</button>
        <button type="submit" name="submit">save</button>


    </div>
  



  

    <foter id="footer"><h2>control_button</h2></foter>


    
</body>
</html>


?>