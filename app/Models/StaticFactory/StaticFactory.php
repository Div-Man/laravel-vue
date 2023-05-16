<?php

namespace App\Models\StaticFactory;
use App\Models\StaticFactory\DatabaseHandler;
use App\Models\StaticFactory\EmailHandler;

final class StaticFactory
{
    public static function factory($data, $storage)
    {
        return match ($storage) {
            'database' => new DatabaseHandler($data),
            'email' => new EmailHandler($data)
        };  
    }
}
