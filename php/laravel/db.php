 $order = $tables = \DB::select('show tables');
 $columns = \Schema::getColumnListing('tables');

php artisan tinker
$user = new User;
$user->name = "user";
$user->password = bcrypt('password');