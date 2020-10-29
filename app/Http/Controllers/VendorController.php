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

class VendorController extends Controller
{   use pageMetaContent;
    public function index()
    {
        abort_if(Gate::denies('vendor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('List Vendors','This Page Lists all the vendors.');
        $vendors = Admin::where('type','vendor')->latest()->withCount('products')->get();

        return view('admin.vendors.index', compact('vendors'));
    }

    public function create()
    {
        abort_if(Gate::denies('vendor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('Add Vendor','This Page allows to add  the vendor user.');
        $roles = Role::all()->pluck('title', 'id');

        return view('admin.vendors.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $vendor = Admin::create($request->validated());
        $vendor->password=Hash::make($request->validated()['password']);
        $vendor->email_verified_at=now();
        $vendor->type="vendor";
        $vendor->roles()->sync($request->input('roles', []));
        $vendor->save();
        return redirect()->route('admin.vendors.index')->with('success',$vendor->first_name.' : User Created Successfully');
    }

    public function edit(Admin $vendor)
    {
        abort_if(Gate::denies('vendor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('Edit'.$vendor['first_name'],'Show Vendor');
        $roles = Role::all()->pluck('title', 'id');

        $vendor->load('roles');

        return view('admin.vendors.edit', compact('roles', 'vendor'));
    }

    public function update(UpdateUserRequest $request, Admin $vendor)
    {
        $vendor->update($request->validated());
        $vendor->password=Hash::make($request->password);
        $vendor->roles()->sync($request->input('roles', []));
        $vendor->save();
        return redirect()->route('admin.vendors.index')->with('success',$vendor->first_name.' : Vendor Updated Successfully');
    }

    public function show(Admin $vendor)
    {
        abort_if(Gate::denies('vendor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle($vendor['first_name'],'Show Vendor');
        $vendor->load('roles');
        $vendor->loadCount('products');
        $products=$vendor->products()->latest()->get();
        $products->load('media');
        //dd($products);
        return view('admin.vendors.show', compact('vendor','products'));
    }

    public function destroy(Admin $vendor)
    {
        abort_if(Gate::denies('vendor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vendor->delete();

        return back()->with('success',$vendor->first_name.' : Vendor Deleted Successfully');
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        Admin::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
