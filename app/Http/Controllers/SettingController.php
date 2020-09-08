<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Traits\pageMetaContent;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class SettingController extends Controller
{   use UploadAble;use pageMetaContent;
    public function __construct()
    {
        $this->middleware('password.confirm:admin.password.confirm')->only('index');
    }
    public function index(){
        //abort_if(Gate::denies('product_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle('Settings', 'Manage Settings');
        return view('admin.settings.index');
    }

    public function update(Request $request){
        if ($request->hasFile('site_logo') && ($request->file('site_logo') instanceof UploadedFile)) {

            if (config('settings.site_logo') != null) {
                $this->deleteOne(config('settings.site_logo'));
            }
            $logo = $this->uploadOne($request->file('site_logo'), 'img',239,41);
            Setting::set('site_logo', $logo);

        }if ($request->hasFile('site_favicon') && ($request->file('site_favicon') instanceof UploadedFile)) {

            if (config('settings.site_favicon') != null) {
                $this->deleteOne(config('settings.site_favicon'));
            }
            $image=$request->file('site_favicon');
            $favicon = $this->uploadOne($request->file('site_favicon'), 'img',100,100);
            Setting::set('site_favicon', $favicon);

        } else {

            $keys = $request->except('_token');

            foreach ($keys as $key => $value)
            {
                Setting::set($key, $value);
            }
        }
        return redirect()->back()->with( 'success','Settings updated successfully.');
    }
}
