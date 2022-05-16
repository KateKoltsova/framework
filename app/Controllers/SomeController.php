<?php

namespace Aigletter\App\Controllers;

class SomeController
{
    public function action(string $name, int $age, string $sex = 'man')
    {
        echo "This $age years old $sex name is $name!";
    }

    public function arr(array $array)
    {
        echo "This function Arr is printing array ";
        print_r($array);

    }

    public function newObject(HomeController $homeController )
    {
        $homeController->index();
        echo '</br>';
        echo "This function return message from HomeController";
    }
}