<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Daily Chronicle | About Us – Independent Journalism</title>
  <!-- Bootstrap 5 CSS + Icons + Google Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
      background-color: #ffffff;
      color: #1e293b;
    }
    .navbar-brand {
      font-weight: 800;
      font-size: 1.8rem;
      letter-spacing: -0.5px;
      background: linear-gradient(135deg, #0a2b3e 0%, #1a5f7a 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .nav-link {
      font-weight: 600;
      color: #2c3e50 !important;
      transition: 0.2s;
    }
    .nav-link:hover {
      color: #1a5f7a !important;
    }
    /* about hero */
    .about-hero {
      background: linear-gradient(115deg, #0b1120 0%, #1a2a3f 100%);
      padding: 4rem 0;
      border-radius: 0 0 2.5rem 2.5rem;
      margin-bottom: 2rem;
    }
    .stat-card {
      background: rgba(255,255,255,0.08);
      backdrop-filter: blur(10px);
      border-radius: 1.5rem;
      padding: 1.5rem;
      text-align: center;
      transition: transform 0.2s;
    }
    .stat-card:hover {
      transform: translateY(-5px);
      background: rgba(255,255,255,0.15);
    }
    .mission-card {
      background: #f1f5f9;
      border-radius: 2rem;
      transition: all 0.2s;
    }
    .team-card {
      transition: all 0.25s;
      border: none;
      border-radius: 1.5rem;
      overflow: hidden;
      box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05);
    }
    .team-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 28px -12px rgba(0,0,0,0.12);
    }
    .team-img {
      height: 280px;
      object-fit: cover;
      width: 100%;
    }
    .timeline-dot {
      width: 14px;
      height: 14px;
      background-color: #dc3545;
      border-radius: 50%;
      display: inline-block;
      margin-right: 12px;
    }
    .contact-icon {
      width: 48px;
      height: 48px;
      background: #eef2ff;
      border-radius: 60px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      color: #dc3545;
    }
    footer a {
      text-decoration: none;
      color: #cbd5e1;
      transition: 0.2s;
    }
    footer a:hover {
      color: white;
    }
    @media (max-width: 768px) {
      .navbar-brand { font-size: 1.4rem; }
      .about-hero { padding: 2rem 0; }
      .stat-card { padding: 1rem; }
    }
  </style>
</head>
<body>

<!-- ====================== NAVBAR ====================== -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-2">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="bi bi-newspaper me-2 text-danger"></i>Daily Chronicle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#aboutNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="aboutNavbar">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Ethics</a></li>
      </ul>
      <div class="d-flex gap-3">
        <i class="bi bi-search fs-5 text-secondary" style="cursor: pointer;"></i>
        <i class="bi bi-person-circle fs-5 text-secondary"></i>
      </div>
    </div>
  </div>
</nav>

<!-- ========== ABOUT HERO SECTION ========== -->
<section class="about-hero text-white">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <h1 class="display-4 fw-bold mb-3">Unbiased. Fearless. Essential.</h1>
        <p class="lead opacity-75">Daily Chronicle was founded to restore trust in journalism — delivering fact-based reporting with depth, context, and integrity. We are a digital-first newsroom committed to holding power accountable.</p>
      </div>
    </div>
    <div class="row g-4 mt-4">
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <div class="display-5 fw-bold">150+</div>
          <div>Journalists worldwide</div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <div class="display-5 fw-bold">12M+</div>
          <div>Monthly readers</div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <div class="display-5 fw-bold">35+</div>
          <div>Awards & honors</div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <div class="display-5 fw-bold">2019</div>
          <div>Year founded</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== MISSION & VALUES ========== -->
<div class="container mb-5">
  <div class="row g-5 align-items-center">
    <div class="col-lg-6">
      <span class="badge bg-danger mb-3">OUR MISSION</span>
      <h2 class="fw-bold mb-3">To inform, inspire, and empower through fearless journalism.</h2>
      <p class="text-secondary">In an era of misinformation and echo chambers, Daily Chronicle stands for rigorous fact-checking, diverse perspectives, and stories that matter. We believe that an informed public is the bedrock of democracy. Every article, investigation, and interview is guided by our core principles: accuracy, fairness, independence, and transparency.</p>
      <div class="mt-4">
        <div class="d-flex gap-3 mb-3">
          <i class="bi bi-shield-check fs-2 text-danger"></i>
          <div><strong class="fw-bold">Independent funding</strong><br><span class="small text-secondary">No corporate or political backing — our readers make us free.</span></div>
        </div>
        <div class="d-flex gap-3">
          <i class="bi bi-eye fs-2 text-danger"></i>
          <div><strong class="fw-bold">Deep investigations</strong><br><span class="small text-secondary">We spend months unraveling stories that others overlook.</span></div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="bg-light rounded-4 p-4 mission-card">
        <i class="bi bi-quote fs-1 text-danger opacity-50"></i>
        <p class="fs-5 fst-italic">"The Chronicle doesn't just report the news — it provides the context, the nuance, and the courage to ask difficult questions. That's why I subscribe."</p>
        <div class="d-flex align-items-center gap-3 mt-3">
          <img src="https://randomuser.me/api/portraits/women/68.jpg" width="48" class="rounded-circle">
          <div><strong>Elena Rodriguez</strong><br><span class="small text-secondary">Reader since 2021</span></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== OUR HISTORY TIMELINE ========== -->
