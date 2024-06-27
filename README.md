# Sample Project

## Description

This is a sample PHP project demonstrating the use of PDO for database connections, CRUD operations with a `User` class, and unit testing with PHPUnit.

## Setup

### Requirements

- PHP 7.4 or higher
- MySQL
- Composer
- MAMP or another local development environment

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/ndaboom/sample-project.git
   cd sample-project
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Configure the database:

   - Start your MySQL server (MAMP or other).
   - Create a database named `test_db`.
   - Update the database connection details in `objects/Database.php` if necessary:

     ```php
     private $host = "127.0.0.1";
     private $db_name = "test_db";
     private $username = "root";
     private $password = "root";
     ```

4. Import the database schema:

   ```sql
   CREATE TABLE users (
       id INT(11) AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(50) NOT NULL,
       email VARCHAR(50) NOT NULL
   );
   ```

## Running the Project

1. Place the project in your web server's root directory. For MAMP, place it in the `htdocs` directory.
2. Access the project via your browser. For example, `http://localhost/sample-project`.

## Running Tests

1. Ensure the MySQL server is running.
2. Run the tests using PHPUnit:

   ```bash
   ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests
   ```

## Troubleshooting

### Common Errors

1. **Connection error: SQLSTATE[HY000] [2002] No such file or directory**

   - Ensure the MySQL server is running.
   - Check the host and socket settings in `objects/Database.php`.

2. **Call to a member function prepare() on null**

   - This indicates a failed database connection. Verify the connection details and ensure the server is accessible.

## Contact

For any questions or issues, please contact [ndabosam084@gmail.com].