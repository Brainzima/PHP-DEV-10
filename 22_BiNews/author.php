<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Daily Chronicle | Author: Dr. Michael Torres</title>
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
    /* author hero */
    .author-hero {
      background: linear-gradient(135deg, #0f172a 0%, #1e2a3a 100%);
      padding: 3rem 0 3rem 0;
      border-radius: 0 0 2rem 2rem;
      margin-bottom: 2rem;
    }
    .author-avatar {
      width: 160px;
      height: 160px;
      object-fit: cover;
      border: 5px solid rgba(255,255,255,0.3);
      border-radius: 50%;
    }
    .social-icon {
      background: rgba(255,255,255,0.15);
      width: 40px;
      height: 40px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      transition: 0.2s;
      color: white;
      font-size: 1.2rem;
    }
    .social-icon:hover {
      background: #dc3545;
      transform: translateY(-3px);
    }
    .stat-badge {
      background: rgba(255,255,255,0.12);
      backdrop-filter: blur(4px);
      padding: 8px 18px;
      border-radius: 40px;
    }
    /* article cards */
    .article-card {
      transition: all 0.3s ease;
      border: none;
      border-radius: 1.2rem;
      overflow: hidden;
      background: white;
      box-shadow: 0 8px 20px rgba(0,0,0,0.05);
      height: 100%;
    }
    .article-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 30px -12px rgba(0,0,0,0.12);
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
    .category-badge {
      background: #e9ecef;
      color: #1a5f7a;
      font-weight: 600;
      font-size: 0.7rem;
      padding: 5px 12px;
      border-radius: 30px;
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
    @media (max-width: 768px) {
      .navbar-brand { font-size: 1.4rem; }
      .author-avatar { width: 110px; height: 110px; }
      .author-hero { text-align: center; }
    }
  </style>
</head>
<body>

<!-- ====================== NAVBAR ====================== -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-2">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="bi bi-newspaper me-2 text-danger"></i>Daily Chronicle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#authorNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="authorNavbar">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">World</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Opinion</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Science</a></li>
      </ul>
      <div class="d-flex gap-3">
        <i class="bi bi-search fs-5 text-secondary" style="cursor: pointer;"></i>
        <i class="bi bi-person-circle fs-5 text-secondary"></i>
      </div>
    </div>
  </div>
</nav>

<!-- ========== AUTHOR PROFILE HERO SECTION ========== -->
<div class="author-hero text-white">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-3 text-center text-md-start">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Dr. Michael Torres" class="author-avatar shadow">
      </div>
      <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
          <span class="badge bg-danger">Senior Tech Economics Editor</span>
          <span class="stat-badge"><i class="bi bi-pencil-fill me-1"></i> 124 Articles</span>
          <span class="stat-badge"><i class="bi bi-calendar-week"></i> Since 2019</span>
        </div>
        <h1 class="display-5 fw-bold">Dr. Michael Torres</h1>
        <p class="lead opacity-75 mt-2">Award-winning journalist covering artificial intelligence, digital economies, and the intersection of tech & policy.</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-envelope"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-github"></i></a>
        </div>
      </div>
      <div class="col-md-3 text-md-end">
        <div class="bg-white bg-opacity-15 rounded-4 p-3">
          <div class="small text-uppercase">Reader rating</div>
          <div class="fs-2 fw-bold">4.9 <i class="bi bi-star-fill text-warning fs-5"></i></div>
          <div class="small">⭐ 2,400+ reviews</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== AUTHOR BIO & LATEST WORK ========== -->
<div class="container mb-5">
  <div class="row g-5">
    <!-- Left: Bio + recent activity -->
    <div class="col-lg-8">
      <div class="bg-white rounded-4 p-4 shadow-sm mb-4">
        <h4 class="fw-bold"><i class="bi bi-person-badge text-danger me-2"></i> Biography</h4>
        <p>Dr. Michael Torres holds a Ph.D. in Computational Economics from MIT and has spent over a decade analyzing the socio-economic impacts of emerging technologies. Before joining Daily Chronicle in 2019, he was a senior fellow at the Center for Digital Progress. His investigative series on AI labor markets won the 2023 Gerald Loeb Award.</p>
        <p>Michael is a frequent speaker at global forums including WEF Davos, SXSW, and TED. He believes in bridging the gap between complex innovation and public understanding. His newsletter "The Digital Horizon" reaches over 200k subscribers weekly.</p>
        <hr>
        <div class="d-flex flex-wrap gap-3">
          <div><i class="bi bi-geo-alt-fill text-secondary"></i> Based in San Francisco, CA</div>
          <div><i class="bi bi-award-fill text-secondary"></i> Winner: Tech Journalism Prize 2024</div>
          <div><i class="bi bi-book-half"></i> Author: "The Algorithmic Century"</div>
        </div>
      </div>

      <h3 class="fw-bold mb-3"><i class="bi bi-newspaper text-danger me-2"></i> Latest articles by Michael</h3>
      <div id="articlesContainer" class="row g-4">
        <!-- dynamic articles injected here -->
        <div class="col-12 text-center py-4">Loading articles...</div>
      </div>

      <!-- pagination -->
      <div class="d-flex justify-content-center mt-5">
        <nav>
          <ul class="pagination pagination-custom" id="authorPagination">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- Right Sidebar: Expertise, newsletter, top articles -->
    <div class="col-lg-4">
      <div class="sticky-top" style="top: 90px;">
        <div class="bg-white rounded-4 p-4 shadow-sm mb-4">
          <h5 class="fw-bold"><i class="bi bi-trophy-fill text-warning me-2"></i> Areas of expertise</h5>
          <div class="d-flex flex-wrap gap-2 mt-2">
            <span class="badge bg-light text-dark border px-3 py-2">Artificial Intelligence</span>
            <span class="badge bg-light text-dark border px-3 py-2">Tech Policy</span>
            <span class="badge bg-light text-dark border px-3 py-2">Digital Economy</span>
            <span class="badge bg-light text-dark border px-3 py-2">Future of Work</span>
            <span class="badge bg-light text-dark border px-3 py-2">Semiconductors</span>
          </div>
        </div>

        <div class="bg-white rounded-4 p-4 shadow-sm mb-4">
          <h5 class="fw-bold"><i class="bi bi-bar-chart-steps"></i> Most read</h5>
          <div id="topArticlesList" class="mt-2">
            <!-- dynamic top 3 -->
          </div>
        </div>

        <div class="bg-danger bg-opacity-10 rounded-4 p-4 text-center">
          <i class="bi bi-envelope-paper fs-1 text-danger"></i>
          <h5 class="mt-2">Subscribe to Michael's newsletter</h5>
          <p class="small">Get his weekly analysis on AI & markets.</p>
          <div class="input-group">
            <input type="email" id="authorNewsEmail" class="form-control form-control-sm rounded-start-pill" placeholder="Your best email">
            <button class="btn btn-danger btn-sm rounded-end-pill" id="authorSubscribeBtn">Subscribe</button>
          </div>
          <div id="authorSubMsg" class="small mt-2 text-success"></div>
        </div>

        <div class="mt-4 text-center bg-white p-3 rounded-4 shadow-sm">
          <i class="bi bi-megaphone fs-2 text-secondary"></i>
          <p class="small text-secondary mb-0">Advertisement placeholder</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== FOOTER ========== -->
<footer class="bg-dark text-white pt-5 pb-4 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h4 class="fw-bold"><i class="bi bi-newspaper text-danger"></i> Daily Chronicle</h4>
        <p class="text-secondary">Independent journalism with integrity and insight.</p>
      </div>
      <div class="col-md-2 mb-4"><h5>Sections</h5><ul class="list-unstyled"><li><a href="#" class="text-secondary">World</a></li><li><a href="#" class="text-secondary">Tech</a></li></ul></div>
      <div class="col-md-3 mb-4"><h5>Follow</h5><ul class="list-unstyled"><li><a href="#" class="text-secondary">Twitter</a></li><li><a href="#" class="text-secondary">LinkedIn</a></li></ul></div>
    </div>
    <hr><div class="text-center text-secondary small">© 2025 Daily Chronicle — Author page. All rights reserved.</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // ---------- DUMMY ARTICLES BY THIS AUTHOR (Dr. Michael Torres) ----------
  const authorArticles = [
    { id: 101, title: "The AI Revolution: How Generative Models Are Reshaping Global Economies", category: "Technology", date: "2025-03-28", summary: "From automated code generation to personalized medicine, the breadth of transformation is staggering. Economists weigh in on workforce shifts.", image: "https://picsum.photos/id/77/500/300", views: 12400, readTime: 8 },
    { id: 102, title: "Why the Next Tech Bubble Might Be AI Infrastructure", category: "Business", date: "2025-03-25", summary: "Venture capital pours into data centers and chips, raising concerns about overvaluation and energy costs.", image: "https://picsum.photos/id/0/500/300", views: 9800, readTime: 6 },
    { id: 103, title: "Inside the White House's Executive Order on AI Safety", category: "Politics", date: "2025-03-20", summary: "New federal standards mandate red-teaming for frontier models, a landmark step for regulation.", image: "https://picsum.photos/id/91/500/300", views: 15200, readTime: 10 },
    { id: 104, title: "Can Europe Catch Up in the Global AI Race?", category: "Technology", date: "2025-03-15", summary: "France and Germany pledge €50 billion for sovereign AI compute clusters amid US-China dominance.", image: "https://picsum.photos/id/20/500/300", views: 8700, readTime: 7 },
    { id: 105, title: "The Economic Paradox: AI Boosts Productivity but Widens Inequality", category: "Economy", date: "2025-03-10", summary: "New study shows wage gaps accelerating; universal basic income debates gain traction.", image: "https://picsum.photos/id/26/500/300", views: 11300, readTime: 9 },
    { id: 106, title: "Exclusive: Leaked Memo Reveals OpenAI's Next-Gen Model Capabilities", category: "Technology", date: "2025-03-05", summary: "Internal documents hint at multimodal agents with long-term memory and reasoning leaps.", image: "https://picsum.photos/id/96/500/300", views: 22300, readTime: 5 },
    { id: 107, title: "How AI Is Reshaping the 2026 Midterm Elections", category: "Politics", date: "2025-02-28", summary: "Campaigns use generative AI for hyper-personalized ads, raising disinformation alarms.", image: "https://picsum.photos/id/15/500/300", views: 14600, readTime: 8 },
    { id: 108, title: "NVIDIA, AMD, Intel: The Battle for AI Chip Supremacy", category: "Technology", date: "2025-02-20", summary: "Benchmarks, pricing wars, and supply chain shifts define the hardware landscape.", image: "https://picsum.photos/id/2/500/300", views: 13100, readTime: 7 }
  ];

  // Top read (most views)
  const topRead = [...authorArticles].sort((a,b) => b.views - a.views).slice(0, 3);

  let currentPage = 1;
  const articlesPerPage = 4;

  function renderArticles() {
    const container = document.getElementById('articlesContainer');
    const start = (currentPage - 1) * articlesPerPage;
    const paginatedArticles = authorArticles.slice(start, start + articlesPerPage);
    
    if (paginatedArticles.length === 0 && currentPage > 1) {
      currentPage = Math.max(1, Math.ceil(authorArticles.length / articlesPerPage));
      renderArticles(); // recursive safe fallback
      return;
    }

    let html = '';
    paginatedArticles.forEach(article => {
      const formattedDate = new Date(article.date).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
      html += `
        <div class="col-md-6">
          <div class="card article-card h-100">
            <img src="${article.image}" class="card-img-top" alt="${article.title}">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="category-badge">${article.category}</span>
                <small class="text-muted"><i class="bi bi-clock"></i> ${article.readTime} min read</small>
              </div>
              <h5 class="card-title fw-bold">${article.title}</h5>
              <p class="card-text small text-secondary">${article.summary.substring(0, 100)}...</p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <small class="text-muted"><i class="bi bi-calendar3"></i> ${formattedDate}</small>
                <small><i class="bi bi-eye"></i> ${article.views.toLocaleString()}</small>
                <button class="btn btn-sm btn-outline-danger rounded-pill read-article-btn" data-title="${article.title.replace(/['"]/g, '&quot;')}">Read</button>
              </div>
            </div>
          </div>
        </div>
      `;
    });
    container.innerHTML = html;
    attachArticleReadEvents();
    updatePagination();
  }

  function attachArticleReadEvents() {
    const btns = document.querySelectorAll('.read-article-btn');
    btns.forEach(btn => {
      btn.removeEventListener('click', handleArticleClick);
      btn.addEventListener('click', handleArticleClick);
    });
  }

  function handleArticleClick(e) {
    const title = e.currentTarget.getAttribute('data-title') || 'article';
    alert(`📖 Opening full story: "${title}"\n(Full article detail page would appear here with author commentary.)`);
  }

  function updatePagination() {
    const totalPages = Math.ceil(authorArticles.length / articlesPerPage);
    const paginationUl = document.querySelector('#authorPagination');
    if (!paginationUl) return;
    let paginationHtml = `
      <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
        <a class="page-link" href="#" data-page="prev">Previous</a>
      </li>
    `;
    for (let i = 1; i <= totalPages; i++) {
      paginationHtml += `
        <li class="page-item ${i === currentPage ? 'active' : ''}">
          <a class="page-link" href="#" data-page="${i}">${i}</a>
        </li>
      `;
    }
    paginationHtml += `
      <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
        <a class="page-link" href="#" data-page="next">Next</a>
      </li>
    `;
    paginationUl.innerHTML = paginationHtml;
    
    // attach pagination events
    const pageLinks = paginationUl.querySelectorAll('.page-link');
    pageLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const pageValue = link.getAttribute('data-page');
        if (pageValue === 'prev' && currentPage > 1) {
          currentPage--;
          renderArticles();
        } else if (pageValue === 'next' && currentPage < totalPages) {
          currentPage++;
          renderArticles();
        } else if (!isNaN(parseInt(pageValue))) {
          currentPage = parseInt(pageValue);
          renderArticles();
        }
      });
    });
  }

  function renderTopArticles() {
    const container = document.getElementById('topArticlesList');
    let listHtml = '<ul class="list-unstyled">';
    topRead.forEach((article, idx) => {
      listHtml += `
        <li class="mb-3 pb-2 border-bottom">
          <div class="d-flex gap-2">
            <span class="fw-bold text-danger">${idx+1}</span>
            <div>
              <a href="#" class="text-decoration-none text-dark fw-semibold">${article.title}</a>
              <div class="small text-muted"><i class="bi bi-eye"></i> ${article.views.toLocaleString()} views</div>
            </div>
          </div>
        </li>
      `;
    });
    listHtml += '</ul>';
    container.innerHTML = listHtml;
    const links = container.querySelectorAll('a');
    links.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        alert('⭐ Full article would open. This is a demo of top-read section.');
      });
    });
  }

  // Newsletter subscription (sidebar)
  function initAuthorNewsletter() {
    const subBtn = document.getElementById('authorSubscribeBtn');
    const msgDiv = document.getElementById('authorSubMsg');
    const emailInput = document.getElementById('authorNewsEmail');
    if (subBtn) {
      subBtn.addEventListener('click', () => {
        const email = emailInput.value.trim();
        if (!email || !email.includes('@')) {
          msgDiv.innerHTML = '<span class="text-danger">Please enter a valid email address.</span>';
          setTimeout(() => msgDiv.innerHTML = '', 2500);
        } else {
          msgDiv.innerHTML = `✅ Thanks! Michael's newsletter will arrive at ${email} (demo).`;
          emailInput.value = '';
          setTimeout(() => msgDiv.innerHTML = '', 3000);
        }
      });
    }
  }

  // social icon demo popups
  function initSocialIcons() {
    const socialIcons = document.querySelectorAll('.social-icon');
    socialIcons.forEach(icon => {
      icon.addEventListener('click', (e) => {
        e.preventDefault();
        const platform = icon.querySelector('i')?.classList[1]?.replace('bi-', '') || 'social';
        alert(`🔗 Connect with Dr. Michael Torres on ${platform} (demo integration).`);
      });
    });
    const searchIcon = document.querySelector('.bi-search');
    if (searchIcon) searchIcon.addEventListener('click', () => alert('🔍 Global search demo: would open search page.'));
    const userIcon = document.querySelector('.bi-person-circle');
    if (userIcon) userIcon.addEventListener('click', () => alert('👤 Account area (demo).'));
  }

  // Initialize on load
  document.addEventListener('DOMContentLoaded', () => {
    renderArticles();
    renderTopArticles();
    initAuthorNewsletter();
    initSocialIcons();
  });
</script>
</body>
</html>