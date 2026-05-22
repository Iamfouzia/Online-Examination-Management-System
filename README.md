# OEMS — Online Examination Management System

A web-based examination platform built with PHP and MySQL, enabling students to attempt category-based timed quizzes and receive instant results.

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Frontend | HTML5, CSS3, Bootstrap 3.4, JavaScript |
| Backend | PHP 7+ (OOP) |
| Database | MySQL (InnoDB) |
| Server | Apache (XAMPP) |

---

## System Architecture

```
OEMS/
├── index.php              # Entry point — login/register redirect
├── login.php              # Student login form
├── Register.php           # Student registration form
├── home.php               # Dashboard — category selection
├── qus_show.php           # Exam interface — timed quiz renderer
├── answer.php             # Result card — score evaluation
├── adminlogin.php         # Admin authentication
├── admin/
│   ├── dashboard.php      # Admin panel
│   ├── category.php       # Category management
│   ├── question.php       # Question management
│   └── add_quiz.php       # Quiz entry
├── class/
│   └── users.php          # Core OOP class — all DB operations
├── css/                   # Stylesheets
├── img/                   # Static assets
└── project.sql            # Database schema + seed data
```

---

## Core Algorithm Flow

### Student Exam Flow

```
1. Student registers / logs in
        ↓
2. Session started → email stored in $_SESSION
        ↓
3. Home page → categories fetched from DB → student selects one
        ↓
4. qus_show.php → questions fetched by cat_id (ORDER BY RAND())
   → countdown timer starts (10 minutes)
        ↓
5. Student submits → POST data sent to answer.php
        ↓
6. answer() method iterates questions:
   - question['ans'] == POST[id]  → right++
   - POST[id] == 'no_attempt'     → wrong++
   - else                         → no_answer++
        ↓
7. Score = (right / total) * 100
   Pass if score >= 50, else Fail
        ↓
8. Result card rendered with student profile + score breakdown
```

### Admin Flow

```
Admin Login → Authenticated via admin table
     ↓
Dashboard → Add/manage categories → Add questions per category
     ↓
Questions stored with: question_text, option_a/b/c, correct_ans, cat_id
```

---

## Database Schema

### `signup` — Student Records
| Column | Type | Description |
|--------|------|-------------|
| id | INT (PK) | Auto increment |
| name | VARCHAR(35) | Student name |
| email | VARCHAR(35) | Login credential |
| password | VARCHAR(255) | Plain text (stored as-is) |
| phone | VARCHAR(255) | Contact number |

### `category` — Exam Categories
| Column | Type | Description |
|--------|------|-------------|
| id | INT (PK) | Auto increment |
| cat_name | VARCHAR | Category label (e.g. AI, PHP, OOP) |

### `questions` — Question Bank
| Column | Type | Description |
|--------|------|-------------|
| id | INT (PK) | Auto increment |
| cat_id | INT (FK) | Links to category |
| question | TEXT | Question text |
| a / b / c | VARCHAR | Answer options |
| ans | VARCHAR | Correct answer value |

### `admin` — Admin Credentials
| Column | Type |
|--------|------|
| id | INT (PK) |
| email | VARCHAR |
| password | VARCHAR |

---

## OOP Design — `class/users.php`

Single class `users` handles all database interaction:

| Method | Purpose |
|--------|---------|
| `__construct()` | Opens MySQLi connection |
| `signup($data)` | Inserts new student record |
| `signin($email, $pass)` | Authenticates student, sets session |
| `users_profile($email)` | Fetches student profile data |
| `cat_show()` | Returns all exam categories |
| `qus_show($cat_id)` | Returns randomized questions by category |
| `answer($POST)` | Evaluates submitted answers, returns score array |
| `adminlogin($email, $pass)` | Authenticates admin user |
| `add_quiz($query)` | Inserts new question |
| `add_cat($query)` | Inserts new category |
| `url($url)` | HTTP redirect wrapper |

---

## Local Setup

```bash
# 1. Clone repository
git clone https://github.com/yourusername/OEMS.git

# 2. Move to XAMPP htdocs
mv OEMS/ C:/xampp/htdocs/

# 3. Start Apache + MySQL via XAMPP Control Panel

# 4. Import database
# Open: http://localhost/phpmyadmin
# Create database: oems
# Import: project.sql

# 5. Update DB connection in class/users.php
$host     = "localhost";
$username = "root";
$pass     = "";
$db_name  = "oems";

# 6. Run
# Open: http://localhost/OEMS/index.php
```

---

## Features

- Student registration and session-based login
- 10-category exam selection (AI, PHP, OOP, and more)
- Randomized question order per attempt
- 10-minute countdown timer with auto-submit
- Instant result card with score breakdown
- Pass/Fail evaluation at 50% threshold
- Admin panel for question and category management
