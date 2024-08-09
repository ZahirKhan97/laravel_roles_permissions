<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    // this method will show permissions page
    public function index()
    {
        return view('permissions.list');
    }

    // this method will show create permission page
    public function create()
    {
        return view('permissions.create');
    }

    // this method will insert a permissions in DB
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:permissions|min:3'
        ]);

        if ($validator->passes()) {
            Permission::create(['name' => $request->name]);
            return redirect()->route('permissions.index')->with('success', 'Permission added successfully');
        } else {
            return redirect()->route('permissions.create')->withInput()->withErrors($validator);
        }
    }

    // this method will show edit permission page
    public function edit() {}

    // this method will update a permission
    public function update() {}

    // this method will delete a permission
    public function destroy() {}
}
