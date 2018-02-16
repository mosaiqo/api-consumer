# Mosaiqo Api Consumer

Enable Hexagonal architecture for Laravel 

## Installation

```bash
	composer require mosaiqo/hexagonal 0.1.*
```

Add the following provider to your `config/app.php` in the `providers` array.

```php
'providers' => [
    ...
    
    /**
     * Package Service Providers...
     */
    Mosaiqo\Hexagonal\Providers\LaravelServiceProvider::class,
    
    ...
];
```

In each package you should create a `routes` and a `lang` folder, like this:
The translation files are optional, but the routes are necessary if you are going to extend the
`Mosaiqo\Hexagonal\Providers\RouteServiceProvider`.

Of course you can override the `RouteServiceProvider` and therefore change the behavior.


```
- routes
-- web.php
-- api.php
- lang
-- en
--- <your-file>.php
-- es
--- <your-file>.php
``` 


## TODO

- UnitTests