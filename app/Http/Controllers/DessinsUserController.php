<?php

namespace App\Http\Controllers;

use App\Models\Dessin;
use App\Services\JsonService;
use Illuminate\Http\Request;

class DessinsUserController extends Controller
{
    public function __construct(JsonService $jsonService)
    {
        $this->jsonService = $jsonService;
    }

    public function list() {
        $dessins = Dessin::all();

        //dd($this->jsonService::stringToJson());

        return view('dessins.list', compact('dessins'));
    }
}
