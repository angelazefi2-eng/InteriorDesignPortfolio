# Interior Design Portfolio

## Project Description

Interior Design Portfolio is a web application developed to manage interior design projects.

The system allows users to:

* Add new projects
* Store project information in a MySQL database
* Display projects on the webpage
* Manage project details such as client, project type, budget, and status

## Technologies Used

* HTML
* CSS
* JavaScript
* PHP
* MySQL (phpMyAdmin)
* XAMPP

## Database

### Database Name

`interiordb`

### Table Name

`projects`

### Table Structure

| Field        | Type                           |
| ------------ | ------------------------------ |
| id           | INT AUTO_INCREMENT PRIMARY KEY |
| client_name  | VARCHAR(100)                   |
| project_type | VARCHAR(100)                   |
| budget       | INT                            |
| status       | VARCHAR(50)                    |

## Features

* Add interior design projects
* Store data in MySQL database
* Display projects dynamically
* Simple and modern interface

## How to Run

1. Install XAMPP
2. Start Apache and MySQL
3. Create the database `interiordb`
4. Create the table `projects`
5. Place the project folder inside:

```text
C:\xampp\htdocs\InteriorDesignPortfolio
```

6. Open the browser and visit:

```text
http://localhost/InteriorDesignPortfolio
```

## Author

Angela Zefi
