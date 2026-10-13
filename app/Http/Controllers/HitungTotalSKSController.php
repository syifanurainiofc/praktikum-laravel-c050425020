<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungTotalSKSController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $total = \App\Models\Matakuliah::sum('sks');

        return view('totalsks', compact('total'));
    }
}
