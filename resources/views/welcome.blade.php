<!DOCTYPE html>
<html lang="en">

<head>
    <title>Umar Muhdhor - Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
    {{-- <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css"> --}}

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- jQuery (Diperlukan oleh Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Umar Muhdhor</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                    <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home-section" class="hero">
        <div class="home-slider  owl-carousel">
            <div class="slider-item ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img"
                            style="background-image:url(images/bg_22.png);">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>
                                <h1 class="mb-4 mt-3">I'm <span>Umar Muhdhor</span></h1>
                                {{-- <h2 class="mb-4">Isi apeni</h2> --}}
                                <p><a href="#resume-section" class="btn btn-primary py-3 px-4">Resume</a>
                                    <a href="images/Portfolio.pdf" class="btn btn-white btn-outline-white py-3 px-4"
                                        download="Porfolio.pdf">Portfolio</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img"
                            style="background-image:url(images/bg_2.png);">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>
                                <h1 class="mb-4 mt-3">I'm a <span>Mobile Developer</span> based in Indonesia</h1>
                                <p><a href="#contact-section" class="btn btn-primary py-3 px-4">Hire me</a> <a
                                        href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My
                                        works</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url({{asset('images/bg_11.png')}});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p style="text-align: justify">As a dedicated Bachelor of Informatics student at Multi Data
                                University, Palembang,
                                I have cultivated a strong passion for web development and Android application
                                development.
                                My enthusiasm for continuous learning in the field of information technology drives me
                                to
                                stay updated with the latest trends and advancements. With practical experience as a
                                teaching
                                assistant, where I instructed two courses for one semester, I have honed my
                                adaptability,
                                flexibility, clear communication, and critical thinking skills. I thrive in both
                                independent and
                                collaborative environments and am eager to apply my expertise and knowledge to
                                contribute meaningfully
                                in innovative settings.</p>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="10">0</span>
                                <span>Project complete</span>
                            </p>
                            <p><a href="images/cv.pdf" download="cv.pdf" class="btn btn-primary py-3 px-3">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Resume</h1>
                    <h2 class="mb-4">Resume</h2>
                    <p>Here is a detailed overview of my academic background and professional experiences.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Sep 2022 - Present</span>
                        <h2>Bachelor Degree in informatics</h2>
                        <span class="position">Multi Data University Palembang</span>
                        <p class="mt-4" style="text-align: justify;text-justify: inter-word;hyphens: auto;">During
                            my Bachelor degree in Informatics at Multi Data
                            University Palembang, I gained in-depth knowledge in software development,
                            data analysis, and system design. I participated in various projects and
                            research focusing on artificial intelligence and machine learning. This
                            program helped me develop strong analytical and problem-solving skills
                            through comprehensive coursework and hands-on projects. Additionally,
                            I actively engaged in student organizations and industry workshops to
                            enhance my practical knowledge and professional network.</p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Feb 2023 - Present</span>
                        <h2>Freelance</h2>
                        <span class="position">HIGGZ ACADEMIA TECHNOLOGY PTE. LTD</span>
                        <p class="mt-4" style="text-align: justify;text-justify: inter-word;hyphens: auto;">
                            Since Feb 2023, I have been working as a freelance math problem
                            solver for HIGGZ Academia Technology Pte. Ltd. in Singapore. My
                            responsibilities include creating and solving math problems for
                            elementary, middle, and high school levels. This role has enhanced
                            my mathematical skills and my ability to present complex concepts
                            in an understandable manner, contributing to the educational content
                            provided by the company</p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Sep 2023 - Present</span>
                        <h2>Informatics Student Association</h2>
                        <span class="position">Technology and Education</span>
                        <p class="mt-4" style="text-align: justify;text-justify: inter-word;hyphens: auto;">
                            I am an active member in the field of education and technology in the
                            Multi Data Palembang University Informatics Student Association. Through
                            this participation, I was involved in various activities aimed at increasing
                            technology understanding among students, such as workshops, seminars and
                            training. This experience broadened my horizons in the field of technology
                            and enriched my leadership and collaboration skills.

                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Mar 2024 - Jul 2024</span>
                        <h2>Student Exchange Program</h2>
                        <span class="position">Dian Nuswantoro University</span>
                        <p class="mt-4" style="text-align: justify;text-justify: inter-word;hyphens: auto;">From
                            March 2024 to July 2024, I participated in a student
                            exchange program at Dian Nuswantoro University. This experience broadened
                            my academic horizons and provided international exposure in Informatics.
                            I engaged in collaborative projects and enhanced my intercultural communication
                            skills. Additionally, I served as the leader for Modul Nusantara activities,
                            organizing cultural exchange events to foster cross-cultural understanding.
                            This program significantly enriched my academic and professional growth.</p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Sep 2023 - Jan 2024</span>
                        <h2>Assistant Lecturer</h2>
                        <span class="position">Multi Data University Palembang</span>
                        <p class="mt-4" style="text-align: justify;text-justify: inter-word;hyphens: auto;">
                            In the Fall 2023 semester, I served as a teaching assistant for two courses at
                            Multi Data University Palembang. My responsibilities included assisting with
                            lectures, grading assignments, and providing support to students. This experience
                            enhanced my understanding of the subject matter and improved my communication and
                            instructional skills.</p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">Okt 2022 - Present </span>
                        <h2>Representative</h2>
                        <span class="position">Leader</span>
                        <p class="mt-4" style="text-align: justify;text-justify: inter-word;hyphens: auto;">
                            Throughout my tenure as the leader of our university's representative team,
                            dedicated to showcasing the excellence of Multi Data University Palembang and
                            actively participating in off-campus activities, I have garnered extensive
                            experience in promoting our institution and engaging with diverse communities.
                            By spearheading initiatives aimed at highlighting our university's strengths and
                            fostering connections beyond campus borders, I've honed my leadership abilities
                            and cultivated meaningful partnerships, contributing to the vibrant spirit of our
                            alma mater.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="images/cv.pdf" download="cv.pdf" class="btn btn-primary py-4 px-5">Download CV</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="game-section heading-section ftco-animate">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">Achievement</h1>
                <h2 class="mb-4">Achievement</h2>
                {{-- <p>Here is a detailed overview of my academic background and professional experiences.</p> --}}
            </div>
        </div>
        {{-- <h2 class="line-title h2-gameSection">trending games</h2> --}}
        <div class="owl-carousel custom-carousel">
            <div class="item active" style="background-image: url(images/Sert-1.jpg);">
                <div class="item-desc">
                    <h3 class="h3-gameSection">Silver Medal</h3>
                    <p>Awarded for excellence in High School Mathematics during the national AMIGO 2020 competition.</p>
                </div>
            </div>
            <div class="item" style="background-image: url(images/Sert-2.jpg);">
                <div class="item-desc">
                    <h3 class="h3-gameSection">Runner-up</h3>
                    <p>Attained the first runner-up position in the national-level mathematics competition hosted by
                        AVICUP
                    </p>
                </div>
            </div>
            <div class="item" style="background-image: url(images/Sert-3.jpg);">
                <div class="item-desc">
                    <h3 class="h3-gameSection">Honourable</h3>
                    <p>Received an Honorable Mention title at the Lust Mathematical Competition</p>
                </div>
            </div>
            <div class="item" style="background-image: url(images/Sert-4.jpg);">
                <div class="item-desc">
                    <h3 class="h3-gameSection">Silver Medal</h3>
                    <p>Achieved a silver medal in the National Math Competition</p>
                </div>
            </div>
            <div class="item" style="background-image: url(images/Sert-5.jpg);">
                <div class="item-desc">
                    <h3 class="h3-gameSection">Gold Medal</h3>
                    <p>Achieved a gold medal in the National Numeracy Olympiad</p>
                </div>
            </div>
            <div class="item" style="background-image: url(images/Sert-6.jpg);">
                <div class="item-desc">
                    <h3 class="h3-gameSection">Gold Medal</h3>
                    <p> Secured the first prize in the national-level Alfest Mathematics of Albinaa Festival Science
                        Olympiad.</p>
                </div>
            </div>
            <div class="item" style="background-image: url(images/Sert-9.jpg);">
                <div class="item-desc">
                    <h3 class="h3-gameSection">Third Place</h3>
                    <p>Earned third place in a city-level programming competition by designing and implementing an
                        efficient algorithm to solve a complex coding challenge</p>
                </div>
            </div>
            <div class="item" style="background-image: url(images/Sert-10.jpg);">
                <div class="item-desc">
                    <h3 class="h3-gameSection">Third Place</h3>
                    <p>Attained 3rd place in the Mathematics Quiz Competition hosted by Lampung University</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(".custom-carousel").owlCarousel({
            autoWidth: true,
            loop: true
        });
        $(document).ready(function() {
            $(".custom-carousel .item").click(function() {
                $(".custom-carousel .item").not($(this)).removeClass("active");
                $(this).toggleClass("active");
            });
        });
    </script>


    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Services</h1>
                    <h2 class="mb-4">Services</h2>
                    <p>Ready to bring your ideas to life with cutting-edge technology and innovative design.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="flaticon-analysis"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Web Design</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="flaticon-flasks"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Web Developer</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="flaticon-ideas"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Data Entry</h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="flaticon-analysis"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Virtual Assistant</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="flaticon-flasks"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Mobile Design</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="flaticon-ideas"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Mobile Developer</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Skills</h1>
                    <h2 class="mb-4">My Skills</h2>
                    <p>A diverse set of skills spanning front-end, back-end, and mobile development.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Math</h3>
                        <div class="progress">
                            <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Laravel</h3>
                        <div class="progress">
                            <div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>HTML5</h3>
                        <div class="progress">
                            <div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                <span>95%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>CSS3</h3>
                        <div class="progress">
                            <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>React Native</h3>
                        <div class="progress">
                            <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="progress-wrap ftco-animate">
                        <h3>Flutter</h3>
                        <div class="progress">
                            <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">Our Projects</h2>
                    <p>A showcase of my latest and most innovative projects.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/fProject2.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://github.com/umarmuhdhor/Filmu">FILMU</a></h3>
                            <span>App Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/fProject1.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://github.com/umarmuhdhor/Tugas-Akhir-Web">JWMarson</a></h3>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/fProject4.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://github.com/mdpweb/project-uas-if31-bos-dayung">SWReal</a></h3>
                            <span>Web Developer</span>
                        </div>
                    </div>

                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/fProject5.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="https://github.com/umarmuhdhor/SchoolProject">School Website</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                                style="background-image: url(images/fProject3.jpg);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3><a
                                            href="https://github.com/Mobile-Programming-MDP/project-akhir-team-future">SUWOTIFY</a>
                                    </h3>
                                    <span>APP Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                                style="background-image: url(images/fProject6.jpg);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3><a href="https://www.instagram.com/tidak.sulit/">Online Math Competition</a>
                                    </h3>
                                    <span>Olimpiade</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Blog</h1>
                    <h2 class="mb-4">Our Blog</h2>
                    <p>Insights and updates on the latest trends in web development and technology.</p>
                </div>
            </div>
            <div class="row d-flex">
                {{-- <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">June 21, 2019</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html"></a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="https://www.youtube.com/@tidaksulit6688" class="block-20"
                            style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">Des, 2020</span>
                                    <a href="#" class="mr-2">Math Youtube</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span></a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="">Tidak Sulit</a></h3>
                            <p>Established and grew a subscriber base exceeding 5,000 individuals through engaging
                                mathematics tutorials</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">June 21, 2019</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Batch 4 Independent Student Exchange</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="10">0</strong>
                            <span>Awards</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="10">0</strong>
                            <span>Complete Projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="10">0</strong>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="100">0</strong>
                            <span>Cups of coffee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/background.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>I'm <span>Available</span> for freelancing</h2>
                    <p>I bring a diverse skill set to help elevate your project to the next level. Let's collaborate to
                        create something exceptional!</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contact Me</h2>
                    <p>I'm always open to discussing new projects, creative ideas, or opportunities to be part of your
                        vision.</p>
                </div>
            </div>

            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>Palembang - Sumatera Selatan - Indonesia</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://1234567920">+62 895 8070 69922</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:muhdhorcs@gmail.com">muhdhorcs@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Telegram</h3>
                        <p><a href="#">--</a></p>
                    </div>
                </div>
            </div>

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-light p-4 p-md-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div class="img contact-img" style="background-image: url(images/image-10.jpg);"></div>
                </div>
            </div>
        </div>
    </section>


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        {{-- <h2 class="ftco-heading-2">About</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p> --}}
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            {{-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li> --}}
                            {{-- <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li> --}}
                            <li class="ftco-animate"><a href="https://www.instagram.com/umarmuhd._/"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a>
                            </li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Entry</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Virtual
                                    Assistant</a>
                            </li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Mobile Developer</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Sumatera Selatan,
                                        Indonesia</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62
                                            895 8070 69922</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">muhdhorcs@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p style="color: black;">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved |
                        <span> This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank" style="color: black;">Colorlib</a>
                        </span>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
