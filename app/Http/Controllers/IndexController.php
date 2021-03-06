<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextileModel;
use App\CategoryModel;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function listitem(){
        $listitem = TextileModel::all();
        return view('List.list-item', compact('listitem'));
        dd($listitem);
    }

    public function cari(Request $request){
        $cari = $request->get('q');
        $result = TextileModel::where('nama_item', 'LIKE', '%'.$cari.'%')->paginate(3);
        return view('List.search-result', compact('cari', 'result'));
    }
    
    public function insert(){
        return view('List.create');
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
        return redirect('master');
    }

    public function edit($id_item){
        $data = TextileModel::where('id_item',$id_item)->get();
        return view('List.edit', ['data'=>$data]);
        
    }

    public function update(Request $request, $id_item)
    {
        TextileModel::where('id_item',$id_item)->update([
            'id_category' => $request->inputIDCategory,
            'nama_item' => $request->inputNamaItem,
            'warna' => $request->inputWarna,
            'stok' => $request->inputStok,
            'harga' => $request->inputHarga,
            'satuan' => $request->inputSatuan,
            'keterangan' => $request->inputKeterangan
            ]); 
    return redirect('master');        
    }

    public function destroy($id_item)
    {
        TextileModel::where('id_item',$id_item)->delete();
        return redirect('master');
    }

    /*public function getCategory()
    {
        $cat = DB::table('categories')->pluck("id_category","category_kain");
        return view('List.create',compact('cat'));
    }*/

}

