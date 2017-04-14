<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PowerController extends Controller
{
    public function allotPower()
    {
        return view('allot_power');
    }

    //创建电源管家
    public function showCreatePowerForm()
    {
        return view('create_power');
    }

    public function createPower(Request $request)
    {
        $data = $request->all();
        $data['enter_id'] = 0;
        unset($data['_token']);
        $result = postApiData(env('API_DOMAIN') . 'power', $data, env('API_TOKEN'));
        $result->nextUrl = url('/powerlist');
        return response()->json($result);
    }

    public function showAllotPowerForm()
    {
        return view('allot_power');
    }
}