<div class="bg-light py-5 mt-4">
  <div class="container">
    <div class="text-center mb-5">
      <span class="badge bg-danger">Our journey</span>
      <h2 class="fw-bold mt-2">From startup to global voice</h2>
      <p class="text-secondary w-75 mx-auto">How we grew into one of the most trusted independent newsrooms.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="bg-white p-4 rounded-4 h-100 shadow-sm">
          <div class="d-flex align-items-center gap-2 mb-2"><span class="timeline-dot"></span><span class="fw-bold text-danger">2019</span></div>
          <h5>Launch & Early Days</h5>
          <p class="small text-secondary">Founded by a team of veteran journalists. First office in Brooklyn, 5 full-time reporters.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-white p-4 rounded-4 h-100 shadow-sm">
          <div class="d-flex align-items-center gap-2 mb-2"><span class="timeline-dot"></span><span class="fw-bold text-danger">2021</span></div>
          <h5>First Major Award</h5>
          <p class="small text-secondary">Won the Online Journalism Award for investigative coverage of tech accountability.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-white p-4 rounded-4 h-100 shadow-sm">
          <div class="d-flex align-items-center gap-2 mb-2"><span class="timeline-dot"></span><span class="fw-bold text-danger">2023</span></div>
          <h5>Global Expansion</h5>
          <p class="small text-secondary">Opened bureaus in London, Singapore, and Mexico City. Reached 8M monthly readers.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bg-white p-4 rounded-4 h-100 shadow-sm">
          <div class="d-flex align-items-center gap-2 mb-2"><span class="timeline-dot"></span><span class="fw-bold text-danger">2025</span></div>
          <h5>Pulitzer Finalist</h5>
          <p class="small text-secondary">Recognized for climate change investigation. Launched daily video news show.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== MEET THE LEADERSHIP TEAM ========== -->
<div class="container py-5">
  <div class="text-center mb-5">
    <span class="badge bg-danger">Editorial leadership</span>
    <h2 class="fw-bold mt-2">Meet the people behind the news</h2>
    <p class="text-secondary">Dedicated journalists and editors shaping our coverage every day.</p>
  </div>
  <div class="row g-4" id="teamContainer">
    <!-- dynamic team via JS -->
    <div class="col-12 text-center">Loading team...</div>
  </div>
</div>

<!-- ========== VALUES & COMMITMENT SECTION ========== -->
<div class="container mb-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="text-center p-4 rounded-4 bg-white shadow-sm h-100">
        <i class="bi bi-hand-thumbs-up fs-1 text-danger"></i>
        <h5 class="fw-bold mt-3">Fact-first reporting</h5>
        <p class="small text-secondary">Every story undergoes multi-layer verification and independent sourcing before publication.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center p-4 rounded-4 bg-white shadow-sm h-100">
        <i class="bi bi-people fs-1 text-danger"></i>
        <h5 class="fw-bold mt-3">Diverse voices</h5>
        <p class="small text-secondary">We actively seek perspectives from underrepresented communities and global contributors.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center p-4 rounded-4 bg-white shadow-sm h-100">
        <i class="bi bi-recycle fs-1 text-danger"></i>
        <h5 class="fw-bold mt-3">Sustainable journalism</h5>
        <p class="small text-secondary">100% reader-supported. No ads, no paywalls — just quality reporting for everyone.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========== CONTACT & SUPPORT SECTION ========== -->
<div class="bg-dark text-white py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h2 class="fw-bold">Support independent journalism</h2>
        <p class="opacity-75">Become a member today and help us keep our reporting free, fearless, and accessible to all.</p>
        <div class="d-flex gap-3 flex-wrap mt-3">
          <button class="btn btn-danger rounded-pill px-4" id="donateBtnDemo"><i class="bi bi-heart-fill me-1"></i> Become a supporter</button>
          <button class="btn btn-outline-light rounded-pill px-4" id="newsletterBtnDemo">Subscribe to newsletter</button>
        </div>
        <div class="mt-4 small text-secondary">Already a member? <a href="#" class="text-white-50">Log in to your account</a></div>
      </div>
      <div class="col-lg-6">
        <div class="bg-white bg-opacity-10 rounded-4 p-4">
          <h5><i class="bi bi-envelope-fill me-2 text-danger"></i> Contact us</h5>
          <p class="small">General inquiries: <strong>hello@dailychronicle.com</strong><br>Tips & leads: <strong>tips@dailychronicle.com</strong><br>Careers: <strong>jobs@dailychronicle.com</strong></p>
          <hr class="bg-secondary">
          <div class="d-flex gap-4">
            <div><i class="bi bi-twitter-x"></i> @chronicle</div>
            <div><i class="bi bi-instagram"></i> @dailychronicle</div>
            <div><i class="bi bi-linkedin"></i> Daily Chronicle</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== FOOTER ========== -->
