<?php
include("includes/config.php");
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Employment Website</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Employment Website</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.php" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="company/companyindex.php" class="nav__link">Company</a></li>
                        <li class="nav__item"><a href="recruiter/recruiterindex.php" class="nav__link">Recruiter</a></li>
                        <li class="nav__item"><a href="applicant/applicantindex.php" class="nav__link">Applicant</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>HE</span><br>LLO.</h1>

                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-link"><i class='bx bx-up-arrow-alt' ></i>Scroll down</a>
                    </div>

                    <img src="" alt="" class="home__img">
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/logo.png" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">This is Employment Website</h2>
                        <span class="about__profession">Purpose of existence</span>
                        <p class="about__text">Job Seekers, Job Master is the Destination You Need to Search & Apply for Latest Jobs. Explore Career Options, Create an Amazing Resume & Apply for Jobs. Log on to Monsterindia. Search Jobs by Industry. Highlight feilds & Apply. 20,000+ Employers.</p>

                        <div class="about__social">
                            <a href="" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="https://github.com/shadow0soul" class="about__social-icon"><i class='bx bxl-github' ></i></a>

                        </div>
                    </div>
                </div>
            </section>

            <!--===== feilds =====-->
            <section class="feilds section" id="feilds">
                <h2 class="section-title">fields</h2>

                <div class="feilds__container bd-grid">
                    <div class="feilds__box">
                        <h3 class="feilds__subtitle">engineering</h3>
                        <span class="feilds__name">IT</span>
                        <span class="feilds__name">mechanical</span>
                        <span class="feilds__name">electronics</span>
                        <span class="feilds__name">electrical</span>
                        <span class="feilds__name">chemical</span>
                        <span class="feilds__name">more..</span>
                        
                        <h3 class="feilds__subtitle">health care</h3>
                        <span class="feilds__name">speacilist</span>
                        <span class="feilds__name">nurse</span>
                        <span class="feilds__name">general physician</span>
                        <span class="feilds__name">more..</span>

                        <h3 class="feilds__subtitle">govt jobs</h3>
                        <span class="feilds__name">bank openings</span>
                        <span class="feilds__name">railways</span>
                        <span class="feilds__name">more..</span>
                    </div>

                    <div class="feilds__img">
                        <img src="assets/img/job.png" alt="">
                    </div>
                </div>
            </section>

            <!--===== companies =====-->
            <section class="companies section" id="companies">
                <h2 class="section-title">companies</h2>

                <div class="companies__container bd-grid">
                    <div class="companies__img">
                        <img src="assets/img/google.jpg" alt="">

                        <div class="companies__link">
                            <a href="#" class="companies__link-name">View details</a>
                        </div>
                    </div>
                    <div class="companies__img">
                        <img src="assets/img/apple.jpg" alt="">

                        <div class="companies__link">
                            <a href="#" class="companies__link-name">View details</a>
                        </div>
                    </div>
                    <div class="companies__img">
                        <img src="assets/img/tesla.jpg" alt="">

                        <div class="companies__link">
                            <a href="#" class="companies__link-name">View details</a>
                        </div>
                    </div>
                    <div class="companies__img">
                        <img src="assets/img/fortis.jpg" alt="">

                        <div class="companies__link">
                            <a href="#" class="companies__link-name">View details</a>
                        </div>
                    </div>
                    <div class="companies__img">
                        <img src="assets/img/rbi.jpg" alt="">

                        <div class="companies__link">
                            <a href="#" class="companies__link-name">View details</a>
                        </div>
                    </div>
                    <div class="companies__img">
                        <img src="assets/img/jio.jpg" alt="">

                        <div class="companies__link">
                            <a href="#" class="companies__link-name">View details</a>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <div class="contact__info">
                        <h3 class="contact__subtitle">EMAIL</h3>
                        <span class="contact__text">taktewalek@gmail.com</span>

                        <h3 class="contact__subtitle">PHONE</h3>
                        <span class="contact__text">+91 8657435899</span>

                        <h3 class="contact__subtitle">ADRESS</h3>
                        <span class="contact__text">403 A rachana vishwa apt, KT nagar, Nagpur -440013</span>
                    </div>

                    
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer section">
            <div class="footer__container bd-grid">
                <div class="footer__data">
                    <h2 class="footer__title">Employment Website</h2>
                    <p class="footer__text"></p>
                </div>

                <div class="footer__data">
                    <h2 class="footer__title">EXPLORE</h2>
                    <ul>
                        <li><a href="#home" class="footer__link">Home</a></li>
                        <li><a href="#about" class="footer__link">About</a></li>
                        <li><a href="#feilds" class="footer__link">Fields</a></li>
                        <li><a href="#companies" class="footer__link"></a></li>
                        <li><a href="#Contact" class="footer__link">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer__data">
                    <h2 class="footer__title">FOLLOW</h2>
                    <a href="https://www.facebook.com/kritik.taktewale/" class="footer__social"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://www.instagram.com/render_gram/?hl=en" class="footer__social"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://twitter.com/TaktewaleKritik" class="footer__social"><i class='bx bxl-twitter' ></i></a>
                </div>


            </div>
        </footer>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>