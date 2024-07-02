<?php

namespace App\Http\Controllers;

use App\Models\Daftarmitrarumahmakann;
use App\Models\Lokasimakangratis;
use Illuminate\Http\Request;

class ProgrammakangratisController extends Controller
{
    //
    public function index()
    {
        //
        return view('fe_dashboard.programmakangratis.index',[
            'title' => 'Haiu Care Indonesia',
            // 'title_halaman' => 'Halaman Fundraising',

            'data_lokasimakangratis'  => Lokasimakangratis::all(),
            'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakann::all(),

        ]); 
    }
}
