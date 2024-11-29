<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>
    <!-- Sticky Navbar -->
    <nav class="navbar">
        <ul>
            <li><a href="#profile-section">Profile</a></li>
            <li><a href="#projects-section">My Projects</a></li>
        </ul>
    </nav>

    <!-- Header Section -->
    <header>
        <img src="images/banner1.png" alt="Banner" class="banner">
    </header>

    <!-- About Me Section -->
    <section id="profile-section" class="about-me">
        <div class="profile-pic">
            <img src="images/lauren.jpg" alt="Profile Picture">
        </div>
        <div class="description">
            <h1>Elisabeth Lauren</h1>
            <p>
                I am a 5th-semester Informatics student at Multimedia Nusantara University with a strong interest in program development. 
                I am eager to learn, adaptable, and skilled in both technical and teamwork abilities. 
                I am now seeking an internship to further develop my skills in the IT field.
                Feel free to explore my work below!
            </p>
            <div class="social-links">
                <a href="https://github.com/elisabethL174" target="_blank"><img src="images/github.png" alt="GitHub"></a>
                <a href="https://www.linkedin.com/in/elisabeth-lauren-8b9363200/" target="_blank"><img src="images/linkedin.png" alt="LinkedIn"></a>
                <a href="mailto:elisabeth.lauren74@gmail.com" target="_blank"><img src="images/email.png" alt="Email"></a>
                <a href="https://wa.me/+6282124241411" target="_blank"><img src="images/wa.png" alt="WhatsApp"></a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="projects-section" class="portfolio">
    <h2>Portfolio Projects</h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="images/genshinMania1.png" alt="Project 1">
                <p>As the final project for the "Introduction to Internet" course, our team developed a Genshin Impact encyclopedia website. My contributions focused on comprehensive planning, API integration, and front-end development, and our efforts culminated in winning first place at the 2023 CodeExpo.</p>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <img src="images/HMIF.png" alt="Project 2">
                <p>Collaborated as part of the Research and Development team to develop a web application, contributing to front-end implementation and database setup to enhance usability and establish a solid foundational structure.</p>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="images/sudibakti.png" alt="Project 3">
                <p>Collaborated in a team to develop a project for Apotek Sudi Bakti, handling backend and frontend tasks, designing the database, and creating a Figma prototype. This project aimed to help customers easily view available medications, make purchases, and consult with pharmacists.</p>
            </div>
        </div>
        <!-- Navigation Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>
</html>
