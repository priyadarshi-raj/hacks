<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>FAQ</title>
</head>

<body>
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
    <section>
        <div class="questionbox">
            <div class="img-faq">
                <img src="img/symptoms-img.png" alt="">
            </div>
            <div class="mainfaq">
                <div class="title-container">
                    <h2 class="title">FAQs</h2>
                </div>
                <div class="questionconatiner">
                    <div class="faq">
                        <div class="question">
                            <h3>In what conditions does COVID-19 survive the longest?</h3>
                            <svg width="15" height="10" viewBox="0 0 42 35">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>Coronaviruses die very quickly when exposed to the UV light in sunlight. Like other
                                enveloped viruses, SARS-CoV-2 survives longest when the temperature is at room
                                temperature or lower, and when the relative humidity is low (<50%)< /p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>What are some known manifestations of post-COVID-19 conditions?</h3>
                            <svg width="15" height="10" viewBox="0 0 42 35">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>Known manifestations of post-COVID conditions include a range of troubling physical
                                symptoms, such as severe fatigue and increased risk of damage to the heart, lungs and
                                brain.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>What should be done if you have a COVID-19 patient? </h3>
                            <svg width="15" height="10" viewBox="0 0 42 35">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>Give suspect patient a triple layer surgical mask and direct patient to an earmarked and
                                separate area, an isolation room if available. Keep at least 6 feet distance between
                                suspected patients and other patients.24-May-2021</p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>Do smokers get more severe symptoms of COVID-19 if infected? </h3>
                            <svg width="15" height="10" viewBox="0 0 42 35">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>Smoking any kind of tobacco reduces lung capacity and increases the risk of many
                                respiratory infections and can increase the severity of respiratory diseases. COVID-19
                                is an infectious disease that primarily attacks the lungs. Smoking impairs lung function
                                making it harder for the body to fight off coronaviruses and other respiratory diseases.
                                Available research suggests that smokers are at higher risk of developing severe
                                COVID-19 outcomes and death.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>How long does the virus that causes COVID-19 last on surfaces?</h3>
                            <svg width="15" height="10" viewBox="0 0 42 35">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>Recent research evaluated the survival of the COVID-19 virus on different surfaces and
                                reported that the virus can remain viable for up to 72 hours on plastic and stainless
                                steel, up to four hours on copper, and up to 24 hours on cardboard.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>Has anyone gotten Covid after being fully vaccinated?</h3>
                            <svg width="15" height="10" viewBox="0 0 42 35">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>While rare, it is possible that fully vaccinated people can become infected with
                                Covid-19. A recent outbreak of Covid-19 cases associated with the delta variant in
                                Israel included many who had been fully vaccinated, for example. Those are called
                                breakthrough infections, and they are typically mild</p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>How long should a COVID-19 patient be under home isolation for?</h3>
                            <svg width="15" height="10" viewBox="0 0 42 35">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>Patient under home isolation will stand discharged and end isolation after at least 10
                                days have passed from onset of symptoms (or from date of sampling for asymptomatic
                                cases) and no fever for 3 days. There is no need for testing after the home isolation
                                period is over.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>Will climate change make the COVID-19 pandemic worse??</h3>
                            <svg width="15" height="10" viewBox="0 0 42 35">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>There is no evidence of a direct connection between climate change and the emergence or
                                transmission of COVID-19 disease. As the disease is now well established in the human
                                population, efforts should focus on reducing transmission and treating patients. </p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>Will climate change make the COVID-19 pandemic worse??</h3>
                            <svg width="15" height="10" viewBox="0 0 42 35">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>There is no evidence of a direct connection between climate change and the emergence or
                                transmission of COVID-19 disease. As the disease is now well established in the human
                                population, efforts should focus on reducing transmission and treating patients. </p>
                        </div>
                    </div>
                    <div class="faq">
                        <div class="question">
                            <h3>Will climate change make the COVID-19 pandemic worse??</h3>
                            <svg width="15" height="10" viewBox="0 0 42 35">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="answer">
                            <p>There is no evidence of a direct connection between climate change and the emergence or
                                transmission of COVID-19 disease. As the disease is now well established in the human
                                population, efforts should focus on reducing transmission and treating patients. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="faq.js"></script>
</body>

</html>