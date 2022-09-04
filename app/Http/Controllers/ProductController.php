<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products, $product;

    public function add()
    {
        return view('product.add');
    }

    public function manage()
    {
        $this->products = Product::all();
        return view('product.manage', ['products' => $this->products]);
    }

    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect('/add-product')->with('message', 'Product Inserted Successfully.');
    }

    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('product.edit', ['product' => $this->product]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('manage-product')->with('message', 'Product Info Updated Successfully.');
    }

    public function delete($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('manage-product')->with('message', 'Product Deleted Successfully.');
    }
}
