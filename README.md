# PHP Login & Registration Assignment

Simple web-based Login and Registration system using **HTML**, **CSS**, **PHP**, and **MySQL (phpMyAdmin)**.

## Features

- User registration with:
  - Full name
  - Email
  - Phone
  - Address
  - Password
- User login:
  - Checks if user exists with given email and password
  - Shows “User exists. Login successful.” or “User does not exist.”

## Technologies used

- PHP (procedural)
- MySQL with phpMyAdmin
- HTML & CSS (glassmorphism UI)
- XAMPP (Apache + MySQL)

## How to run

1. Install XAMPP and start **Apache** and **MySQL**.
2. Create a database (e.g. `login_system_new`) in phpMyAdmin.
3. Update `connection.php` with your database name.
4. Run `create_user_table.php` once to create the `users` table.
5. Open `register.php` and `login.php` in the browser via `http://localhost/your-folder-name/`.
