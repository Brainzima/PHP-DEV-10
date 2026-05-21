<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Daily Chronicle | Search Results</title>
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
      background-color: #f8f9fc;
      color: #1a202c;
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
    /* search hero */
    .search-hero {
      background: linear-gradient(105deg, #0f172a 0%, #1e2a44 100%);
      padding: 2.5rem 0;
      border-radius: 0 0 2rem 2rem;
      margin-bottom: 2rem;
    }
    .search-box {
      background: white;
      border-radius: 60px;
      padding: 6px 6px 6px 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .search-box input {
      border: none;
      padding: 12px 0;
      font-size: 1rem;
      outline: none;
      flex: 1;
    }
    .search-box button {
      border-radius: 50px;
      padding: 10px 28px;
      font-weight: 600;
    }
    .result-card {
      transition: all 0.2s ease;
      border: none;
      border-radius: 1.2rem;
      background: white;
      box-shadow: 0 2px 12px rgba(0,0,0,0.04);
      overflow: hidden;
      margin-bottom: 1.5rem;
    }
    .result-card:hover {
      transform: translateX(5px);
      box-shadow: 0 12px 24px rgba(0,0,0,0.08);
    }
    .result-img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }
    .filter-sidebar {
      background: white;
      border-radius: 1.2rem;
      padding: 1.5rem;
      position: sticky;
      top: 90px;
    }
    .filter-check {
      margin-bottom: 12px;
    }
    .badge-date {
      background: #e9ecef;
      color: #2d3748;
      font-weight: 500;
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
      .search-box { border-radius: 30px; }
      .search-box input { font-size: 0.9rem; }
    }
  </style>
</head>
<body>

<!-- ====================== NAVBAR ====================== -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-2">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="bi bi-newspaper me-2 text-danger"></i>Daily Chronicle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#searchNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="searchNavbar">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">World</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Business</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Entertainment</a></li>
      </ul>
      <div class="d-flex gap-3">
        <i class="bi bi-person-circle fs-5 text-secondary"></i>
      </div>
    </div>
  </div>
</nav>

<!-- ========== SEARCH RESULT HERO ========== -->
<section class="search-hero text-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="search-box d-flex align-items-center justify-content-between bg-white">
          <input type="text" id="searchInputField" class="form-control-lg border-0 bg-transparent" placeholder="Search news, topics, or authors..." value="artificial intelligence">
          <button id="searchButton" class="btn btn-danger rounded-pill px-4"><i class="bi bi-search me-1"></i> Search</button>
        </div>
        <div class="mt-3 d-flex justify-content-between align-items-center flex-wrap">
          <div><i class="bi bi-info-circle-fill me-1"></i> Showing results for: <strong id="queryDisplay">artificial intelligence</strong></div>
          <div id="resultStats" class="small bg-white bg-opacity-25 px-3 py-1 rounded-pill">0 articles found</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== MAIN CONTENT: RESULTS + SIDEBAR FILTERS ========== -->
<div class="container mb-5">
  <div class="row g-5">
    <!-- LEFT: SEARCH RESULTS DYNAMIC AREA -->
    <div class="col-lg-8">
      <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
        <h4 class="fw-bold mb-0"><i class="bi bi-files me-2 text-danger"></i> Search Results</h4>
        <select id="sortResults" class="form-select w-auto rounded-pill border-0 bg-light shadow-sm">
          <option value="relevance">Relevance</option>
          <option value="latest">Latest first</option>
          <option value="oldest">Oldest first</option>
        </select>
      </div>
      <div id="resultsContainer">
        <!-- dynamic search results injected here -->
        <div class="text-center py-5" id="loadingPlaceholder">Loading results...</div>
      </div>
      <!-- Pagination demo -->
      <div class="d-flex justify-content-center mt-4" id="paginationWrapper">
        <nav>
          <ul class="pagination pagination-custom" id="demoPagination">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- RIGHT: FILTER SIDEBAR -->
    <div class="col-lg-4">
      <div class="filter-sidebar">
        <h5 class="fw-bold mb-3"><i class="bi bi-sliders2"></i> Refine results</h5>
        <div class="mb-3">
          <label class="fw-semibold">Categories</label>
          <div class="mt-2">
            <div class="form-check filter-check">
              <input class="form-check-input" type="checkbox" value="Technology" id="catTech" checked>
              <label class="form-check-label" for="catTech">Technology</label>
            </div>
            <div class="form-check filter-check">
              <input class="form-check-input" type="checkbox" value="Business" id="catBusiness" checked>
              <label class="form-check-label" for="catBusiness">Business</label>
            </div>
            <div class="form-check filter-check">
              <input class="form-check-input" type="checkbox" value="Science" id="catScience" checked>
              <label class="form-check-label" for="catScience">Science</label>
            </div>
            <div class="form-check filter-check">
              <input class="form-check-input" type="checkbox" value="Politics" id="catPolitics" checked>
              <label class="form-check-label" for="catPolitics">Politics</label>
            </div>
            <div class="form-check filter-check">
              <input class="form-check-input" type="checkbox" value="Health" id="catHealth" checked>
              <label class="form-check-label" for="catHealth">Health</label>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label class="fw-semibold">Date range</label>
          <select id="dateFilter" class="form-select form-select-sm rounded-pill mt-1">
            <option value="any">Any time</option>
            <option value="week">Past week</option>
            <option value="month">Past month</option>
            <option value="year">Past year</option>
          </select>
        </div>
        <button id="applyFiltersBtn" class="btn btn-danger w-100 rounded-pill mt-2"><i class="bi bi-funnel-fill"></i> Apply filters</button>
        <button id="resetFiltersBtn" class="btn btn-outline-secondary w-100 rounded-pill mt-2">Reset all</button>
      </div>
      <div class="bg-white rounded-4 p-3 mt-4 shadow-sm text-center">
        <i class="bi bi-megaphone fs-2 text-secondary"></i>
        <p class="small text-secondary mb-0 mt-1">Advertisement placeholder</p>
      </div>
    </div>
  </div>
</div>

<!-- ========== FOOTER ========== -->
<footer class="bg-dark text-white pt-5 pb-4 mt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4"><h4 class="fw-bold"><i class="bi bi-newspaper text-danger"></i> Daily Chronicle</h4><p class="text-secondary">Unbiased news, in-depth analysis, and global perspectives.</p></div>
      <div class="col-md-2 mb-4"><h5>Explore</h5><ul class="list-unstyled"><li><a href="#" class="text-secondary">Topics</a></li><li><a href="#" class="text-secondary">Archives</a></li></ul></div>
      <div class="col-md-3 mb-4"><h5>Legal</h5><ul class="list-unstyled"><li><a href="#" class="text-secondary">Privacy</a></li><li><a href="#" class="text-secondary">Terms</a></li></ul></div>
    </div>
    <hr><div class="text-center text-secondary small">© 2025 Daily Chronicle — Search results demo. All rights reserved.</div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // ---------- DUMMY NEWS DATABASE (articles for search) ----------
  const allArticles = [
    { id: 1, title: "The Rise of Artificial Intelligence in Healthcare", category: "Technology", date: "2025-03-28", content: "AI algorithms now diagnose diseases faster than human radiologists in trials.", author: "Sarah Johnson", image: "https://picsum.photos/id/0/400/220" },
    { id: 2, title: "Global Economy Shows Resilience Despite AI Disruption", category: "Business", date: "2025-03-27", content: "Central banks adjust policies as generative AI boosts productivity across sectors.", author: "Michael Chen", image: "https://picsum.photos/id/20/400/220" },
    { id: 3, title: "New AI Model Outperforms GPT-4 in Reasoning Benchmarks", category: "Technology", date: "2025-03-26", content: "Researchers unveil a breakthrough architecture called 'ReasoningNet'.", author: "Alex Morgan", image: "https://picsum.photos/id/91/400/220" },
    { id: 4, title: "Artificial Intelligence in Finance: Risk or Reward?", category: "Business", date: "2025-03-25", content: "Banks leverage AI for fraud detection but face new regulatory challenges.", author: "Linda Wei", image: "https://picsum.photos/id/26/400/220" },
    { id: 5, title: "Climate Change: AI Predicts Extreme Weather Patterns Earlier", category: "Science", date: "2025-03-24", content: "Machine learning models give 7-day advance warning for catastrophic events.", author: "Dr. James Carter", image: "https://picsum.photos/id/29/400/220" },
    { id: 6, title: "AI and Politics: How Algorithms Shape Election Campaigns", category: "Politics", date: "2025-03-23", content: "Targeted messaging and deepfakes raise concerns ahead of 2026 elections.", author: "Priya Mehta", image: "https://picsum.photos/id/96/400/220" },
    { id: 7, title: "Artificial Intelligence Art: Copyright Battles Intensify", category: "Technology", date: "2025-03-22", content: "Courts struggle to define ownership of AI-generated images.", author: "Emma Watson", image: "https://picsum.photos/id/106/400/220" },
    { id: 8, title: "Tech Giants Invest $50 Billion in AI Infrastructure", category: "Business", date: "2025-03-21", content: "Microsoft, Google and Amazon race to build AI data centers.", author: "Robert Kim", image: "https://picsum.photos/id/15/400/220" },
    { id: 9, title: "Breakthrough: AI Designs New Antibiotic to Fight Superbugs", category: "Science", date: "2025-03-20", content: "Deep learning identifies compound that kills resistant bacteria.", author: "Dr. Lisa Ray", image: "https://picsum.photos/id/127/400/220" },
    { id: 10, title: "Generative AI in Education: Personalized Tutors for Every Student", category: "Technology", date: "2025-03-19", content: "Schools adopt adaptive learning systems powered by LLMs.", author: "David Park", image: "https://picsum.photos/id/2/400/220" },
    { id: 11, title: "The Future of Work: Will AI Replace Software Engineers?", category: "Technology", date: "2025-03-18", content: "Developers pivot to prompt engineering and AI oversight roles.", author: "Nina Gupta", image: "https://picsum.photos/id/76/400/220" },
    { id: 12, title: "Healthcare AI Saves Millions: Early Detection Success Stories", category: "Health", date: "2025-03-17", content: "Hospitals report 40% improvement in cancer screening accuracy.", author: "Dr. Olivia Smith", image: "https://picsum.photos/id/104/400/220" },
    { id: 13, title: "OpenAI's Secret Project 'Q*' Leaked: AGI Breakthrough?", category: "Technology", date: "2025-03-16", content: "Rumors of reasoning capabilities spark ethical debate.", author: "Tom Walker", image: "https://picsum.photos/id/77/400/220" },
    { id: 14, title: "Cryptocurrency Rally Fueled by AI Trading Bots", category: "Business", date: "2025-03-15", content: "Algorithmic trading volume hits record highs in March.", author: "Sophia Lee", image: "https://picsum.photos/id/82/400/220" },
  ];

  // State variables
  let currentSearchQuery = "artificial intelligence";
  let currentFilters = {
    categories: ["Technology", "Business", "Science", "Politics", "Health"],
    dateRange: "any"
  };
  let currentSort = "relevance";
  let filteredResults = [];

  // Helper: filter articles by query and categories + date
  function filterArticles() {
    let results = allArticles.filter(article => {
      // search query match (title or content or author)
      const queryLower = currentSearchQuery.toLowerCase();
      const matchesQuery = article.title.toLowerCase().includes(queryLower) ||
                            article.content.toLowerCase().includes(queryLower) ||
                            article.author.toLowerCase().includes(queryLower);
      if (!matchesQuery) return false;

      // category filter
      if (!currentFilters.categories.includes(article.category)) return false;

      // date range filter
      if (currentFilters.dateRange !== "any") {
        const articleDate = new Date(article.date);
        const now = new Date();
        let diffDays = (now - articleDate) / (1000 * 60 * 60 * 24);
        if (currentFilters.dateRange === "week" && diffDays > 7) return false;
        if (currentFilters.dateRange === "month" && diffDays > 30) return false;
        if (currentFilters.dateRange === "year" && diffDays > 365) return false;
      }
      return true;
    });

    // sorting
    if (currentSort === "latest") {
      results.sort((a,b) => new Date(b.date) - new Date(a.date));
    } else if (currentSort === "oldest") {
      results.sort((a,b) => new Date(a.date) - new Date(b.date));
    } else {
      // relevance: keep default order but put exact title matches first (simple relevance boost)
      results.sort((a,b) => {
        const aTitleMatch = a.title.toLowerCase().includes(currentSearchQuery.toLowerCase()) ? 1 : 0;
        const bTitleMatch = b.title.toLowerCase().includes(currentSearchQuery.toLowerCase()) ? 1 : 0;
        if (aTitleMatch !== bTitleMatch) return bTitleMatch - aTitleMatch;
        return 0;
      });
    }
    return results;
  }

  function renderResults() {
    filteredResults = filterArticles();
    const container = document.getElementById('resultsContainer');
    const resultStats = document.getElementById('resultStats');
    const queryDisplaySpan = document.getElementById('queryDisplay');
    
    queryDisplaySpan.innerText = currentSearchQuery;
    resultStats.innerText = `${filteredResults.length} article${filteredResults.length !== 1 ? 's' : ''} found`;

    if (filteredResults.length === 0) {
      container.innerHTML = `<div class="text-center py-5 bg-white rounded-4 shadow-sm">
        <i class="bi bi-emoji-frown fs-1 text-secondary"></i>
        <h5 class="mt-3">No results found for "${currentSearchQuery}"</h5>
        <p class="text-secondary">Try different keywords or adjust filters.</p>
        <button id="suggestResetBtn" class="btn btn-outline-danger rounded-pill">Clear filters</button>
      </div>`;
      const resetBtnSuggestion = document.getElementById('suggestResetBtn');
      if (resetBtnSuggestion) resetBtnSuggestion.addEventListener('click', () => resetAllFilters());
      return;
    }

    let resultsHtml = '';
    filteredResults.forEach(article => {
      const formattedDate = new Date(article.date).toLocaleDateString('en-US', { year:'numeric', month:'long', day:'numeric' });
      resultsHtml += `
        <div class="result-card p-3 p-md-4">
          <div class="row g-3 align-items-center">
            <div class="col-md-3">
              <img src="${article.image}" class="result-img rounded-3" alt="${article.title}">
            </div>
            <div class="col-md-9">
              <span class="badge bg-danger mb-2">${article.category}</span>
              <h3 class="fs-5 fw-bold"><a href="#" class="text-dark text-decoration-none result-title-link">${article.title}</a></h3>
              <p class="text-secondary small mb-2">${article.content.substring(0, 120)}...</p>
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div><i class="bi bi-person-circle me-1"></i> ${article.author} • <i class="bi bi-calendar3 ms-2 me-1"></i> ${formattedDate}</div>
                <button class="btn btn-sm btn-outline-danger rounded-pill read-more-result" data-title="${article.title.replace(/['"]/g, '&quot;')}">Read full story</button>
              </div>
            </div>
          </div>
        </div>
      `;
    });
    container.innerHTML = resultsHtml;
    attachResultReadButtons();
  }

  function attachResultReadButtons() {
    const btns = document.querySelectorAll('.read-more-result');
    btns.forEach(btn => {
      btn.removeEventListener('click', handleResultRead);
      btn.addEventListener('click', handleResultRead);
    });
    const titleLinks = document.querySelectorAll('.result-title-link');
    titleLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        alert('📰 Full article would open in detail page (demo).');
      });
    });
  }

  function handleResultRead(e) {
    const title = e.currentTarget.getAttribute('data-title') || 'this article';
    alert(`📄 Opening full article: "${title}". (Complete story with multimedia.)`);
  }

  // Update filter categories from checkboxes
  function updateCategoryFilter() {
    const categories = [];
    if (document.getElementById('catTech').checked) categories.push('Technology');
    if (document.getElementById('catBusiness').checked) categories.push('Business');
    if (document.getElementById('catScience').checked) categories.push('Science');
    if (document.getElementById('catPolitics').checked) categories.push('Politics');
    if (document.getElementById('catHealth').checked) categories.push('Health');
    currentFilters.categories = categories;
  }

  function updateDateFilter() {
    currentFilters.dateRange = document.getElementById('dateFilter').value;
  }

  function applyAllFiltersAndRender() {
    updateCategoryFilter();
    updateDateFilter();
    renderResults();
  }

  function resetAllFilters() {
    // reset checkboxes
    document.getElementById('catTech').checked = true;
    document.getElementById('catBusiness').checked = true;
    document.getElementById('catScience').checked = true;
    document.getElementById('catPolitics').checked = true;
    document.getElementById('catHealth').checked = true;
    document.getElementById('dateFilter').value = 'any';
    document.getElementById('sortResults').value = 'relevance';
    currentSort = 'relevance';
    currentFilters.categories = ["Technology", "Business", "Science", "Politics", "Health"];
    currentFilters.dateRange = "any";
    renderResults();
  }

  function performNewSearch() {
    const queryInput = document.getElementById('searchInputField');
    let newQuery = queryInput.value.trim();
    if (newQuery === "") newQuery = "artificial intelligence";
    currentSearchQuery = newQuery;
    renderResults();
  }

  // pagination demo interactive: bind alert messages
  function initPaginationDemo() {
    const paginationLinks = document.querySelectorAll('#demoPagination .page-link');
    paginationLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        const parentLi = link.parentElement;
        if (!parentLi.classList.contains('disabled') && !parentLi.classList.contains('active')) {
          alert('📄 Pagination demo: In a full implementation, this would load page 2, 3, etc. Currently showing all matching results on page 1.');
        } else if (link.innerText === 'Next' || link.innerText === 'Previous') {
          alert('Full pagination would navigate through result pages.');
        }
      });
    });
  }

  function initSearchEvents() {
    const searchBtn = document.getElementById('searchButton');
    const inputField = document.getElementById('searchInputField');
    searchBtn.addEventListener('click', () => performNewSearch());
    inputField.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') performNewSearch();
    });
    const sortSelect = document.getElementById('sortResults');
    sortSelect.addEventListener('change', (e) => {
      currentSort = e.target.value;
      renderResults();
    });
    document.getElementById('applyFiltersBtn').addEventListener('click', () => applyAllFiltersAndRender());
    document.getElementById('resetFiltersBtn').addEventListener('click', () => resetAllFilters());
  }

  document.addEventListener('DOMContentLoaded', () => {
    // initial render with default query
    renderResults();
    initSearchEvents();
    initPaginationDemo();
    // also handle any external filter changes from url later
  });
</script>
</body>
</html>