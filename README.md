# Manhwa & Manga Website

A full-stack web application for browsing and managing Manhwa and Manga content.

The website allows users to browse Manhwa, search for titles, explore genres and chapters, create accounts, and log in. It also includes an Admin Dashboard for managing website content.

## Features

### User Features

- User registration and login
- Session-based authentication
- User and Admin roles
- Browse Manhwa and Manga
- Browse content by genres
- Search for Manhwa
- View Manhwa details
- View chapters and chapter images
- Dynamic database-driven content
- Responsive user interface

### Admin Features

- Protected Admin Dashboard
- Add, edit, and delete Manhwa
- Add and manage genres
- Manage Manhwa information
- Upload Manhwa cover images
- Upload slider images
- Manage chapters and related content
- Manage database content

## Database

The application uses a relational database named `Manhwa` and connects to it using PHP `mysqli`.

The database includes tables such as:

- `users`
- `manhwa`
- `genres`
- `chabter`
- `img`
- `swipper`
- `swipper2`

The project includes `manhwa.sql`, which contains the database structure and data used by the application.

## Authentication & Authorization

The application uses PHP Sessions for authentication and authorization.

There are two main roles:

- **User:** Can browse and interact with the website.
- **Admin:** Has access to the Admin Dashboard and content management features.

Admin pages are protected by checking the user's active session and role.

## Content Management

Administrators can manage Manhwa content through the Admin Dashboard, including:

- Manhwa name
- Description
- Other names
- Author
- Painter
- Genre
- Status
- Rating
- Cover image
- Chapter information

Administrators can also update or delete existing content.

## Image & File Handling

The application uses PHP file uploads to manage:

- Manhwa cover images
- Slider images
- Chapter images

Uploaded files are stored in dedicated folders, while their paths are stored in the database.

## Search

The website provides a search feature that allows users to search for Manhwa titles.

Search requests are processed using PHP and sessions, with results retrieved from the database.

## Front-End

The interface was developed using:

- HTML5
- CSS3
- JavaScript
- Bootstrap 5
- jQuery
- Swiper.js
- Ionicons

Custom CSS was also used to customize the layout and appearance of the website.

## Project Structure

```text
WEB-PROJECT-MANHWA-MANGA-WEBSITE/
├── chapter_imgs/
├── cover/
├── icons/
├── solo leveling/
├── swipper1/
├── swipper2/
├── Manhwa.php
├── adminwen.php
├── chapter.php
├── config.php
├── favorite.php
├── genres.php
├── getDescription.php
├── login.php
├── logout.php
├── manga.php
├── register.php
├── search.php
├── selectgenres.php
├── setting.php
├── user.php
├── addCard.js
├── script.js
├── stylee1.css
├── blog.css
└── manhwa.sql
## Technologies

### Front-End

- HTML5
- CSS3
- JavaScript
- Bootstrap 5
- jQuery
- Swiper.js
- Ionicons

### Back-End

- PHP
- PHP Sessions
- `mysqli`

### Database

- MySQL
- MariaDB
- phpMyAdmin

### Tools

- Git
- GitHub
- Visual Studio Code
- XAMPP

## How to Run

### Prerequisites

Install a local PHP development environment such as XAMPP with:

- Apache
- PHP
- MySQL / MariaDB
- phpMyAdmin

### Setup

1. Clone the repository:

```bash
git clone https://github.com/samaabosair/WEB-PROJECT-MANHWA-MANGA-WEBSITE.git
```

2. Move the project into the XAMPP `htdocs` directory.


3. Start **Apache** and **MySQL** from XAMPP.


4. Open phpMyAdmin.


5. Create a database named:


```text
Manhwa ```
6. Import the provided manhwa.sql file.
7. Check the database configuration in config.php and make sure it matches your local MySQL settings.
8. Open the application through the local server:
```
http://localhost/WEB-PROJECT-MANHWA-MANGA-WEBSITE/ 
```
## Purpose

This project was developed to practice **Full-Stack Web Development** using PHP and MySQL.

It demonstrates practical experience with:

- Dynamic PHP applications
- Relational database design
- SQL queries
- CRUD operations
- Authentication and authorization
- Session management
- File uploads
- Database-driven content
- Search functionality
- Admin dashboards
- Responsive UI development
- Front-End and Back-End integration

## Project Highlights

This project combines **Front-End, Back-End, and Database Development** into one application, providing practical experience in building a complete database-driven web application from the user interface to the server-side logic and database layer.
