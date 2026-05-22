<?php
include("class/users.php");
error_reporting(0);
$email = $_SESSION['email'];
$profile = new users;
$profile->users_profile($email);
$profile->cat_show();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OEMS - Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: #0f1117;
      color: #e2e8f0;
      min-height: 100vh;
    }

    /* ===== NAVBAR ===== */
    .navbar-custom {
      background: #1a1d2e;
      border-bottom: 1px solid #2d3748;
      padding: 0 2rem;
      display: flex;
      align-items: center;
      height: 64px;
      gap: 1rem;
    }
    .nav-brand {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 18px;
      font-weight: 700;
      color: #fff;
      text-decoration: none;
    }
    .nav-brand-icon {
      width: 36px; height: 36px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      font-size: 13px; font-weight: 700; color: #fff;
    }
    .nav-links { display: flex; gap: 4px; flex: 1; }
    .nav-link {
      padding: 8px 18px;
      border-radius: 8px;
      color: #94a3b8;
      font-size: 14px;
      cursor: pointer;
      border: none;
      background: none;
      transition: all .2s;
      text-decoration: none;
    }
    .nav-link.active, .nav-link:hover {
      background: #2d3748;
      color: #fff;
    }

    /* ===== TAB PAGES ===== */
    .tab-page { display: none; padding: 2.5rem 2rem; }
    .tab-page.active { display: block; }

    /* ===== HOME ===== */
    .hero { text-align: center; padding: 2rem 0 1.5rem; }
    .hero h2 { font-size: 28px; font-weight: 700; color: #fff; margin-bottom: 8px; }
    .hero p  { color: #64748b; font-size: 15px; }

    .start-btn {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: #fff; border: none;
      padding: 14px 40px;
      border-radius: 12px;
      font-size: 16px; font-weight: 600;
      cursor: pointer;
      margin: 1.5rem auto;
      display: block;
      transition: opacity .2s;
    }
    .start-btn:hover { opacity: .85; }

    .features {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      max-width: 680px;
      margin: 0 auto 2rem;
    }
    .feat-card {
      background: #1e2235;
      border: 1px solid #2d3748;
      border-radius: 12px;
      padding: 16px;
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .feat-icon {
      width: 42px; height: 42px;
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      font-size: 20px; flex-shrink: 0;
    }
    .feat-title { font-size: 13px; font-weight: 600; color: #e2e8f0; }
    .feat-desc  { font-size: 12px; color: #64748b; margin-top: 2px; }

    /* ===== SELECT BOX ===== */
    .select-box {
      max-width: 480px;
      margin: 0 auto;
      background: #1e2235;
      border: 1px solid #2d3748;
      border-radius: 16px;
      padding: 2rem;
      display: none;
    }
    .select-box.show { display: block; }
    .select-box select {
      width: 100%;
      background: #0f1117;
      border: 1px solid #2d3748;
      border-radius: 10px;
      padding: 12px 16px;
      color: #e2e8f0;
      font-size: 15px;
      margin-bottom: 16px;
    }
    .select-box select option { background: #1a1d2e; }
    .select-box .submit-btn {
      width: 100%;
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: #fff; border: none;
      padding: 12px;
      border-radius: 10px;
      font-size: 15px; font-weight: 600;
      cursor: pointer;
    }

    /* ===== PROFILE ===== */
    .profile-card {
      background: #1e2235;
      border: 1px solid #2d3748;
      border-radius: 16px;
      overflow: hidden;
      max-width: 700px;
    }
    .profile-header {
      background: rgba(102,126,234,.1);
      padding: 1.5rem;
      border-bottom: 1px solid #2d3748;
      display: flex;
      align-items: center;
      gap: 16px;
    }
    .avatar {
      width: 56px; height: 56px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 20px; font-weight: 700; color: #fff;
    }
    .profile-name  { font-size: 18px; font-weight: 600; color: #fff; }
    .profile-email { font-size: 13px; color: #64748b; margin-top: 2px; }
    .profile-table { width: 100%; border-collapse: collapse; }
    .profile-table td {
      padding: 14px 1.5rem;
      border-bottom: 1px solid #1a1d2e;
      font-size: 14px;
    }
    .profile-table td:first-child { color: #64748b; width: 150px; }
    .profile-table td:last-child  { color: #e2e8f0; font-weight: 500; }

    /* ===== ABOUT ===== */
    .about-card {
      background: #1e2235;
      border: 1px solid #2d3748;
      border-radius: 16px;
      padding: 2rem;
      max-width: 700px;
    }
    .about-card h3 { font-size: 18px; font-weight: 600; color: #a78bfa; margin-bottom: 1rem; }
    .about-card p  { color: #94a3b8; font-size: 15px; line-height: 1.9; }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar-custom">
  <a class="nav-brand" href="#">
    <div class="nav-brand-icon">OE</div>
    OEMS
  </a>
  <div class="nav-links">
    <button class="nav-link active" onclick="showTab('home', this)">Home</button>
    <button class="nav-link" onclick="showTab('profile', this)">Profile</button>
    <button class="nav-link" onclick="showTab('about', this)">About</button>
    <a class="nav-link" href="index.php">Logout</a>
  </div>
</nav>

<!-- HOME TAB -->
<div id="home" class="tab-page active">
  <div class="hero">
    <h2>Welcome Back! 👋</h2>
    <p>Ready to test your knowledge? Select a category and begin your exam.</p>
    <button class="start-btn" onclick="toggleSelect()">🚀 Start Your Exam</button>
  </div>

  <div class="features">
    <div class="feat-card">
      <div class="feat-icon" style="background:rgba(102,126,234,.15);">⏱️</div>
      <div>
        <div class="feat-title">Timed Exams</div>
        <div class="feat-desc">Auto-submit on time out</div>
      </div>
    </div>
    <div class="feat-card">
      <div class="feat-icon" style="background:rgba(16,185,129,.15);">⚡</div>
      <div>
        <div class="feat-title">Instant Results</div>
        <div class="feat-desc">Score right away</div>
      </div>
    </div>
    <div class="feat-card">
      <div class="feat-icon" style="background:rgba(245,158,11,.15);">📚</div>
      <div>
        <div class="feat-title">10 Categories</div>
        <div class="feat-desc">PHP, AI, OOP & more</div>
      </div>
    </div>
  </div>

  <div class="select-box" id="selectBox">
    <p style="color:#94a3b8; font-size:14px; margin-bottom:12px;">Choose your exam category:</p>
    <form method="post" action="qus_show.php">
      <select name="cat">
        <option>Select category</option>
        <?php foreach ($profile->cat as $category): ?>
          <option value="<?php echo $category['id']; ?>">
            <?php echo $category['cat_name']; ?>
          </option>
        <?php endforeach; ?>
      </select>
      <button type="submit" class="submit-btn">Submit &amp; Start →</button>
    </form>
  </div>
</div>

<!-- PROFILE TAB -->
<div id="profile" class="tab-page">
  <?php
  $user = null;
  foreach ($profile->data as $row) { $user = $row; }
  ?>
  <div class="profile-card">
    <div class="profile-header">
      <div class="avatar">
        <?php echo strtoupper(substr($user['name'] ?? 'U', 0, 2)); ?>
      </div>
      <div>
        <div class="profile-name"><?php echo $user['name'] ?? ''; ?></div>
        <div class="profile-email"><?php echo $user['email'] ?? ''; ?></div>
      </div>
    </div>
    <table class="profile-table">
      <tr><td>Student ID</td><td>#<?php echo $user['id'] ?? ''; ?></td></tr>
      <tr><td>Full Name</td><td><?php echo $user['name'] ?? ''; ?></td></tr>
      <tr><td>Email</td><td><?php echo $user['email'] ?? ''; ?></td></tr>
      <tr><td>Password</td><td>••••••••</td></tr>
      <tr><td>Phone</td><td><?php echo $user['phone'] ?? ''; ?></td></tr>
    </table>
  </div>
</div>

<!-- ABOUT TAB -->
<div id="about" class="tab-page">
  <div class="about-card">
    <h3>About OEMS</h3>
    <p>
      This project is used for conducting online objective tests. The system has automated
      answer checking based on user interaction. It helps faculties to create subject-based
      tests and allows instructors to run online quizzes — improving academic performance
      and enabling feedback from both students and parents.
    </p>
  </div>
</div>

<script>
  function showTab(id, btn) {
    document.querySelectorAll('.tab-page').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.nav-link').forEach(b => b.classList.remove('active'));
    document.getElementById(id).classList.add('active');
    btn.classList.add('active');
    document.getElementById('selectBox').classList.remove('show');
  }
  function toggleSelect() {
    document.getElementById('selectBox').classList.toggle('show');
  }
</script>

</body>
</html>