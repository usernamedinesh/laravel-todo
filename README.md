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