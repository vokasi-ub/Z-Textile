<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $listcat = CategoryModel::all();
        return view('Category.list-category', compact('listcat'));
        dd($listcat);
    }

    public function cari(Request $request){
        $cari = $request->get('q');
        $result = CategoryModel::where('category_kain', 'LIKE', '%'.$cari.'%')->paginate(3);
        return view('Category.search-result', compact('cari', 'result'));
    }

	public function edit($id_category){
        $data = CategoryModel::where('id_category',$id_category)->get();
        return view('Category.edit', ['data'=>$data]);
        
    }

    public function update(Request $request, $id_category)
    {
        CategoryModel::where('id_category',$id_category)->update([
            'category_kain' => $request->inputCategoryKain
            ]); 
    return redirect('category');        
    }

    public function create(){
    	return view('Category.create');
    }

    public function save(Request $request){
        CategoryModel::insert([
            'id_category' => $request->inputIDCategory,
            'category_kain' => $request->inputCategoryKain
            ]);
        return redirect('category');
    }

    public function destroy($id_category)
    {
        CategoryModel::where('id_category',$id_category)->delete();
        return redirect('category');
    }

}
