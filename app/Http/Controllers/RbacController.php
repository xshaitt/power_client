<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RbacController extends Controller
{
    public function showrole()
    {
//        得到所有角色
        $data['roles'] = Role::get()->toArray();
        return view('roleview', $data);
    }

    public function addrole()
    {
        return view('roleaddview');
    }

    public function delrole($id)
    {
        if (DB::table('roles')->where('id', '=', $id)->delete() > 0) {
            return redirect()->action('RbacController@showrole');
        } else {
            return back()->with('error', '删除失败');
        }
    }

    public function createrole(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|unique:roles',
            'display_name' => 'bail|required',
            'description' => 'bail|required',
        ]);
        $role = new Role();
        $role->name = $request->input('name');
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');
        if ($role->save()) {
            return redirect()->action('RbacController@showrole');
        } else {
            return back()->with('error', '添加失败');
        }
    }

    public function editrole($id)
    {
        $data['role'] = Role::find($id)->toArray();
        $data['pers'] = Permission::all()->toArray();
        //拥有的权限
        $per_id = DB::table('permission_role')->where('role_id', $id)->get()->toArray();
        if ($per_id) {
            foreach ($per_id as $v) {
                $ids[] = Permission::find($v->permission_id)->toArray();
                $ps[] = Permission::find($v->permission_id)->toArray()['id'];
            }
            $data['haves'] = $ids;
            $data['ps'] = $ps;
        }
        return view('roleeditview', $data);
    }

    public function updaterole(Request $request)
    {
        $role = new Role();
        $id = $request->input('id');
        $data['name'] = $request->input('name');
        $data['display_name'] = $request->input('display_name');
        $data['description'] = $request->input('description');
        if ($role->where('id', '=', $id)->update($data) > 0) {
            return redirect()->action('RbacController@showrole');
        } else {
            return back()->with('error', '修改失败');
        }
    }


    public function showpermissions()
    {
        $data['pers'] = Permission::all()->toArray();
        return view('perview', $data);
    }

    public function addpermissions()
    {
        return view('peraddview');
    }

    public function createpermissions(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|unique:permissions',
            'display_name' => 'bail|required',
            'description' => 'bail|required',
        ]);
        $per = new Permission();
        $per->name = $request->input('name');
        $per->display_name = $request->input('display_name');
        $per->description = $request->input('description');
        if($per->save()){
            return redirect()->action('RbacController@showpermissions');
        }
    }

    public function delpermissions($id)
    {
        if(DB::table('permissions')->where('id', '=', $id)->delete() > 0){
            return redirect()->action('RbacController@showpermissions');
        } else {
            return back()->with('error','删除失败');
        }
    }

    public function editpermissions($id)
    {
        $data['per'] = Permission::find($id);
        return view('pereditview',$data);
    }

    public function updatepermissions(Request $request)
    {
        //TODO 使用JS判断表单项是否修改，后执行操作
        $this->validate($request, [
            'name' => 'bail|required|unique:permissions',
            'display_name' => 'bail|required',
            'description' => 'bail|required',
        ]);
        $data['name'] = $request->input('name');
        $data['display_name'] = $request->input('display_name');
        $data['description'] = $request->input('description');
        $id = $request->input('id');
        if(Permission::where('id',$id)->update($data) > 0){
            return redirect()->action('RbacController@showpermissions');
        } else {
            return bake()->with('error','修改失败');
        }
    }

    public function bindrole(Request $request)
    {

        //        实例化用户
        $id = $request->input('id');
        $user = User::find($id);
        $role_id = $request->input('role');
        $length = count($role_id);
        for ($i = 0; $i < $length; $i++){
            if ($user->attachRole($role_id[$i]) !== null){
                return back()->with('error','修改失败');
            }
        }
        return redirect(url('/userview'));
    }

    public function unbindrole($userid,$roleid)
    {
        if(DB::table('role_user')->where('user_id',$userid)->where('role_id',$roleid)->delete() > 0)
        {
            return redirect(url('/userview'));
        } else {
            return back()->with('error','修改失败');
        }
    }

    public function unbindpermissions($roleid,$perid)
    {
        if(DB::table('permission_role')->where('role_id',$roleid)->where('permission_id',$perid)->delete() > 0)
        {
            return redirect(url('/roleview'));
        }
    }

    /**
     * 给角色绑定权限
     */
    public function bindpermissions(Request $request)
    {
        $role_id = $request->input('role_id');
        $role = Role::find($role_id);
        $per_id = $request->input('per_id');
        $length = count($per_id);
        for ($i = 0; $i < $length; $i++){
            if ($role->attachPermission($per_id[$i]) !== null){
                return back()->with('error','操作失败');
            }
        }
        return redirect(url('/roleview'));

    }

    public function edituser($id)
    {
        $data['user'] = User::find($id)->toArray();
        $data['roles'] = Role::all()->toArray();
//        拥有的角色
        $role_id = DB::table('role_user')->where('user_id',$id)->get()->toArray();
        if ($role_id) {
            foreach ($role_id as $v) {
                $ids[] = Role::find($v->role_id)->toArray();
                $ridarr[] = Role::find($v->role_id)->toArray()['id'];
            }
            $data['haves'] = $ids;
            $data['ridarr'] = $ridarr;
        }

        return view('usereditview',$data);
    }

    public function showuser()
    {
        $data['users'] = User::all()->toArray();
        return view('userview',$data);
    }

}
