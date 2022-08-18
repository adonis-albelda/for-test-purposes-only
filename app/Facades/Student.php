<?php

namespace App\Facades;

class Student extends \Illuminate\Support\Facades\Facade
{
    public static function getFacadeAccessor()
    {
        return 'student';
    }
}
