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
        $data = $request->all();
        unset($data['_token']);
        $result = postApiData('http://ps.dev/enterprise', $data, env('API_TOKEN'));
        $result->nextUrl = url('/enterlist');
        return response()->json($result);
    }
}
