# Login-form-simple-PHP-MySQL
Simple login form with PHP, MySQL, htmlentities, mysqli_real_escape_string and correct logout link :)
File index.php is main page where You will see login form.
After you type your credentials it will redirect you to login.php page where we connect with database and check if user exists.
If not you will get message that login or password is incorrect.
If user exists it will redirect you to logged.php file. There you will see information that welcomes you and link to logout.
Logout link redirect you to main page index.php and destroy your session. 

I know its very simple , basic form there is no CSS , its just pure PHP to train :)
ALSO: file login.php will check if user tries any mysql injections or hmtl tags. I hope you enjoy :)
