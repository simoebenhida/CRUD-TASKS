## CRUD Tasks

You can cread , read ,update and delete your tasks using this repository.

For the Authentification i used the default auth in laravel by using this command

`php artisan make:auth` for more information you can check it on my blog [devma](http://devma.net/apprendre/authentification-laravel-par-defaut)

and For the model you need to create it also using the artisan command

`php artisan make:model Task -m`

for Creating the task i used Post Method and transfere the data to controller `TaskController` in `store` method

`php artisan make:controller TaskController`

Update using the method `update` in `TaskController`

For more information about CRUD you can check it on [devma](http://devma.net/apprendre/crud-sur-laravel-create-read-update-delete)

For the style i used [Bulma](http://bulma.io/)
