<?php

namespace App\Http\Controllers;

use App\Models\Dessin;
use App\Services\JsonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DessinsController extends Controller
{
    public function __construct(JsonService $jsonService)
    {
        $this->jsonService = $jsonService;
    }

    public function list() {
        $dessins = Dessin::all()->sortByDesc('created_at');

        //dd($this->jsonService::stringToJson());

        return view('dessins.list', compact('dessins'));
    }

    public function listUser() {

        $dessins = Dessin::all()->where('author_id',Auth::user()->id)->sortByDesc('created_at');

       // dd($dessins);

        return view('dessins.ListUser.listUser',compact('dessins'));
    }
}
