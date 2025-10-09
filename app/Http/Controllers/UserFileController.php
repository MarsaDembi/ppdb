<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\UserFile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class UserFileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $data = User::with('file', 'profile')->where('id', $user->id)->first();

        return view('cms.pages.file.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $file)
    {
        $validator = Validator::make($request->all(), [
            'family_card' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'birth_certificate' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'school_certificate' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'transfer_letter' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'proof_payment' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal', 'Perubahan berkas gagal. Silakan periksa kembali data Anda.');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $userFile = UserFile::where('user_id', $file->id)->first();

        try {
            DB::transaction(function () use ($request, $userFile, $file) {
                $userName = str_replace(' ', '_', $file->name);
                $familyName = null;
                $birthName = null;
                $schoolName = null;
                $transferName = null;
                $paymentName = null;

                if ($request->family_card && file_exists(storage_path('app/public/images/file/' . $file->file->family_card))) {
                    unlink(storage_path('app/public/images/file/' . $file->file->family_card));
                }

                if ($request->birth_certificate && file_exists(storage_path('app/public/images/file/' . $file->file->birth_certificate))) {
                    unlink(storage_path('app/public/images/file/' . $file->file->birth_certificate));
                }

                if ($request->school_certificate && file_exists(storage_path('app/public/images/file/' . $file->file->school_certificate))) {
                    unlink(storage_path('app/public/images/file/' . $file->file->school_certificate));
                }

                if ($request->transfer_letter && file_exists(storage_path('app/public/images/file/' . $file->file->transfer_letter))) {
                    unlink(storage_path('app/public/images/file/' . $file->file->transfer_letter));
                }

                if ($request->proof_payment && file_exists(storage_path('app/public/images/file/' . $file->file->proof_payment))) {
                    unlink(storage_path('app/public/images/file/' . $file->file->proof_payment));
                }
                
                if ($request->hasFile('family_card')) {
                    $familyName = 'family-' . $userName . '.' . $request->file('family_card')->getClientOriginalExtension();
                    Storage::disk('public')->put('images/file/' . $familyName, $request->file('family_card')->getContent());
                } else {
                    // Keep the old photo if no new photo is uploaded
                    $familyName = $file->file->proof_payment ?? null;
                }

                if ($request->hasFile('birth_certificate')) {
                    $birthName = 'birth-' . $userName . '.' . $request->file('birth_certificate')->getClientOriginalExtension();
                    Storage::disk('public')->put('images/file/' . $birthName, $request->file('birth_certificate')->getContent());
                } else {
                    // Keep the old photo if no new photo is uploaded
                    $birthName = $file->file->proof_payment ?? null;
                }

                if ($request->hasFile('school_certificate')) {
                    $schoolName = 'school-' . $userName . '.' . $request->file('school_certificate')->getClientOriginalExtension();
                    Storage::disk('public')->put('images/file/' . $schoolName, $request->file('school_certificate')->getContent());
                } else {
                    // Keep the old photo if no new photo is uploaded
                    $schoolName = $file->file->proof_payment ?? null;
                }

                if ($request->hasFile('transfer_letter')) {
                    $transferName = 'transfer-' . $userName . '.' . $request->file('transfer_letter')->getClientOriginalExtension();
                    Storage::disk('public')->put('images/file/' . $transferName, $request->file('transfer_letter')->getContent());
                } else {
                    // Keep the old photo if no new photo is uploaded
                    $transferName = $file->file->proof_payment ?? null;
                }

                if ($request->hasFile('proof_payment')) {
                    $paymentName = 'payment-' . $userName . '.' . $request->file('proof_payment')->getClientOriginalExtension();
                    Storage::disk('public')->put('images/file/' . $paymentName, $request->file('proof_payment')->getContent());
                } else {
                    // Keep the old photo if no new photo is uploaded
                    $paymentName = $file->file->proof_payment ?? null;
                }

                $userFile->update([
                    'family_card' => $familyName ?? $file->file->family_card,
                    'birth_certificate' => $birthName ?? $file->file->birth_certificate,
                    'school_certificate' => $schoolName ?? $file->file->school_certificate,
                    'transfer_letter' => $transferName ?? $file->file->transfer_letter,
                    'proof_payment' => $paymentName ?? $file->file->proof_payment,
                ]);
            });

            Alert::success('Berhasil', 'Perubahan berkas berhasil.');
            return redirect()->route('file.index');
        } catch (\Throwable $th) {
            $message = $th->getMessage();

            Alert::error('Gagal', 'Perubahan berkas gagal. ' . $message);
            return redirect()->back()->withInput();
        }
    }
}
