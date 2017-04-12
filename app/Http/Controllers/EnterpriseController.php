<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class EnterpriseController extends Controller
{
    public function enterpriseList(Request $request, $limit = 3)
    {
        $page = $request->get('page', 1);
        $result = getApiData(env('API_DOMAIN') . "enterprise/{$page}/{$limit}", env('API_TOKEN'));
        $total = $result->total;
        $paginator = new LengthAwarePaginator($result->data, $total, $limit);
        $paginator->setPath($request->url());
        $data['paginator'] = $paginator;
        $data['enterprises'] = $result->data;
        return view('enterlist', $data);
    }

    public function showCreateEnterForm()
    {
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

    //删除企业
    public function delenter(Request $request, $id)
    {
        // TODO 注意完善删除后的跳转，如果当前分页只有一条记录的时候如何跳转
        $result = deleteApiData(env('API_DOMAIN') . "enterprise/{$id}", env('API_TOKEN'));
        return response()->json($result);
    }

    //编辑企业
    public function editenter(Request $request, $id)
    {
        $data = $request->all();
        unset($data['_token']);
        $result = putApiData(env('API_DOMAIN') . "enterprise/{$id}", $data, env('API_TOKEN'));
        return response()->json($result);
    }
}
