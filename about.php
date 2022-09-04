<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>About Page</title>
</head>
<body>
    <div class="wrapper">
    <div class="nav">
            <div class="logo">
                <h4> <a class="logo-text" href="landing.php" style="font-family:'serif'; font-size:40px;"><B><I> SARVAGYA </I></B></a></h4>
            </div>
            <div class="links">
              <a href="./mscbot/index.html"><i style="color:blue; font-size:20px">👉(Talk to our bot)👈</i></a>
                <a href="about.php">About Us</a>
                <a href="blogpost.php">Blogs</a>
                <a href="help.php">Help</a>
                <a href="videos.php">Nutrition guide
                <i style="font-size:10px">(FAQs)</i></a>
              <a href="bmi.html" >BMI
              <i style=" font-size:10px">Calculator</i></a>
              <a href="http://127.0.0.1:5000/Segmentor/">Calorie
          <i style="font-size:10px">Counter</i></a> 
              
<?php
session_start();
echo " ".$_SESSION['user_name'];
?>
                <a class="mainlink" href="index.php">(logout)</a>
            </div>
        </div>
        <div class="about-section">
            <div class="inner-container">
                <h1>About Us</h1>
                <p class="text">
                    <strong> This website is an initative of all the users which will collect information regarding
                         your health issues, not only that we aim to provide you achieve your goals to maximise your lifestyle choices and improve your health and wellbeing. 
                         We are committed to providing a high quality service to assist you across your entire lifespan. It will collect the information about a healthy person and non-healthy person,
                         the BMI calculation the calories calculation and store the data in database.  we also aim to provide you the best doctors form AIMS for your specific treatement. Our website also contains AI enabled food Nturition dectector.
                        we welcome you to our website and will like to take your valuable feedbacks too.</strong>
                </p>
            </div>
        </div>
        <div class="fill-form">
            <h1>FEEDBACK FORM</h1>.
            <p><a href="FEEDBACK.HTML">PUT YOUR FEEDBACK HERE</a></p>
        </div>
</body>

</html>