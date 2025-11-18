<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;


class AdminControllers extends Controller
{
    public function index (){
        if  (Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype == 'user'){
                return view('home.index');
            }elseif ($usertype == 'admin'){
                return view('admin.index');
            }else{
                return redirect()->back();
            }
        }
    }
    public function home()
{
    $games = Game::all(); // ambil data game
    return view('home.index', compact('games')); // kirim ke view
}

    public function shop(){
        $games = Game::all();
        return view('shop.index', compact('games'));
    }

     public function details(){
        return view('details.index');
    }

    public function contact(){
        return view('contact.index');
    }

    public function create_game(){
        return view('admin.create_game');
    }
    public function tambah_game(request $request){
        $data = new Game;
        $data -> nama_game = $request->nama_game;
        $data -> deskripsi = $request->desk;
        $data -> harga = $request->harga;
        $data -> genre = $request->genre;
        $data -> seleksi_game = $request->seleksi_game;
        $gambar = $request->gambar;
        if ($gambar);
        {
            $gambarnama=time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('game',$gambarnama);
            $data->gambar = $gambarnama;
        }
        $data->save();

        return redirect('data_game')->with('succes','kamar berhasil ditambahkan');
    }
    public function data_game(){
        $data = Game::all();
        return view('admin.data_game', compact('data'));
    }
    public function update_game($id){
        $data = Game::find($id);
        return view('admin.update_game', compact('data'));
    }

    public function edit_game (Request $request, $id){

        $data = Game::find($id);

        $data -> nama_game = $request->nama_game;
        $data -> deskripsi = $request->deskripsi;
        $data -> harga = $request->harga;
        $data -> genre = $request->genre;
        $gambar = $request->gambar;

        if($gambar){
            $gambarnama = time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('game',$gambarnama);
            $data->gambar=$gambarnama;
        }
        $data->save();
        return redirect('data_game')->with('succes','game berhasil di update');
    }

    public function delete_game ($id){
        $data = Game::find($id);
        $data -> delete();
        return redirect()->back()->with('succsess', 'game berhasil dihapus');
    }
}