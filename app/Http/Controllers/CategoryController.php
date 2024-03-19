<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);
    }
    public function show($id)
    {
        $category = Category::findOrFail($id); // Используйте findOrFail, чтобы выбросить исключение, если категория не найдена
        return view('category.show', ['category' => $category]);
    }



    public  function new(Request $request)
    {
        if ($request->isMethod('post')) {
            $category = new Category();
            $category->name = $request->name;
            $category->code = $request->code;
            $category->save();
            return redirect('/categories');
        } else {
            return view('category.new');
        }
    }
    public function update(Request $request , $id){
        if ( $request->isMethod('post')){
            Category::where('id', '=', $id)->update([
                'name' => $request->name,
            ]);
            return redirect('/categories');
        } else {
            $category = Category::where('id', '=', $id) ->first();
            return view('category.update',['category' => $category]);
        }
    }
    public function delete($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return redirect()->back()->with('success', 'Категория успешно удалена');
        } else {
            return redirect()->back()->with('error', 'Категория не найдена');
        }
    }
}
