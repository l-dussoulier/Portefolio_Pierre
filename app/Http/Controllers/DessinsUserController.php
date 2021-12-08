<?php

namespace App\Http\Controllers;

use App\Models\Dessin;
use App\Models\statut;
use App\Services\JsonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function submit(Request $request){

        dd($request->all());
        Dessin::create($request->all());
    }

    public function store(Request $request)
    {


        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'max:500000',
        ]);

        if(Dessin::find($request->get('id')) != null){

            $dessin = Dessin::find($request->get('id'));
            $dessin->contact = $request->get('contact');
            $dessin->description = $request->get('description');

            $dessin->save();
            return redirect('/welcome');
        }
        return redirect('');
    }

}
