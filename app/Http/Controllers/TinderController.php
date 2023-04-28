<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Tinder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TinderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'surname'=>'required',
            'name'=>'required',
            'dog'=>'required',
            'email'=>'required',
        ]);

        Tinder::create([
            'surname' => $request->input('surname'),
            'name' => $request->input('name'),
            'dog' => $request->input('dog'),
            'email' => $request->input('email'),
        ]);

        if ( Tinder::get('email') === true) {
            return redirect('/#container-avp')->with('message','Ce mail est déjà associé à un autre compte !');
        }
        else {
            return redirect('/#container-avp')->with('message','Vos informations ont bien été enregistrées !');
        }
    }

    public function backoffice()
    {
        $tinders = Tinder::all();
        return view('backoffice',['tinders' => $tinders]);
    }

    public function edit(Tinder $tinder)
    {
        return view('tinder-edit', ['tinder' => $tinder]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'surname'=>'required',
            'name'=>'required',
            'dog'=>'required',
            'email'=>'required',
        ]);

        $tinder = Tinder::find($id);
        $tinder->surname =  $request->input('surname');
        $tinder->name = $request->input('name');
        $tinder->dog = $request->input('dog');
        $tinder->email = $request->input('email');

        $tinder->save();

        return redirect()->route('backoffice')->with('message','Les données ont été modifiées.');
    }

    public function destroy(string $id)
    {
        Tinder::destroy($id);
        return redirect()->route('backoffice')->with('message','Les données ont été supprimées.');
    }
}
