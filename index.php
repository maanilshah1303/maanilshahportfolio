<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - iPortfolio Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  
</head>

<body class="index-page">

  <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
    <div style="background:#e6ffe6; color:#218838; border:1px solid #b2f2b2; padding:15px; margin:20px auto; max-width:600px; border-radius:6px; font-size:1.1em; text-align:center;">
      Thank you for contacting Maanil Shah, you will be receiving an email from the team very soon.
    </div>
  <?php endif; ?>
  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="assets/img/profile-img.jpeg" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Maanil Shah</h1>
    </a>

    <div class="social-links text-center">
      <a href="https://www.facebook.com/share/1B44TcTkCk/" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/maanil_shah/" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="http://www.linkedin.com/in/maanilshah" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        <li><a href="#testimonials"><i class="bi bi-hdd-stack navicon"></i> Testimonials</a></li>
      
        </li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpeg" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Maanil Shah</h2>
        <p>I'm <span class="typed" data-typed-items="A Computer Engineering Student, An Event Manager, An Host & Anchor, An Actor">An Actor</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>"A tech enthusiast with an academic background in engineering, combined with a 
          strong passion for entrepreneurship and public speaking. Experienced in leading 
          events, building creative initiatives, and continuously striving to grow across 
          diverse fields."
You</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/profile-img.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Event Manager, Web Developer &amp; Anchor.</h2>
            <p class="fst-italic py-3">
              I am Maanil Shah, a budding web developer, professional anchor, and event manager, 
              passionate about creating seamless digital experiences and unforgettable live events.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>13 March 2006</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91 8347435834</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Ahmedabad, Gujarat</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelors Pursuing</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>maanilshah21@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              I am Maanil Shah, a passionate web developer, professional anchor, and event 
              manager, constantly exploring opportunities to grow and contribute my skills. 
              With a keen eye for design and functionality in web development, strong 
              communication and stage presence as an anchor, and hands-on experience in 
              planning and managing events, I strive to deliver impactful results. 
              I am seeking opportunities where I can learn, collaborate, and create value 
              while enhancing my expertise across these diverse fields.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> <span>Across Gujarat</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Events & Projects</strong> <span>Across Ahmedabad</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> <span>and time</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> <span>as family</span></p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>"Below is a graphical representation of my core skills, highlighting my 
          strengths and areas of expertise. These ratings reflect my practical experience 
          and continuous learning across different domains."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Event Manager</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>WordPress/CMS</span> <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>"A glimpse of my journey, showcasing my experiences, skills, and achievements."</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sumary</h3>

            <div class="resume-item pb-0">
              <h4>Maanil Shah</h4>
              <p><em>"A tech enthusiast with an academic background in engineering, combined 
                with a strong passion for entrepreneurship and public speaking. Experienced 
                in leading events, building creative initiatives, and continuously striving to 
                grow across diverse fields."</em></p>
              <ul>
                <li>Ahmedabad, Gujarat, India</li>
                <li>+91 8347435834</li>
                <li>maanilshah21@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelors in Computer Engineering</h4>
              <h5>Pursuing</h5>
              <p><em>Silver Oak College of Engineering & Technology, Ahmedabad</em></p>
              <p>"Organized, managed, and volunteered at numerous events while holding key 
                positions across various university organizations and cells. These experiences 
                have helped me gain valuable exposure in both technical and non-technical fields."</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Higher Secondary Education</h4>
              <h5>2022 - 2023</h5>
              <p><em>P. Chandra International School, Borsad, Gujarat</em></p>
              <p>Completed 12th Board exam scoring 67%</p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Event Manager</h4>
              <h5>2024 - Present</h5>
              <p><em>Prasang Planners, Ahmedabad,Gujarat</em></p>
              <ul>
                <li>Event Strategy & Planning – Designing and executing impactful events from concept to completion.</li>
                <li>Team Leadership – Leading and coordinating diverse teams to ensure smooth event operations. </li>
                <li>Client & Vendor Management – Building strong relationships and delivering customized experiences.</li>
                <li>Creative Execution – Bringing innovative ideas to life with attention to detail and audience engagement.</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Prompt Engineering Intern</h4>
              <h5>May 2025 - June 2025</h5>
              <p><em>Staytuned LLP, Ahmedabad, Gujarat </em></p>
              <ul>
                <li>Web Development – Contributed to building and enhancing user-friendly web solutions.</li>
                <li>AI Prompt Engineering – Designed and optimized effective prompts for AI-driven applications.</li>
                <li>Problem Solving – Applied logical and creative approaches to improve project outcomes.</li>
                <li>Collaboration – Worked closely with the team to deliver tasks efficiently and meet deadlines.</li>
              </ul>
            </div><!-- Edn Resume Item -->

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>"A showcase of my work, highlighting projects, events, and experiences that reflect 
          my skills, creativity, and journey of growth."</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Coorporate</li>
            <li data-filter=".filter-product">Cultural</li>
            <li data-filter=".filter-branding">Parties</li>
            <li data-filter=".filter-books">Fest's</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/anc2.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Coorporate</h4>
                  <p>Corporate Gatherings & AGM's</p>
                  <a href="assets/img/portfolio/anc2.jpeg" title="Cooporate Events" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/anc3.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cultrual 1</h4>
                  <p>Cultural Events</p>
                  <a href="assets/img/portfolio/anc3.jpeg" title="Cultrual Events" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/anc6.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Parties 1</h4>
                  <p>Birthday & Farewell Parties</p>
                  <a href="assets/img/portfolio/anc6.jpeg" title="Birthday Parties" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/anch1.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Fets's</h4>
                  <p>College festivals</p>
                  <a href="assets/img/portfolio/anch1.jpeg" title="College Festivals" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>"Prasang Planners is a one-stop solution for all your event and creative needs. 
          From planning and managing events to delivering exceptional sound, catering, and 
          décor, we ensure every detail is executed flawlessly. Alongside events, we also 
          offer modern solutions like software development, social media management, and 
          professional product photoshoots, blending creativity with innovation. Our mission 
          is to craft experiences and services that leave a lasting impact."</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Event Planning & Management</a></h4>
              <p class="description">Complete end-to-end planning and execution of events to ensure a seamless and memorable experience.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Sound & Catering</a></h4>
              <p class="description">High-quality sound arrangements and customized catering services to match every event’s vibe.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Creative Decor</a></h4>
              <p class="description">Creative and theme-based decoration that transforms venues into stunning experiences.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Tailored Services</a></h4>
              <p class="description">Tailored software solutions, personally developed by Maanil, to meet unique business needs.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Social Media & Content Creation</a></h4>
              <p class="description">Building engaging digital presence with creative strategies and impactful content.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Product Photoshoot</a></h4>
              <p class="description">Professional photography services to showcase products with quality and creativity.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>"Here’s what our clients and collaborators have to say about their experience 
          with Prasang Planners. Their words inspire us to keep delivering memorable events 
          and creative solutions."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"The podcast hosted for SOS Bharat was engaging, professional, and 
                    perfectly aligned with our vision. Maanil’s anchoring skills brought great 
                    energy and clarity to the session."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>

                <h3>Mr. Aum Pandya</h3>
                <h4>Software Devloper</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"The entire celebration was managed beautifully. From planning to execution, everything was seamless and memorable. Truly a wonderful experience!"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                
                <h3>Ms. Mauli Pandya</h3>
                <h4>Student, Indus University</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Prasang Planners made the birthday event special with perfect arrangements and great attention to detail. Everyone loved the vibe and décor."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
               
                <h3>Mrs. Nazneen Jatak Patel</h3>
                <h4>Assistant Professor, Silver Oak University</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Our farewell was a grand success, thanks to the perfect event flow and lively hosting. The students and faculty thoroughly enjoyed it."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                
                <h3>Udgam Science Academy</h3>
                <h4>Professor Milan Patel </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Right from the setup to the hosting, everything exceeded expectations. It was well-organized, fun, and truly memorable."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
               
                <h3>Mr. Ankit Shah</h3>
                <h4>Project Manager, Accenture</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>"Let’s connect! Whether it’s planning your next big event, collaborating on creative projects, or simply sharing ideas, we’d love to hear from you. Reach out to us and let’s make it happen."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Ahmedabad, Gujarat</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+91 8347435834</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>inquiry@prasangplanners.com</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

         <div class="col-lg-7">
  <form action="forms/contact.php" method="post" data-aos="fade-up" data-aos-delay="200">
    <div class="row gy-4">

      <div class="col-md-6">
        <label for="name-field" class="pb-2">Your Name</label>
        <input type="text" name="name" id="name-field" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label for="email-field" class="pb-2">Your Email</label>
        <input type="email" class="form-control" name="email" id="email-field" required>
      </div>

      <div class="col-md-12">
        <label for="subject-field" class="pb-2">Subject</label>
        <input type="text" class="form-control" name="subject" id="subject-field" required>
      </div>

      <div class="col-md-12">
        <label for="message-field" class="pb-2">Message</label>
        <textarea class="form-control" name="message" rows="10" id="message-field" required></textarea>
      </div>

      <div class="col-md-12 text-center">
        <button type="submit" name="submit">Send Message</button>
      </div>

    </div>
  </form>
</div><!-- End Contact Form -->

          </div>
          <!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Prasang Planners</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        
        Designed by Maanil Shah, Founder - Prasang Planners, Founding Member - TCC Student Community, Podcast Host - baatein Beyond</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>