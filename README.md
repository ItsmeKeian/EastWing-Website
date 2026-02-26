### Eastwing Website Application

Eastwing is a web-based application hosted locally via XAMPP.  
The system is built using PHP and MySQL and follows a modular structure for maintainable and scalable development.

---

## 📌 Overview

- **Project Name:** Eastwing  
- **Type:** Web Application  
- **Environment:** XAMPP (Apache, PHP, MySQL)  
- **Local URL:** http://localhost/eastwing/  
- **Local Path:** C:\xampp\htdocs\eastwing  

Eastwing is designed to manage website content and core business functionality through a structured PHP-based architecture with reusable components.

---

## 🚀 Features

- Dynamic website interface
- Modular PHP structure with reusable includes
- Form handling and user interaction
- Database integration
- Admin-side functionality (if implemented)
- Organized asset structure (CSS, JS, Images)

---

## 🛠 Tech Stack

- **Backend:** PHP  
- **Frontend:** HTML5, CSS3, JavaScript  
- **Server:** Apache (via XAMPP)  
- **Database:** MySQL / MariaDB  

---

## ⚙️ Local Setup

1. Install XAMPP.
2. Place the project folder inside:

   ```
   C:\xampp\htdocs\
   ```

3. Start **Apache** (and **MySQL** if required).
4. Open your browser and navigate to:

   ```
   http://localhost/eastwing/
   ```

---

## 🗄 Database Setup

1. Start **MySQL** in XAMPP.
2. Open phpMyAdmin:

   ```
   http://localhost/phpmyadmin
   ```

3. Create a new database.
4. Import the provided `.sql` file (if available).
5. Update database credentials inside your configuration file (e.g., `config.php`).

Default XAMPP credentials:

- Host: `localhost`
- Username: `root`
- Password: *(empty by default)*

---

## 📂 Project Structure

```
eastwing/
│
├── index.php
├── css/
├── js/
├── img/
├── includes/
├── config/
└── uploads/
```

---

## 🔐 Configuration Notes

- Ensure database credentials are properly configured.
- Do not commit production passwords or sensitive data.
- Verify Apache and MySQL services are running before accessing the project.

---

## 👨‍💻 Author

Keian Gacillos  
Web Developer