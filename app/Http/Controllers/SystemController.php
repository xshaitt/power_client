<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;


class SystemController extends Controller
{
    //
    public function showSystemIp()
    {
        $switch = '点击开启';
        if(env('SWITCH_UPS_STATE') == 'true') $switch = '点击关闭';
        return view('showSystemIp',['power'=>env('WARNING_CONDITION'),'switch'=>$switch]);
    }

    public function showMessage(Request $request,$limit = 3)
    {
        $page = $request->get('page', 1);
        $result = getApiData(env('API_DOMAIN') . "message/{$page}/{$limit}", env('API_TOKEN'));
        $total = $result->total;
        $paginator = new LengthAwarePaginator($result->data, $total, $limit);
        $paginator->setPath($request->url());
        $data['paginator'] = $paginator;
        $data['messages'] = $result->data;
        return view('showmessage', $data);
    }

    public function delMessage(Request $request)
    {
        $id = $request->input('id');
        $result = deleteApiData(env('API_DOMAIN') . "message/{$id}", env('API_TOKEN'));
        return response()->json($result);
    }

    public function editMinPower(Request $request)
    {
        $num = $request->input('num');
        $data = ['WARNING_CONDITION'=>$num];
        modifyEnv($data);
        $result = ['status'=>200,'message'=>'修改成功'];
        return  response()->json($result);
    }

    public function editUps()
    {
        $newState = 'true';
        if(env('SWITCH_UPS_STATE') == 'true') $newState = 'false';
        $data = ['SWITCH_UPS_STATE'=>$newState];
        modifyEnv($data);
        $result = ['status'=>200,'message'=>'修改成功'];
        return  response()->json($result);
    }
}
