<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Person;

class IndexController extends Controller
{
    public function index() {

        $person = Person::all();
        return $person;
    }
}
