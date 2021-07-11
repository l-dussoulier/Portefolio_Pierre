<?php

namespace App\Http\Controllers;

use App\Models\Dessin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CreateController extends Controller
{
    public function index() {

        $user = Auth::user();
        //$user->assignRole('Administrateur');

        return view('create');
    }

    public function submit(Request $request){
        error_log('BG');
        Log::info('message');
        Dessin::create($request->all());
    }

    public function store(Request $request)
    {

        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:1000'
        ]);

        $drawRequest = new Dessin();
        $drawRequest->title = $request->get('titre');
        $drawRequest->description = $request->get('description');
        $drawRequest->author_id =Auth::user()->id;
        $drawRequest->statut = 1;

        $drawRequest->save();


        //return back()->with([
          //  "message" => "Demande de dessin " . $drawRequest->title . " créée",
           // "status" => "success"
        //]);
        return redirect('');
    }

    public function edit($id)
    {
        $currentDraw = Dessin::where('id', $id)->first();

        return view('edit', compact('currentDraw'));
    }
}
