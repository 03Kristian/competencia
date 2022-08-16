<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('nombrerol')) {
            # code...
        }
        
        $rol = DB::table('roles')->orderBy('id','DESC')->simplePaginate(3);
        return view('admin.roles.index',compact('rol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = [
            'name' => 'required',
            'slug' => 'required',
        ];

        $role = new Role();
        $role->name = $request->role_name;
        $role->slug = $request->role_slug;
        $role->save();
return redirect()->route('roles.index');
        // $permission = new permission();
        // $permission->name = $request->permission_name;
        // $permission->slug = $request->permission_slug;
        // $permission->save();

        $listOfPermission= explode(',', $request->roles_permission);
        foreach($listOfPermission as $permission){
            $permissions = new Permission();
            $permissions->name  = $permission;
            $permissions->slug = strtolower(str_replace(" ","-", $permission));
            $permissions->save();
            $role->permissions()->attach($permissions->id);
            $role->save();
        }
        
        // return view('admin.roles.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
