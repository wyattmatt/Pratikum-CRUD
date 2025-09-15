# Student Management System (Sistem Manajemen Mahasiswa)

A simple web-based CRUD (Create, Read, Update, Delete) application for managing student data built with PHP and MySQL. This project demonstrates basic database operations with a clean user interface for educational purposes.

## 📋 Features

- **View Students**: Display all students in a table format with their complete information
- **Add New Student**: Create new student records with photo upload functionality
- **Edit Student**: Update existing student information and optionally change their photo
- **Delete Student**: Remove student records from the database with confirmation
- **Photo Management**: Upload and display student profile pictures
- **Responsive Design**: Clean and simple HTML interface

## 🛠️ Technology Stack

- **Backend**: PHP 8.2.12
- **Database**: MySQL/MariaDB 10.4.32
- **Frontend**: HTML5, Basic CSS (inline styling)
- **Server**: Apache (XAMPP)
- **File Upload**: PHP file handling for image uploads

## 📊 Database Structure

The application uses a single table `mahasiswa` with the following structure:

```sql
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `no_mhs` varchar(20) NOT NULL UNIQUE,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);
```

### Fields Description:
- `id`: Auto-increment primary key
- `nama`: Student's full name
- `no_mhs`: Student ID number (unique)
- `email`: Student's email address
- `jurusan`: Department/Major
- `gambar`: Photo filename stored in `img/` directory

## 🚀 Installation & Setup

### Prerequisites
- XAMPP (or similar PHP development environment)
- Web browser
- Text editor/IDE

### Step-by-Step Installation

1. **Download and Install XAMPP**
   - Download from [https://www.apachefriends.org/](https://www.apachefriends.org/)
   - Install and start Apache and MySQL services

2. **Clone/Download the Project**
   ```bash
   # Clone the repository
   git clone https://github.com/wyattmatt/Pratikum-CRUD.git
   
   # Or download and extract to XAMPP htdocs folder
   ```

3. **Place Project Files**
   - Copy the project folder to `C:\xampp\htdocs\test\`
   - Ensure all files are in the correct location

4. **Database Setup**
   - Open phpMyAdmin: `http://localhost/phpmyadmin`
   - Create a new database named `mahasiswa_db`
   - Import the provided SQL file: `mahasiswa_db.sql`
   - The database will be populated with sample student data

5. **Configure Database Connection**
   - Check `connection.php` file for database settings:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "mahasiswa_db";
   ```

6. **Access the Application**
   - Open your web browser
   - Navigate to: `http://localhost/test/`

## 📁 Project Structure

```
test/
├── index.php           # Main page - displays all students
├── tambah.php          # Add new student form and logic
├── edit.php            # Edit student form and logic
├── hapus.php           # Delete student confirmation and logic
├── connection.php      # Database connection configuration
├── mahasiswa_db.sql    # Database schema and sample data
├── README.md           # Project documentation
├── LICENSE             # Project license
└── img/                # Student photos directory
    ├── ahmad.jpg
    ├── alya.jpg
    ├── andi.jpg
    └── [other student photos...]
```

## 💻 Usage Guide

### Viewing Students
- Navigate to `index.php` to see all registered students
- Student information is displayed in a table with photos
- Each row shows: ID, Name, Student Number, Department, Email, Photo, and Actions

### Adding a New Student
1. Click "Tambah Mahasiswa" button on the main page
2. Fill in all required fields:
   - Name (Nama)
   - Student Number (NIM)
   - Department (Jurusan)
   - Email
   - Photo (upload image file)
3. Click "Simpan" to save the new student

### Editing Student Information
1. Click "Edit" link next to any student record
2. Update the desired fields
3. Optionally upload a new photo
4. Click "Simpan" to save changes

### Deleting a Student
1. Click "Delete" link next to any student record
2. Review the student information on the confirmation page
3. Click "Hapus" to permanently delete the record

## 🎯 Learning Objectives

This project demonstrates:
- **PHP Fundamentals**: Variables, arrays, loops, conditionals
- **Database Operations**: CRUD operations with MySQL
- **File Handling**: Image upload and storage
- **Form Processing**: POST/GET methods and validation
- **Security Basics**: Basic SQL query structure (Note: This is for educational purposes - production apps should use prepared statements)
- **Web Development Flow**: Frontend-backend integration

## ⚠️ Security Considerations

**Note**: This project is designed for educational purposes. For production use, consider implementing:
- Prepared statements to prevent SQL injection
- Input validation and sanitization
- File upload security (type checking, size limits)
- User authentication and authorization
- Error handling and logging
- CSRF protection

## 🤝 Contributing

This is an educational project. Feel free to:
- Fork the repository
- Add new features
- Improve the UI/UX
- Enhance security measures
- Add documentation

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

## 👨‍💻 Developer

- **Author**: wyattmatt
- **Purpose**: Educational CRUD application
- **Created**: 2025

## 📞 Support

If you encounter any issues or have questions:
1. Check the installation steps
2. Ensure XAMPP services are running
3. Verify database connection settings
4. Check file permissions for the `img/` directory

---

**Happy Learning! 🎓**