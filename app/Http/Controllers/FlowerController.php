<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller{

    public function create(){
    return view ('create')
    }
}
             
    public function store(Request $request)
    // $request è un parametro formale
    {
        // dobbiamo creare un nuovo record
        Flowers::create([
            // come valore diamo prorpio quello sul form
            "tipology" => $request->tipology,
            "description" => $request->description,
            "img" => $request->img,
        ]);

        return redirect(route('floer.index'))->with('success', 'Hai scelto dei fiori bellissimi!');
    }
