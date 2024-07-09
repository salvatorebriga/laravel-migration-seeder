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

        $trains = Train::whereDate('partenza', '>=', $today)
            ->orderBy('partenza', 'asc')
            ->get();
        return view('welcome', compact('trains'));
    }
}
