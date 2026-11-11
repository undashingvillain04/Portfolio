<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>My Portfolio </title>
  <style href="style.css"></style>
  <meta name="title" content="Mark Joshua Pura Baja | Frontend Developer & UI/UX Designer">
  <meta name="description" content="Portfolio of Mark Joshua Pura Baja. IT Graduate specializing in responsive web applications, modern UI/UX design, and full-stack system architecture using PHP, Bootstrap, and JavaScript.">
  <meta name="keywords" content="Mark Joshua Pura Baja, Frontend Developer Cavite, UI UX Designer Philippines, Full Stack Developer, Web Developer Portfolio">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Mark Joshua Pura Baja">

  <!-- Open Graph / Facebook / LinkedIn (Para sa magandang link preview) -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://yourdomain.com/">
  <meta property="og:title" content="Mark Joshua Pura Baja | Frontend Developer & UI/UX Designer">
  <meta property="og:description" content="Crafting responsive web platforms, AI-integrated systems, and modern UI/UX interfaces. Check out my featured projects and case studies.">
  <meta property="og:image" content="https://yourdomain.com/portfolio.jpg">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
  <!-- Canonical Link -->
  <link rel="canonical" href="https://yourdomain.com/">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Google Fonts (Inter) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <!-- AOS (Animate On Scroll) CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
:root {
  --bg-dark: #0a0a0a;
  --card-bg: rgba(20, 20, 20, 0.75);
  --border-color: rgba(255, 255, 255, 0.1);
  --accent-gray-light: #e5e5e5;
  --accent-gray-mid: #a3a3a3;
  --accent-gray-dark: #404040;
  --accent-glow: rgba(255, 255, 255, 0.15);
}

/* 1. Global Reset to Prevent Any Horizontal Scrolling / Extra White Space */
*, *::before, *::after {
  box-sizing: border-box !important;
  max-width: 100%;
}

html, body {
  width: 100% !important;
  max-width: 100% !important;
  overflow-x: hidden !important;
  margin: 0 !important;
  padding: 0 !important;
  scroll-behavior: smooth;
  font-family: 'Inter', sans-serif;
  background-color: var(--bg-dark);
  color: #e5e5e5;
  position: relative;
}

/* Offset body padding for fixed header across all devices */
body {
  padding-top: 76px !important;
}

/* 2. Fix Sticky/Fixed Header across All Screen Sizes (Mobile, Tablet, Desktop) */
.custom-nav {
  position: fixed !important;
  top: 0 !important;
  left: 0 !important;
  right: 0 !important;
  width: 100% !important;
  z-index: 1050 !important;
  background-color: rgba(10, 10, 10, 0.9) !important;
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border-bottom: 1px solid var(--border-color);
}

/* Fix Bootstrap Row Negative Margins causing mobile horizontal space */
.row {
  margin-left: 0 !important;
  margin-right: 0 !important;
  width: 100% !important;
}

.container, .container-fluid {
  padding-left: 15px !important;
  padding-right: 15px !important;
  overflow: hidden;
}

/* Media, Links & Text Word Break Fixes */
img, iframe, svg {
  max-width: 100% !important;
  height: auto;
}

p, h1, h2, h3, h4, h5, h6, a, span {
  overflow-wrap: break-word !important;
  word-break: break-word !important;
}

/* Background Glow Effect */
body::before {
  content: '';
  position: fixed;
  top: -10%;
  left: 50%;
  transform: translateX(-50%);
  width: 100%;
  max-width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(255, 255, 255, 0.05) 0%, rgba(0,0,0,0) 70%);
  z-index: -1;
  pointer-events: none;
}

