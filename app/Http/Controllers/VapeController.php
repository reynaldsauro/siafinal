<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vape;

class VapeController extends Controller
{
    public function index(){
        $vapes = Vape::get();
        return inertia('Vape', [
            'vapes' => $vapes
        ]);
    }
}