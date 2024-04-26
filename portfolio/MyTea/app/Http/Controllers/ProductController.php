<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Http\Requests\Product\updateRequest;



class ProductController extends Controller
{

    public function create()
    {

            $category = Category::all();
    
            return view('product.create', compact('category'));
    
    }


    public function edit(Product $product)
    {
        $category = Category::all();

        return view('product.edit', compact('product', 'category'));
        //
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('img')) {

            $data['img'] = $request->file('img')->store('public/products');

            Product::query()->create($data);

        }
        return redirect("/admin");
    }
    public function update(updateRequest $request, Product $product)
    {
        $data = $request->validated();

        if($request->hasFile('img')) {

            $data['img'] = $request->file('img')->store('public/products');

        }

        $product->update($data);

        return redirect("/admin");
    
    }
    public function destroy(Product $product) {

        $product->delete();

        return redirect()->route('welcome.admin');

    }
public function show(Product $product,Category $category){
    return view('product.show', compact('product', 'category'));
}


}
