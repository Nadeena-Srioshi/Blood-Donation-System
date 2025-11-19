# DonorLink — Blood Donation Management System

Hi! This is our first-year, second-semester group project.
A simple PHP/MySQL web application for managing donors, hospital recipients, blood inventory, appointments and campaigns. Built with PHP, MySQL, plain HTML/CSS/JS and meant to run on XAMPP.

---

## Project Overview
👤 Donor Module

Registration, login, profile management
Appointment booking and viewing
Eligibility information + interactive eligibility quiz

🏥 Hospital / Recipient Module
Hospital profile and blood order requests
Access to donor lists and donation entries


🩸 Admin Module

Manage campaigns and approvals
Update or delete system records
Oversee overall platform activity
Inventory management for HCP (Health Care Provider)

📄 Additional Pages

About Us
FAQ
Shared header and footer used across the application

---

## Requirements
- XAMPP (Apache + MySQL)
- PHP 7.x or 8.x
- MySQL (create a database named `donorLink`)
- Browser for frontend

---

## Quick setup

1. Copy the project into your XAMPP `htdocs` directory (example path shown in this repo: `c:\xampp\htdocs\Blood-Donation-System`).

2. Start Apache and MySQL from XAMPP control panel.

3. Create the MySQL database:
   - In phpMyAdmin create a database named `donorLink`.
   - create the tables used by the app. (Tables referenced across the project include `donor`, `hospital`, `listofdonations`, `donor_appointment`, `admin`, `host_blood_drives`, etc.)

4. Update database credentials if needed: (config.php).

5. Open the app in your browser:
   - http://localhost/Blood-Donation-System/

