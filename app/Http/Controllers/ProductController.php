<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Product;

class ProductController extends Controller
{
    function index ()
    {    
        // $products = Product::all()->paginate(15);
        $products = DB::table('products')->paginate(10);
        // dd($products);
      
        return view('products.index', [
          'products' => $products,
        ]);
    }
    
    function add (Request $request)
    {    
        return view('products.add', [
          'page_heading' => 'Create Product Page',
        ]);
    }
    
    function store (Request $request)
    {    
        // Validation
        $request->validate([
            'picture' => 'mimes:jpeg,png,bmp,tiff |max:4096',
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        // Storage::disk('public')->put('file.txt', 'Contents');
        // Storage::disk()->put('file2.txt', 'Contents');
        $file_path = Storage::putFile('pictures', $request->file('picture'));
        
        $product = new Product;
        $product->picture = $file_path;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect('/products');
    }
    
    function edit (Product $product)
    {    
        // dd($product);
        return view('products.edit', [
          'page_heading' => 'Edit Product Page',
          'product' => $product,
        ]);
    }
    
    public function update (Request $request, Product $product)
    {  
      // Validation
      $request->validate([
          'picture' => 'mimes:jpeg,png,bmp,tiff |max:4096',
          'name' => 'required',
          'price' => 'required|numeric',
          'description' => 'required',
      ]);
      
      //Todo: Delete previously unused image/picture.
      if ($request->hasFile('picture')) {
    	    $file_path = Storage::putFile('pictures', $request->file('picture'));
          $product->picture = $file_path;      
    	}
      
      $product->name = $request->get('name');
      $product->description = $request->get('description');
      $product->price = $request->get('price');
      $product->save();
      
      return redirect('/products');
    }
    
    function delete (Product $product)
    {    
        $product->delete();
        return redirect('/products');
        
    }
    
    function view (Product $product)
    {    
        // dd($product);
        return view('products.view', [
          'page_heading' => 'Product Details Page',
          'product' => $product,
        ]);
    }
}
