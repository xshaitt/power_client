<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PowerController extends Controller
{
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

    public function showAllotPowerForm(Request $request)
    {
        $result = getApiData(env('API_DOMAIN') . 'enterprises', env('API_TOKEN'));
        $data['enterprises'] = $result->data;
        $data['where'] = ['enter_id' => '0'];
        //只查询未分配的电源管家
        $result = postApiData(env('API_DOMAIN') . "/power/all", $data, env('API_TOKEN'));
        $data['powers'] = $result->data;
        return view('allot_power', $data);
    }

    public function allotpower(Request $request)
    {
        $id = $request->get('pid', '0');
        $data['enter_id'] = $request->get('enter_id', '0');
        $result = putApiData(env('API_DOMAIN') . "/power/{$id}", $data, env('API_TOKEN'));
        $result->nextToUrl = url('createpower');
        return response()->json($result);
    }

    public function powerList(Request $request, $limit = 3)
    {
        $page = $request->get('page', 1);
        $result = getApiData(env('API_DOMAIN') . "/power/{$page}/{$limit}", env('API_TOKEN'));
        $total = $result->total;
        $paginator = new LengthAwarePaginator($result->data, $total, $limit);
        $paginator->setPath($request->url());
        $data['paginator'] = $paginator;
        $data['powers'] = $result->data;
        return view('power_list', $data);
    }

    public function editpower(Request $request, $id)
    {
        $data = $request->all();
        $result = putApiData(env('API_DOMAIN') . "/power/{$id}", $data, env('API_TOKEN'));
        return response()->json($result);
    }
}
