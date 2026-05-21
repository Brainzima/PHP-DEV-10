<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Daily Chronicle | Breaking News & Headlines</title>
  <!-- Bootstrap 5 CSS + Icons + Google Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fa;
      color: #1a1e24;
    }

    /* custom navbar style */
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

    /* breaking ticker */
    .breaking-ticker {
      background: #dc3545;
      color: white;
      padding: 8px 0;
      font-weight: 500;
    }

    .ticker-label {
      background: white;
      color: #dc3545;
      padding: 4px 12px;
      border-radius: 30px;
      font-weight: 800;
      font-size: 0.85rem;
      margin-right: 20px;
      display: inline-block;
    }

    .ticker-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    /* hero section */
    .hero-section {
      background: linear-gradient(120deg, #0b2b2f 0%, #124e5a 100%);
      border-radius: 0 0 2rem 2rem;
      margin-bottom: 2rem;
    }

    .hero-title {
      font-weight: 800;
      font-size: 2.8rem;
      line-height: 1.2;
    }

    .category-badge {
      background: rgba(255,255,255,0.2);
      backdrop-filter: blur(4px);
      padding: 6px 14px;
      border-radius: 40px;
      font-size: 0.75rem;
      font-weight: 600;
    }

    /* card hover effect */
    .news-card {
      transition: all 0.3s ease;
      border: none;
      border-radius: 1.2rem;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    }

    .news-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 30px -12px rgba(0,0,0,0.15);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
      transition: transform 0.4s;
    }

    .news-card:hover .card-img-top {
      transform: scale(1.03);
    }

    .section-header {
      border-left: 5px solid #dc3545;
      padding-left: 16px;
      font-weight: 800;
      margin-bottom: 1.8rem;
    }

    .author-img {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      object-fit: cover;
    }

    .trending-item {
      border-bottom: 1px solid #e9ecef;
      padding: 12px 0;
      transition: 0.2s;
    }

    .trending-item:hover {
      background: #f1f3f5;
      padding-left: 8px;
      border-radius: 12px;
    }

    footer a {
      text-decoration: none;
      color: #cfd8dc;
      transition: 0.2s;
    }

    footer a:hover {
      color: white;
    }

    .btn-outline-custom {
      border: 2px solid #1a5f7a;
      color: #1a5f7a;
      border-radius: 40px;
      font-weight: 600;
    }

    .btn-outline-custom:hover {
      background: #1a5f7a;
      color: white;
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 1.8rem;
      }
      .navbar-brand {
        font-size: 1.4rem;
      }
    }
  </style>
</head>
<body>

<!-- ====================== NAVBAR ====================== -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-2">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="bi bi-newspaper me-2 text-danger"></i>Daily Chronicle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Politics</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Business</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Entertainment</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Health</a></li>
      </ul>
      <div class="d-flex">
        <i class="bi bi-search fs-5 me-3 text-secondary" style="cursor: pointer;"></i>
        <i class="bi bi-person-circle fs-5 text-secondary"></i>
      </div>
    </div>
  </div>
</nav>

<!-- ====================== BREAKING TICKER ====================== -->
<div class="breaking-ticker overflow-hidden">
  <div class="container">
    <div class="d-flex align-items-center">
      <span class="ticker-label"><i class="bi bi-megaphone-fill me-1"></i> BREAKING</span>
      <div class="ticker-text" id="tickerMessage">⚡ Global climate summit reaches historic deal | Stock markets hit record highs | Tech giant unveils revolutionary AI chip</div>
    </div>
  </div>
</div>

<!-- ====================== HERO SECTION (Top story + featured) ====================== -->
<section class="hero-section text-white pt-4 pb-5">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-7">
        <span class="category-badge"><i class="bi bi-globe2 me-1"></i> WORLD EXCLUSIVE</span>
        <h1 class="hero-title mt-3 mb-3">Global Leaders Unite for Landmark Climate Resilience Pact</h1>
        <p class="lead opacity-75">Historic agreement signed by 120 nations sets new course for renewable energy transition and carbon neutrality by 2045.</p>
        <div class="d-flex gap-3 align-items-center mt-3">
          <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="author" class="author-img border border-2 border-white">
          <div><strong>Sarah Chen</strong> <span class="small opacity-75"> • Senior Correspondent • 2 hours ago</span></div>
        </div>
      </div>
      <div class="col-lg-5">
        <img src="https://picsum.photos/id/104/700/500" alt="hero image" class="img-fluid rounded-4 shadow-lg" style="object-fit: cover; height: 280px; width: 100%;">
      </div>
    </div>
  </div>
