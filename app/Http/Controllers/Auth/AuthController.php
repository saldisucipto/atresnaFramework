<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Utils\FileProcess;
use App\Http\Utils\ResponseFormater;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Throwable;

class AuthController extends Controller
{
    // index
    public function login(Request $request)
    {
        if ($request->isMethod('GET')) {
            return Inertia::render('Auth/Login');
        } elseif ($request->isMethod('POST')) {

            $autentikasi = $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required|min:6',
            ]);

            if (Auth::attempt($autentikasi)) {
                $request->session()->regenerate();

                return redirect()->intended('dashboard')->with('message', 'Hallo Selamat Datang Kembali !');
            } else {
                return back()->with('message', 'Anda Harus Login !');
            }
        }
    }

    // loguut
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Kamu sekarang sudah logout !');
    }

    // edit profile
    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|exists:users,email',
            'sandi' => 'nullable|confirmed|max:100',
            'sandi_confirmation' => 'nullable '
        ]);
        $user = User::find($id);
        $data = $request->all();
        // dd($data);

        $user->name = $data['name'];
        $user->email = $data['email'];
        if ($data['sandi'] != null) {
            $user->password = Hash::make($data['sandi']);
        }
        if ($request->file('profile')) {
            FileProcess::deleteFoto($user->profile, 'profile');
            $avatar = new FileProcess($request->file('profile'), Str::slug($data['name']), 'profile');
            $user->profile = $avatar->uploadFoto();
        }
        $user->update();
        return redirect()->back()->with('message', 'Berhasil Perbaharui Profile');
    }

    /**
     * Create Register when use API
     */

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:users',
                'email' => 'required|email|string|max:255|unique:users',
                'phone' => 'required|string|max:14',
                'password' => ['required', 'string'],
            ]);


            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            $user = User::where('email', $request->email)->first();
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormater::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user,
            ], 'User Registered');
        } catch (Exception $error) {
            return ResponseFormater::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Authentication Error', 500);
        }
    }

    public function login_api(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credential = request(['email', 'password']);
            if (!Auth::attempt($credential)) {
                return ResponseFormater::error(
                    ['message' => 'UnAuthorized'],
                    'Authentication Failed',
                    500
                );
            }

            $user = User::where('email', $request->email)->first();
            if (!Hash::check($request->password, $user->password, [])) {
                throw new Exception('Invalid Credential');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ResponseFormater::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'Authenticated');
        } catch (Exception $error) {
            return ResponseFormater::error([
                'message' => 'Something Went Wrong',
                'error' => $error,

            ], 'Authentcation Failed', 500);
        }
    }

    public function fetchuser(Request $request)
    {
        return ResponseFormater::success($request->user(), 'Data User Berhasil Diambil');
    }

    public function updateUser(Request $request)
    {
        $data = $request->all();

        $user = Auth::user();
        $user->update($data);

        return ResponseFormater::success($user, 'Data Berhasil Di Update');
    }
}
