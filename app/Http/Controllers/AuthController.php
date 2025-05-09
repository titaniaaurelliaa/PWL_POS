<?php
namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::check()){ // jika sudah login, maka redirect ke halaman home
            return redirect('/');
        }
        return view('auth.login');
    }
    
    public function postLogin(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                return response()->json([
                    'status' => true,
                    'message' => 'Login Berhasil',
                    'redirect' => url('/')
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => 'Login Gagal'
            ]);
        }
        return redirect('login');
    }

    public function logout(Request $request) {
        Auth::logout(); // Menghapus session login
        $request->session()->invalidate(); // Menghapus data session
        $request->session()->regenerateToken(); // Membuat token baru untuk CSRF
        return redirect('login'); // Redirect ke halaman login
    }

    public function register()
    {
        $levels = LevelModel::all(); // Ambil semua data level
        return view('auth.register', ['levels' => $levels]); // Kirim ke view
    }
        
    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|min:3|unique:m_user,username',
            'nama' => 'required|string|max:100',
            'password' => 'required|min:5',
            'level_id' => 'required|exists:m_level,level_id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data gagal disimpan',
                'errors' => $validator->errors()
            ]);
        }

        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Registrasi berhasil'
        ]);
    }
}