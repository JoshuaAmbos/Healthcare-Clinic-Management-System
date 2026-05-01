# Healthcare Clinic Management System

## Project Overview
This Laravel-based web application is designed for a multi-specialty healthcare clinic to replace manual record-keeping with a robust MVC architecture. The system manages patient records, doctor schedules, appointments, and billing processes.

---

## Core Modules

### 1. Patient Management
* Register new patients with personal details, medical history, and emergency contacts.
* Directory of all patients including visit history.
* Edit functionality for health records and contact information.
* Structured data storage via Eloquent models.

### 2. Doctor and Service Management
* Directory of doctors categorized by specialization.
* Management of consultation fees based on service type.
* Scheduling system for available days and time slots.
* Profiles for qualifications and clinic assignments.

### 3. Appointment Management
* Scheduling system for patient-doctor consultations.
* Logic to prevent overlapping appointments for the same doctor.
* Status tracking: Pending, Confirmed, Completed, and Cancelled.
* Rescheduling and cancellation capabilities.

### 4. Billing and Payment Management
* Invoice generation based on consultation fees and additional services.
* Payment recording (full/partial) and outstanding balance tracking.
* Refund processing for cancelled appointments.
* Digital receipt generation and transaction logs.
* Revenue reporting by doctor or service type.

### 5. Admin Dashboard and Navigation
* Main Dashboard: Summarizes daily appointments, patient flow, and doctor availability.
* Calendar View: Visual tracking of consultations.
* Navigation: Sidebar links for Patients, Doctors, Appointments, Inventory, and Billing.

---

## Technical Specifications

### Data Models
* **Patient:** Personal details and medical history.
* **Doctor:** Professional profiles and specializations.
* **Appointment:** Relationships between patients and doctors with time-conflict logic.
* **Transaction:** Billing, payments, and revenue tracking.

### Implementation Requirements
* **Migrations:** Database tables with defined relational constraints.
* **Controllers:** Logical handlers for scheduling conflicts and billing calculations.
* **Blade Templates:** Responsive layouts for all management modules.
* **Validation:** Strict rules for time conflicts, required fields, and numeric financial data.

---

## Installation Requirements
* PHP 8.2+
* Composer
* Node.js and NPM
* MySQL Database