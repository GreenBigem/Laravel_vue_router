<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Http\Resources\Person\PersonResource;

class ShowController extends Controller
{
    public function show(Person $person)
    {
        return new PersonResource($person);
    }
}