.text-gradient {
  background: linear-gradient(135deg, #ffffff 0%, #a3a3a3 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.hero-section {
  min-height: calc(85vh - 76px);
  position: relative;
}

/* Profile Image Frame */
.avatar-glow-wrapper {
  position: relative;
  width: 240px;
  height: 240px;
  max-width: 100%;
  margin: 0 auto;
  border-radius: 50%;
  padding: 4px;
  background: linear-gradient(135deg, #ffffff, #525252);
  box-shadow: 0 0 35px var(--accent-glow);
}

.avatar-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  background-color: #171717;
}

/* Cyber Glass Cards */
.card-glass {
  background: var(--card-bg);
  border: 1px solid var(--border-color);
  backdrop-filter: blur(12px);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.card-glass:hover {
  transform: translateY(-6px);
  border-color: rgba(255, 255, 255, 0.4);
  background: rgba(30, 30, 30, 0.85);
  box-shadow: 0 12px 30px -10px rgba(0, 0, 0, 0.9), 0 0 20px rgba(255, 255, 255, 0.1);
}

/* Monochrome Badges */
.badge-tech {
  background: rgba(255, 255, 255, 0.05);
  color: var(--accent-gray-light);
  border: 1px solid rgba(255, 255, 255, 0.15);
  font-weight: 500;
  letter-spacing: 0.5px;
  transition: all 0.2s ease;
  white-space: normal;
  text-align: center;
}

.badge-tech:hover {
  background: rgba(255, 255, 255, 0.15);
  color: #fff;
  border-color: rgba(255, 255, 255, 0.4);
}

/* Form Inputs */
.form-dark-control {
  background-color: rgba(20, 20, 20, 0.9) !important;
  border: 1px solid var(--border-color) !important;
  color: #fff !important;
}

.form-dark-control:focus {
  border-color: var(--accent-gray-light) !important;
  box-shadow: 0 0 12px rgba(255, 255, 255, 0.2) !important;
}

/* Buttons */
.btn-cyber {
  background: linear-gradient(135deg, #ffffff 0%, #d4d4d4 100%);
  color: #000;
  font-weight: 600;
  border: none;
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.15);
  transition: all 0.3s ease;
}

.btn-cyber:hover {
  background: linear-gradient(135deg, #a3a3a3 0%, #737373 100%);
  color: #fff;
  box-shadow: 0 0 30px rgba(255, 255, 255, 0.25);
  transform: translateY(-2px);
}

.contact-box-icon {
  width: 48px;
  height: 48px;
  flex-shrink: 0;
  border-radius: 12px;
  background: rgba(255, 255, 255, 0.08);
  color: var(--accent-gray-light);
  border: 1px solid rgba(255, 255, 255, 0.15);
}

.hover-white:hover {
  color: #ffffff !important;
}

@media (max-width: 991.98px) {
  .hero-section {
    min-height: auto;
    padding-top: 1.5rem;
    padding-bottom: 2rem;
  }
  
  /* Modern Navbar Dropdown Menu */
  .navbar-collapse {
    background: rgba(15, 15, 15, 0.98);
    border: 1px solid var(--border-color);
    border-radius: 1rem;
    padding: 1.25rem;
    margin-top: 0.75rem;
  }
}

@media (max-width: 767.98px) {
  h1.display-3 {
    font-size: 2.2rem !important;
  }
  .avatar-glow-wrapper {
    width: 200px;
    height: 200px;
  }
}

@media (max-width: 575.98px) {
  h1.display-3 {
    font-size: 1.75rem !important;
  }
  
  .avatar-glow-wrapper {
    width: 160px;
    height: 160px;
  }

  .btn-cyber, 
  .btn-outline-light {
    width: 100%;
    text-align: center;
  }
}

.spinner-green {
  color: #10b981 !important;
}
.kanji-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: #111111;
    color: #ffffff;
    font-size: 20px;
}
/* Thumbnail Styling for GAD Modal */
.gad-thumb {
  height: 70px;
  width: 100%;
  object-fit: cover;
  cursor: pointer;
  background-color: #000;
  border: 2px solid rgba(255, 255, 255, 0.15) !important;
  opacity: 0.6;
  transition: all 0.2s ease-in-out;
  border-radius: 8px;
}

.gad-thumb:hover, .gad-thumb.active {
  opacity: 1;
  border-color: #0dcaf0 !important; /* Bootstrap Info Color */
  transform: scale(1.03);
}

.hover-opacity-100 {
  transition: opacity 0.3s ease;
}
.position-relative:hover .hover-opacity-100 {
  opacity: 1 !important;
}
/* Para mawala ang scroll sa loob ng GAD Modal kung sakaling sapat ang screen height */
#gadGalleryModal .modal-body {
  max-height: calc(85vh - 120px);y
}
/* Carousel - Fitted Image */

#gadCarousel {
    width: 100%;
    background: transparent;
    overflow: hidden;
    border-radius: 10px;
}

#gadCarousel .carousel-inner {
    width: 100%;
    height: auto;
}

#gadCarousel .carousel-item {
    height: auto;
    text-align: center;
}

#gadCarousel .carousel-item img {
    display: block;
    width: 100%;
    height: auto;
    max-height: 65vh;
    object-fit: contain;
    margin: 0 auto;
}

/* Indicators */

#gadCarousel .carousel-indicators {
    bottom: 12px;
    margin-bottom: 0;
}

#gadCarousel .carousel-indicators button {
    width: 30px;
    height: 4px;
    margin: 0 3px;
    border: 0;
    border-radius: 0;
}

/* Navigation */

#gadCarousel .carousel-control-prev,
#gadCarousel .carousel-control-next {
    width: 10%;
    opacity: 0.8;
}

#gadCarousel .carousel-control-prev:hover,
#gadCarousel .carousel-control-next:hover {
    opacity: 1;
}

