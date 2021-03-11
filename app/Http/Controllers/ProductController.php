<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $this->data['products'] = Product::all();
        return view('products.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->data['category'] = Categorie::listSelectCategorie();
        $this->data['header'] = 'Create new product';
        $this->data['category'] = Categorie::selectCategoryList();
        return view('products.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = $request->all();
        if(Product::create($product)){
            Session::flash('message', 'Product created Sucessfully');
        }
        return redirect()->to('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['product'] = Product::find($id);
        return view('products.view', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['category']     = Categorie::selectCategoryList();
        $this->data['header']       = 'Create new product';
        $this->data['product']      = Product::findOrFail($id);
        return view('products.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        
        $data                     = $request->all();
        $product                  = Product::find($id);
        $product->title           = $data['title'];
        $product->description     = $data['description'];
        $product->cost_price      = $data['cost_price'];
        $product->price           = $data['price'];
        if($product->save()){
            Session::flash('message', 'Product Update successfully');
        }
        return redirect()->to('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Product::find($id)->delete()){
            Session::flash('message', 'Products deleted successfully');
        }
        return redirect()->to('products');
    }
}
