# Rural Development Management System

A PHP & MySQL-based web application for managing village-level development activities, complaints, and fund allocations.  
Designed for rural administration with roles like Admin, PDO, Supervisor, Complainer, and Worker.

---

## Features

- **Multi-role Authentication**
  - Admin, PDO, Supervisor, Complainer, and Worker accounts.
- **Complaint Management**
  - Citizens can register complaints with images and descriptions.
  - Supervisors can assign workers and update statuses.
- **Fund Allocation**
  - PDO can release funds for approved complaints.
- **Village & Ward Database**
  - Maintain official records for villages and wards.
- **Activity Tracking**
  - Automatic complaint logs using MySQL triggers.
  - 

![Screenshot](https://www.dropbox.com/scl/fi/vjaiso4fi4g5h8tcg1wm8/Screenshot-2025-09-30-202043.png?raw=1)



## Project Structure


├── header.php # Common header template
├── index.php # Landing page
├── login.php # User authentication logic
├── login_page.php # Login form
├── session.php # Session handling
├── village.sql # Database schema & sample data
