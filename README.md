# User Status Dashboard

A simple web application built with **HTML, CSS, JavaScript, PHP, and MySQL** that allows you to:

- Submit user data (Name, Age) via a one-line form  
- Store submitted data into a MySQL database  
- Display all records dynamically in a table  
- Toggle each user's status between `0` and `1` instantly using AJAX  

---

## Features
- **One-line input form** with validation  
- **MySQL database integration** for storing and retrieving data  
- **Dynamic table** showing all user records  
- **Instant status toggle** without reloading the page  
- **Clean design** using external CSS and JavaScript  

---

## Project Structure
user_status_dashboard/

├── db.php # Database connection file

├── index.php # Main page (form + table display)

├── submit.php # Handles inserting data into the database

├── toggle.php # Handles AJAX status toggling

├── style.css # Stylesheet for layout and design

└── script.js # JavaScript for AJAX toggle functionality


---

## Requirements
- [XAMPP](https://www.apachefriends.org/) (or any Apache + PHP + MySQL stack)
- PHP 7.4+ (or compatible)
- MySQL / MariaDB

---

## Setup Instructions

### 1. Start XAMPP
- Open **XAMPP Control Panel**
- Start **Apache** and **MySQL**

### 2. Move Project to `htdocs`
- Copy the project folder into:
C:\xampp\htdocs\user_status_dashboard\

### 3. Create the Database
- Open [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)  
- Create a new database (e.g. `user_dashboard`)  
- Run this SQL to create the `users` table:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    status TINYINT(1) NOT NULL DEFAULT 1
);
```

### 4. Configure db.php

### 5. Run the Application
Visit: http://localhost/user_status_dashboard/index.php

---

## How it works

1. Fill out the form → Submits data to submit.php → Inserts into database → Redirects back to main page.
2. Table loads dynamically → index.php queries the database and displays all rows.
3. Toggle button → Calls toggle.php via AJAX → Updates status in database → Instantly updates the row.

---

## Screenshot
![user status admin view]()
