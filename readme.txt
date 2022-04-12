
To run migrations please use the command: php artisan migrate

To run the seeders use the following commands in the given order:
1.Run cmd and type composer update
2.Type php artisan key:generate
3.Type php artisan migrate
4.Then type php artisan serve
5.Required link will be generated

To run the website, enter the url 'http://127.0.0.1:8000' in the browser.

The signup page creates an account for customer by default.To create an account for admin, 
the signup page is the same but the user has to change the 'usertype' in the users table
 from 'customer' to 'admin'.
