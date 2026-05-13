
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saiqa Allahdita Jarid | Full Stack Web Developer</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    scroll-behavior:smooth;
}

body{
    font-family:'Poppins',sans-serif;
    background:#0f172a;
    color:#ffffff;
    overflow-x:hidden;
}

/* =========================
   Navbar
========================= */

.custom-navbar{
    background:rgba(15,23,42,0.9);
    backdrop-filter:blur(10px);
    padding:15px 0;
    transition:0.4s;
    box-shadow:0 4px 20px rgba(0,0,0,0.2);
}

.logo{
    font-size:28px;
    font-weight:700;
    color:#38bdf8 !important;
    letter-spacing:1px;
}

.navbar-nav .nav-link{
    color:#e2e8f0 !important;
    margin-left:20px;
    font-weight:500;
    position:relative;
    transition:0.3s;
}

.navbar-nav .nav-link:hover{
    color:#38bdf8 !important;
}

.navbar-nav .nav-link::after{
    content:'';
    position:absolute;
    width:0;
    height:2px;
    background:#38bdf8;
    left:0;
    bottom:-5px;
    transition:0.3s;
}

.navbar-nav .nav-link:hover::after{
    width:100%;
}

/* =========================
   Hero Section
========================= */

.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    padding-top:100px;
    background:
    radial-gradient(circle at top left,#1e293b,#0f172a 60%);
}

.hero-text h4{
    color:#38bdf8;
    font-size:24px;
    margin-bottom:10px;
}

.hero-text h1{
    font-size:60px;
    font-weight:800;
    line-height:1.2;
    margin-bottom:15px;
    color:#ffffff;
}

.hero-text h2{
    font-size:32px;
    font-weight:600;
    color:#cbd5e1;
    margin-bottom:20px;
}

.hero-text p{
    color:#94a3b8;
    line-height:1.8;
    font-size:17px;
    max-width:600px;
}

.hero-buttons{
    margin-top:30px;
}

.custom-btn{
    background:#38bdf8 !important;
    color:#fff !important;
    border:none !important;
    padding:14px 32px !important;
    border-radius:50px !important;
    font-weight:600 !important;
    transition:0.4s !important;
    margin-right:15px;
}

.custom-btn:hover{
    transform:translateY(-4px);
    box-shadow:0 10px 30px rgba(56,189,248,0.4);
}

.custom-outline{
    border:2px solid #38bdf8 !important;
    color:#38bdf8 !important;
    padding:14px 32px !important;
    border-radius:50px !important;
    font-weight:600 !important;
    transition:0.4s !important;
}

.custom-outline:hover{
    background:#38bdf8 !important;
    color:#fff !important;
}

/* =========================
   Social Icons
========================= */

.social-icons{
    margin-top:35px;
}

.social-icons a{
    width:45px;
    height:45px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    background:#1e293b;
    color:#38bdf8;
    margin-right:12px;
    font-size:18px;
    transition:0.4s;
    text-decoration:none;
}

.social-icons a:hover{
    background:#38bdf8;
    color:#fff;
    transform:translateY(-5px);
}

/* =========================
   Profile Image
========================= */

.profile-box{
    position:relative;
}

.profile-box img{
    width:100%;
    max-width:420px;
    border-radius:30px;
    border:5px solid rgba(255,255,255,0.08);
    box-shadow:0 20px 50px rgba(0,0,0,0.5);
}

/* =========================
   Sections
========================= */

.section-padding{
    padding:100px 0;
}

.section-title{
    text-align:center;
    margin-bottom:60px;
}

.section-title h2{
    font-size:42px;
    font-weight:700;
    color:#38bdf8;
    position:relative;
    display:inline-block;
}

.section-title h2::after{
    content:'';
    width:70px;
    height:4px;
    background:#38bdf8;
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    bottom:-12px;
    border-radius:10px;
}

/* =========================
   About
========================= */

.about{
    background:#111827;
}

.about-img{
    width:100%;
    border-radius:25px;
    box-shadow:0 15px 40px rgba(0,0,0,0.4);
}

.about-content h3{
    font-size:36px;
    margin-bottom:20px;
    color:#fff;
}

.about-content p{
    color:#94a3b8;
    line-height:1.9;
    font-size:16px;
}

.info-box{
    margin-top:30px;
}

.info-box strong{
    color:#38bdf8;
    font-size:18px;
}

.info-box p{
    margin-bottom:15px;
    color:#e2e8f0;
}

/* =========================
   Skills
========================= */

.skills{
    background:#0f172a;
}

.skill-card{
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.08);
    padding:40px 25px;
    border-radius:25px;
    text-align:center;
    transition:0.4s;
    backdrop-filter:blur(10px);
}

.skill-card:hover{
    transform:translateY(-10px);
    border-color:#38bdf8;
    box-shadow:0 20px 40px rgba(0,0,0,0.3);
}

.skill-card i{
    font-size:55px;
    margin-bottom:20px;
    color:#38bdf8;
}

.skill-card h4{
    color:#fff;
    font-weight:600;
}

/* =========================
   Projects
========================= */

.projects{
    background:#111827;
}

.project-card{
    background:#1e293b;
    border-radius:25px;
    overflow:hidden;
    transition:0.4s;
    height:100%;
}

.project-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,0.4);
}

.project-card img{
    width:100%;
    height:250px;
    object-fit:cover;
}

.project-content{
    padding:30px;
}

.project-content h3{
    color:#fff;
    margin-bottom:15px;
    font-size:28px;
}

.project-content p{
    color:#94a3b8;
    line-height:1.8;
}

.tags{
    margin-top:20px;
}

.tags span{
    display:inline-block;
    background:#38bdf8;
    color:#fff;
    padding:8px 16px;
    border-radius:30px;
    font-size:14px;
    margin:5px;
}

