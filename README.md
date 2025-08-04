# Routing 
* path for opening a webpage

```
    Route::get('/routeName', function() {
        return view('pageName)
    })

    Route::view('/sortFormRouteName', 'pageName')

```

# passing data through route
* daynamic route, accepting data from param and passing to 
page about

```
    Route::get('/about/{name}', function($name) {
        return view('about', ['name' =>$name]);
    })
```

# Redirection to another route 
```
<a href="/about/{from-home-page}">go to about page </a>
<a href="/about/name">go to about page </a>
```
* when hit 'from' route direct to 'to' route
```
    route::redirect('/from', 'to')
```

# Controller is a part of MVC
* handle request from user and display view and handle database 
* we can create controler using cli
> php artisan make:controller UserController

* getUser => is a function iside the UserController
Route::get('user',[UserController::class, 'getUser'] ); // we can call controler like this

# View
> php artisan make:view user
> php artisan make:view fodername viewName

# blade
* a template engine to execute php code .(faster execution,simple)

# main view and subview
* we can render subview to main view using @include
* we can pass data from main view to subview

# component 
* it wil make two directory in view/componets/message 
* and app/View/Compoenet/message 
php artisan make:component message 
* we can use component like this 
<x-message />
* but when you want to send something dynamically to need to change in app/View/com../mess..
