<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextileModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $listitem = TextileModel::all();
        return view('list-item', compact('listitem'));
        dd($listitem);
    }

    public function cari(Request $request){
		$cari = $request->get('q');
		$result = TextileModel::where('nama_item', 'LIKE', '%'.$cari.'%')->paginate(3);
		return view('search-result', compact('cari', 'result'));
    }
    
    public function insert(){
        return view('create');
    }

    public function store(Request $request){
        DB::table('items')->insert([
            'id_item' => $request->inputIDItem,
            'id_category' => $request->inputIDCategory,
            'nama_item' => $request->inputNamaItem,
            'warna' => $request->inputWarna,
            'stok' => $request->inputStok,
            'harga' => $request->inputHarga,
            'satuan' => $request->inputSatuan,
            'keterangan' => $request->inputKeterangan
            ]);
        return redirect('/');
    }

    public function edit($id){
        $data = DB::table('items')->where('id_item',$id_item)->get();
        return view('edit', compact('data'));
		
    }

    public function update(Request $request, $id_item)
    {
        DB::table('items')->where('id_item',$request->id_item)->update([
            'id_item' => $request->inputIDItem,
            'id_category' => $request->inputIDCategory,
            'nama_item' => $request->inputNamaItem,
            'warna' => $request->inputWarna,
            'stok' => $request->inputStok,
            'harga' => $request->inputHarga,
            'satuan' => $request->inputSatuan,
            'keterangan' => $request->inputKeterangan
            ]);	
            return redirect('/');
    }

    public function destroy($id_item)
    {
        DB::table('items')->where('id_item',$id_item)->delete();
        return redirect('/');
    }

}

