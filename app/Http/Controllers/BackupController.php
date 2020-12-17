<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Adapter\Local;
use App\Jobs\CreateBackupJob;
use Storage;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!count(config('backup.backup.destination.disks'))) {
            dd(trans('backpack::backup.no_disks_configured'));
        }

        $this->data['backups'] = [];

        foreach (config('backup.backup.destination.disks') as $disk_name) {
            $disk = Storage::disk($disk_name);
            $adapter = $disk->getDriver()->getAdapter();
            $files = $disk->allFiles();

            // make an array of backup files, with their filesize and creation date
            foreach ($files as $k => $f) {
                // only take the zip files into account
                if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                    $this->data['backups'][] = [
                        'id'            => $k,
                        'file_path'     => $f,
                        'file_name'     => "Backup_".basename($f).PHP_EOL,
                        'file_size'     => $disk->size($f),
                        'last_modified' => $disk->lastModified($f),
                        'disk'          => ucfirst($disk_name),
                        'download'      => ($adapter instanceof Local) ? true : false,
                    ];
                }
            }
        }

        // reverse the backups, so the newest one would be on top
        $this->data['backups'] = array_reverse($this->data['backups']);
        $this->data['title'] = 'Backups';
        return view('admin.backups.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        CreateBackupJob::dispatch();
        return redirect()->back()->with('info'," Backpack\BackupManager -- backup process has started");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($file_name)
    {       
        $disk = Storage::disk(strtolower(request('disk')));
        $file_name = request('file_path');
        $adapter = $disk->getDriver()->getAdapter();

        if ($adapter instanceof Local) {
            $storage_path = $disk->getDriver()->getAdapter()->getPathPrefix();

            if ($disk->exists($file_name)) {
                return response()->download($storage_path.$file_name);
            } else {
                abort(404, trans('backpack::backup.backup_doesnt_exist'));
            }
        } else {
            abort(404, trans('backpack::backup.only_local_downloads_supported'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($file_name)
    {    
        $file_path=request('file_path');
        $disk = Storage::disk(strtolower(request('disk')));
       
        if ($disk->exists($file_path)) {
            $disk->delete($file_path);

            return redirect()->back()->with('success',$file_name." Deleted Successfully");
        } else {
            abort(404, trans('backpack::backup.backup_doesnt_exist'));
        }
    }
}
