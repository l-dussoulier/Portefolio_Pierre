<?php

namespace App\Http\Controllers;

use App\Models\Dessin;
use App\Models\Statut;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CreateController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        //$user->assignRole('Administrateur');

        $format = $request->query('format');

        return view('create', compact('format'));
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

        if(Dessin::find($request->get('id')) == null){
            //dd($request->get('id'));
            $drawRequest = new Dessin();
            $drawRequest->title = $request->get('titre');
            $drawRequest->description = $request->get('description');
            $drawRequest->author_id =Auth::user()->id;
            $drawRequest->contact = $request->get('contact');

            $drawRequest->id_statut = 1;

            $path =  Storage::disk('public')->put('images',$request-> image);

            $drawRequest-> linkImage = $path;


            $drawRequest->save();
        }else {
            $dessin = Dessin::find($request->get('id'));
            $dessin-> title = $request->get('titre');
            $dessin->contact = $request->get('contact');
            $dessin->description = $request->get('description');
            $statut = Statut::find($request->get('statut'));
            $dessin->id_statut = $statut->id;

            $dessin->save();
            return redirect('/dashboard/dessins');
        }
        return redirect('');
    }


    public function edit($id)
    {
        $currentDraw = Dessin::where('id', $id)->first();
        $statuts = Statut::all();
        $user = User::where('id',$currentDraw->author_id)->first();

        return view('edit', compact('currentDraw','user','statuts'));
    }

    public function editUser($id) // edit user
    {
        $currentDraw = Dessin::where('id', $id)->where('author_id',Auth::user()->id)->first();

        return view('dessins.ListUser.editUser', compact('currentDraw'));
    }

    public function delete($id)
    {
        $deleteDraw = Dessin::where('id',$id)->first();
        $deleteDraw->delete();

        return redirect('/dashboard/dessins');
    }

}
