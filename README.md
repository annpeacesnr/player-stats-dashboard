# ⚽️ ANGELO FC — SQL Football Team

A dynamic **football squad lineup web application** built with **PHP**, **MySQL**, **HTML**, and **CSS**.  
It displays players in a **custom formation** using **player cards** with images, stats, and animated visual styling.

This project recreates the look of a **matchday team sheet** or **club media lineup graphic** — fully generated from database data.

---

## ✨ Features

- 🖼️ **Player cards** with images & stats  
- 📊 **Database-driven** (MySQL) — no hardcoding  
- 🎨 **Custom CSS layout** for formation display  
- 🪽 Optional **wing / crest graphics** to create a unique club identity  
- ⚙️ Easy to **add / edit players** in phpMyAdmin  
- 🏗️ Simple and lightweight — runs on any PHP server (WAMP/MAMP/XAMPP/etc.)

---

## 🏗️ Tech Stack

| Technology | Purpose |
|-----------|---------|
| **PHP** | Server-side rendering of players and layout |
| **MySQL** | Stores player information |
| **HTML / CSS** | Page structure + custom player card design |

---

## 📸 Demo Preview

<img width="1566" height="916" alt="preview" src="https://github.com/user-attachments/assets/f3db6f16-dfa1-43df-a02e-dd69643b64de" />


---

## 🗂️ Project Structure
angelo/<br>
│ index.php<br>
│ db_connection.php<br>
│ styles.css<br>
│ angelo_rufc.sql<br>
│<br>
└─ images/<br>
├─ player1.png<br>
├─ player2.png<br>
├─ background.jpg<br>
└─ wings.png<br>

---

## 🧠 Setup Instructions

### 1. Import the Database
1. Open **phpMyAdmin**
2. Click **Import**
3. Select: `angelo_rufc.sql`
4. Run ✅

### 2. Configure Database Connection  
Open `db_connection.php` and edit if needed:

```php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "angelo_rufc";
```

### 3. Run the App
Open in browser:
http://localhost/angelo

---

### ➕ Adding Players
1. Open phpMyAdmin<br>
2. Go to players table<br>
3. Insert details<br>
4. Insert image (e.g., player4.png)<br>
5. Place the image in the images folder<br>



