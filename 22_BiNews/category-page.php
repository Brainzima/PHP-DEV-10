<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Daily Chronicle | Technology News & Innovation</title>
  <!-- Bootstrap 5 CSS + Icons + Google Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f9fafb;
      color: #111827;
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
    .nav-link:hover, .nav-link.active {
      color: #1a5f7a !important;
    }
    /* category hero */
    .category-hero {
      background: linear-gradient(135deg, #0b1120 0%, #1a2a3a 100%);
      padding: 3rem 0;
      border-radius: 0 0 2rem 2rem;
      margin-bottom: 2rem;
    }
    .category-badge-large {
      background: #dc3545;
      display: inline-block;
      padding: 6px 18px;
      border-radius: 40px;
      font-weight: 700;
      font-size: 0.85rem;
    }
    /* filter bar */
    .filter-bar {
      background: white;
      border-radius: 60px;
      padding: 6px 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.03);
      border: 1px solid #e9ecef;
    }
    .filter-btn {
      border-radius: 40px;
      padding: 6px 20px;
      font-weight: 600;
      transition: all 0.2s;
      cursor: pointer;
      background: transparent;
      border: none;
    }
    .filter-btn.active-filter {
      background: #1a5f7a;
      color: white;
    }
    .filter-btn:not(.active-filter):hover {
      background: #eef2ff;
      color: #1a5f7a;
    }
    /* news cards */
    .news-card {
      transition: all 0.3s ease;
      border: none;
      border-radius: 1.2rem;
      overflow: hidden;
      background: white;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      height: 100%;
    }
    .news-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 28px -12px rgba(0,0,0,0.12);
    }
    .card-img {
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s;
    }
    .news-card:hover .card-img {
      transform: scale(1.02);
    }
    .featured-card {
      background: white;
      border-radius: 1.5rem;
      transition: 0.2s;
    }
    .pagination-custom .page-link {
      border-radius: 50px;
      margin: 0 4px;
      color: #1e293b;
      border: 1px solid #dee2e6;
    }
    .pagination-custom .active>.page-link {
      background-color: #dc3545;
      border-color: #dc3545;
      color: white;
    }
    footer a {
      text-decoration: none;
      color: #cbd5e1;
      transition: 0.2s;
    }
    footer a:hover {
      color: white;
    }
    .subscribe-card {
      background: linear-gradient(145deg, #0f172a, #1e293b);
      border-radius: 1.5rem;
    }
    @media (max-width: 768px) {
      .navbar-brand { font-size: 1.4rem; }
      .filter-bar { border-radius: 30px; overflow-x: auto; white-space: nowrap; flex-wrap: nowrap; }
      .filter-btn { padding: 6px 14px; font-size: 0.8rem; }
    }
  </style>
</head>
<body>

<!-- ====================== NAVBAR ====================== -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-2">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="bi bi-newspaper me-2 text-danger"></i>Daily Chronicle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="techCatNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="techCatNavbar">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Technology</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Business</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Science</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Gadgets</a></li>
        <li class="nav-item"><a class="nav-link" href="#">AI</a></li>
      </ul>
      <div class="d-flex gap-3">
        <i class="bi bi-search fs-5 text-secondary" style="cursor: pointer;"></i>
        <i class="bi bi-person-circle fs-5 text-secondary"></i>
      </div>
    </div>
  </div>
</nav>

<!-- ========== CATEGORY HERO ========== -->
<section class="category-hero text-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <span class="category-badge-large mb-2"><i class="bi bi-cpu me-1"></i> TECHNOLOGY</span>
        <h1 class="display-4 fw-bold mt-3">Innovation Hub</h1>
        <p class="lead opacity-75 w-75">Latest breakthroughs, product launches, and digital trends shaping our future.</p>
      </div>
      <div class="col-lg-4 text-end d-none d-lg-block">
        <i class="bi bi-motherboard fs-1 opacity-25"></i>
      </div>
    </div>
  </div>
</section>

<!-- ========== FILTER & SORT ROW ========== -->
<div class="container mb-4">
  <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
    <div class="filter-bar d-flex gap-1 flex-wrap">
      <button class="filter-btn active-filter" data-filter="all">All Stories</button>
      <button class="filter-btn" data-filter="ai">Artificial Intelligence</button>
      <button class="filter-btn" data-filter="gadgets">Gadgets & Gear</button>
      <button class="filter-btn" data-filter="cybersecurity">Cybersecurity</button>
      <button class="filter-btn" data-filter="futuretech">Future Tech</button>
    </div>
    <div class="d-flex align-items-center gap-2">
      <span class="text-secondary small">Sort by:</span>
      <select id="sortSelect" class="form-select form-select-sm w-auto rounded-pill border-0 bg-light">
        <option value="latest">Latest</option>
        <option value="popular">Most Popular</option>
      </select>
    </div>
  </div>
</div>

<!-- ========== FEATURED STORY (Hero card within category) ========== -->
<div class="container mb-5">
  <div class="featured-card shadow-sm overflow-hidden rounded-4 border-0">
    <div class="row g-0">
      <div class="col-md-7">
        <img src="https://picsum.photos/id/0/800/500" class="img-fluid w-100 h-100" style="object-fit: cover; min-height: 280px;" alt="featured tech">
      </div>
      <div class="col-md-5 p-4 d-flex flex-column justify-content-center bg-white">
        <span class="badge bg-danger mb-2 w-auto">EXCLUSIVE COVERAGE</span>
        <h2 class="fw-bold">Inside OpenAI's Secretive 'Strawberry' Project: Q-Star Breakthrough</h2>
        <p class="text-secondary">New reasoning model shows signs of human-like planning, sparking AGI debate among researchers.</p>
        <div class="d-flex align-items-center gap-2 mt-2">
          <img src="https://randomuser.me/api/portraits/men/21.jpg" class="rounded-circle" width="36" height="36">
          <div><small class="fw-semibold">Kevin Zhou</small><br><small class="text-muted">6 hours ago</small></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== ARTICLES GRID (DYNAMIC WITH FILTER & SORT) ========== -->
<div class="container mb-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold"><i class="bi bi-newspaper text-danger me-2"></i> Latest in Tech</h3>
    <span id="resultCount" class="badge bg-secondary">12 articles</span>
  </div>
  <div class="row g-4" id="articlesGridContainer">
    <!-- dynamic js cards -->
  </div>
  <!-- pagination dummy (demo) -->
  <div class="d-flex justify-content-center mt-5">
    <nav>
      <ul class="pagination pagination-custom">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>
</div>

<!-- ========== NEWSLETTER & TRENDING SECTION ========== -->
<div class="container mb-5">
  <div class="row g-4">
    <div class="col-md-8">
      <div class="subscribe-card text-white p-4 p-xl-5">
        <div class="d-flex flex-wrap gap-3 align-items-center justify-content-between">
          <div>
            <h3 class="fw-bold"><i class="bi bi-envelope-paper-heart"></i> Tech Briefing</h3>
            <p>Weekly digest: AI, cybersecurity, and silicon valley insider news.</p>
          </div>
          <div class="d-flex gap-2 w-100 w-md-auto">
            <input type="email" class="form-control rounded-pill" id="newsletterTechEmail" placeholder="Your email address">
            <button class="btn btn-danger rounded-pill px-4" id="techSubscribeBtn">Subscribe</button>
          </div>
        </div>
        <div id="techSubscribeMsg" class="small mt-2 text-warning"></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="bg-white p-4 rounded-4 shadow-sm h-100">
        <h5 class="fw-bold"><i class="bi bi-graph-up text-danger"></i> Trending in Tech</h5>
        <div id="trendingTechList" class="mt-2"></div>
      </div>
    </div>
  </div>
</div>

<!-- ========== FOOTER ========== -->
<footer class="bg-dark text-white pt-5 pb-4 mt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h4 class="fw-bold"><i class="bi bi-newspaper text-danger"></i> Daily Chronicle</h4>
        <p class="text-secondary">Your source for world-class tech journalism and beyond.</p>
      </div>
      <div class="col-md-2 mb-4"><h5>Explore</h5><ul class="list-unstyled"><li><a href="#" class="text-secondary">Reviews</a></li><li><a href="#" class="text-secondary">Podcast</a></li></ul></div>
      <div class="col-md-3 mb-4"><h5>Legal</h5><ul class="list-unstyled"><li><a href="#" class="text-secondary">Terms</a></li><li><a href="#" class="text-secondary">Privacy</a></li></ul></div>
    </div>
    <hr><div class="text-center text-secondary small">© 2025 Daily Chronicle — Tech category. All rights reserved.</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // ---------- TECH ARTICLES DUMMY DATA (enriched for filtering) ----------
  const techArticles = [
    { id: 1, title: "NVIDIA Blackwell Ultra: 10x performance leap for AI workloads", category: "gadgets", subCat: "ai", summary: "New GPU architecture promises to train trillion-parameter models in days.", date: "2025-03-28T10:30:00", timestamp: 1743167400000, views: 12400, author: "Sofia Ramirez", image: "https://picsum.photos/id/0/400/240" },
    { id: 2, title: "Google's Gemini Ultra 2.0 launches with multimodal reasoning", category: "ai", subCat: "ai", summary: "Deep integration with Android and Workspace, real-time translation.", date: "2025-03-27T14:15:00", timestamp: 1743084900000, views: 9800, author: "Daniel Park", image: "https://picsum.photos/id/91/400/240" },
    { id: 3, title: "Critical Zero-Day in popular password managers exposed", category: "cybersecurity", subCat: "cybersecurity", summary: "Security researchers urge immediate updates for millions of users.", date: "2025-03-26T08:45:00", timestamp: 1742993100000, views: 15700, author: "Elena Wu", image: "https://picsum.photos/id/96/400/240" },
    { id: 4, title: "Apple's foldable iPad: what to expect from the hybrid device", category: "gadgets", subCat: "gadgets", summary: "Rumored 18.8-inch screen with under-display Face ID.", date: "2025-03-25T11:20:00", timestamp: 1742908800000, views: 8700, author: "Mark Gurman", image: "https://picsum.photos/id/20/400/240" },
    { id: 5, title: "Quantum Computing breakthrough: Error correction solved", category: "futuretech", subCat: "futuretech", summary: "Google Quantum AI demonstrates logical qubit with exponential error reduction.", date: "2025-03-24T09:00:00", timestamp: 1742821200000, views: 11200, author: "Dr. Arjun Mehta", image: "https://picsum.photos/id/77/400/240" },
    { id: 6, title: "Meta's open-source Llama 5: small language models rival GPT-4", category: "ai", subCat: "ai", summary: "Efficient models for on-device inference, open weights released.", date: "2025-03-23T16:30:00", timestamp: 1742747400000, views: 10200, author: "Rachel Kim", image: "https://picsum.photos/id/26/400/240" },
    { id: 7, title: "New Wi-Fi 8 standard: faster, smarter and less congested", category: "gadgets", subCat: "futuretech", summary: "IEEE 802.11bn aims for 100 Gbps and deterministic latency.", date: "2025-03-22T07:45:00", timestamp: 1742643900000, views: 5400, author: "Alex Turner", image: "https://picsum.photos/id/15/400/240" },
    { id: 8, title: "Ransomware gang leaks data from major healthcare provider", category: "cybersecurity", subCat: "cybersecurity", summary: "Hackers demand $15 million; federal agencies investigating.", date: "2025-03-21T13:10:00", timestamp: 1742569800000, views: 19300, author: "Lisa Chen", image: "https://picsum.photos/id/82/400/240" },
    { id: 9, title: "Tesla Bot Optimus: mass production begins in 2026", category: "futuretech", subCat: "futuretech", summary: "Humanoid robots to assist in factories, pre-orders announced.", date: "2025-03-20T10:00:00", timestamp: 1742479200000, views: 14600, author: "John Rivers", image: "https://picsum.photos/id/2/400/240" },
    { id: 10, title: "OpenAI's GPT-5 training details leaked: 100 trillion parameters", category: "ai", subCat: "ai", summary: "Multimodal, video-native model rumored for late 2025 release.", date: "2025-03-19T18:20:00", timestamp: 1742408400000, views: 22300, author: "Maya Leung", image: "https://picsum.photos/id/76/400/240" },
    { id: 11, title: "Samsung’s rollable laptop concept steals the show", category: "gadgets", subCat: "gadgets", summary: "Expandable display transforms from 13-inch to 17-inch.", date: "2025-03-18T09:30:00", timestamp: 1742304600000, views: 6700, author: "Chris Evans", image: "https://picsum.photos/id/104/400/240" },
    { id: 12, title: "CISA warns of new AI-powered social engineering attacks", category: "cybersecurity", subCat: "cybersecurity", summary: "Deepfake audio and video used in corporate fraud schemes.", date: "2025-03-17T12:15:00", timestamp: 1742220900000, views: 8100, author: "Nina Kapoor", image: "https://picsum.photos/id/29/400/240" }
  ];

  // trending data static
  const trendingTech = [
    "OpenAI's Q-Star breakthrough details", "NVIDIA Blackwell Ultra price leak", "EU's new AI Act enforcement", "Apple's AR glasses delayed"
  ];

  let currentFilter = "all";
  let currentSort = "latest";

  function filterAndSortArticles() {
    let filtered = [...techArticles];
    if (currentFilter !== "all") {
      filtered = filtered.filter(article => article.category === currentFilter);
    }
    if (currentSort === "latest") {
      filtered.sort((a,b) => b.timestamp - a.timestamp);
    } else if (currentSort === "popular") {
      filtered.sort((a,b) => b.views - a.views);
    }
    return filtered;
  }

  function renderArticleGrid() {
    const container = document.getElementById('articlesGridContainer');
    const resultsSpan = document.getElementById('resultCount');
    const articles = filterAndSortArticles();
    resultsSpan.innerText = `${articles.length} article${articles.length !== 1 ? 's' : ''}`;
    if (articles.length === 0) {
      container.innerHTML = `<div class="col-12 text-center p-5"><i class="bi bi-database-slash fs-1"></i><p class="mt-2">No articles match this filter. Try another category.</p></div>`;
      return;
    }
    let html = '';
    articles.forEach(article => {
      let categoryLabel = '';
      if (article.category === 'ai') categoryLabel = '🤖 AI';
      else if (article.category === 'gadgets') categoryLabel = '📱 Gadgets';
      else if (article.category === 'cybersecurity') categoryLabel = '🔐 Cybersecurity';
      else categoryLabel = '🚀 Future Tech';
      const formattedDate = new Date(article.timestamp).toLocaleDateString('en-US', {month:'short', day:'numeric'});
      html += `
        <div class="col-md-6 col-lg-4">
          <div class="card news-card h-100">
            <img src="${article.image}" class="card-img" alt="${article.title}">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <span class="badge bg-dark mb-2">${categoryLabel}</span>
                <small class="text-muted"><i class="bi bi-eye"></i> ${article.views.toLocaleString()}</small>
              </div>
              <h5 class="card-title fw-bold">${article.title}</h5>
              <p class="card-text small text-secondary">${article.summary.substring(0, 95)}...</p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="d-flex gap-2 align-items-center"><img src="https://randomuser.me/api/portraits/${article.id % 2 === 0 ? 'women' : 'men'}/${30 + article.id}.jpg" width="28" height="28" class="rounded-circle"><small>${article.author}</small></div>
                <small class="text-muted">${formattedDate}</small>
              </div>
              <button class="btn btn-outline-danger btn-sm rounded-pill w-100 mt-3 read-article-btn" data-title="${article.title.replace(/'/g, "\\'")}">Read full story</button>
            </div>
          </div>
        </div>
      `;
    });
    container.innerHTML = html;
    attachReadButtons();
  }

  function attachReadButtons() {
    const btns = document.querySelectorAll('.read-article-btn');
    btns.forEach(btn => {
      btn.removeEventListener('click', handleArticleClick);
      btn.addEventListener('click', handleArticleClick);
    });
  }

  function handleArticleClick(e) {
    const title = e.currentTarget.getAttribute('data-title') || 'article';
    alert(`📖 Opening full article: "${title}". (Complete story would be displayed on article detail page.)`);
  }

  function renderTrendingTech() {
    const trendingContainer = document.getElementById('trendingTechList');
    let trendHtml = '<ul class="list-unstyled">';
    trendingTech.forEach((item, idx) => {
      trendHtml += `<li class="mb-2"><i class="bi bi-fire text-danger me-2"></i><a href="#" class="text-decoration-none text-dark">${item}</a></li>`;
    });
    trendHtml += '</ul>';
    trendingContainer.innerHTML = trendHtml;
    const links = trendingContainer.querySelectorAll('a');
    links.forEach(link => {
      link.addEventListener('click', (e) => { e.preventDefault(); alert('🔝 Trending story demo: full coverage would open.'); });
    });
  }

  // Filter and sort event listeners
  function initFilters() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active-filter'));
        btn.classList.add('active-filter');
        currentFilter = btn.getAttribute('data-filter');
        renderArticleGrid();
      });
    });
    const sortSelect = document.getElementById('sortSelect');
    if (sortSelect) {
      sortSelect.addEventListener('change', (e) => {
        currentSort = e.target.value;
        renderArticleGrid();
      });
    }
  }

  function initNewsletter() {
    const subBtn = document.getElementById('techSubscribeBtn');
    const msgDiv = document.getElementById('techSubscribeMsg');
    const emailInput = document.getElementById('newsletterTechEmail');
    if (subBtn) {
      subBtn.addEventListener('click', () => {
        const email = emailInput.value.trim();
        if (!email || !email.includes('@')) {
          msgDiv.innerHTML = '<span class="text-danger">Please enter a valid email address.</span>';
          setTimeout(() => msgDiv.innerHTML = '', 2500);
        } else {
          msgDiv.innerHTML = `✅ Thanks! Tech briefing will be sent to ${email} (demo).`;
          emailInput.value = '';
          setTimeout(() => msgDiv.innerHTML = '', 3000);
        }
      });
    }
  }

  function initSearchAndIcons() {
    const searchIcon = document.querySelector('.bi-search');
    if (searchIcon) searchIcon.addEventListener('click', () => alert('🔎 Search across tech category (demo). Future integration.'));
    const userIcon = document.querySelector('.bi-person-circle');
    if (userIcon) userIcon.addEventListener('click', () => alert('👤 Account dashboard (demo).'));
  }

  // pagination click simulation (demo)
  function initPaginationDemo() {
    const pageLinks = document.querySelectorAll('.pagination-custom .page-link');
    pageLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        if (!link.parentElement.classList.contains('disabled') && !link.parentElement.classList.contains('active')) {
          e.preventDefault();
          alert('📄 Pagination demo: In full version this would load page 2 with more tech articles.');
        } else if (link.innerText === 'Next' || link.innerText === 'Previous') {
          e.preventDefault();
          alert('Pagination demo: navigate between pages would be fully functional.');
        }
      });
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    renderArticleGrid();
    renderTrendingTech();
    initFilters();
    initNewsletter();
    initSearchAndIcons();
    initPaginationDemo();
  });
</script>
</body>
</html>