# 📚 Shiksha Setu - Career Guidance Platform

## 📌 Project Overview
**Shiksha Setu** ("The Bridge of Education") is a career guidance platform designed to help students, job seekers, and professionals make informed career decisions. By bridging the gap between education and career aspirations, the platform offers expert counseling, industry insights, and skill development resources to empower individuals in their career journey.

## 🌟 Features
- 🎯 **Personalized Career Insights**: Get career recommendations based on strengths and skills.
- 👩‍🏫 **Expert Counseling**: Connect with mentors and industry professionals.
- 📈 **Job Market Trends**: Stay updated with the latest job demands and skills.
- 📚 **Skill Development**: Access workshops, courses, and learning materials.
- 📑 **Job Preparation**: Resume building, interview tips, and application guidance.

## 📂 Technologies Used
- **Frontend** → HTML, CSS, Bootstrap
- **Backend** → PHP
- **Database** → MySQL (XAMPP)
- **Development Environment** → VS Code

## 🚀 How to Use
### Prerequisites
- Install [XAMPP](https://www.apachefriends.org/index.html) (for PHP and MySQL support).
- Install a code editor like **VS Code**.

### Steps
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-repo/shiksha-setu.git
   cd shiksha-setu
   ```
2. **Move to XAMPP Directory**:
   Copy the project folder to the `htdocs` directory in XAMPP.

3. **Start XAMPP**:
   - Open XAMPP Control Panel and start **Apache** and **MySQL**.

4. **Import the Database**:
   - Open `phpMyAdmin` in the browser (`http://localhost/phpmyadmin/`).
   - Execute the following SQL commands to create the necessary databases and tables:
     ```sql
     CREATE DATABASE career_db;
     USE career_db;
     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         fullname VARCHAR(100) NOT NULL,
         email VARCHAR(100) NOT NULL UNIQUE,
         username VARCHAR(50) NOT NULL UNIQUE,
         password VARCHAR(255) NOT NULL
     );

     CREATE DATABASE student;
     USE student;
     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         fullname VARCHAR(100) NOT NULL,
         email VARCHAR(100) NOT NULL UNIQUE,
         username VARCHAR(50) NOT NULL UNIQUE,
         password VARCHAR(255) NOT NULL
     );
     ```
5. **Run the Application**:
   - Open a web browser and go to:
     ```
     http://localhost/shiksha-setu/
     ```

## 📸 Screenshots
![Image](https://github.com/user-attachments/assets/b9e1b792-719d-4e6f-b496-c16e3b5d29f0)

![Image](https://github.com/user-attachments/assets/0ed13efb-a208-45c0-8ec3-5be37f0bc90a)

![Image](https://github.com/user-attachments/assets/90bb7ecd-3cad-47cb-957c-fa532aa5b75e)

![Image](https://github.com/user-attachments/assets/9570c797-d195-450d-9a26-03b9169fa9d8)

![Image](https://github.com/user-attachments/assets/96c591ab-5586-45eb-9a59-773a9cf8ea9b)

![Image](https://github.com/user-attachments/assets/4f56f661-de8b-455b-b354-bef12f172133)

![Image](https://github.com/user-attachments/assets/fd3dfc62-6ad3-4f80-8300-f9d8261ee313)

## 📌 Future Enhancements
✅ **AI-based Career Recommendation System**
✅ **Integration with LinkedIn and Job Portals**
✅ **Mobile-friendly UI Enhancements**
✅ **Personalized Career Progress Tracking**

## 🤝 Contributing
Feel free to fork this repository and contribute! Suggestions and pull requests are welcome.

---
💡 Developed by **Atharva Shelar**