/* Information Container */

.gad-slide-info {
    position: relative;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.10);
    border-radius: 12px;
    margin-top: 20px;
    padding: 22px;
}

.gad-info-icon {
    width: 42px;
    height: 42px;
    min-width: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(123, 44, 191, 0.15);
    color: #fff;
    border-radius: 10px;
    font-size: 20px;
}

#gadSlideTitle {
    font-size: 16px;
    color: #fff;
}

#gadSlideDescription {
    font-size: 13px;
    line-height: 1.7;
    overflow-wrap: break-word;
}

/* Footer */

#gadGalleryModal .modal-footer {
    background: rgba(15, 15, 15, 0.98);
}

/* Mobile */

@media (max-width: 768px) {

    #gadCarousel .carousel-item img {
        width: 100%;
        height: auto;
        max-height: 42vh;
        object-fit: contain;
    }

    .gad-slide-info {
        margin-top: 12px;
        padding: 14px;
    }

}
  </style>
</head>
<body>

  <!-- Fixed Sticky Header across all screen sizes -->
  <nav class="navbar navbar-expand-lg navbar-dark custom-nav py-3">
    <div class="container">
      <a class="navbar-brand fw-bold text-gradient fs-4 d-flex align-items-center gap-2" href="#">
        <span class="bi bi-envelope me-2">
        </span>
        <span>My Portfolio</span>
      </a>
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-lg-center text-center text-lg-start gap-3 mt-3 mt-lg-0">
          <li class="nav-item"><a class="nav-link px-2" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link px-2" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link px-2" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link px-2" href="#contact">Contact</a></li>
          <li class="nav-item ms-lg-2">
            <a href="Mark_Joshua_Baja_IT_Resume.pdf" target="_blank" class="btn btn-outline-light btn-sm px-4 py-2 rounded-pill w-100">
              <i class="bi bi-file-earmark-arrow-down me-1"></i> Download Resume
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section d-flex align-items-center py-5">
    <div class="container py-4">
      <div class="row align-items-center gy-5">
        <div class="col-lg-5 text-center" data-aos="zoom-in" data-aos-duration="1000">
  <div class="avatar-orbit-container">
    
    <!-- Rotating Ring & Tech Logos -->
    <div class="orbit-ring">
      <div class="orbit-icon" title="PHP"><i class="bi bi-code-slash text-primary"></i></div>
      <div class="orbit-icon" title="JavaScript"><i class="bi bi-filetype-js text-warning"></i></div>
      <div class="orbit-icon" title="Bootstrap 5"><i class="bi bi-bootstrap-fill text-purple" style="color: #8b5cf6;"></i></div>
      <div class="orbit-icon" title="Database / MySQL"><i class="bi bi-database-fill text-info"></i></div>
      <div class="orbit-icon" title="HTML5 & CSS3"><i class="bi bi-filetype-html text-danger"></i></div>
      <div class="orbit-icon" title="Figma UI/UX">
        <img src="https://cdn.simpleicons.org/figma" alt="Figma" style="width: 18px; height: 18px;">
      </div>
    </div>

    <!-- Main Profile Avatar -->
    <div class="avatar-glow-wrapper m-0">
      <img src="portfolio.jpg" alt="Mark Joshua Baja" class="avatar-img" onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=500&q=80'">
    </div>

  </div>
