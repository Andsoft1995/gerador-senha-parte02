<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class control_servicos extends Controller
{
    public function consulta_servico(){
        $con_servico = DB::table('servicos')->get();
    }
}
