<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME|| </title>
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        <!-- SLIDER -->
        <div class="container">
    <div class="slider">
      <div class="box1 box">
        <div class="bg"></div>
        <div class="details">
          <h1>WELCOME TO OUR WEBSITE</h1>
          <p>
            A good laugh and a long sleep are the best cures in the doctor's book.
          </p>
        </div>

        <div class="illustration">
          <div class="inner"></div>
        </div>
      </div>

      <div class="box2 box">
        <div class="bg"></div>
        <div class="details">
          <h1>STAY SAFE STAY HEALTHY</h1>
          <p>
            Time and health are two precious assets that we don't recognize and appreciate until they have been depleted.
          </p>
        </div>

        <div class="illustration">
          <div class="inner"></div>
        </div>
      </div>

      <div class="box3 box">
        <div class="bg"></div>
        <div class="details">
          <h1>LIFE MANTRA</h1>
          <p>
            Love the life you live, You only live once, but if you do it right, once is enough. Be the change that you wish to see in the world.
          </p>
        </div>

        <div class="illustration">
          <div class="inner"></div>
        </div>
      </div>

      <div class="box4 box">
        <div class="bg"></div>
        <div class="details">
          <h1>BE CALM</h1>
          <p>
            Always laugh when you can, it is cheap medicine, A samurai must remain calm at all times even in the face of danger.
          </p>
        </div>

        <div class="illustration">
          <div class="inner"></div>
        </div>
      </div>

      <div class="box5 box">
        <div class="bg"></div>
        <div class="details">
          <h1>LIVE HEALTHY</h1>
          <p>
            Let food be thy medicine and medicine be thy food.
          </p>
        </div>

        <div class="illustration">
          <div class="inner"></div>
        </div>
      </div>

    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="prev" width="56.898" height="91" viewBox="0 0 56.898 91">
      <path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(0 91) rotate(-90)" fill="#fff" />
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" class="next" width="56.898" height="91" viewBox="0 0 56.898 91">
      <path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(56.898) rotate(90)" fill="#fff" />
    </svg>
    <div class="trail">
      <div class="box1 active">1</div>
      <div class="box2">2</div>
      <div class="box3">3</div>
      <div class="box4">4</div>
      <div class="box5">5</div>
    </div>
  </div>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CSSRulePlugin3.min.js"></script>

        <!-- LANDING PAGE -->
        <div class="landing">
            <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
                <h1>your<span style="color:#eb4e15;font-size: 4vw"> Nturition Guide.</span> </h1>
                <h3>Use the Healthy Eating Plate as a guide for creating healthy, balanced meals—whether served at the table or packed in a lunch box.</h3>
                <div class="btn">
                    <a href="learnmore.html">Learn More</a>
                </div>
            </div>
            <div class="landingImage" data-aos="fade-down" data-aos-duration="2000">
                <img src="./image/Diet.png" alt="">
            </div>
        </div>
        <!-- ABOUT SECTION -->
        <div class="about">
            <div class="aboutText" data-aos="fade-up" data-aos-duration="1000">
                <h1>Why is it important that <br> <span style="color:#2f8be0;font-size:3vw">You Stay healthy.</span> </h1>
                <img src="./image/sofa.png" id = "image" alt="">
            </div>
            <div class="aboutList" data-aos="fade-left" data-aos-duration="5000">
                <ol>
                    <li>
                        <span>01</span>
                        <p>Helps You Live Longer, Keeping healthy will also help you keep free of chronic diseases</p>
                    </li>
                    <li>
                        <span>02</span>
                        <p>Some more key advantages of eating healthily and working out regularly are that you will live longer.</p>
                    </li>
                    <li>
                        <span>03</span>
                        <p> Those who live a healthy lifestyle have been proven in clinical studies to have lower levels of stress and anxiety.</p>
                    </li>
                    <li>
                        <span>04</span>
                        <p>Exercising regularly and living a healthy lifestyle will rub off on those around you. When your children and grandchildren see you exercising and eating healthily, they will be more likely to follow your example.</p>
                    </li>
                </ol>
            </div>
        </div>
        <!-- INFO SECTION -->
        <div class="infoSection">
            <div class="infoHeader" data-aos="fade-up" data-aos-duration="1000">
                <h1>Things you could do  <br> <span style="color:#e0501b"> to stay healthy and fit always.</span> </h1>
            </div>
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <img src="./image/movie.png" class="cardoneImg" alt="" data-aos="fade-up" data-aos-duration="1100">
                    <div class="cardbgone"></div>
                    <div class="cardContent">
                        <h2>Binge Watch</h2>
                        <p>Binge-watch all your needful exercises.</p>
                        <a href="#">
                            <div class="cardBtn">
                                <a href="https://youtu.be/AzV3EA-1-yM/" target="_blan">
                                    <img src="./image/next.png" alt="" class="cardIcon">
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card two" data-aos="fade-up" data-aos-duration="1300">
                    <img src="./image/learn.png" class="cardtwoImg" alt="" data-aos="fade-up" data-aos-duration="1200">
                    <div class="cardbgtwo"></div>
                    <div class="cardContent">
                        <h2>Read Blogs</h2>
                        <p>Read and suggest, read a blog or Learn a new exercises to stay more healthy.</p>
                        <a href="#">
                            <div class="cardBtn">
                                <a href="blogpost.php" target="_blanc">
                                    <img src="./image/next.png" alt="" class="cardIcon">
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card three" data-aos="fade-up" data-aos-duration="1600">
                    <img src="./image/videocall.png" class="cardthreeImg" alt="" data-aos="fade-up"
                        data-aos-duration="1300">
                    <div class="cardbgone"></div>
                    <div class="cardContent">
                        <h2>Book appointment</h2>
                        <p>Book an appointment from AIMS doctors.</p>
                        <a href="#">
                            <div class="cardBtn">
                                <img src="./image/next.png" alt="" class="cardIcon">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- --------Footer -------->
        <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
      </g>
    </svg>
  </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="./js/script.js"></script>
    
</body>
</html>