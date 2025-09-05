# Task List 📝

A simple, clean, and fully functional task management application built with the latest version of Laravel.

This project was created as part of my journey to deepen my understanding of Laravel, reinforce key concepts like routing, controllers, and components, and become more comfortable building structured, production-ready applications.

---

## 🚀 Overview

Task List allows you to create, view, edit, delete, and mark tasks as completed or not completed. It’s a compact Laravel project built entirely by me, with a strong focus on clean code, reusable components, and modern frontend integration using Tailwind CSS and Alpine.js.

---

## ✨ Features

- Create new tasks with:
  - **Title** (required)
  - **Description** (required)
  - **Long Description** (required)
- View full task details including `created_at` and `updated_at`
- Edit any field in an existing task
- Toggle completion status (mark as completed / not completed)
- Delete tasks
- Smooth, non-intrusive success messages using Alpine.js
- Reusable UI components:
  - `<x-button>`
  - `<x-link>`
  - `<x-success>` (for alerts)
  - `<x-errors>` (for validation errors)
- Seeder and Factory to generate 20 test tasks automatically

---

## 🧑‍💻 Tech Stack

- **Framework**: Laravel 12 (latest version)
- **Styling**: Tailwind CSS v4.1 (latest version)
- **Interactivity**: Alpine.js
- **Database**: MySQL
- **Testing Framework**: Pest (pre-configured)

---

## 📁 Project Structure

The application follows the default Laravel structure with separation of concerns using Controllers.

All Blade components are stored in:

resources/views/components


---

## ⚙️ Installation

To run the project locally, follow these steps:

```bash
git clone https://github.com/mohamed-elabyad/tasks-list.git
cd task-list

composer install
cp .env.example .env
php artisan key:generate
```

---

## 🔧 Environment Setup

Update your `.env` file with your database credentials:
```
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

---

## 🗃️ Migrate & Seed Database

```bash
php artisan migrate --seed
```

---

## 💻 Frontend Setup

Install frontend dependencies and compile assets:

```bash
npm install
npm run dev
```

Or for production:

```bash
npm run build
```

---

## 🧪 Testing

The project includes Pest for testing and is ready for writing feature or unit tests when needed.

---

## 📝 License

This project is open-source and available under the MIT license.

---

> Built with ❤️ by Mohamed Elabyad
