# 🏥 Multi-Tenancy Clinic Management System with FilamentPHP v3

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Filament](https://img.shields.io/badge/Filament-FFAA00?style=for-the-badge&logo=filament&logoColor=black)](https://filamentphp.com)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)

&gt; **A complete tutorial project demonstrating how to implement multi-tenancy in FilamentPHP v3 for Laravel — perfect for SaaS and enterprise applications.**

![Project Banner](https://your-screenshot-or-demo-image-url-here.png)

---

## 📖 Overview

This repository contains the complete source code for a **Patient & Clinic Management System** built with **Laravel** and **FilamentPHP v3**, implementing **multi-tenancy architecture**. The project demonstrates how multiple clinics (tenants) can securely manage their own patient data within a single application instance while maintaining complete data isolation.

---

## ✨ Key Features

- 🔐 **Multi-Tenancy Architecture** — Complete tenant isolation using Filament's built-in multi-tenant support
- 🏥 **Clinic Management** — Each clinic operates as an independent tenant with isolated data
- 👨‍⚕️ **Patient Management** — Full CRUD operations for patients scoped per clinic
- 🛡️ **Data Security** — Automatic data scoping ensures tenants can only access their own data
- 📊 **Admin Dashboard** — Beautiful, responsive admin interface powered by Filament v3
- 🔄 **Scalable Design** — Ready to extend for complex SaaS applications

---

## 🎯 What You'll Learn

| Topic | Description |
|-------|-------------|
| **Multi-Tenancy Concepts** | Understanding tenant isolation and SaaS architecture |
| **Filament v3 Setup** | Installing and configuring FilamentPHP panels |
| **Tenant Configuration** | Implementing `HasTenancy` trait and tenant scoping |
| **Resource Scoping** | Limiting resources to current tenant context |
| **Security Best Practices** | Ensuring data privacy between tenants |
| **Real-World Patterns** | Building production-ready multi-tenant applications |

---

## 🛠️ Tech Stack

- **Backend:** Laravel 10/11
- **Admin Panel:** FilamentPHP v3
- **Database:** MySQL/PostgreSQL (with tenant-scoped migrations)
- **Authentication:** Laravel + Filament Multi-Tenancy
- **Frontend:** Tailwind CSS (via Filament)

---

## 🚀 Quick Start

```bash
# Clone the repository
git clone https://github.com/yourusername/filament-multi-tenancy-clinic.git

# Navigate to project
cd filament-multi-tenancy-clinic

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations (includes tenant migrations)
php artisan migrate

# Seed sample data (optional)
php artisan db:seed

# Start development server
php artisan serve