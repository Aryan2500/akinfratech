<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Permissioncategory;
use App\Models\Role;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    //

    function index()
    {
        $page_heading = "Roles";
        $roles = Role::all();
    return view('pages.admin.role.list', compact('page_heading', 'roles'));
    }

    public function create()
    {
        $page_heading = "Create Roles";
        $permission_categories = Permissioncategory::all();

        return view('pages.admin.role.create', compact('page_heading', 'permission_categories'));
    }
    public function store(Request $req)
    {
        // dd($req->all());
        try {
            $role = Role::create([
                'name' => $req->name,
                'user_id' => Auth::user()->id
            ]);

            $role->permissions()->attach($req->permission_ids);
            return redirect()->route('role.list')->with('success', 'Role created successfully');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function edit()
    {
        return view('pages.role.edit');
    }

    public function update(Request $req)
    {
        dd($req->all());
    }

    public function lock(Request $req)
    {
        dd($req->all());
    }
}
