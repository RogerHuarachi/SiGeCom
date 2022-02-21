<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::paginate(10);
        return view('admin.permissions.index', compact('permissions'));
    }

    public function store(Request $request)
    {
        Permission::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function update(Request $request, Permission $permission)
    {

        $permission->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return back()->with('confirmation','Eliminado Correctamente');
    }
}
