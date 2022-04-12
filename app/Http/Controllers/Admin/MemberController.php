<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::paginate(10);
        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Member::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Member $member)
    {
        //
    }

    public function edit(Member $member)
    {
        //
    }

    public function update(Request $request, Member $member)
    {
        $member->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
