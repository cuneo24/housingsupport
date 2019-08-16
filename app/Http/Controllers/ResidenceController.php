<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residence;

class ResidenceController extends Controller
{
    function showResidences(){
        $residences = Residence::get();
        return view('residences')->with(['residences' => $residences]);
    }
}
