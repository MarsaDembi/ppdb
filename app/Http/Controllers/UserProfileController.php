<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $data = User::with('profile', 'file')->where('id', $user->id)->first();
        
        return view('cms.pages.profile.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $profile)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'nisn' => 'required|numeric|digits:10',
            'nik' => 'required|numeric|digits:16',
            'gender' => 'required',
            'birth_place' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'father_name' => 'required',
            'mother_name' => 'required',
            'program' => 'required',
            'is_transfer' => 'required',
            'previous_school' => 'required_if:is_transfer,1',
            'class' => 'required_if:is_transfer,1',
            'address' => 'required',
            'phone' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal', 'Perubahan detail profile gagal. Silakan periksa kembali data Anda.');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            DB::transaction(function () use ($request, $profile) {
                $profile->update([
                    'name' => $request->name,
                ]);

                $userName = str_replace(' ', '_', $request->name);
                $photoName = null;

                if ($request->photo && file_exists(storage_path('app/public/images/profile/' . $profile->profile->photo))) {
                    unlink(storage_path('app/public/images/profile/' . $profile->profile->photo));
                }

                if ($request->hasFile('photo')) {
                    $photoName = 'profile-' . $userName . '.' . $request->file('photo')->getClientOriginalExtension();
                    Storage::disk('public')->put('images/profile/' . $photoName, $request->file('photo')->getContent());
                } else {
                    // Keep the old photo if no new photo is uploaded
                    $photoName = $profile->profile->photo ?? null;
                }

                $profile->profile()->update([
                    'nisn' => $request->nisn,
                    'nik' => $request->nik,
                    'gender' => $request->gender,
                    'birth_place' => $request->birth_place,
                    'birth_date' => $request->birth_date,
                    'father_name' => $request->father_name,
                    'mother_name' => $request->mother_name,
                    'program' => $request->program,
                    'is_transfer' => $request->is_transfer,
                    'previous_school' => $request->previous_school,
                    'class' => $request->class,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'photo' => $photoName
                ]);
            });

            Alert::success('Berhasil', 'Perubahan detail profile berhasil.');
            return redirect()->route('profile.index');
        } catch (\Throwable $th) {
            $message = $th->getMessage();

            Alert::error('Gagal', 'Perubahan detail profile gagal. ' . $message);
            return redirect()->back()->withInput();
        }
    }
}
