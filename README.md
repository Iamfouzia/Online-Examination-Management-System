<div align="center">

# 🎓 Online Examination Management System
### OEMS: A Web-Based Timed Quiz & Result Platform

![PHP](https://img.shields.io/badge/PHP-7%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-InnoDB-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-3.4-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-XAMPP-D22128?style=for-the-badge&logo=apache&logoColor=white)

> A full-stack web application that enables students to attempt category-based timed examinations and receive instant evaluated results built with core PHP OOP and MySQL.

</div>

---

## 📌 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [System Architecture](#system-architecture)
- [Database Schema](#database-schema)
- [Algorithm Flow](#algorithm-flow)
- [OOP Design](#oop-design)
- [Local Setup](#local-setup)
- [Screenshots](#screenshots)
- [Developer](#developer)

---

## Overview

OEMS is a session-based online examination platform where students register, select an exam category, attempt a randomized timed quiz, and instantly receive a detailed result card with pass/fail status. Admins manage categories and questions through a protected dashboard.

---

## Features

- Session-based student authentication (register / login / logout)
- 10 exam categories — AI, PHP, OOP, and more
- Randomized question order on every attempt
- 10-minute countdown timer with auto-submit on timeout
- Instant result card — right, wrong, unattempted breakdown
- Pass/Fail evaluation at 50% threshold
- Admin panel — add/manage categories and questions
- Responsive UI with Bootstrap 3.4

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Frontend | HTML5, CSS3, Bootstrap 3.4, JavaScript |
| Backend | PHP 7+ (Object-Oriented) |
| Database | MySQL 5.7+ with InnoDB engine |
| Server | Apache via XAMPP |
| Session | PHP native `$_SESSION` |

---

## System Architecture

```
OEMS/
│
├── index.php               # Entry point — redirects to login
├── login.php               # Student login form
├── signin_sub.php          # Login form handler
├── Register.php            # Student registration form
├── signup_sub.php          # Registration form handler
├── home.php                # Student dashboard — category selector
├── qus_show.php            # Exam page — renders timed quiz
├── answer.php              # Result card — score evaluation & display
│
├── adminlogin.php          # Admin login page
├── admin/
│   ├── dashboard.php       # Admin control panel
│   ├── category.php        # View/manage categories
│   ├── question.php        # View/manage questions
│   ├── add_cat.php         # Add new category form
│   └── add_quiz.php        # Add new question form
│
├── class/
│   └── users.php           # Core OOP class — all DB logic
│
├── css/                    # Custom stylesheets
├── img/                    # Static image assets
└── .gitignore              # Excludes SQL dumps and .env
```

---

## Database Schema

### `signup` — Student Accounts
| Column | Type | Constraint |
|--------|------|-----------|
| id | INT | PRIMARY KEY, AUTO_INCREMENT |
| name | VARCHAR(35) | NOT NULL |
| email | VARCHAR(35) | NOT NULL |
| password | VARCHAR(255) | NOT NULL |
| phone | VARCHAR(255) | NULL |

### `category` — Exam Categories
| Column | Type | Constraint |
|--------|------|-----------|
| id | INT | PRIMARY KEY, AUTO_INCREMENT |
| cat_name | VARCHAR | NOT NULL |

### `questions` — Question Bank
| Column | Type | Description |
|--------|------|-------------|
| id | INT | PRIMARY KEY |
| cat_id | INT | Foreign key → category |
| question | TEXT | Question text |
| a | VARCHAR | Option A |
| b | VARCHAR | Option B |
| c | VARCHAR | Option C |
| ans | VARCHAR | Correct answer value |

### `admin` — Admin Credentials
| Column | Type |
|--------|------|
| id | INT PRIMARY KEY |
| email | VARCHAR |
| password | VARCHAR |

---

## Algorithm Flow

### Student Exam Flow

```
[1] Student registers → credentials saved to signup table
         ↓
[2] Login → email/password matched → $_SESSION['email'] set
         ↓
[3] Home page → categories fetched → student selects one
         ↓
[4] $_SESSION['cat'] = selected category id
         ↓
[5] qus_show.php → SELECT * FROM questions WHERE cat_id = ?
    ORDER BY RAND() → questions rendered with radio inputs
    → JavaScript 10-min countdown starts
         ↓
[6] On submit (manual or auto on timeout):
    POST data → answer.php
         ↓
[7] answer() method evaluates each question:
    ┌─────────────────────────────────────────┐
    │ foreach question in DB (same cat_id):   │
    │   if POST[id] == question['ans'] → right++  │
    │   if POST[id] == 'no_attempt'    → wrong++  │
    │   else                           → no_answer++ │
    └─────────────────────────────────────────┘
         ↓
[8] score = (right / total) * 100
    if score >= 50 → PASS   else → FAIL
         ↓
[9] Result card rendered with student profile + full breakdown
```

### Admin Flow

```
Admin login → authenticated via admin table → session set
      ↓
Dashboard → Add category → Add questions linked to category id
      ↓
Questions available immediately to students on home page
```

---

## OOP Design — `class/users.php`

All database operations are encapsulated in a single `users` class:

| Method | Parameters | Returns | Purpose |
|--------|-----------|---------|---------|
| `__construct()` | — | — | Opens MySQLi connection |
| `signup($query)` | SQL string | bool | Inserts new student |
| `signin($email, $pass)` | string, string | bool | Authenticates student, sets session |
| `users_profile($email)` | string | array | Fetches student profile |
| `cat_show()` | — | array | Returns all categories |
| `qus_show($cat_id)` | int | array | Returns randomized questions |
| `answer($POST)` | array | array | Evaluates answers, returns score |
| `adminlogin($email, $pass)` | string, string | bool | Authenticates admin |
| `add_quiz($query)` | SQL string | void | Inserts new question |
| `add_cat($query)` | SQL string | void | Inserts new category |
| `url($url)` | string | void | HTTP redirect helper |

---
## Screenshots

### Login Page
<img width="1920" height="960" alt="Screenshot (870)" src="https://github.com/user-attachments/assets/d69bf731-146a-4d3c-b6be-fd0792440257" />

### Register Page
<img width="1920" height="964" alt="Screenshot (868)" src="https://github.com/user-attachments/assets/7c4756e1-3aa7-43ae-81c1-d897d37e559e" />

### Home Dashboard
<img width="1920" height="962" alt="Screenshot (844)" src="https://github.com/user-attachments/assets/52ddbdb2-9a3d-4093-a5e2-13ba78e72765" />

### Exam Page
<img width="1920" height="964" alt="Screenshot (845)" src="https://github.com/user-attachments/assets/7dade94a-6359-457b-81a1-54c8a353f7c9" />

### Result Card
<img width="1920" height="957" alt="Screenshot (851)" src="https://github.com/user-attachments/assets/b5b2b581-9a99-4bea-a965-784f08bf5d1b" />

## Local Setup

```bash
# 1. Clone the repository
git clone https://github.com/Iamfouzia/Online-Examination-Management-System.git

# 2. Move to XAMPP web root
mv Online-Examination-Management-System/ C:/xampp/htdocs/OEMS/

# 3. Start Apache and MySQL from XAMPP Control Panel

# 4. Create database and import schema
# → Open: http://localhost/phpmyadmin
# → Create new database named: oems
# → Click Import → upload project.sql → Go

# 5. Update DB credentials in class/users.php
$host     = "localhost";
$username = "root";
$pass     = "";
$db_name  = "oems";

# 6. Open in browser
http://localhost/OEMS/index.php
```
## Live Demo
🌐 [Click here to view](http://oems-fouzia.lovestoblog.com/index.php)


</div>

