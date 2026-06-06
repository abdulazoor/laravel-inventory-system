📦Laravel Inventory & Billing Management System

A full-stack web application built using Laravel Framework and MySQL to manage inventory, sales, stock tracking, and invoice generation in a structured business environment.

🚀 Project Overview

The Laravel Inventory & Billing Management System is designed to automate core business operations such as product management, stock tracking, sales processing, and invoice generation.

This system follows the MVC (Model-View-Controller) architecture and demonstrates real-world software engineering practices used in enterprise applications.

🎯 Key Features
📦 Product Management
Add new products
Update product details
Delete products
View complete product list
Track stock quantity
Low stock monitoring
💰 Sales Management
Create sales transactions
Select products and quantity
Auto calculate total price
Store customer details
Maintain sales history
📉 Inventory Control
Automatic stock reduction after sales
Prevents negative stock
Low stock alert system
Real-time quantity updates
🧾 Invoice System
Auto-generate invoices per sale
Customer billing details
Itemized product list
Total calculation
📊 Reporting Dashboard
Total products count
Total sales count
Revenue tracking
Low stock alerts
🛠️ Tech Stack
Backend: Laravel (PHP Framework)
Frontend: Blade Templates + Bootstrap 5
Database: MySQL
Architecture: MVC Pattern
Version Control: Git & GitHub
🧱 System Architecture

The system follows Laravel MVC architecture:

Model: Handles database logic (Products, Sales, SaleItems)
View: Blade templates for UI (Products, Sales, Dashboard)
Controller: Business logic handling requests and responses
Database: MySQL relational structure

Flow:

User → Routes → Controller → Model → Database
                     ↓
                   View → User
🗄️ Database Structure
Products Table
id
name
code
price
quantity
low_stock_limit
Sales Table
id
customer_name
customer_id
total_amount
Sale_Items Table
id
sale_id
product_id
quantity
unit_price
subtotal

Relationship:

One Sale → Many Sale Items
One Product → Many Sale Items
⚙️ Installation Guide
1. Clone Repository
git clone https://github.com/your-username/laravel-inventory-system.git
cd laravel-inventory-system
2. Install Dependencies
composer install
npm install
3. Setup Environment
cp .env.example .env

Update database credentials in .env:

DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
4. Generate Application Key
php artisan key:generate
5. Run Migrations
php artisan migrate
6. Start Server
php artisan serve

Visit:

http://127.0.0.1:8000

📸 Screenshots
Dashboard View
<img width="1919" height="920" alt="111" src="https://github.com/user-attachments/assets/9cc1d321-7bfe-4eb6-814d-66eefd65928b" />

Product Management Page
<img width="1905" height="576" alt="222" src="https://github.com/user-attachments/assets/dc667935-297d-454e-b48e-cb4a9dfabdca" />

Sales Creation Page
<img width="1920" height="808" alt="555" src="https://github.com/user-attachments/assets/b34b03c5-493b-4a9f-826a-8de54984cec7" />

Invoice Page
<img width="1919" height="723" alt="444" src="https://github.com/user-attachments/assets/a366b8f7-ab63-4372-a83c-28be81651cf7" />

Low Stock Alerts
<img width="1918" height="779" alt="666" src="https://github.com/user-attachments/assets/c247811e-faeb-4b13-8169-839b4d9f3af0" />

🔐 Authentication (Optional Enhancement)
Login / Logout system (Laravel Auth)
Session management
Role-based access control (future upgrade)
📈 Future Improvements
Barcode scanning system
Customer management module
Supplier & purchase orders
Multi-user roles (Admin / Staff)
Email invoice sending
Advanced analytics dashboard
API integration for mobile app
👨‍💻 Development Methodology
Requirement analysis
System design using MVC
Database design (MySQL relational model)
Laravel-based development
Functional testing
System validation
🧪 Testing Summary
Product CRUD tested successfully
Sales transactions validated
Stock updates verified
Invoice generation tested
Low stock alerts working correctly
📌 Conclusion

This project demonstrates a complete real-world business inventory system built using Laravel. It automates manual processes, improves accuracy, and provides scalable architecture suitable for enterprise-level applications.

👤 Developer
Name: S.M. Abdul Azoor
Role: Software Engineering Intern / Student
Framework: Laravel
