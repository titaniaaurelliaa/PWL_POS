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
        $user = UserModel::where('username', 'manager9')->firstOrFail();
        return view('user', ['data' => $user]);
    }
}