<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests\CategoryRequest;
use Session;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['categories'] = Categorie::all();
        return view('categories.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['mode']  = 'create';
        $this->data['header'] = 'Create new Category';
        return view('categories.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $this->data = $request->all();
        if(Categorie::create($this->data)){
            Session::flash('message', 'Categori created successfully');
        }
        return redirect()->to('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['category']    = Categorie::findOrFail($id);
        $this->data['mode']          = 'edit';
        $this->data['header']        = 'Update Category';
        
        return view('categories.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        
        $category = Categorie::find($id);
        $category->title = $request->title;

        if($category->save()){
            Session::flash('message', 'Category updated successfully');
        }
        return redirect()->to('categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data =  Categorie::find($id)->delete();
       if($data){
        Session::flash('message', 'Category delete successfully');
       }
       return redirect()->to('categories');
    }
}
