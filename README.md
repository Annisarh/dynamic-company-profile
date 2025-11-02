# Edusity a Website Company Profile

Website Edusity, website company profile yang merupakan media promosi kampus di media digital.

## 🚀 Project Overview

website ini menampilkan hal general terkait kampus seperti logo, tagline kampus, program yang ditawarkan, galleries, lokasi dan contact Universitas yang bisa dihubungi jika tertarik dengan program yang ditawarkan.
website ini dibangun dengan framework PHP yaitu laravel menggunakan blade + tailwindcss.

## 🧮 Tech Stack

-   Laravel (PHP)
-   Blade templating
-   HTML / CSS
-   Tailwindcss and Bootstrap (in admin panel)
-   JavaScript
-   Vite (bundler)
-   Structured project folders (`app`, `config`, `database`, `resources`, `routes`, `tests`, etc)

## 📁 Project Structure

Here are some of the key folders:

-   `app/` — application logic and controllers
-   `config/` — configuration files
-   `database/` — migrations / seeders
-   `public/` — publicly accessible assets
-   `resources/` — blade views, CSS, JavaScript
-   `routes/` — definition of web routes
-   `tests/` — automated tests
-   `.env.example` — environment configuration example
-   `composer.json` / `package.json` — dependencies

## 🛠️ Installation & Setup

1. Clone the repository
    ```bash
    git clone https://github.com/Annisarh/dynamic-company-profile.git
    cd dynamic-company-profile
    ```
2. Install PHP / Composer dependencies
    ```bash
    composer install
    ```
3. Install frontend dependencies
    ```bash
    npm install
    ```
4. Copy the environment file and generate an app key
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5. Configure database credentials in `.env`
6. Run migrations and seeders (if any)
    ```bash
    php artisan migrate --seed
    ```
7. Build the frontend assets (for development)
    ```bash
    npm run dev
    ```
    Or for production build:
    ```bash
    npm run build
    ```
8. Serve the application
    ```bash
    php artisan serve
    ```
    Visit `http://localhost:8000` in your browser.

## ✅ Detail

-   Website company profile ini bisa diupdate informasi general yang ditampilkan dengan mengakses admin panelnya.
-   terdapat navbar, hero, about section, galleries, and articles atau bisa diganti dengan new research university dan kontak.

## Screenshots

-   views website
    ![App Screenshot](<public/images/ss/Screenshot%20(9).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(10).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(11).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(12).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(13).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(15).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(16).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(17).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(18).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(19).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(20).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(21).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(22).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(23).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(24).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(25).png>)

-   database
    ![App Screenshot](<public/images/ss/Screenshot%20(26).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(27).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(28).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(29).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(30).png>)
    ![App Screenshot](<public/images/ss/Screenshot%20(31).png>)

## 🙋 Author

Created by Annisarh — thanks for exploring!
