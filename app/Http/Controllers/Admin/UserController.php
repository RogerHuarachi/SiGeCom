<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Agency;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->paginate(10);
        $agencies = Agency::orderBy('id')->get();
        $roles = Role::orderBy('name')->get();
        return view('admin.users.index', compact('users', 'roles', 'agencies'));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'agency_id' => $request->agency_id
        ]);
        $role = $request->role;
        $user->assignRole($role);

        return back()->with('confirmation','Registrado Correctamente');
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->agency_id = $request->agency_id;
        $user->save();

        $role = $request->role;
        $user->syncRoles($role);

        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('confirmation','Eliminado Correctamente');
    }
}
