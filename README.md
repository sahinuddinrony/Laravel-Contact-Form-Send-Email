# Laravel Contact Form Send Email using Gmail SMTP

[Link to article described this code](https://medium.com/@sahinuddinrony/laravel-10-markdown-how-to-laravel-contact-form-send-email-using-gmail-smtp-d1ed32d0e62c)

## Introduction

Laravel is able to render beautiful, responsive HTML templates for the messages while also automatically generating a plain-text counterpart. So, Let’s start with an Laravel Contact Form Send Email using Gmail SMTP.

## Business Features

- Implement any Personal Website, Blog etc 
- Implement Varius Website, such as:
    - List all employees in each department contact email
    - List all user Send Email to Admin
    
## Run project

Clone repository:

    https://github.com/sahinuddinrony/Laravel-Contact-Form-Send-Email.git

Go to folder:

    cd Laravel-Contact-Form-Send-Email

Install dependencies:

    composer install

Copy .env file:

    Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

Generate app key:

    php artisan key:generate

Run migrations:

    php artisan migrate
    
Run Artisan:

    php artisan serve

Go to Browser Address Bar:

    http://localhost:8000/

## Author

[Sahin Uddin Rony](https://www.linkedin.com/in/sahinuddinrony/)


    