</section>

<div class="container mb-5">
  <!-- ============ LATEST NEWS CARDS SECTION ============= -->
  <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
    <h2 class="section-header"><i class="bi bi-lightning-charge-fill text-danger me-2"></i>Latest headlines</h2>
    <a href="#" class="text-decoration-none text-danger fw-semibold">View all <i class="bi bi-arrow-right-short"></i></a>
  </div>

  <div class="row g-4" id="latestNewsContainer">
    <!-- JS will inject latest news cards dynamically from dummy data -->
  </div>

  <!-- ============ TWO COLUMN: MAIN STORIES + TRENDING SIDEBAR ============= -->
  <div class="row mt-5 g-5">
    <!-- Left: Featured grid -->
    <div class="col-lg-8">
      <h3 class="section-header mb-3">Editor's pick</h3>
      <div class="row g-4" id="editorsPickContainer"></div>
    </div>

    <!-- Right: Trending & popular -->
    <div class="col-lg-4">
      <div class="bg-white rounded-4 p-4 shadow-sm sticky-top" style="top: 90px;">
        <h4 class="fw-bold mb-3"><i class="bi bi-graph-up text-danger me-2"></i> Trending now</h4>
        <div id="trendingList"></div>
        <hr class="my-3">
        <h4 class="fw-bold mb-3 mt-2"><i class="bi bi-envelope-paper-fill"></i> Newsletter</h4>
        <p class="small text-secondary">Get the top stories straight to your inbox.</p>
        <div class="input-group">
          <input type="email" class="form-control" placeholder="Your email" id="newsletterEmail">
          <button class="btn btn-danger" id="subscribeBtn">Subscribe</button>
        </div>
        <div id="subscribeMsg" class="small mt-2 text-success fw-semibold"></div>
      </div>
    </div>
  </div>

  <!-- ============ TECHNOLOGY & SPORTS SECTION (dual row) ============= -->
  <div class="row mt-5 g-4">
    <div class="col-md-6">
      <div class="d-flex justify-content-between align-items-center">
        <h3 class="section-header"><i class="bi bi-cpu me-2 text-primary"></i>Tech</h3>
        <a href="#" class="small text-decoration-none">More tech →</a>
      </div>
      <div id="techGrid" class="row g-3"></div>
    </div>
    <div class="col-md-6">
      <div class="d-flex justify-content-between align-items-center">
        <h3 class="section-header"><i class="bi bi-trophy-fill me-2 text-warning"></i>Sports</h3>
        <a href="#" class="small text-decoration-none">More sports →</a>
      </div>
      <div id="sportsGrid" class="row g-3"></div>
    </div>
  </div>

  <!-- ============ AD BANNER (dummy) ============= -->
  <div class="my-5 text-center p-4 bg-white rounded-4 shadow-sm border">
    <i class="bi bi-megaphone fs-1 text-secondary"></i>
    <p class="mb-0 text-secondary fw-semibold">Advertisement — 300x250 placeholder</p>
    <div class="bg-light p-4 mt-2 rounded">Your ad could be here</div>
  </div>
</div>

