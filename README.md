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


![Screenshot1](images/Screenshot_2025-09-30_201548.png)
![Screenshot2](images/Screenshot_2025-09-30_202043.png)
![Screenshot3](images/Screenshot_2025-09-30_201952.png)
![Screenshot4](images/Screenshot_2025-09-30_201801.png)
![Screenshot5](images/Screenshot_2025-09-30_201654.png)

## Project Structure


├── header.php # Common header template
├── index.php # Landing page
├── login.php # User authentication logic
├── login_page.php # Login form
├── session.php # Session handling
├── village.sql # Database schema & sample data
