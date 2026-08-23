# AKOM - Company Portfolio & Contact Portal

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/Vite-B73BFE?style=for-the-badge&logo=vite&logoColor=FFD62E" alt="Vite">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

## 🚀 About AKOM
AKOM is an IT solutions provider that specializes in building end-to-end technological solutions ranging from custom software and web applications to mobile apps and Internet of Things (IoT) devices. 

This repository contains the source code for our company portfolio and contact website. It serves as our digital storefront, allowing potential clients to explore our past projects, understand our technical capabilities, and reach out to us directly for business inquiries. 

The AKOM startup was originally founded and developed by a dedicated team of students between **2024 and 2025**.

## 💡 Core Services
We pride ourselves on versatility and engineering excellence. Our core offerings include:
- **Custom Software Development:** Tailor-made software solutions designed to solve complex business problems and optimize workflows.
- **Web Applications:** Scalable, responsive, and secure web platforms built with modern, high-performance frameworks.
- **Mobile Applications:** Intuitive mobile experiences bridging the gap between businesses and their users on the go.
- **IoT (Internet of Things) Solutions:** Smart device integration, custom hardware-software communication protocols, and automated connected systems.

## 🛠 Tech Stack
This project is built on a modern, robust, and scalable stack:
- **Backend:** [Laravel](https://laravel.com) (PHP Web Framework)
- **Frontend Styling:** [Tailwind CSS](https://tailwindcss.com) (Utility-first CSS framework)
- **Build Tool:** [Vite](https://vitejs.dev/) (Next Generation Frontend Tooling)
- **Database:** Configurable via `.env` (MySQL / PostgreSQL / SQLite)

## 💻 Local Development Setup
To run the AKOM website locally on your machine, follow these steps:

1. **Clone the repository** (if you haven't already)
   ```bash
   # Make sure you are in the project directory
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Install NPM Dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   Copy the example environment file and configure your local database settings:
   ```bash
   cp .env.example .env
   ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations**
   ```bash
   php artisan migrate
   ```

7. **Start the Development Servers**
   You will need to run both the Laravel backend server and the Vite frontend compiler:
   
   ```bash
   # Terminal 1: Start Laravel local server
   php artisan serve
   ```
   
   ```bash
   # Terminal 2: Start Vite to watch and compile assets
   npm run dev
   ```

## 📬 Contact Us
Interested in working with us or have a project in mind? You can reach us directly through the contact form integrated into this website. We are always looking forward to taking on new and exciting technical challenges.

---
*Built with ❤️ by the AKOM Team (2024 - 2025)*