</div>
        <div class="col-lg-7 text-center text-lg-start" data-aos="fade-left" data-aos-duration="1000">
          <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-dark border border-secondary border-opacity-50 mb-3">
            <span class="spinner-grow spinner-grow-sm spinner-green" role="status"></span>
            <span class="small text-light fw-medium">Available for Hiring & Work</span>
          </div>
          <h1 class="display-3 fw-extrabold mb-3 text-white">
            Hi, I'm <br><span class="text-gradient">Mark Joshua Pura Baja</span>
          </h1>
          <h3 class="h4 text-secondary fw-normal mb-4">Web Developer | Front-End Developer | UI/UX Design</h3>
          <p class="lead text-secondary mb-4 fs-6 pe-lg-5">
            Crafting responsive, full-stack web platforms and database-driven administration systems with clean architecture and modern UX design.
          </p>
          <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-3">
            <a href="#projects" class="btn btn-cyber btn-lg px-4 rounded-3">
              <i class="bi bi-rocket-takeoff me-2"></i>View Projects
            </a>
            <a href="#contact" class="btn btn-outline-light btn-lg px-4 rounded-3">
              <i class="bi bi-envelope me-2"></i>Hire Me
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5">
    <div class="container py-4">
      <div class="row align-items-center gy-4">
        
        <!-- Left Column -->
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
          <h2 class="fw-bold mb-3 text-white">About Me</h2>
          <p class="text-secondary leading-relaxed fs-6 mb-4">
            An Information Technology graduate passionate about crafting seamless digital experiences at the intersection of design and code.
          </p>

          <div class="d-flex flex-column gap-3">
            <!-- Feature 1 -->
            <div class="p-3 rounded-3 border border-secondary border-opacity-25 bg-dark bg-opacity-50 d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="100">
              <div class="p-2 rounded-2 bg-info bg-opacity-10 text-info">
                <i class="bi bi-palette-fill fs-5"></i>
              </div>
              <div>
                <h6 class="fw-bold text-white mb-1">Front-End & UI/UX</h6>
                <p class="text-secondary mb-0 fs-6">Driven to design and build responsive, intuitive, and modern web interfaces.</p>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="p-3 rounded-3 border border-secondary border-opacity-25 bg-dark bg-opacity-50 d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="200">
              <div class="p-2 rounded-2 bg-primary bg-opacity-10 text-primary">
                <i class="bi bi-cpu-fill fs-5"></i>
              </div>
              <div>
                <h6 class="fw-bold text-white mb-1">Full-Stack & System Logic</h6>
                <p class="text-secondary mb-0 fs-6">Backed by hands-on experience in back-end development, database management, and software system evaluation.</p>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="p-3 rounded-3 border border-secondary border-opacity-25 bg-dark bg-opacity-50 d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="300">
              <div class="p-2 rounded-2 bg-warning bg-opacity-10 text-warning">
                <i class="bi bi-rocket-takeoff-fill fs-5"></i>
              </div>
              <div>
                <h6 class="fw-bold text-white mb-1">Continuous Growth</h6>
                <p class="text-secondary mb-0 fs-6">Eager to refine UI/UX design practices, learn modern front-end frameworks, and contribute to impactful tech projects.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
          <div class="card card-glass p-4 rounded-4">
            <h5 class="fw-bold mb-3 text-white d-flex align-items-center gap-2">
              <i class="bi bi-person-badge"></i> Quick Overview
            </h5>
  
            <ul class="list-unstyled mb-0 text-secondary lh-lg fs-6">
              <li><strong class="text-white">Degree:</strong> Bachelor of Science in Information Technology</li>
              <li><strong class="text-white">Institution:</strong> Cavite State University - General Trias Campus</li>
              <li><strong class="text-white">Location:</strong> General Trias, Cavite, Philippines</li>
              <li><strong class="text-white">Target Roles:</strong> Web Developer, Front-End Developer, UI/UX Design</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="py-5">
    <div class="container py-4">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold text-white">Technical Stack</h2>
        <p class="text-secondary">Technologies and frameworks I utilize in production</p>
      </div>
      <div class="row g-4">
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card card-glass h-100 p-4 rounded-4">
            <div class="contact-box-icon d-flex align-items-center justify-content-center mb-3">
              <i class="bi bi-code-slash fs-4"></i>
            </div>
            <h5 class="fw-bold text-white mb-3">Front-End Development</h5>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge badge-tech px-3 py-2 rounded-pill">HTML5</span>
              <span class="badge badge-tech px-3 py-2 rounded-pill">CSS3</span>
              <span class="badge badge-tech px-3 py-2 rounded-pill">JavaScript</span>
              <span class="badge badge-tech px-3 py-2 rounded-pill">Bootstrap 5</span>
              <span class="badge badge-tech px-3 py-2 rounded-pill">Responsive Design</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card card-glass h-100 p-4 rounded-4">
            <div class="contact-box-icon d-flex align-items-center justify-content-center mb-3">
              <i class="bi bi-database fs-4"></i>
            </div>
            <h5 class="fw-bold text-white mb-3">Backend & Database</h5>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge badge-tech px-3 py-2 rounded-pill">PHP</span>
              <span class="badge badge-tech px-3 py-2 rounded-pill">MySQL</span>
              <span class="badge badge-tech px-3 py-2 rounded-pill">REST APIs</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <div class="card card-glass h-100 p-4 rounded-4">
            <div class="contact-box-icon d-flex align-items-center justify-content-center mb-3">
              <i class="bi bi-cpu fs-4"></i>
            </div>
            <h5 class="fw-bold text-white mb-3">Workflow & Tools</h5>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge badge-tech px-3 py-2 rounded-pill">Virtual Studio Code</span>
              <span class="badge badge-tech px-3 py-2 rounded-pill">XAMPP</span>
              <span class="badge badge-tech px-3 py-2 rounded-pill">Figma (UI/UX)</span>
              <span class="badge badge-tech px-3 py-2 rounded-pill">ChatGPT & Gemini AI</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Projects Section (Enhanced & Creative Overhaul) -->
  <section id="projects" class="py-5">
    <div class="container py-4">
      
      <!-- Section Header -->
      <div class="text-center mb-5" data-aos="fade-up">
        <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-dark border border-secondary border-opacity-50 mb-2">
          <i class="bi bi-code-square text-info"></i>
          <span class="small text-secondary font-monospace">system.getFeaturedProjects()</span>
        </div>
        <h2 class="fw-bold text-white">Impact-Driven Projects</h2>
        <p class="text-secondary max-w-xl mx-auto">Real-world solutions, UI/UX case studies, and modern web applications built for scale.</p>
      </div>

      <!-- Witty Developer Console Easter Egg / Banner -->
      <div class="card card-glass mb-5 rounded-4 border-info border-opacity-25 overflow-hidden" data-aos="fade-up">
        <div class="card-header bg-dark bg-opacity-75 border-bottom border-secondary border-opacity-25 d-flex align-items-center justify-content-between px-3 py-2">
          <div class="d-flex align-items-center gap-2">
            <span class="rounded-circle bg-danger d-inline-block" style="width: 10px; height: 10px;"></span>
            <span class="rounded-circle bg-warning d-inline-block" style="width: 10px; height: 10px;"></span>
            <span class="rounded-circle bg-success d-inline-block" style="width: 10px; height: 10px;"></span>
            <span class="small text-secondary font-monospace ms-2">tenro_terminal.sh</span>
          </div>
          <span class="badge bg-info bg-opacity-10 text-info font-monospace small">LIVE STATUS</span>
        </div>
        <div class="card-body font-monospace p-3 small">
          <p class="text-success mb-1">✓ Status: Ready to engineer scalable systems for your team.</p>
          <p class="text-secondary mb-1">&gt; Current Focus: High-conversion UI/UX + AI API Integrations + Clean Code.</p>
          <p class="text-warning mb-0">&gt; Quote: "Bugs are just features asking for a code review." ☕</p>
        </div>
      </div>

      <!-- Projects Grid -->
      <div class="row g-4">

        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="100">
          <div class="card card-glass h-100 rounded-4 overflow-hidden d-flex flex-column border-0">
            <!-- Standardized Image Header Preview -->
            <div class="position-relative overflow-hidden border-bottom border-secondary border-opacity-25"
              style="height: auto; background: #000;">

              <img src="gad.jpg"
               alt="Gender and Development E-Learning System Homepage"
               loading="lazy"
               style="width: 100%; height: 100%; object-fit: cover; object-position: center;">

              <span class="position-absolute top-0 end-0 m-3 badge bg-info bg-opacity-90 backdrop-blur font-monospace">
                Defended & Completed
              </span>
            </div>

            <!-- Consistent Card Content Structure -->
            <div class="card-body d-flex flex-column p-4">
              <h5 class="fw-bold text-white mb-2">Gender and Development E-Learning System</h5>
              <p class="text-info small fw-semibold mb-3">Cavite State University - General Trias Campus</p>

              <!-- Problem & Impact Case Study Breakdown -->
              <div class="bg-dark bg-opacity-50 p-3 rounded-3 mb-3 border border-secondary border-opacity-10 small text-secondary">
                <p class="mb-2"><strong class="text-light">🎯 Problem:</strong> Lack of online appointment booking, low student awareness on gender-based topics, and inefficient GAD announcement channels.</p>
                <p class="mb-0"><strong class="text-light">🚀 Impact:</strong> Centralized appointment scheduling, interactive educational learning modules, and a direct bulletin system for GAD office updates.</p>
              </div>

              <div class="mb-3 mt-auto">
                <span class="badge badge-tech me-1 mb-1">HTML5</span>
                <span class="badge badge-tech me-1 mb-1">PHP</span>
                <span class="badge badge-tech me-1 mb-1">CSS3</span>
                <span class="badge badge-tech me-1 mb-1">MySQL</span>
                <span class="badge badge-tech me-1 mb-1">Bootstrap 5</span>
                <span class="badge badge-tech me-1 mb-1">JavaScript</span>
                <span class="badge badge-tech me-1 mb-1">REST API</span>
              </div>

              <div class="pt-2">
                <button class="btn btn-cyber w-100 py-2 rounded-3" data-bs-toggle="modal" data-bs-target="#gadGalleryModal">
                  <i class="bi bi-images me-1"></i> View Project Screenshots
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 1: NU-Know-It-All AI & PAUTOS -->
        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="100">
          <div class="card card-glass h-100 rounded-4 overflow-hidden d-flex flex-column border-0">
            <div class="position-relative overflow-hidden border-bottom border-secondary border-opacity-25" style="height: 160px; background: #000;">
              <img src="https://api.microlink.io?url=https%3A%2F%2Fwww.figma.com%2Fdesign%2F9kIaipVvAfgIgDG0A6iVUX%2FUntitled%3Fnode-id%3D402-548%26p%3Df%26t%3D3Ld3obbiUe5bAbQU-0&embed=image.url" 
                   alt="NU-Know-It-All & PAUTOS Figma Preview" 
                   style="width: 100%; height: 100%; object-fit: cover;"
                   onerror="this.onerror=null; this.src='https://cdn.simpleicons.org/figma/F24E1E'; this.style.objectFit='contain'; this.style.padding='20px';">
              <span class="position-absolute top-0 end-0 m-3 badge bg-primary bg-opacity-90 backdrop-blur font-monospace">UI/UX Case Study</span>
            </div>

            <div class="card-body d-flex flex-column p-4">
              <h5 class="fw-bold text-white mb-2">NU-Know-It-All & PAUTOS</h5>
              <p class="text-info small fw-semibold mb-3">AI Campus Assistant & Gamified Reward Portal</p>
              
              <!-- Case Study Breakdown -->
              <div class="bg-dark bg-opacity-50 p-3 rounded-3 mb-3 border border-secondary border-opacity-10 small text-secondary">
                <p class="mb-2"><strong class="text-light">🎯 Problem:</strong> High response times for student inquiries & lack of task engagement.</p>
                <p class="mb-0"><strong class="text-light">🚀 Impact:</strong> Designed prompt-driven workflows that cut query navigation friction by an estimated 40%.</p>
              </div>

              <div class="mb-3 mt-auto">
                <span class="badge badge-tech me-1 mb-1">Figma</span>
                <span class="badge badge-tech me-1 mb-1">Design System</span>
                <span class="badge badge-tech me-1 mb-1">AI Prompt Logic</span>
                <span class="badge badge-tech me-1 mb-1">Wireframing</span>
              </div>

              <div class="pt-2">
                <a href="https://www.figma.com/design/9kIaipVvAfgIgDG0A6iVUX/Untitled?node-id=402-548&p=f&t=3Ld3obbiUe5bAbQU-0" target="_blank" class="btn btn-cyber w-100 py-2 rounded-3">
                  <i class="bi bi-figma me-1"></i> Explore Prototype
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 2: SmartVendo+ -->
        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="200">
          <div class="card card-glass h-100 rounded-4 overflow-hidden d-flex flex-column border-0">
            <div class="position-relative overflow-hidden border-bottom border-secondary border-opacity-25" style="height: 160px; background: #000;">
              <img src="https://api.microlink.io?url=https%3A%2F%2Fwww.figma.com%2Fdesign%2F9kIaipVvAfgIgDG0A6iVUX%2FUntitled%3Fnode-id%3D0-1%26p%3Df%26t%3DkxBknQQudICe3tOG-0&embed=image.url" 
                   alt="SmartVendo+ Figma Preview" 
                   style="width: 100%; height: 100%; object-fit: cover;"
                   onerror="this.onerror=null; this.src='https://cdn.simpleicons.org/figma/F24E1E'; this.style.objectFit='contain'; this.style.padding='20px';">
              <span class="position-absolute top-0 end-0 m-3 badge bg-success bg-opacity-90 backdrop-blur font-monospace">FinTech Kiosk</span>
            </div>

            <div class="card-body d-flex flex-column p-4">
              <h5 class="fw-bold text-white mb-2">SmartVendo+</h5>
              <p class="text-info small fw-semibold mb-3">Interactive Touchscreen Vending Ecosystem</p>

              <!-- Case Study Breakdown -->
              <div class="bg-dark bg-opacity-50 p-3 rounded-3 mb-3 border border-secondary border-opacity-10 small text-secondary">
                <p class="mb-2"><strong class="text-light">🎯 Problem:</strong> Traditional vending UI is unintuitive and lacks instant payment feedback.</p>
                <p class="mb-0"><strong class="text-light">🚀 Impact:</strong> Built a 3-step checkout flow featuring dynamic carting and instant QR payment UI.</p>
              </div>

              <div class="mb-3 mt-auto">
                <span class="badge badge-tech me-1 mb-1">Figma</span>
                <span class="badge badge-tech me-1 mb-1">Touchscreen UX</span>
                <span class="badge badge-tech me-1 mb-1">Micro-Interactions</span>
              </div>

              <div class="pt-2">
                <a href="https://www.figma.com/design/9kIaipVvAfgIgDG0A6iVUX/Untitled?node-id=0-1&p=f&t=kxBknQQudICe3tOG-0" target="_blank" class="btn btn-cyber w-100 py-2 rounded-3">
                  <i class="bi bi-figma me-1"></i> Explore Prototype
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-5">
    <div class="container py-4">
      <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
        <div class="col-lg-8">
          <h2 class="fw-bold text-white">Let's Work Together</h2>
          <p class="text-secondary">Have an open position or project? Send me a message!</p>
        </div>
      </div>
      <div class="row g-4 align-items-center">
        
        <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
          <div class="d-flex align-items-center mb-4">
            <div class="contact-box-icon d-flex align-items-center justify-content-center me-3">
              <i class="bi bi-envelope-fill fs-5"></i>
            </div>
            <div class="text-truncate">
              <h6 class="text-white mb-0">Email</h6>
              <a href="mailto:markbaja441@email.com" class="text-secondary small text-decoration-none hover-white text-truncate d-block">markbaja441@email.com</a>
            </div>
          </div>
          <div class="d-flex align-items-center mb-4">
            <div class="contact-box-icon d-flex align-items-center justify-content-center me-3">
              <i class="bi bi-telephone fs-5"></i>
            </div>
            <div class="text-truncate">
              <h6 class="text-white mb-0">Contact Number</h6>
              <a href="tel:09565781504" class="text-secondary small text-decoration-none hover-white text-truncate d-block">0956-578-1504</a>
            </div>
          </div>
          <div class="d-flex align-items-center mb-4">
            <div class="contact-box-icon d-flex align-items-center justify-content-center me-3">
              <i class="bi bi-facebook fs-5"></i>
            </div>
            <div class="text-truncate">
              <h6 class="text-white mb-0">Facebook</h6>
              <a href="https://www.facebook.com/mark.baja.2024/" target="_blank" class="text-secondary small text-decoration-none hover-white text-truncate d-block">Ryo Azuma</a>
            </div>
          </div>
          <div class="d-flex align-items-center mb-4">
            <div class="contact-box-icon d-flex align-items-center justify-content-center me-3">
              <i class="bi bi-geo-alt-fill fs-5"></i>
            </div>
            <div>
              <h6 class="text-white mb-0">Location</h6>
              <p class="text-secondary small mb-0">General Trias, Cavite, Philippines</p>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div class="contact-box-icon d-flex align-items-center justify-content-center me-3">
              <i class="bi bi-linkedin fs-5"></i>
            </div>
            <div class="text-truncate">
              <h6 class="text-white mb-0">LinkedIn</h6>
              <a href="https://www.linkedin.com/in/mark-baja-606293364/" target="_blank" class="text-secondary small text-decoration-none hover-white text-truncate d-block">Mark Baja</a>
            </div>
          </div>
        </div>

        <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1000">
          <form onsubmit="event.preventDefault(); alert('Message Sent!');" class="card card-glass p-4 rounded-4">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label text-white small">Your Name</label>
                <input type="text" class="form-control form-dark-control" placeholder="Company / Recruiter Name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label text-white small">Email Address</label>
                <input type="email" class="form-control form-dark-control" placeholder="name@company.com" required>
              </div>
              <div class="col-12">
                <label class="form-label text-white small">Subject</label>
                <input type="text" class="form-control form-dark-control" placeholder="Job Opportunity / Inquiry" required>
              </div>
              <div class="col-12">
                <label class="form-label text-white small">Message</label>
                <textarea class="form-control form-dark-control" rows="4" placeholder="Write your message here..." required></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-cyber w-100 py-2 rounded-3">Send Message</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <footer class="py-4 border-top border-secondary border-opacity-25" style="background-color: #060910;">
    <div class="container text-center">
      <div class="mb-3">
        <a href="https://www.facebook.com/mark.baja.2024/" target="_blank" class="text-secondary me-3 fs-5"><i class="bi bi-facebook"></i></a>
        <a href="https://www.linkedin.com/in/mark-baja-606293364/" target="_blank" class="text-secondary me-3 fs-5"><i class="bi bi-linkedin"></i></a>
        <a href="mailto:markbaja441@email.com" class="text-secondary fs-5"><i class="bi bi-envelope-fill"></i></a>
      </div>
      <p class="small text-secondary mb-0">&copy; 2026 Mark Joshua Pura Baja. Built for Portfolio & Job Applications.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- AOS (Animate On Scroll) JS Script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true,
      offset: 50
    });
    function switchGadImage(element, captionText) {
      // Palitan ang Main Image src
      document.getElementById('gadMainView').src = element.src;
  
      // Palitan ang Caption Text sa header
      document.getElementById('gadModalCaption').innerText = captionText;

      // I-update ang Active border sa Thumbnails
      document.querySelectorAll('.gad-thumb').forEach(thumb => {
        thumb.classList.remove('active');
      });
      element.classList.add('active');
    }
