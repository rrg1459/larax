<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $messages = Message::orderBy('id', 'DESC')->paginate(10);
//      $messages = Message::paginate(10); // por defecto trae 5 nebsajes por pagina

//      dd($messages); // para ver por pantalla el contenido


        return view('welcome', [
            'messages' => $messages,
        ]);
    }
}
