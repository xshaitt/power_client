<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class EnterpriseController extends Controller
{
    public function enterpriseList(Request $request)
    {
        $result = getApiData(env('API_DOMAIN') . 'enterprise/1/2', env('API_TOKEN'));
        $data['enterprises'] = $result->data;
        return view('enterlist', $data);
    }

    public function showCreateEnterForm()
    {
//        $xsh = new LengthAwarePaginator();
//        dd($xsh->render());
        return view('create_enter');
    }

    public function createEnter(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $result = postApiData(env('API_DOMAIN') . 'enterprise', $data, env('API_TOKEN'));
        $result->nextUrl = url('/enterlist');
        return response()->json($result);
    }
}
