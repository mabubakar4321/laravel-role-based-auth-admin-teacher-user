# 🚀 Laravel 10 Multi-Role Authentication (Admin, Teacher, User)

A **custom multi-authentication system** built with **Laravel 10** without using Breeze, Jetstream, or any starter kit.  
This project demonstrates **role-based authentication** with three distinct roles:  

- 👑 **Admin** → Manage everything  
- 👨‍🏫 **Teacher** → Manage courses/students  
- 🙍 **User** → Normal application user  

It includes **role-based middleware**, protected routes, and separate dashboards for each role.

---

## 📌 Features

- ✅ Custom authentication (no Breeze, Jetstream, or Laravel UI)  
- ✅ Three roles: **Admin, Teacher, User**  
- ✅ Role-based **middleware protection**  
- ✅ Separate dashboards per role  
- ✅ Redirect handling (user cannot access admin/teacher routes)  
- ✅ Logout required before switching accounts  

---

## 🛠️ Tech Stack

- **Framework:** [Laravel 10](https://laravel.com)  
- **Database:** MySQL / MariaDB  
- **Auth:** Custom Laravel Authentication (Guard + Middleware)  
- **Frontend:** Blade templates  

---

## ⚡ Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/laravel-3-role-auth-system.git
   cd laravel-3-role-auth-system

Demo Credentials
For User Login:
Email=>haseeb@gmail.com
password=>12345

For Admin Login:
Email=>a@gmail.com
password=>12345

For Teacher Login:
Email=>sadeed@gmail.com
password=>12345
