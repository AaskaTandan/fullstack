
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnHub - Learning Platform</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <? require_once 'data.php';?>
   



    <!-- HEADER -->
    <header class="top-header">
        <h1>LearnHub</h1>
        <p>Your Journey Towards Better Learning Starts Here!</p>
    </header>


    <!-- LEFT SIDEBAR -->
    <aside class="sidebar">

        <h2>MENU</h2>

        <nav class="main-nav">
            <ul>
                <li><a href="#home">Dashboard</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#resources">Resources</a></li>
                <li><a href="#tutorials">Tutorials</a></li>
                <li><a href="#audio">Learning Audio</a></li>
                <li><a href="#footer">About Us</a></li>
            </ul>
        </nav>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="container">

        <!-- HOME SECTION -->
        <section id="home">

            <div class="welcome-content">
                <h2>Welcome to LearnHub!</h2>

                <p>
                    Explore new skills, discover useful resources
                    and improve your knowledge with LearnHub.
                </p>

                <a href="#courses" class="explore-btn">
                    Explore Courses
                </a>
            </div>

            <figure>
                <img src="images/images.jpg"
                     alt="Learning and studying with a laptop">

                <figcaption>
                    Start learning something new today!
                </figcaption>
            </figure>

        </section>


        <!-- COURSES SECTION -->
        <section id="courses">

            <h2>Our Popular Courses</h2>

            <ul class="courses">
                <?php
                $Courses = array_filter(
                    $Courses, fn($course) => $course["category"]["Level"] === "Beginner");
                    ?>
   
                 


                <?php foreach ($Courses as $course): ?>
                <li>
                    <article class="course">
                        <img src='<?= $course["image"] ?>'alt='<?= $course["alt"] ?>'>
                        <h3><?= $course["title"] ?></h3>
                        <p><?= $course["description"] ?></p>
                        <span><?= $course["category"]["Level"] ?></span>
                    </article>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>


        <!-- RESOURCES SECTION -->
        <section id="resources">

            <h2>Learning Resources</h2>

            <article class="resource-item">
                <h3>HTML</h3>

                <p>
                    Learn the basic structure of websites
                    using HyperText Markup Language.
                </p>

                <a href="https://www.w3schools.com/html/"
                   target="_blank">Learn HTML</a>
            </article>


            <article class="resource-item">
                <h3>CSS</h3>

                <p>
                    Learn how to style websites with
                    colors, layouts and attractive designs.
                </p>

                <a href="https://www.w3schools.com/css/"
                   target="_blank">Learn CSS</a>
            </article>


            <article class="resource-item">
                <h3>JavaScript</h3>

                <p>
                    Learn how to make websites interactive
                    using JavaScript.
                </p>

                <a href="https://www.w3schools.com/js/"
                   target="_blank">Learn JavaScript</a>
            </article>

        </section>


        <!-- VIDEO TUTORIAL SECTION -->
        <section id="tutorials">

            <h2>Video Tutorials</h2>

            <article class="video-article">

                <h3>Learn Through Videos</h3>

                <p>
                    Watch educational videos to understand
                    different topics more easily.
                </p>

                <video controls>
                    <source src="videos/lessons.mp4" type="video/mp4">
                    Your browser does not support the video element.
                </video>

            </article>

        </section>


        <!-- AUDIO SECTION -->
        <section id="audio">

            <h2>Learning Audio</h2>

            <p>
                Listen to educational audio and learn
                something new.
            </p>

            <audio controls>
                <source src="audio/learning.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>

        </section>

    </main>


    <!-- RIGHT SIDEBAR -->
    <aside class="right-sidebar">

        <section id="tips">
            <h2>Study Tips</h2>

            <p>1. Make a daily study schedule.</p>
            <p>2. Take regular breaks.</p>
            <p>3. Avoid distractions.</p>
            <p>4. Revise what you learn.</p>
        </section>


        <section class="progress-section">
            <h2>Learning Goals</h2>

            <p>Complete one lesson every day.</p>
            <p>Practise coding regularly.</p>
            <p>Learn something new every week.</p>
        </section>


        <section class="motivation">
            <h2>Daily Motivation</h2>

            <p>
                "Small progress every day leads
                to big results."
            </p>
        </section>

    </aside>


    <!-- FOOTER -->
    <footer id="footer">

        <section>
            <h3>About LearnHub</h3>

            <p>
                LearnHub is an online learning platform
                designed to help students develop their
                knowledge and skills.
            </p>
        </section>


        <section>
            <h3>Quick Links</h3>

            <p><a href="#home">Home</a></p>
            <p><a href="#courses">Courses</a></p>
            <p><a href="#resources">Resources</a></p>
        </section>


        <section>
            <h3>Contact & Support</h3>

            <p>Email: support@learnhub.com</p>
            <p>We are here to support your learning journey.</p>
        </section>


        <div class="footer-bottom">
            <p>2026 LearnHub. All Rights Reserved.</p>
        </div>

    </footer>

</body>
</html>
