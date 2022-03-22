<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Session;
use App\Models\PostTask;
use App\Models\Worksheet;

class SessionController extends Controller
{
    public function index()
    {
        $token = md5(uniqid());
        $tokenn = new Session();
        $tokenn->token = $token;
        $tokenn->save();
        return [$token];
    }
    public function store($taskid, Request $request)
    {
        $bodycontent = $request->getContent();
        $token = request()->bearerToken();
        $taskrow = new PostTask();
        $taskrow->taskId = $taskid;
        $taskrow->optionId = $bodycontent[7];
        $taskrow->save();

        $chosen = Worksheet::where('place', $taskid)
            ->select('ganswer')
            ->get();

        $ran = json_decode($chosen, false);
        $correct = $ran[0]->ganswer;
        $answer = 'wrong';
        if ($bodycontent[7] == $correct) {
            $answer = 'good';
        }

        return $answer;
    }
}
