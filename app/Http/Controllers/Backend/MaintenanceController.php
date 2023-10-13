<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    public function reset()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');

        Artisan::call('migrate:fresh --seed');
        toastr()->success('Database reset successfully');
        return redirect()->route('login');
    }

    // backup
    // public function backup()
    // {
    //     $files = Storage::files(config('app.name'));
    //     foreach ($files as $file) {
    //         Storage::delete($file);
    //     }

    //     Artisan::call('backup:run', ['--only-db' => true]);
    //     $files = Storage::files(config('app.name'));

    //     if ($files != null) {
    //         return Storage::download($files[0]);
    //     } else {
    //         session()->flash('warning', 'Database not backed up.');
    //         return back();
    //     }
    // }
}
