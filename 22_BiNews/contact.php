<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Daily Chronicle | Contact Us</title>
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
      background-color: #fefefe;
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
    /* contact hero */
    .contact-hero {
      background: linear-gradient(125deg, #0f172a 0%, #1e2a44 100%);
      padding: 3rem 0;
      border-radius: 0 0 2rem 2rem;
      margin-bottom: 2.5rem;
    }
    .contact-card {
      background: white;
      border-radius: 1.5rem;
      transition: all 0.2s;
      border: none;
      box-shadow: 0 8px 20px rgba(0,0,0,0.05);
      height: 100%;
    }
    .contact-icon-lg {
      width: 70px;
      height: 70px;
      background: #eef2ff;
      border-radius: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: #dc3545;
      margin-bottom: 1rem;
    }
    .form-control, .form-select {
      border-radius: 0.75rem;
      padding: 0.75rem 1rem;
      border: 1px solid #e2e8f0;
    }
    .form-control:focus {
      border-color: #dc3545;
      box-shadow: 0 0 0 3px rgba(220,53,69,0.1);
    }
    .btn-submit {
      background: #dc3545;
      border-radius: 60px;
      padding: 12px 28px;
      font-weight: 600;
      transition: 0.2s;
    }
    .btn-submit:hover {
      background: #bb2d3b;
      transform: translateY(-2px);
    }
    .faq-item {
      border-bottom: 1px solid #e9ecef;
      padding: 1rem 0;
      cursor: pointer;
    }
    .faq-question {
      font-weight: 600;
      display: flex;
      justify-content: space-between;
    }
    .faq-answer {
      display: none;
      margin-top: 0.75rem;
      color: #475569;
      font-size: 0.95rem;
    }
    .faq-answer.show {
      display: block;
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
      .contact-hero { padding: 2rem 0; }
    }
  </style>
</head>
<body>

<!-- ====================== NAVBAR ====================== -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-2">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="bi bi-newspaper me-2 text-danger"></i>Daily Chronicle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#contactNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="contactNavbar">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Advertise</a></li>
      </ul>
      <div class="d-flex gap-3">
        <i class="bi bi-search fs-5 text-secondary" style="cursor: pointer;"></i>
        <i class="bi bi-person-circle fs-5 text-secondary"></i>
      </div>
    </div>
  </div>
</nav>

<!-- ========== CONTACT HERO ========== -->
<section class="contact-hero text-white">
  <div class="container text-center">
    <h1 class="display-5 fw-bold">Get in touch</h1>
    <p class="lead opacity-75 w-75 mx-auto">Have a tip, feedback, or press inquiry? We’d love to hear from you. Our team is dedicated to responding as quickly as possible.</p>
  </div>
</section>

<!-- ========== CONTACT INFO CARDS ========== -->
<div class="container mb-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="contact-card p-4 text-center">
        <div class="contact-icon-lg mx-auto"><i class="bi bi-envelope-paper"></i></div>
        <h5 class="fw-bold">Email us</h5>
        <p class="small text-secondary">General inquiries: <strong>hello@dailychronicle.com</strong><br>News tips: <strong>tips@dailychronicle.com</strong></p>
        <a href="#" class="text-danger small" id="copyEmailDemo">Click to copy email <i class="bi bi-copy"></i></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="contact-card p-4 text-center">
        <div class="contact-icon-lg mx-auto"><i class="bi bi-telephone-inbound"></i></div>
        <h5 class="fw-bold">Call our newsroom</h5>
        <p class="small text-secondary">+1 (212) 555-7890<br>Mon–Fri, 9AM – 6PM EST</p>
        <span class="badge bg-light text-dark">Press & media only</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="contact-card p-4 text-center">
        <div class="contact-icon-lg mx-auto"><i class="bi bi-geo-alt-fill"></i></div>
        <h5 class="fw-bold">HQ Location</h5>
        <p class="small text-secondary">300 Liberty Street, Floor 12<br>New York, NY 10011, USA</p>
        <a href="#" class="text-danger small" id="mapDemoBtn">View on map <i class="bi bi-map"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- ========== CONTACT FORM + SIDEBAR ========== -->
<div class="container mb-5">
  <div class="row g-5">
    <!-- Left: Contact Form -->
    <div class="col-lg-7">
      <div class="bg-white rounded-4 p-4 p-xl-5 shadow-sm">
        <h3 class="fw-bold mb-2">Send us a message</h3>
        <p class="text-secondary mb-4">Fill out the form below and we'll get back to you within 24-48 hours.</p>
        <form id="contactForm">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label fw-semibold">Full name *</label>
              <input type="text" class="form-control" id="contactName" placeholder="John Doe" required>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Email address *</label>
              <input type="email" class="form-control" id="contactEmail" placeholder="name@example.com" required>
            </div>
            <div class="col-12">
              <label class="form-label fw-semibold">Subject *</label>
              <select id="contactSubject" class="form-select">
                <option>General inquiry</option>
                <option>News tip / story idea</option>
                <option>Correction request</option>
                <option>Advertising / partnership</option>
                <option>Technical support</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label fw-semibold">Message *</label>
              <textarea class="form-control" id="contactMessage" rows="5" placeholder="Write your message here..."></textarea>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="newsletterOpt">
                <label class="form-check-label small" for="newsletterOpt">Subscribe to our free weekly newsletter</label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-submit text-white w-100 w-md-auto px-5"><i class="bi bi-send me-2"></i> Send message</button>
              <div id="formFeedback" class="small mt-3"></div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Right: Map placeholder + FAQs -->
    <div class="col-lg-5">
      <div class="bg-white rounded-4 overflow-hidden shadow-sm mb-4">
        <div id="mapPlaceholder" style="height: 220px; background: #e2e8f0; display: flex; align-items: center; justify-content: center; flex-direction: column; cursor: pointer;">
          <i class="bi bi-map fs-1 text-secondary"></i>
          <p class="small text-secondary mt-2">Interactive map preview (click to simulate)</p>
        </div>
        <div class="p-3 bg-light">
          <div class="d-flex align-items-center gap-2"><i class="bi bi-building text-danger"></i> <span>Daily Chronicle HQ, Manhattan</span></div>
        </div>
      </div>
      <div class="bg-white rounded-4 p-4 shadow-sm">
        <h5 class="fw-bold mb-3"><i class="bi bi-question-circle-fill text-danger me-2"></i> Frequently Asked</h5>
        <div id="faqContainer">
          <div class="faq-item" data-faq="1">
            <div class="faq-question">How do I submit a news tip? <i class="bi bi-chevron-down"></i></div>
            <div class="faq-answer">You can use the contact form above and select "News tip / story idea". For sensitive documents, email tips@dailychronicle.com with encrypted subject line.</div>
          </div>
          <div class="faq-item" data-faq="2">
            <div class="faq-question">Can I republish your articles? <i class="bi bi-chevron-down"></i></div>
            <div class="faq-answer">Yes, under our Creative Commons license. Contact our syndication team via the form or syndication@dailychronicle.com for details.</div>
          </div>
          <div class="faq-item" data-faq="3">
            <div class="faq-question">How to report an error in an article? <i class="bi bi-chevron-down"></i></div>
            <div class="faq-answer">Please use the "Correction request" subject in the form or email corrections@dailychronicle.com with the article link and correction details.</div>
          </div>
          <div class="faq-item" data-faq="4">
            <div class="faq-question">I'm a journalist – can I pitch a story? <i class="bi bi-chevron-down"></i></div>
            <div class="faq-answer">Absolutely! We welcome freelance pitches. Submit a brief summary via the form and our editorial team will review.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== SOCIAL CONNECT & OFFICES ========== -->
<div class="bg-light py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <h3 class="fw-bold">Connect with us</h3>
        <p>Follow Daily Chronicle across social platforms for real-time updates and behind-the-scenes.</p>
        <div class="d-flex gap-3 fs-3">
          <a href="#" class="text-dark" id="socialTwitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-dark" id="socialFb"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-dark" id="socialIg"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-dark" id="socialLi"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="text-dark" id="socialYt"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-white p-4 rounded-4 shadow-sm">
          <h5><i class="bi bi-globe2 text-danger me-2"></i> Global bureaus</h5>
          <div class="row mt-2">
            <div class="col-6"><span class="fw-semibold">London</span><br><small>Bloomsbury Square</small></div>
            <div class="col-6"><span class="fw-semibold">Singapore</span><br><small>Marina One</small></div>
            <div class="col-6 mt-2"><span class="fw-semibold">Mexico City</span><br><small>Polanco</small></div>
            <div class="col-6 mt-2"><span class="fw-semibold">Nairobi</span><br><small>Westlands</small></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== FOOTER ========== -->
<footer class="bg-dark text-white pt-5 pb-4 mt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4"><h4 class="fw-bold"><i class="bi bi-newspaper text-danger"></i> Daily Chronicle</h4><p class="text-secondary small">© 2025 — Independent. Fearless. Essential.</p></div>
      <div class="col-md-4 mb-4"><h5>Quick links</h5><ul class="list-unstyled"><li><a href="#" class="text-secondary">About us</a></li><li><a href="#" class="text-secondary">Ethics policy</a></li></ul></div>
      <div class="col-md-4 mb-4"><h5>Support</h5><ul class="list-unstyled"><li><a href="#" class="text-secondary">Help center</a></li><li><a href="#" class="text-secondary">Privacy</a></li></ul></div>
    </div>
    <hr class="bg-secondary"><div class="text-center text-secondary small">Reach us anytime — we value your voice.</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // FAQ Accordion Logic
  function initFaqs() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
      const questionDiv = item.querySelector('.faq-question');
      const answerDiv = item.querySelector('.faq-answer');
      const icon = questionDiv.querySelector('i');
      questionDiv.style.cursor = 'pointer';
      questionDiv.addEventListener('click', () => {
        const isOpen = answerDiv.classList.contains('show');
        // close all others (optional but nice)
        document.querySelectorAll('.faq-answer').forEach(ans => ans.classList.remove('show'));
        document.querySelectorAll('.faq-question i').forEach(ic => ic.className = 'bi bi-chevron-down');
        if (!isOpen) {
          answerDiv.classList.add('show');
          if (icon) icon.className = 'bi bi-chevron-up';
        } else {
          answerDiv.classList.remove('show');
          if (icon) icon.className = 'bi bi-chevron-down';
        }
      });
    });
  }

  // Contact Form Submission Handler (demo with validation & dummy success)
  function initContactForm() {
    const form = document.getElementById('contactForm');
    const feedbackDiv = document.getElementById('formFeedback');
    if (!form) return;
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('contactName')?.value.trim();
      const email = document.getElementById('contactEmail')?.value.trim();
      const message = document.getElementById('contactMessage')?.value.trim();
      const subjectSelect = document.getElementById('contactSubject');
      const subject = subjectSelect?.options[subjectSelect.selectedIndex]?.text;

      if (!name || !email || !message) {
        feedbackDiv.innerHTML = '<div class="alert alert-danger">⚠️ Please fill in all required fields (name, email, message).</div>';
        setTimeout(() => feedbackDiv.innerHTML = '', 3000);
        return;
      }
      if (!email.includes('@') || !email.includes('.')) {
        feedbackDiv.innerHTML = '<div class="alert alert-danger">✉️ Please enter a valid email address.</div>';
        setTimeout(() => feedbackDiv.innerHTML = '', 3000);
        return;
      }
      // Simulate form submission
      feedbackDiv.innerHTML = '<div class="alert alert-success">✅ Thank you, ' + name + '! Your message has been sent. Our team will reply shortly. (demo)</div>';
      form.reset();
      // optional newsletter checkbox kept but reset anyway.
      setTimeout(() => {
        feedbackDiv.innerHTML = '';
      }, 4000);
      // Show console/log for demonstration
      console.log(`Contact message from ${name} (${email}) - Subject: ${subject} - Msg: ${message}`);
    });
  }

  // demo email copy
  function initCopyEmail() {
    const copyBtn = document.getElementById('copyEmailDemo');
    if (copyBtn) {
      copyBtn.addEventListener('click', (e) => {
        e.preventDefault();
        navigator.clipboard.writeText('hello@dailychronicle.com').then(() => {
          alert('📧 Email address copied to clipboard!');
        }).catch(() => alert('Could not copy.'));
      });
    }
  }

  // map placeholder demo alert
  function initMapDemo() {
    const mapDiv = document.getElementById('mapPlaceholder');
    if (mapDiv) {
      mapDiv.addEventListener('click', () => {
        alert('🗺️ Interactive map would show our NYC headquarters location (demo). Google Maps integration ready.');
      });
    }
    const mapBtn = document.getElementById('mapDemoBtn');
    if (mapBtn) {
      mapBtn.addEventListener('click', (e) => {
        e.preventDefault();
        alert('📍 OpenStreetMap / Google Maps integration would display 300 Liberty St, NYC.');
      });
    }
  }

  // social icons demo alerts
  function initSocialDemo() {
    const socialIds = ['socialTwitter', 'socialFb', 'socialIg', 'socialLi', 'socialYt'];
    socialIds.forEach(id => {
      const el = document.getElementById(id);
      if (el) {
        el.addEventListener('click', (e) => {
          e.preventDefault();
          let platform = id.replace('social', '');
          if (platform === 'Twitter') platform = 'X';
          alert(`📱 You would be redirected to our official ${platform} page (demo).`);
        });
      }
    });
    // search and user icons
    const searchIcon = document.querySelector('.bi-search');
    if (searchIcon) searchIcon.addEventListener('click', () => alert('🔍 Search functionality (demo).'));
    const userIcon = document.querySelector('.bi-person-circle');
    if (userIcon) userIcon.addEventListener('click', () => alert('👤 Member sign in / account panel (demo).'));
  }

  // additional: simulate newsletter opt-in (console)
  function handleNewsletterCheck() {
    const checkBox = document.getElementById('newsletterOpt');
    if (checkBox) {
      checkBox.addEventListener('change', (e) => {
        if (e.target.checked) {
          console.log('User opted in for newsletter during contact.');
        }
      });
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    initFaqs();
    initContactForm();
    initCopyEmail();
    initMapDemo();
    initSocialDemo();
    handleNewsletterCheck();
  });
</script>
</body>
</html>