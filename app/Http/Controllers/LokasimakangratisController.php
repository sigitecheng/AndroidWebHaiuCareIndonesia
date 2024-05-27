<?php

namespace App\Http\Controllers;

use App\Models\Lokasimakangratis;
use Illuminate\Http\Request;

class LokasimakangratisController extends Controller
{
    //

    public function index()
    {
        //
        return view('fe_dashboard.lokasimakangratis.index',[
            'title' => 'Lokasi Makan Gratis',
            // 'title_halaman' => 'Halaman Fundraising',

            'data_lokasimakangratis'  => Lokasimakangratis::paginate(7),

        ]); 
    }
}
