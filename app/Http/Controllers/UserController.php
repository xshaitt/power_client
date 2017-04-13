<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    public function showCreateUserForm()
    {
        $result = getApiData(env('API_DOMAIN') . 'enterprises', env('API_TOKEN'));
        $data['enterprises'] = $result->data;
        return view('create_user', $data);
    }

    public function createUser(Request $request)
    {
        $data = $request->all();
        $data['status'] = 0;
        unset($data['_token']);
        $result = postApiData(env('API_DOMAIN') . 'user', $data, env('API_TOKEN'));
        $result->nextUrl = url('/userlist');
        return response()->json($result);
    }

    public function userList(Request $request, $limit = 3)
    {
        $result = getApiData(env('API_DOMAIN') . 'enterprises', env('API_TOKEN'));
        $data['enterprises'] = $result->data;
        $page = $request->get('page', 1);
        $result = getApiData(env('API_DOMAIN') . "user/{$page}/{$limit}", env('API_TOKEN'));
        $total = $result->total;
        $paginator = new LengthAwarePaginator($result->data, $total, $limit);
        $paginator->setPath($request->url());
        $data['paginator'] = $paginator;
        $data['users'] = $result->data;
        return view('user_list', $data);
    }

    public function deluser(Request $request, $id)
    {
        // TODO 注意完善删除后的跳转，如果当前分页只有一条记录的时候如何跳转
        $result = deleteApiData(env('API_DOMAIN') . "user/{$id}", env('API_TOKEN'));
        return response()->json($result);
    }

    public function editUser(Request $request, $id)
    {
        $data = $request->all();
        unset($data['_token']);
        $result = putApiData(env('API_DOMAIN') . "user/{$id}", $data, env('API_TOKEN'));
        return response()->json($result);
    }

    /**
     * @param $id 用户id
     */
    public function activeUser($id)
    {
        //获取用户信息检测是否已经激活
        $result = getApiData(env('API_DOMAIN') . "user/show/{$id}", env('API_TOKEN'));
        if ($result->status != 200) {
            return response()->json($result);
        }
        $user = $result->data;
        if ($user->status == 1) {
            $jsonData['status'] = 300;
            $jsonData['message'] = '此用户已经激活';
            return response()->json($jsonData);
        }
        $data['status'] = 1;
        $result = putApiData(env('API_DOMAIN') . "user/{$id}", $data, env('API_TOKEN'));
        if ($result->status != 200) {
            return response()->json($result);
        }
        $jsonData['status'] = '200';
        $jsonData['message'] = '此用户激活成功';
        return response()->json($jsonData);
    }
}
