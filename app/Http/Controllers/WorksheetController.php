<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Worksheet;

class WorkSheetController extends Controller
{
    public function index()
    {
        $tasks = Worksheet::get();

        return $tasks;
    }
}
