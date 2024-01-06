# APP2 readme

step1: 

composer create-project --prefer-dist laravel/laravel app2



step2:

Create the HTML file:
Place your static HTML file inside the resources/views directory. For example, create a file named app2.html:


<!-- resources/views/static.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static HTML Page</title>
</head>
<body>
    <h1>Hello, I am App2</h1>
</body>
</html>



step3:

cd app2 directory

Create a Controller:
Generate a controller using the Artisan command line tool. Open your terminal and run:

php artisan make:controller StaticPageController




This command will create a file named StaticPageController.php inside the app/Http/Controllers directory.





step4:

Define a method in the controller:
Open the StaticPageController.php file and add a method to load the static HTML page:



// app/Http/Controllers/StaticPageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
	 // to load static page app2
    public function showStaticPage()
    {
        return view('app2');
    }
}







step5:

Define a route:
Open the routes/web.php file and add a route to map to the controller method:


// routes/web.php

use App\Http\Controllers\StaticPageController;

Route::get('/app2', [StaticPageController::class, 'showStaticPage']);
