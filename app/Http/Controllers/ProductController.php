<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $isAdmin = false; // Предполагаем, что пользователь не является администратором по умолчанию

        // Проверяем, является ли текущий пользователь администратором
        if (Auth::check() && Auth::user()->isAdmin()) {
            $isAdmin = true;
        }

        return view('product.index', compact('isAdmin', 'products'));
    }

    public  function new(Request $request){
        if ( $request->isMethod('post')) {
            $product = new Product($request->except('_token'));
            $product->save();


            return redirect('/products');
        } else {
            $categories = Category::all();
            return view('product.new', ['categories' => $categories]);
        }
    }

    public function update(Request $request, $id){
        if ($request->isMethod('post')) {
            Product::where('id', '=', $id)->update(
            /*
             * [
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'category_id' => $request->category_id,
            ]
             */
                $request->except('_token')
            );
            return redirect('/products');
        } else {
            $product = Product::where('id', '=', $id)->first();
            $categories = Category::all();
            return view('product.update', ['product' => $product, 'categories' => $categories]);
        }
    }


    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Продукт не найден');
        }
        return view('product.show', ['product' => $product]);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return redirect()->back()->with('success', 'Продукт успешно удален');
        } else {
            return redirect()->back()->with('error', 'Продукт не найден');
        }
    }

}
