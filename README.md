# Task List Application

## Overview

This is a simple Laravel-based web application that allows users to create tasks, view tasks, and mark them as completed or uncompleted. The application provides an intuitive interface to manage task statuses and helps you stay organized.

## Features

- **Create Tasks**: Users can create new tasks with a title, description, and long description.
- **View Tasks**: All tasks are displayed in a list, with details visible for each task.
- **Toggle Completion Status**: Each task can be marked as completed or uncompleted with a simple button click.

## Installation

Follow these steps to set up the project on your local machine.

### Prerequisites

Before you begin, ensure you have the following installed:
- [PHP](https://www.php.net/) (version 7.4 or higher)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/docs)
- [MySQL](https://www.mysql.com/)

### Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/MohammadMashaikh/Laravel_TaskList.git

2. Install Dependencies

Navigate to the project directory and install the required dependencies via Composer:
cd Laravel_TaskList
composer install

3. Copy the .env.example file to .env:
cp .env.example .env

 Then, generate the application key:
php artisan key:generate

4. Configure the Database
Update your .env file with the correct database credentials:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tasklist
DB_USERNAME=root
DB_PASSWORD=


5. Run Migrations
Create the necessary database tables by running the migrations:

php artisan migrate


6. Serve the Application
Start the local development server:

php artisan serve


Your application will be available at http://127.0.0.1:8000.

Usage
Home Page
On the home page, you can view all tasks. You can click on any task to see more details.

Create Task
To create a new task, click on the "Create Task" button. You will be asked to enter a task title, description, and a long description.

Task Details
Each task has a Mark as Completed button. You can click this button to toggle the task's completion status. When a task is completed, the button will change to Mark as Uncompleted, allowing you to toggle it back.

Contributing
Contributions are welcome! If you'd like to contribute, please fork the repository and create a pull request with your proposed changes. Here are a few ways you can help:

Report bugs
Submit feature requests
Improve the documentation
Submit a pull request for code improvements
License
This project is open-source and available under the MIT License.

Acknowledgments
Laravel framework for making it easy to build robust web applications.
Bootstrap for providing a responsive and clean design.
GitHub for hosting this repository.







