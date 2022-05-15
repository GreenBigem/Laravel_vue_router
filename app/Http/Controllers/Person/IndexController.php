<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Http\Resources\Person\PersonResource;

class IndexController extends Controller
{
    public function index() {

        $people = Person::all();
        return PersonResource::collection($people);
    }
}
