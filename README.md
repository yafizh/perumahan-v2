# Housing Information System (Sistem Informasi Perumahan)

A web-based application for managing housing projects, sales, and customer relations. Built with [Laravel](https://laravel.com).

## 🚀 Key Features

This application includes several modules tailored for various user roles:

### 🏠 Public / Landing Page
- **Home**: General information about the housing project.
- **Housing Units**: List of available housing units with specific details.
- **About Us**: Information about the developer company.
- **Customer Registration**: Account registration for potential buyers.

### 👤 Customer (Pelanggan)
- **Customer Dashboard**: Overview of activities and purchase status.
- **Profile & Account Management**.
- **House Booking**: Order housing units online.
- **Payment History**: Monitor status of down payments and installments.
- **Construction Progress**: Track the construction progress of the purchased unit.
- **Document Completeness**: Upload and manage required documents.
- **Complaint Submission**: Submit complaints regarding units or services.

### 🛡️ Admin
- **Admin Dashboard**: Operational data overview.
- **Master Data Management**:
  - User Data (Admin, Staff, Director, Customer).
  - House & Housing Block Data.
  - Promo & Discount Data.
- **Verification & Validation**:
  - Booking validation.
  - Down payment & installment verification.
  - Credit application processing (approve/reject).
- **Reports & Charts**:
  - Sales & Booking Reports.
  - Financial & Billing Reports.
  - Sales trend charts.
- **Construction History**: Update construction progress for customers.

### 💼 Staff
- **Staff Dashboard**: Focus on daily operational tasks.
- **Transaction Management**:
  - Validate down payments & installments.
  - Process booking registrations.
  - Credit applications.
- **Customer Service**: Manage customer data.

### 👔 Director (Direktur)
- **Executive Dashboard**: Business performance overview.
- **Full Reports**: Full access to all reports (Sales, Financial, Progress, Complaints).
- **Print Reports**: Feature to print official reports.

---

## 🛠️ Technology Stack
- **Framework**: [Laravel](https://laravel.com)
- **Database**: MySQL
- **Frontend**: Blade Templates, Bootstrap