# Pyro Artisan Commands
Small extension grouping common artisan commands when working with pyro. 

* `php artisan pyro:clear` - Runs cache, twig, view and http cache clear.
* `php artisan pyro:compile` - Sets env variable installed to false, runs stream compile and then sets the variable back to true.

## How to install
In your composer.json file, add :

```
{
  "repositories": [{
    "type": "composer",
    "url": "https://packages.pixney.com"
  }]
}
```

then require the package:
```
composer require pixney/artisan-extension
```

Finally install the addon:
```
php artisan addon:install pixney.extension.artisan
```

## Suggested bash aliases to add to make it even easier.

```
echo "alias \"a\"='nano ~/.bash_aliases'" >> ~/.bash_aliases && source ~/.bashrc
```

```
echo "alias \"r\"='source ~/.bashrc'" >> ~/.bash_aliases && source ~/.bashrc
```

```
echo "alias \"art\"='php artisan'" >> ~/.bash_aliases && source ~/.bashrc
```

Now you just need to run `art pyro:clear` & `art pyro:compile`
