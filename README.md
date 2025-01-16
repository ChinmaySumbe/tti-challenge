# Project Management API
Welcome to the Project Management API! This application allows you to manage Projects and their corresponding Tasks effortlessly. Built with Laravel, PHP, and MySQL, the project demonstrates core back-end development concepts like migrations, seeding, validation, and REST API design.

---
# What’s Inside?
## 1.  Projects

### Manage projects with fields like:
1. Title: A required project name.
2. Description: An optional field for more details.
3. Status: Open, in progress, or completed.

## 2. Tasks
### Manage tasks associated with specific projects, with fields like:
1. Title: A required task name.
2. Assigned To: Who’s responsible (optional).
3. Due Date: A deadline (optional).
4. Status: To-do, in progress, or done.
### Each project can have multiple tasks, making it perfect for tracking work!


# Key Features
1. RESTful API: Clean and easy-to-use endpoints.
2. Validation: Ensures only valid data gets in.
3. Database Seeding: Automatically populate the database with realistic sample data.
4. Eloquent Relationships: Manage projects and tasks efficiently.
5. JSON Responses: Clear and standardized API responses.

# How to Get Started
## Here’s your step-by-step guide to getting this API up and running:

## 1. Prerequisites
### Ensure you have the following installed on your system:

+ PHP (>= 8.1)
+ Composer
+ MySQL
+ Laravel (>= 10.x)


## 2. Installation
### 1. Clone the repository:
+ git clone https://github.com/<your-username>/project-management-api.git
+ cd project-management-api

### 2.Install dependencies:
+ composer install

### 3.Create and configure the environment file:
+ cp .env.example .env

### 4.Update your .env file with database credentials:
+ DB_CONNECTION=mysql
+ DB_HOST=127.0.0.1
+ DB_PORT=3306
+ DB_DATABASE=project_management
+ DB_USERNAME=root
+ DB_PASSWORD=yourpassword

### 5.Generate the application key:
+ php artisan key:generate

## 3. Database Setup
### 1.Run migrations:
+ php artisan migrate

### 2. Seed the database with sample data:
+ php artisan db:seed

## 4. Start the Server
+ php artisan serve

### Visit the API at: http://127.0.0.1:8000.

# Extras
## Validation
+ Ensures required fields like title are present.
+ Provides error messages for invalid inputs.

## Error Handling
+ Returns proper HTTP status codes (e.g., 404 for not found, 201 for created).
+ Delivers consistent JSON responses for success and failure.

## Seeding
+ Automatically populates the database with
1.  3 sample projects. 
2. 2–3 tasks per project.

# Quick Tips
+ To check your logs for errors, navigate to:
1. storage/logs/laravel.log
2. php artisan test

# Why This Project?
### This API showcases Laravel’s core features, ensuring:
1. Clean code organization.
2. Scalability for future extensions.
3. Best practices in REST API development.