<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
function __construct()
{
    $this->middleware('permission:about-us', ['only' => ['index']]);
    $this->middleware('permission:role-management', ['only' => ['index']]);
    $this->middleware('permission:terms-and-conditions', ['only' => ['index']]);
    $this->middleware('permission:contact-us', ['only' => ['index']]);
    $this->middleware('permission:popular-courses', ['only' => ['index']]);
    $this->middleware('permission:blog-categories', ['only' => ['index']]);
    $this->middleware('permission:user-management', ['only' => ['index']]);
    $this->middleware('permission:tag-management', ['only' => ['index']]);
    $this->middleware('permission:subscriptions', ['only' => ['index']]);

    $this->middleware('permission:new-blog', ['only' => ['index']]);
    $this->middleware('permission:privacy-policy', ['only' => ['index']]);
    $this->middleware('permission:cookie-policy', ['only' => ['index']]);
    $this->middleware('permission:about-us', ['only' => ['index']]);
    $this->middleware('permission:testimonials', ['only' => ['index']]);
    $this->middleware('permission:blog-list', ['only' => ['index']]);
}
    public function index(Request $request)

    {
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('admin.role-management',compact('roles'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create()

    {
        $permission = Permission::get();
        return view('admin.add-role',compact('permission'));
    }
    public function store(Request $request)

    {
        $this->validate($request, [
        'name' => 'required|unique:roles,name',
        'permission' => 'required',
        ]);
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        return redirect()->route('admin.role-management')
        ->with('success','Role created successfully');
    }
    public function show($id)

    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
        ->where("role_has_permissions.role_id",$id)
        ->get();
        return view('roles/show',compact('role','rolePermissions'));
        // 
    }
    public function edit($id)
    
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all();
        return view('admin.edit-role',compact('role','permission','rolePermissions'));
    }
    public function update(Request $request, $id)

    {
        $this->validate($request, [
        'name' => 'required',
        'permission' => 'required',
        ]);
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));
        return redirect()->route('roles.index')
        // 
        ->with('success','Role updated successfully');
    }

    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')
        ->with('success','Role deleted successfully');
    }
}
