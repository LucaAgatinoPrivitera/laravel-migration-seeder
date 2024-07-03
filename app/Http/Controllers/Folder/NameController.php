<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class NameController extends Controller
{
        //{
            public function home()
            {
                $trains = Train::all(); //funziona solo grazie al "use App\Models\Movie;" sopra, altrimenti non ci sarebbe niente importato
                $dati = [
                    "trains" => $trains
                ];
        
                return view('home', $dati);
            }
}
