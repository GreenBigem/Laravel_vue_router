<?php

namespace App\Http\Controllers\Person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Person\UpdateRequest;
use App\Models\Person;

class UpdateController extends Controller
{
    public function update(UpdateRequest $request, Person $person) {

        $data = $request->validated();
        $person->update($data);
        return $person;
    }
}
