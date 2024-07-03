<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
// Presumo che la classe carbon indichi il date time
use Carbon\Carbon;

class NameController extends Controller
{
        //{
            public function home()
            {
                $today = Carbon::today();
                // $trains = Train::all(); //funziona solo grazie al "use App\Models\Movie;" sopra, altrimenti non ci sarebbe niente importato
                // $trains = Train::whereDate('Orario di partenza', '2024-08-03 15:29:02')->get(); così non funziona non so perché
                $trains = Train::whereDate('Orario di partenza', $today)->get();
                $dati = [
                    "trains" => $trains
                ];
        
                return view('home', $dati);
            }

            public function all()
            {
                $trains = Train::all(); //funziona solo grazie al "use App\Models\Movie;" sopra, altrimenti non ci sarebbe niente importato
                $dati = [
                    "trains" => $trains
                ];
        
                return view('all', $dati);
            }
}
