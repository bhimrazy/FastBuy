<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\Traits\pageMetaContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{   use pageMetaContent;
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('List Users','This Page Lists all the users.');
        $users = Admin::where('type','!=','vendor')->get();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('Add User','This Page allows to add  the admin user.');
        $roles = Role::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = Admin::create($request->validated());
        $user->password=Hash::make($request->validated()['password']);
        $user->email_verified_at=now();
        $user->roles()->sync($request->input('roles', []));
        $user->save();
        return redirect()->route('admin.users.index')->with('success',$user->first_name.' : User Created Successfully');
    }

    public function edit(Admin $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('Edit'.$user['first_name'],'Show user');
        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, Admin $user)
    {
        $user->update($request->validated());
        $user->password=Hash::make($request->password);
        $user->roles()->sync($request->input('roles', []));
        $user->save();
        return redirect()->route('admin.users.index')->with('success',$user->first_name.' : User Updated Successfully');
    }

    public function show(Admin $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle($user['first_name'],'Show user');
        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(Admin $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();

        return back()->with('success',$user->first_name.' : User Deleted Successfully');
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        Admin::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