/* =========================
   Contact
========================= */

.contact{
    background:#0f172a;
}

.contact-form{
    background:#1e293b;
    padding:50px;
    border-radius:30px;
}

.form-control{
    background:#0f172a !important;
    border:none !important;
    padding:15px !important;
    color:#fff !important;
    border-radius:15px !important;
}

.form-control::placeholder{
    color:#94a3b8 !important;
}

.form-control:focus{
    box-shadow:none !important;
    border:1px solid #38bdf8 !important;
}

/* =========================
   Footer
========================= */

footer{
    background:#020617;
    padding:25px 0;
}

footer p{
    color:#94a3b8;
    margin:0;
}

/* =========================
   WhatsApp Floating
========================= */

.whatsapp-float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:30px;
    right:30px;
    background:#25D366;
    color:#fff;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:30px;
    text-decoration:none;
    z-index:999;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
    transition:0.4s;
}

.whatsapp-float:hover{
    transform:scale(1.1);
    color:#fff;
}

/* =========================
   Responsive
========================= */

@media(max-width:991px){

    .hero{
        text-align:center;
        padding-top:140px;
    }

    .hero-text h1{
        font-size:42px;
    }

    .hero-text h2{
        font-size:24px;
    }

    .profile-box{
        margin-top:50px;
    }

    .about-content{
        margin-top:40px;
    }

    .contact-form{
        padding:30px;
    }
}

@media(max-width:576px){

    .hero-text h1{
        font-size:34px;
    }

    .section-title h2{
        font-size:32px;
    }

    .custom-btn,
    .custom-outline{
        width:100%;
        margin-bottom:15px;
    }

    .social-icons a{
        margin-bottom:10px;
    }
}
</style>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand logo" href="#">Webs By Saiqa</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 hero-text">
                    <h4>Hello, I'm</h4>
                    <h1>Saiqa Allahdita Jarid</h1>
                    <h2><span class="typing"></span></h2>

                    <p>
                        Passionate Full Stack Web Developer creating modern,
                        responsive and high-performance websites with beautiful UI/UX.
                    </p>

                    <div class="hero-buttons">
                        <a href="#contact" class="btn custom-btn">Hire Me</a>
                        <a href="cv/SAIQA.cv.pdf" download="SAIQA.cv.pdf" class="btn custom-outline">
   Download CV
</a>
                    </div>

                    <div class="social-icons">
                        <a href="https://github.com/saiqa-jarid" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <div class="profile-box">
                        <img src="image/425fc1d2-1aff-4318-878d-71007fad8041.png" alt="profile">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- About -->
    <section class="about section-padding" id="about">
        <div class="container">
            <div class="section-title">
                <h2>About Me</h2>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="image/unnamed.png" class="about-img" alt="">
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <h3>Professional Full Stack Web Developer</h3>

                        <p>
                            I specialize in creating modern websites, responsive interfaces,
                            admin dashboards, dynamic web applications and database-driven systems.
                            I use HTML, CSS, JavaScript, Bootstrap, PHP, Laravel and MySQL
                            to build high quality projects.
                        </p>

                        <div class="info-box">
                            <div>
                                <strong>Email:</strong>
                                <p>saiqajarid@gmail.com</p>
                            </div>

                            <div>
                                <strong>Phone:</strong>
                                <p>03450836478</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Skills -->
    <section class="skills section-padding" id="skills">
        <div class="container">

            <div class="section-title">
                <h2>My Skills</h2>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="skill-card">
                        <i class="fab fa-html5"></i>
                        <h4>HTML5</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card">
                        <i class="fab fa-css3-alt"></i>
                        <h4>CSS3</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card">
                        <i class="fab fa-js"></i>
                        <h4>JavaScript</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card">
                        <i class="fab fa-bootstrap"></i>
                        <h4>Bootstrap</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card">
                        <i class="fab fa-php"></i>
                        <h4>PHP</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card">
                        <i class="fas fa-database"></i>
                        <h4>MySQL</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Projects -->
    <section class="projects section-padding" id="projects">
        <div class="container">

            <div class="section-title">
                <h2>Projects</h2>
            </div>

            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1200" alt="">

                        <div class="project-content">
                            <h3>Merciado Amusement Park Website</h3>

                            <p>
                                Modern amusement park website with attractive landing pages,
                                ticket system and responsive UI.
                            </p>

                            <div class="tags">
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>Bootstrap</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?q=80&w=1200" alt="">

                        <div class="project-content">
                            <h3>Health Care Management Web</h3>

                            <p>
                                Advanced healthcare management system with dashboard,
                                appointments and database integration.
                            </p>

                            <div class="tags">
                                <span>Laravel</span>
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>Bootstrap</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Contact -->
    <section class="contact section-padding" id="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact Me</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                 <form class="contact-form" action="contact.php" method="POST">

    <div class="row">

        <div class="col-md-6 mb-4">
            <input type="text"
                   class="form-control"
                   name="name"
                   placeholder="Your Name"
                   required>
        </div>

        <div class="col-md-6 mb-4">
            <input type="email"
                   class="form-control"
                   name="email"
                   placeholder="Your Email"
                   required>
        </div>

    </div>

    <textarea class="form-control mb-4"
              rows="6"
              name="message"
              placeholder="Your Message"
              required></textarea>

    <button type="submit" class="btn custom-btn">
        Send Message
    </button>

</form>
                </div>
            </div>

        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>
                © 2026 Saiqa Allahdita Jarid | Full Stack Web Developer
            </p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script src="script.js"></script>
    <a href="https://wa.me/923450836478"
   class="whatsapp-float"
   target="_blank">

   <i class="fab fa-whatsapp"></i>

</a>
</body>
</html>


