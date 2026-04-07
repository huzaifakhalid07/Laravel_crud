
---

# 📘 Student Data CRUD Application

A simple **Student Management System** built using **Laravel** and **HTML/CSS** that performs full **CRUD (Create, Read, Update, Delete)** operations on student records.

CRUD operations are the core of most web applications and allow users to manage data efficiently. ([UI Bakery][1])

---

## 🚀 Features

* ➕ Add new student records
* 📄 View all students
* ✏️ Edit student details
* ❌ Delete student records
* 📊 Clean and simple UI using HTML/CSS
* 🔒 Form validation

---

## 🛠️ Technologies Used

* **Laravel (PHP Framework)**
* **HTML5**
* **CSS3 / Bootstrap (if used)**
* **MySQL Database**

---

## 📂 Project Structure

```
Laravel_crud/
│── app/
│── database/
│── public/
│── resources/views/
│── routes/
│── .env
│── composer.json
```

---

## ⚙️ Installation & Setup

Follow these steps to run the project locally:

### 1️⃣ Clone Repository

```bash
git clone https://github.com/huzaifakhalid07/Laravel_crud.git
cd Laravel_crud
```

### 2️⃣ Install Dependencies

```bash
composer install
```

### 3️⃣ Setup Environment File

```bash
cp .env.example .env
```

Update database credentials in `.env` file:

```
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Generate App Key

```bash
php artisan key:generate
```

### 5️⃣ Run Migrations

```bash
php artisan migrate
```

### 6️⃣ Start Server

```bash
php artisan serve
```

Open in browser:

```
http://127.0.0.1:8000
```

---

## 📸 Screenshots (Optional)

*Add screenshots here if you want (UI, forms, tables, etc.)*

---

## 📌 Usage

* Go to homepage
* Add new student
* View student list
* Update or delete records

---

## 🎯 Learning Purpose

This project is ideal for:

* Beginners learning Laravel
* Understanding CRUD operations
* Practicing MVC architecture
* Database handling

---

## 🤝 Contributing

Feel free to fork this repository and improve it.

---

## 📄 License

This project is open-source and available under the **MIT License**.

---

## 👨‍💻 Author

**Huzaifa Khalid**
GitHub: [https://github.com/huzaifakhalid07](https://github.com/huzaifakhalid07)

---
