# 🔐 Secure Access – Login & Registration System
**Laboratory Exam | 3rd Year College**

---

## 📎 Figma Design
🔗 [View Figma Prototype](https://www.figma.com/design/X8r7MuSj1BHXeu73Kr9Mpa/Laboratory-Exam?node-id=0-1&t=FXXm1PmDN4MGNXwb-1)

---

## 📋 Project Overview
This project is a PHP-based Login and Registration system built as a Laboratory Exam requirement. The UI was designed in Figma following a yellow-green "Secure Access" theme, then implemented using PHP, HTML, and CSS.

---

## 🗂️ File Structure
```
📁 project/
├── login.php           → Login page with form validation
├── register.php        → Registration page with form validation
├── css/
│   └── style.css       → Shared styles for both pages
└── js/
    └── script.js       → Password visibility toggle
```

---

## ✨ Features

### Login Page (`login.php`)
- Email and Password input fields
- Basic validation — fields cannot be empty, email must be valid
- Displays **"Login Successful"** on valid input
- Password show/hide toggle
- Google and Facebook sign-in buttons (UI only)
- Link to Registration page

### Register Page (`register.php`)
- First Name, Last Name, Email, Password, Confirm Password fields
- Basic validation:
  - All fields required
  - Valid email format
  - Password minimum 6 characters
  - Passwords must match
  - Must agree to Terms and Conditions
- Displays **"Registration Successful"** on valid input
- Link back to Login page

---

## 🎨 Design
- **Theme:** Yellow-green gradient (`#c8a000` → `#3a6800`)
- **Layout:** Two-panel card — decorative left panel + dark green form panel
- **Font:** Segoe UI / Tahoma

---

## 🚀 How to Run Locally

1. Install [XAMPP](https://www.apachefriends.org/) (or any PHP server)
2. Copy the project folder into `htdocs/`
3. Start Apache in the XAMPP Control Panel
4. Open your browser and go to:
   ```
   http://localhost/your-folder-name/login.php
   ```

---

## 🧪 Built With
- PHP (server-side validation)
- HTML5
- CSS3 (Flexbox, CSS Grid, Gradients)
- Vanilla JavaScript

---

## 👤 Author
**[Your Name Here]**
3rd Year | Bachelor of Science in Information Technology
