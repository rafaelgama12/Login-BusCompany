# Login Page with Flip Animation

This project is a login page implementation that includes a flip animation effect based on CSS styles. The page allows users to log in or subscribe, and depending on the chosen action, the screen will flip to display the relevant form.

This login page code provides a user-friendly interface for users to log in or register. The use of HTML, CSS, and PHP allows for seamless handling of user authentication and registration.

## Features

- Login and Subscribe Options: Users can choose between logging in with existing credentials or subscribing by providing new information.
- Flip Animation: When a user clicks on the login or subscribe button, the screen will flip to reveal the corresponding form, providing an engaging visual effect.
- User Authentication:
  - **Login**: User-provided login credentials are sent to a PHP script for verification.
  - **Subscription**: User-provided data is collected and stored in a MySQL/MariaDB database through a PHP script.

## Usage

1. Clone the repository to your local machine.
2. Set up a web server (e.g., Apache, Nginx) and configure it to serve the project's files.
3. Create a MySQL/MariaDB database and import the table `users_table.sql` schema to create the necessary table.
4. Update the database connection details in the PHP scripts to match your database configuration.
5. Open the project in a web browser.

### File Structure

- `index.html`: The main HTML file containing the login page structure and flip animation triggers.
- `login.php`: PHP script to verify user login credentials against the database.
- `signup.php`: PHP script to handle user subscription data and store it in the database.
- `users_table.sql`: SQL schema file to create the table for users in the database.
- `login.css`: The file with CSS content for styling the login page and animation.
- `background.css`: The file containing different ways to change the background image for the CSS style in the page.

## Database Schema

The `users_table` table stores user information for authentication and subscription.

### `users_table`

| Column | Data Type         | Description
|-------|---------------|------------
| login | varchar(20)   | Users ID
| pswd  | varchar(15)   | Hashed password for auth 
| name  | varchar(30)   | User's chosen username 
| email | varchar(50)   | User's email address 


## Acknowledgments

- The flip animation is based on CSS transitions and transforms.
- PHP is used for server-side scripting and database interaction.
- MySQL/MariaDB is used to store user data.
