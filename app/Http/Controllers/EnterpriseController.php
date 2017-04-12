<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class EnterpriseController extends Controller
{
    public function enterpriseList(Request $request, $limit)
    {
        $page = $request->get('page', 1);
        $result = getApiData(env('API_DOMAIN') . "enterprise/{$page}/{$limit}", env('API_TOKEN'));
        $total = $result->total;
        $paginator = new LengthAwarePaginator($result->data, $total, 3);
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
}