<!-- ============ FOOTER ============= -->
<footer class="bg-dark text-white pt-5 pb-4 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h4 class="fw-bold"><i class="bi bi-newspaper text-danger"></i> Daily Chronicle</h4>
        <p class="text-secondary">Independent. Fearless. Unbiased. Covering stories that matter since 2025.</p>
        <div>
          <i class="bi bi-twitter-x me-3 fs-5"></i>
          <i class="bi bi-facebook me-3 fs-5"></i>
          <i class="bi bi-instagram me-3 fs-5"></i>
          <i class="bi bi-youtube fs-5"></i>
        </div>
      </div>
      <div class="col-md-2 mb-4">
        <h5>Explore</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-secondary text-decoration-none">World</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Politics</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Business</a></li>
          <li><a href="#" class="text-secondary text-decoration-none">Culture</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-4">
        <h5>Support</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-secondary">Subscribe</a></li>
          <li><a href="#" class="text-secondary">Contact Us</a></li>
          <li><a href="#" class="text-secondary">Advertise</a></li>
          <li><a href="#" class="text-secondary">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-4">
        <h5>Download App</h5>
        <button class="btn btn-outline-light btn-sm rounded-pill me-2 mb-2"><i class="bi bi-apple"></i> App Store</button>
        <button class="btn btn-outline-light btn-sm rounded-pill"><i class="bi bi-google-play"></i> Google Play</button>
      </div>
    </div>
    <hr class="bg-secondary">
    <div class="text-center text-secondary small">© 2025 Daily Chronicle — All rights reserved. News for the intelligent mind.</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // ---------- DUMMY NEWS DATA (fully functional homepage data) ----------
  const dummyArticles = [
    { id: 1, title: "AI Breakthrough: New Model Outperforms Human Reasoning", category: "Technology", image: "https://picsum.photos/id/0/400/240", summary: "Researchers unveil a revolutionary architecture that mimics neural efficiency, achieving record accuracy.", author: "Alex Rivera", date: "3 hours ago", trending: true },
    { id: 2, title: "Federal Reserve Holds Rates, Signals Cuts in Late 2025", category: "Business", image: "https://picsum.photos/id/20/400/240", summary: "Markets rally as Powell hints at easing cycle, boosting investor confidence worldwide.", author: "Maya Desai", date: "5 hours ago", trending: true },
    { id: 3, title: "Champions League Quarterfinals: Drama Unfolds in Overtime", category: "Sports", image: "https://picsum.photos/id/26/400/240", summary: "Underdog team stuns favorites with last-minute goal, sending fans into frenzy.", author: "James O'Brien", date: "1 hour ago", trending: false },
    { id: 4, title: "New Study: Mediterranean Diet Cuts Dementia Risk by 23%", category: "Health", image: "https://picsum.photos/id/127/400/240", summary: "Long-term research highlights powerful benefits of plant-based nutrition for brain health.", author: "Dr. Lisa Mendes", date: "7 hours ago", trending: true },
    { id: 5, title: "Hollywood Strikes Deal: Writers Ratify New Contract", category: "Entertainment", image: "https://picsum.photos/id/106/400/240", summary: "Streaming residuals and AI protections secured after tense negotiations.", author: "Rachel Green", date: "12 hours ago", trending: false },
    { id: 6, title: "SpaceX Launches Mission to Deploy Next-Gen Internet Satellites", category: "Technology", image: "https://picsum.photos/id/96/400/240", summary: "Falcon Heavy successfully lifts from Kennedy Space Center in a historic night launch.", author: "Chris Hadfield", date: "yesterday", trending: true },
    { id: 7, title: "Election Update: Swing States Show Tight Presidential Race", category: "Politics", image: "https://picsum.photos/id/91/400/240", summary: "Latest polls indicate dead heat with two weeks to go before national convention.", author: "Nina Park", date: "4 hours ago", trending: false },
    { id: 8, title: "Crypto Comeback: Bitcoin Surges Past $72,000", category: "Business", image: "https://picsum.photos/id/15/400/240", summary: "Institutional inflows and halving optimism fuel massive rally in digital assets.", author: "Raj Mehta", date: "2 hours ago", trending: true }
  ];

  const editorsPickData = [
    { id: 9, title: "Inside the Collapse: The Untold Story of SVB's Downfall", category: "Finance", image: "https://picsum.photos/id/24/400/260", summary: "Exclusive investigation into bank run that shook global markets, with new documents.", author: "Elena Vasquez", date: "1 day ago" },
    { id: 10, title: "Deep Dive: How Climate Refugees Are Reshaping Migration Policy", category: "Environment", image: "https://picsum.photos/id/29/400/260", summary: "Firsthand accounts from displaced communities and the political response.", author: "Kwame Asante", date: "6 hours ago" }
  ];

  const techStories = [
    { title: "Apple unveils AI-powered Siri 2.0 with generative features", image: "https://picsum.photos/id/2/400/200", date: "8h ago" },
    { title: "NVIDIA Blackwell GPU's record-breaking performance benchmarks", image: "https://picsum.photos/id/76/400/200", date: "2h ago" }
  ];

  const sportsStories = [
    { title: "NBA Finals: Epic Game 7 ends with buzzer beater", image: "https://picsum.photos/id/82/400/200", date: "11h ago" },
    { title: "Grand Slam champion announces surprise retirement", image: "https://picsum.photos/id/81/400/200", date: "yesterday" }
  ];

  const trendingItems = [
    { rank: 1, title: "Global climate deal details revealed", views: "12k reads" },
    { rank: 2, title: "New AI policy framework by EU", views: "9.8k reads" },
    { rank: 3, title: "SpaceX Starship orbital test success", views: "8.2k reads" },
    { rank: 4, title: "Inflation cools down unexpectedly", views: "6.4k reads" },
    { rank: 5, title: "Oscar nominations 2025 predictions", views: "5k reads" },
  ];

  // function to render latest news grid (first row)
  function renderLatestNews() {
    const container = document.getElementById('latestNewsContainer');
    if (!container) return;
    let html = '';
    dummyArticles.slice(0, 4).forEach(article => {
      html += `
        <div class="col-md-6 col-lg-3">
          <div class="card news-card h-100">
            <img src="${article.image}" class="card-img-top" alt="${article.title}">
            <div class="card-body">
              <span class="badge bg-danger mb-2">${article.category}</span>
              <h5 class="card-title fw-bold">${article.title}</h5>
              <p class="card-text small text-secondary">${article.summary.substring(0, 80)}...</p>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <small class="text-muted"><i class="bi bi-clock"></i> ${article.date}</small>
                <button class="btn btn-sm btn-outline-danger rounded-pill read-more-btn">Read more</button>
              </div>
            </div>
          </div>
        </div>
      `;
    });
    container.innerHTML = html;
    attachReadMoreEvents();
  }

  function renderEditorsPick() {
    const container = document.getElementById('editorsPickContainer');
    let html = '';
    editorsPickData.forEach(article => {
      html += `
        <div class="col-md-6">
          <div class="card news-card h-100">
            <img src="${article.image}" class="card-img-top" alt="${article.title}" style="height: 180px;">
            <div class="card-body">
              <span class="badge bg-dark">${article.category}</span>
              <h5 class="mt-2 fw-bold">${article.title}</h5>
              <p class="small">${article.summary.substring(0, 100)}...</p>
              <div class="d-flex mt-2 align-items-center gap-2">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="author-img" alt="author">
                <small class="text-muted">${article.author} • ${article.date}</small>
              </div>
            </div>
          </div>
        </div>
      `;
    });
    container.innerHTML = html;
  }

  function renderTrending() {
    const trendingContainer = document.getElementById('trendingList');
    let listHtml = '';
    trendingItems.forEach(item => {
      listHtml += `
        <div class="trending-item d-flex align-items-start gap-3">
          <span class="fw-bold text-danger fs-5">${item.rank}</span>
          <div>
            <a href="#" class="text-decoration-none text-dark fw-semibold">${item.title}</a>
            <div class="small text-secondary"><i class="bi bi-eye"></i> ${item.views}</div>
          </div>
        </div>
      `;
    });
    trendingContainer.innerHTML = listHtml;
  }

  function renderTechSports() {
    const techContainer = document.getElementById('techGrid');
    let techHtml = '';
    techStories.forEach(t => {
      techHtml += `
        <div class="col-12">
          <div class="d-flex gap-3 align-items-center bg-white p-2 rounded-3 shadow-sm">
            <img src="${t.image}" width="80" height="70" class="rounded-3 object-fit-cover" style="object-fit: cover;">
            <div><h6 class="mb-1 fw-semibold">${t.title}</h6><small class="text-muted">${t.date}</small></div>
          </div>
        </div>
      `;
    });
    techContainer.innerHTML = techHtml;

    const sportsContainer = document.getElementById('sportsGrid');
    let sportsHtml = '';
    sportsStories.forEach(s => {
      sportsHtml += `
        <div class="col-12">
          <div class="d-flex gap-3 align-items-center bg-white p-2 rounded-3 shadow-sm">
            <img src="${s.image}" width="80" height="70" class="rounded-3 object-fit-cover" style="object-fit: cover;">
            <div><h6 class="mb-1 fw-semibold">${s.title}</h6><small class="text-muted">${s.date}</small></div>
          </div>
        </div>
      `;
    });
    sportsContainer.innerHTML = sportsHtml;
  }

  function attachReadMoreEvents() {
    const buttons = document.querySelectorAll('.read-more-btn');
    buttons.forEach(btn => {
      btn.removeEventListener('click', handleReadMore);
      btn.addEventListener('click', handleReadMore);
    });
  }

  function handleReadMore(e) {
    const card = e.target.closest('.news-card');
    if (card) {
      const title = card.querySelector('.card-title')?.innerText || 'article';
      alert(`🔍 "${title}" – Full article loading (demo). Stay tuned for premium coverage!`);
    } else {
      alert('Read more feature: full story would open here.');
    }
  }

  // Newsletter subscription with local dummy success message
  function initNewsletter() {
    const subBtn = document.getElementById('subscribeBtn');
    const msgDiv = document.getElementById('subscribeMsg');
    if (subBtn) {
      subBtn.addEventListener('click', () => {
        const emailInput = document.getElementById('newsletterEmail');
        const email = emailInput.value.trim();
        if (email === '' || !email.includes('@')) {
          msgDiv.innerHTML = '<span class="text-danger">⚠️ Please enter a valid email address.</span>';
          setTimeout(() => { msgDiv.innerHTML = ''; }, 2000);
        } else {
          msgDiv.innerHTML = `✅ Thanks! Daily brief will be sent to ${email}. (demo)`;
          emailInput.value = '';
          setTimeout(() => { msgDiv.innerHTML = ''; }, 3000);
        }
      });
    }
  }

  // Animated breaking ticker rotation (simple)
  let tickerIndex = 0;
  const tickerMessages = [
    "⚡ Global climate summit reaches historic deal | Stock markets hit record highs | Tech giant unveils revolutionary AI chip",
    "🔥 BREAKING: Astronauts complete first commercial spacewalk | Oil prices drop 4% | Major earthquake hits Pacific region",
    "📈 Cryptocurrency market cap surpasses $3 trillion | New education reforms approved by senate | Tennis star wins 25th Grand Slam"
  ];
  function rotateTicker() {
    const tickerEl = document.getElementById('tickerMessage');
    if (tickerEl) {
      tickerIndex = (tickerIndex + 1) % tickerMessages.length;
      tickerEl.style.transition = 'opacity 0.3s';
      tickerEl.style.opacity = '0';
      setTimeout(() => {
        tickerEl.innerText = tickerMessages[tickerIndex];
        tickerEl.style.opacity = '1';
      }, 200);
    }
  }
  setInterval(rotateTicker, 6000);

  // Initialize all sections
  document.addEventListener('DOMContentLoaded', () => {
    renderLatestNews();
    renderEditorsPick();
    renderTrending();
    renderTechSports();
    initNewsletter();

    // additional pop-up for search icons interactions (just dummy)
    const searchIcon = document.querySelector('.bi-search');
    if (searchIcon) {
      searchIcon.addEventListener('click', () => {
        alert('🔎 Search functionality demo: type any keyword → full news search would appear.');
      });
    }
    const userIcon = document.querySelector('.bi-person-circle');
    if(userIcon){
      userIcon.addEventListener('click', () => {
        alert('👤 Account / sign in panel (demo). Full authentication UI coming soon.');
      });
    }
  });
</script>
</body>
</html>