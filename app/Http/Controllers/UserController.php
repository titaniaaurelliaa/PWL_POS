<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // tambah data user dengan Eloquent Model
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data); //update data user
        
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data); // tambahkan data ke table m_user
        
        // coba akses model UserModel
        //$user = UserModel::all(); // ambil semua data dari tabel m_user
        //$user = UserModel::find(1); // ambil data dari tabel m_user dengan id = 1
        //$user = UserModel::where('level_id', 1)->first(); // ambil data dari tabel m_user dengan level_id = 1
        //$user = UserModel::firstWhere('level_id', 1); // ambil data dari tabel m_user dengan level_id = 1 dan ambil data pertama
        // $user = UserModel::findOr(20, ['username', 'nama'], function(){
        //     abort(404);
        // }); // ambil data dari tabel m_user dengan id = 1, jika tidak ada, tampilkan error 404
        //$user = UserModel::findOrFail(1);
        //$user = UserModel::where('username', 'manager9')->firstOrFail();
        // $userCount = UserModel::where('level_id', 2)->count();
        // return view('user', ['data' => $userCount]);
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // ); // jika data tidak ada, tambahkan data ke table m_user
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );
        // $user->save();
        // return view('user', ['data' => $user]);
        // $user->isDirty(); // True
        // $user->isDirty('username'); //True
        // $user->isDirty('nama'); //False
        // $user->isDirty(['nama', 'username']); //True

        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('nama');
        // $user->isClean(['nama', 'username']);

        // $user->save();

        // $user->isDirty();
        // $user->isClean();
        // dd($user->isDirty());

        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'nama' => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ]);

        // $user->username = 'manager12';
        // $user->save();
        // $user->wasChanged();
        // $user->wasChanged('username');
        // $user->wasChanged(['username', 'level_id']);
        // $user->wasChanged('nama');
        // dd($user->wasChanged(['nama', 'username']));

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);
        // }

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
       UserModel::create([
           'username' => $request->username,
           'nama' => $request->nama,
           'password' => Hash::make($request->password),
           'level_id' => $request->level_id
       ]);

       return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan(Request $request, $id)
    {
        $user = UserModel::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;
        $user->save();

        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
    }
}