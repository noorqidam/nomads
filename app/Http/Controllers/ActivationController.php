<?php

namespace App\Http\Controllers;

use App\Events\Auth\UserActivationEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActivationController extends Controller
{
    public function verification(Request $request)
    {
        return view('auth.verification');
    }

    public function postVerification(Request $request)
    {
        $user = User::where('token_activation', $request->otp)->first();
        if ($user == null) {
            return redirect()->back()->with('flash_message_error', 'OTP salah silahkan cek kembali');
        } else {
            $user->update([
                'isVerified' => true,
                'token_activation' => null
            ]);
            return redirect()->route('login')->with('success', 'Terima Kasih, Akun Anda Telah Aktif Silahkan Login');
        }
    }

    // public function postResend(Request $request, $user)
    // {
    //     $this->validateResendRequest($request);

    //     $user = User::where('email', $request->email)->first();
    //     dd($user);

    //     // send email
    //     if ($user == null) {
    //         return redirect()->back();
    //     } else {
    //         $user->token_activation = Str::random(6);
    //         $user->save();
    //         event(new UserActivationEmail($user));

    //         return redirect()->route('verification')->with('success', 'Kode OTP telah dikirim, silahkan cek email anda');
    //     }
    // }

    // protected function validateResendRequest(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email|exists:users, email'
    //     ], [
    //         'email.exists' => 'Email tidak ditemukan, Silahkan Cek Kembali'
    //     ]);
    // }
}
