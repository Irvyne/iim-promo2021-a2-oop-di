# OOP DIC

## Configure Project

Copy file `parameters.php.dist` to `parameters.php` and change value accordingly to your environment.

## Install dependencies

```bash
composer install
```

## TODO

1. Create a `doctrine` service in the DIC, must return what `EntityManager::create($params['db'], $config)` was returning.

2. Create a `doctrine.repository.article` in the DIC which return the ArticleRepository directly.
