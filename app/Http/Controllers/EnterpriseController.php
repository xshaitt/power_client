<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    public function enterpriseList(Request $request)
    {
        return view('enterlist');
    }

    public function showCreateEnterForm()
    {
        return view('create_enter');
    }

    public function createEnter(Request $request)
    {
        dd($request->all());
    }
}
