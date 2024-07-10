<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->format('Y-m-d');

        $trains = Train::whereDate('orario_di_partenza', '>=', $today)
            ->orderBy('orario_di_partenza', 'asc')
            ->get();
        return view('trains', compact('trains'));
    }
}
