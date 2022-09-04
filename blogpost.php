<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/blogpost.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Vaccinator</title>
</head>

<body>
    <div class="wrapper">
    <div class="nav">
            <div class="logo">
                <h4> <a class="logo-text" href="landing.php" style="font-family:'serif'; font-size:45px;"><B><I> SARVAGYA </I></B></a></h4>
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
    </div>
    <div class="home-articles ">
        <h2>Featured Articles</h2>
        <div class="home-article">
            <div class="home-article-img">
                <img src="./image/blog-1.jpg" alt="Workspace" srcset="">
            </div>
            <div class="home-article-content">
                <a>
                    <h3>What are the ways to prevent Covid-19.</h3>
                </a>
                <div>Auhtor Name</div>
                <span>7 january | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="./image/blog-2.jpg" alt="Workspace" srcset="">
            </div>
            <div class="home-article-content">
                <a href="">
                    <h3>How did Covid Spread All Around.</h3>
                </a>
                <div>Auhtor Name</div>
                <span>7 january | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="./image/blog-3.jpg" alt="Workspace" srcset="">
            </div>
            <div class="home-article-content">
                <a href="">
                    <h3>Know more About the Covid-19 Variants </h3>
                </a>
                <div>Auhtor Name</div>
                <span>7 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="./image/blog-4.jpg" alt="Workspace" srcset="">
            </div>
            <div class="home-article-content">
                <a href="">
                    <h3> </h3>
                </a>
                <div>Auhtor Name</div>
                <span>7 january | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="./image/blog-5.jpg" alt="Workspace" srcset="">
            </div>
            <div class="home-article-content font1">
                <a href="">
                    <h3>How to Start a Podcast on Spotify</h3>
                </a>
                <div>Auhtor Name</div>
                <span>7 january | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="./image/blog-6.jpg" alt="Workspace" srcset="">
            </div>
            <div class="home-article-content">
                <a href="">
                    <h3>Thing you need to try in this Summer</h3>
                </a>
                <div>Auhtor Name</div>
                <span>7 january | 6 min read</span>
            </div>
        </div>
    </div>
</body>

</html>