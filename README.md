# Pyro Artisan Commands
Small extension grouping common artisan commands when working with pyro. 

* `php artisan pyro:clear` - Runs cache, twig, view and http cache clear.
* `php artisan pyro:compile` - Sets env variable installed to false, runs stream compile and then sets the variable back to true.

## Suggested bash aliases to add to make it even easier.
`echo "alias \"a\"='nano ~/.bash_aliases'" >> ~/.bash_aliases && source ~/.bashrc  `
`echo "alias \"r\"='source ~/.bashrc'" >> ~/.bash_aliases && source ~/.bashrc  `
`echo "alias \"art\"='php artisan'" >> ~/.bash_aliases && source ~/.bashrc`

Now you just need to run `art pyro:clear` & `art pyro:compile`
