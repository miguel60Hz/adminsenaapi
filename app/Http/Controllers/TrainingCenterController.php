<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{
    function index()
    {
        $trainingCenters = TrainingCenter::all();

        return response()->json($trainingCenters, 200);
    }
}
