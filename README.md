# todo
A simple Laravel Todo List Package

<a name="quickstart">Quickstart</a>
--------
To get started, you simply need to add this to `composer.json`:

    "require": {
        "bosunski/todo": "dev-master"
    }
    
Then you run:

    $ composer update
    
This will install the package.

You have to add this service provider inside `config/app.php`:

    Bosunski\Todo\TodoServiceProvider::class,

You have to run migrations Afterwards:

    $ php artisan migrate
    
This will create necessary tables inside the database.

And you're good to Go.

Just point to `/todo` route and See it works.
