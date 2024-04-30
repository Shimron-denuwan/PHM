<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../view/users/bmiResult.css">
    <link rel="icon" type="image/x-icon" href="../view/images/circleFavicon.png">
    <title>BMI Result|PHM</title>
</head>
<body>
<div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="../view/images/PHM1.jpg" class="img-circle" width="50px" height="50px"></a>
          </div>
          <ul class="nav navbar-nav">
          <li><a href="index.html">Home</a></li>
            <li><a href="home.html">Categories</a></li>
            <li class="disabled"><a href="BMIcalculator.html">BMI Calculator</a></li>
            <li><a href="balancedDiet.html">Balanced Diet</a></li>
            <li><a href="contact.html">Contact Advisers</a></li>
            <li><a href="dailyExercises.html">Daily Exercises</a></li>
            <li><a href="location.html">Locations</a></li>
            <li><a href="education.html">Knowledge</a></li>
            <li><a href="aboutUs.html">About Us</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="signIn.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="intro">
        <div class="titleBase">
        <h1 class="title">BMI Result</h1>
        </div>
    </div>
    <br><br>

<?php

    require_once '../db/connection.php';

        $weight=$_POST['weight'];

        $height=$_POST['height'];

        $sum = $weight / ($height * $height);
        echo "<div class='tag'>";
        if($sum < 18.5){
            echo '<h1 class="tagItems">'."BMI rate =  Underweight". "<br> ". "BMI value = ". $sum. "</h1>";
        }
        elseif($sum === 18.5 or $sum < 24.9){
            echo '<h1 class="tagItems">'."BMI rate =  Normal". "<br> ". "BMI value = ". $sum. "</h1>";
        }
        elseif($sum === 25 or $sum < 29.9){
            echo '<h1 class="tagItems">'."BMI rate =  Overweight". "<br> ". "BMI value = ". $sum. "</h1>";
        }
        else{
            echo '<h1 class="tagItems">'."BMI rate =  Obese". "<br> ". "BMI value = ". $sum. "</h1>";
        }
        echo "</div>";

        $date = date("Y-m-d");
    /*
        $sql = "INSERT INTO bmi_information (height,weight,bmi_value,bmi_rate,date)
        VALUES ('$height','$weight','$sum','null','$date',);";

        if($conn->query($sql) === TRUE) {
            echo " record created successfully";
        } else {
            echo "Error:". $sql . "<br>" . $conn->error;
        }        
        $conn->close();
    */
?>
   <a href="../view/users/bmiCalculator.html"> <button class="btn btn-success btn-block" >Go back</button></a>
</body>
</html>
