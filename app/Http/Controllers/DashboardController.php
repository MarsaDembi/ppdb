<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{
    public function displayImage($path ,$imageName)
    {
        $path = storage_path('app/public/images/'. $path . '/' . $imageName);
        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $respose = Response::make($file, 200);
        $respose->header('Content-Type', $type);

        return $respose;
    }

    public function index()
    {
        $user = Auth::user();
        $data = User::with('profile', 'file')->where('id', $user->id)->first();
        
        return view('cms.dashboard', compact('data'));
    }
}