<footer class="bg-black text-white pt-5 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-4"><h4 class="fw-bold"><i class="bi bi-newspaper text-danger"></i> Daily Chronicle</h4><p class="text-secondary small">© 2025 — Independent news for a connected world.</p></div>
      <div class="col-md-3 mb-4"><h5>Explore</h5><ul class="list-unstyled"><li><a href="#" class="text-secondary">Archive</a></li><li><a href="#" class="text-secondary">Corrections</a></li></ul></div>
      <div class="col-md-4 mb-4"><h5>Legal</h5><ul class="list-unstyled"><li><a href="#" class="text-secondary">Privacy Policy</a></li><li><a href="#" class="text-secondary">Terms of Use</a></li></ul></div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Team members data (dummy)
  const teamMembers = [
    { name: "Sarah Chen", role: "Editor-in-Chief", bio: "Former foreign correspondent with 15 years of experience covering geopolitics.", image: "https://randomuser.me/api/portraits/women/44.jpg", social: "twitter" },
    { name: "David Okafor", role: "Managing Editor", bio: "Investigative journalist, Pulitzer Prize finalist for climate reporting.", image: "https://randomuser.me/api/portraits/men/32.jpg", social: "linkedin" },
    { name: "Elena Vasquez", role: "Senior Tech Editor", bio: "AI and digital economy specialist, formerly at Wired.", image: "https://randomuser.me/api/portraits/women/68.jpg", social: "twitter" },
    { name: "James Whitaker", role: "Creative Director", bio: "Award-winning visual journalist leading our multimedia storytelling.", image: "https://randomuser.me/api/portraits/men/45.jpg", social: "instagram" }
  ];

  function renderTeam() {
    const container = document.getElementById('teamContainer');
    if (!container) return;
    let html = '';
    teamMembers.forEach(member => {
      html += `
        <div class="col-md-3 col-sm-6">
          <div class="card team-card h-100">
            <img src="${member.image}" class="team-img" alt="${member.name}">
            <div class="card-body text-center">
              <h5 class="fw-bold mb-0">${member.name}</h5>
              <p class="text-danger small fw-semibold">${member.role}</p>
              <p class="small text-secondary">${member.bio}</p>
              <div class="d-flex justify-content-center gap-2 mt-2">
                <i class="bi bi-${member.social} text-secondary" style="cursor:pointer;"></i>
                <i class="bi bi-envelope text-secondary" style="cursor:pointer;"></i>
              </div>
            </div>
          </div>
        </div>
      `;
    });
    container.innerHTML = html;
    attachTeamSocialEvents();
  }

  function attachTeamSocialEvents() {
    const icons = document.querySelectorAll('.team-card .bi');
    icons.forEach(icon => {
      icon.addEventListener('click', (e) => {
        e.stopPropagation();
        alert('🔗 Connect with our team member (demo interaction). Full social links would open here.');
      });
    });
  }

  // interactive buttons demo
  function initAboutInteractions() {
    const donateBtn = document.getElementById('donateBtnDemo');
    if (donateBtn) {
      donateBtn.addEventListener('click', () => alert('❤️ Thank you for supporting independent journalism! (Demo — membership flow would open.)'));
    }
    const newsletterBtn = document.getElementById('newsletterBtnDemo');
    if (newsletterBtn) {
      newsletterBtn.addEventListener('click', () => alert('📧 Sign up for our free weekly newsletter (demo form).'));
    }
    const searchIcon = document.querySelector('.bi-search');
    if (searchIcon) searchIcon.addEventListener('click', () => alert('🔍 Search demo: find articles across Daily Chronicle.'));
    const userIcon = document.querySelector('.bi-person-circle');
    if (userIcon) userIcon.addEventListener('click', () => alert('👤 Account portal (demo).'));
    // additional stat card tooltips? not needed but nice.
    const contactEmails = document.querySelectorAll('.bg-white.bg-opacity-10 p strong');
    if (contactEmails.length) {
      // just dummy alert for emails
      document.querySelectorAll('.bg-white.bg-opacity-10 p').forEach(p => {
        p.style.cursor = 'pointer';
        p.addEventListener('click', () => alert('✉️ Email address copied to clipboard (demo). Full functionality would implement copy.'));
      });
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    renderTeam();
    initAboutInteractions();
  });
</script>
</body>
</html>