// GAD Gallery Slide Information
document.addEventListener('DOMContentLoaded', function () {

    const carousel = document.getElementById('gadCarousel');
    const slideTitle = document.getElementById('gadSlideTitle');
    const slideDescription = document.getElementById('gadSlideDescription');

    if (!carousel || !slideTitle || !slideDescription) return;

    function updateGadSlideInfo() {

        const activeSlide = carousel.querySelector('.carousel-item.active');

        if (!activeSlide) return;

        slideTitle.textContent = activeSlide.dataset.title || '';
        slideDescription.textContent = activeSlide.dataset.description || '';

    }

    carousel.addEventListener('slid.bs.carousel', updateGadSlideInfo);

    updateGadSlideInfo();

});
  </script>
</body>
<!-- GAD GALLERY MODAL -->
<div class="modal fade" id="gadGalleryModal" tabindex="-1"
     aria-labelledby="gadGalleryModalLabel" aria-hidden="true">

      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content card-glass border border-secondary border-opacity-25 text-white"
             style="background: rgba(15, 15, 15, 0.95); backdrop-filter: blur(20px);">

            <!-- Modal Header -->
            <div class="modal-header border-bottom border-secondary border-opacity-25 py-3 px-4">

                <div>
                    <h5 class="modal-title fw-bold mb-0" id="gadGalleryModalLabel">
                        Gender and Development E-Learning System
                    </h5>
                </div>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>

            </div>

            <!-- Modal Body -->
            <div class="modal-body p-3 p-md-4">

                <!-- IMAGE CAROUSEL -->
                <div id="gadCarousel"
                     class="carousel slide"
                     data-bs-ride="false"
                     data-bs-interval="false">

                    <!-- Indicators -->
                    <div class="carousel-indicators">

                        <button type="button"
                                data-bs-target="#gadCarousel"
                                data-bs-slide-to="0"
                                class="active"
                                aria-current="true"
                                aria-label="Slide 1">
                        </button>

                        <button type="button"
                                data-bs-target="#gadCarousel"
                                data-bs-slide-to="1"
                                aria-label="Slide 2">
                        </button>

                        <button type="button"
                                data-bs-target="#gadCarousel"
                                data-bs-slide-to="2"
                                aria-label="Slide 3">
                        </button>

                        <button type="button"
                                data-bs-target="#gadCarousel"
                                data-bs-slide-to="3"
                                aria-label="Slide 4">
                        </button>

                    </div>

                    <!-- Carousel Images -->
                    <div class="carousel-inner rounded-3">

                        <!-- Slide 1 -->
                        <div class="carousel-item active"
                             data-title="Homepage & Main Announcement Banner"
                             data-description="Landing page of the Gender and Development E-Learning System.">

                            <img src="gad.jpg"
                                 class="d-block w-100"
                                 alt="GAD Homepage">

                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item"
                             data-title="Latest News & Announcements"
                             data-description="Updates and announcements from the GAD Unit.">

                            <img src="Screenshot 2026-11-10 105427.jpg"
                                 class="d-block w-100"
                                 alt="Latest News and Announcements">

                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item"
                             data-title="Services Offered"
                             data-description="Available services provided by the GAD Unit.">

                            <img src="Screenshot 2026-11-10 105449.jpg"
                                 class="d-block w-100"
                                 alt="Services Offered">

                        </div>

                        <!-- Slide 4 -->
                        <div class="carousel-item"
                             data-title="Courses Offered"
                             data-description="Educational courses available in the system.">

                            <img src="Screenshot 2026-11-10 105541.jpg"
                                 class="d-block w-100"
                                 alt="Courses Offered">

                        </div>

                    </div>

                    <!-- Previous Button -->
                    <button class="carousel-control-prev"
                            type="button"
                            data-bs-target="#gadCarousel"
                            data-bs-slide="prev">

                        <span class="carousel-control-prev-icon"
                              aria-hidden="true"></span>

                        <span class="visually-hidden">Previous</span>

                    </button>

                    <!-- Next Button -->
                    <button class="carousel-control-next"
                            type="button"
                            data-bs-target="#gadCarousel"
                            data-bs-slide="next">

                        <span class="carousel-control-next-icon"
                              aria-hidden="true"></span>

                        <span class="visually-hidden">Next</span>

                    </button>

                </div>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer border-top border-secondary border-opacity-25 py-2 px-4 d-flex justify-content-between">

                <span class="small text-secondary font-monospace">
                    Cavite State University - General Trias Campus
                </span>

                <button type="button"
                        class="btn btn-sm btn-outline-light rounded-pill px-4"
                        data-bs-dismiss="modal">
                    Close
                </button>

            </div>

        </div>

    </div>

</div>
</html>