<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Person\UpdateRequest;
use App\Models\Person;

class DeleteController extends Controller
{
    public function delete(Person $person) {

        $person->delete();
        return response([]);
    }
}
