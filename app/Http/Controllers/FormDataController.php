<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\StaticFactory\StaticFactory;

class FormDataController extends Controller {
    public function __invoke(Request $request)
    {
        /*
         * Это для примера
         */
        return StaticFactory::factory($request->all(), 'database')->save(); 
        //return StaticFactory::factory($request->all(), 'email')->save(); 
    } 

    
}
