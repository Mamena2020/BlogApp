<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Laravel tutorial: case (Blog App) with Laravel 9
# Instalation 
cmd: composer create-project laravel/laravel blogApp

[0] Create DB and Set in environments (.env)

[1]. Auth
    Generating Auth with scaffolding(controller,UI)
    cmd: composer require laravel/ui
	After Composer installation runs artisan command to generate scaffolding. you can bootstrap or vue or react any of them laravel/ui for Login Registration.

    After Composer installation runs artisan command to generate scaffolding. you can bootstrap or vue or react any of them laravel/ui for Login Registration.

    Generate basic scaffolding and login and registration for bootstrap **using this for this tutorial
    cmd: php artisan ui bootstrap
         php artisan ui bootstrap --auth
    Generate basic scaffolding and login and registration for vue
    cmd: php artisan ui vue
         php artisan ui vue --auth
    Generate basic scaffolding and login and registration for react
    cmd: php artisan ui react
         php artisan ui react --auth
    Generate basic scaffolding
    cmd: php artisan ui bootstrap
         php artisan ui vue
         php artisan ui react
    Generate login / registration scaffolding
    cmd: php artisan ui bootstrap --auth
         php artisan ui vue --auth
         php artisan ui react --auth
    After generating UI need to install npm dependencies.
    cmd: npm install 
         npm run dev
    if there a conflix when run 'npm run dev' then 
    cmd: npm install resolve-url-loader@^5.0.0 --save-dev --legacy-peer-deps
    for fixing warning couse color-adjust shorthand is currently deprecated and it depends on the autoprefixer@10.4.6
    cmd: npm install autoprefixer@10.4.5 --save-exact 
    Next, Migrate the database
    cmd:
    php artisan migrate

[2]. Laravel Module (CREATE MODULE->[Auth,Blog,Category])

    cmd: composer require nwidart/laravel-modules
    The package will automatically register a service provider and alias.
    cmd: php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"
    By default the module classes are not loaded automatically.
    copy: "Modules\\": "Modules/"
    to: package.json, section autoload, psr-4
            {
                "autoload": {
                    "psr-4": {
                    "App\\": "app/",
                    "Modules\\": "Modules/"
                    }
                }
            }
    then run, to load class modules
    cmd: composer dump-autoload 
    Command to create module, controller, model, request, ect.. 
    https://nwidart.com/laravel-modules/v6/advanced-tools/artisan-commands
                    *simple doc
                        Controller
                        cmd: php artisan module:make-controller PostsController Blog
                        Model
                        cmd: php artisan module:make-model Post Blog
                        Provider
                        cmd: php artisan module:make-provider BlogServiceProvider Blog
                        Middleware
                        cmd: php artisan module:make-middleware CanReadPostsMiddleware Blog
                        Mail
                        cmd: php artisan module:make-mail SendWeeklyPostsEmail Blog
                        Notification
                        cmd: php artisan module:make-notification NotifyAdminOfNewComment Blog
                        Reqeust
                        cmd: php artisan module:make-request CreatePostRequest Blog
                        Rule
                        cmd: php artisan module:make-rule ValidationRule Blog
                        Resource
                        php artisan module:make-resource PostResource Blog
                     *end doc   
    
    Create module (Auth,Category,Blog )
    cmd: php artisan module:make Auth Blog Category

[3]. Moving Auth Controller, Model, View to Module [Auth]
     and create login Routes 

    - View
    first copy layout template
    copy:  resources/views/layouts/app.blade.php
    to: Modules/Auth/Resources/views/layouts
    then copy auth login/register view
    copy:  resources/views/auth
    to: Modules/Auth/Resources/views

    - Model
    Create User Model
    cmd: php artisan module:make-model User Auth
    After that, 
    copy: User Model from /App/Models/User.php   **without namespace
    to: Module/Auth/Entities/User.php
    Modify config/auth/php
    change: sections-> providers/users/model
    from: 'model' => App\Models\User::class,
    to: 'model' => Modules\Auth\Entities\User::class,
    
    - Controller
    Create LoginController
    cmd: php artisan module:make-controller LoginController Auth
    copy: Login Controller from /App/Http/Controllers/Auth/LoginController.php
    to:  Module/Auth/Http/Controllers/LoginController.php   **without namespace
    then override  function showLoginForm and retun to
    return view('auth::auth.login');

    - Routes
    copy code bellow to  Module/Auth/Routes/web.php
        Route::group(['as'=>'auth.'], function () {
            Route::get('/login', 'LoginController@showLoginForm')->name("login");
            Route::post('/login', 'LoginController@login')->name("login.attempt");
        });
    then modify access route login form post 
    modify file ini here: Modules/Auth/Resources/views/login.blade.php
    change: <form method="POST" action="{{ route('login') }}">
    to: <form method="POST" action="{{ route('auth.login') }}">
    
 [4]. Create User Seeder
    
    cmd:  php artisan make:seeder UserSeeder
    copy: 
          $userAdmin = new User;
          $userAdmin->name  = "Admin";
          $userAdmin->email  = "admin@app.com";
          $userAdmin->password  = Hash::make("admin");
          $userAdmin->save();
    to: database/seeders/UserSeeder.php **inside run function 

    and call seeder inside run function DatabaseSeeder.php
    copy 
          $this->call([
             UserSeeder::class,
          ]);

    then run seeder
    cmd: php artisan db:seed
    

