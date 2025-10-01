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
<img width="1920" height="1080" alt="Screenshot 2025-09-30 201548" src="https://github.com/user-attachments/assets/02f30bac-8c30-4164-9b36-922279112ac3" />
---<img width="1920" height="1080" alt="Screenshot 2025-09-30 202043" src="https://github.com/user-attachments/assets/01f7b084-604c-40fe-9105-d65e07ad4043" />
<img width="1920" height="1080" alt="Screenshot 2025-09-30 201801" src="https://github.com/user-attachments/assets/395b844c-3a6e-4803-8725-8594e78b4fa4" />
<img width="1920" height="1080" alt="Screenshot 2025-09-30 201654" src="https://github.com/user-attachments/assets/d7a74215-46d8-451c-a0db-1b73a4ff5e51" />




## Project Structure


├── header.php # Common header template
├── index.php # Landing page
├── login.php # User authentication logic
├── login_page.php # Login form
├── session.php # Session handling
├── village.sql # Database schema & sample data
