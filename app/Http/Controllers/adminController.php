<?php

namespace App\Http\Controllers;

use App\produit;
use App\produitimage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod=new produit();
        $prod->titre=$request->input('titre');
        $prod->description=$request->input('description');
        $prod->prix=$request->input('prix');
        $prod->slug=Str::slug($request->input('titre'), '-');
        $prod->stock=$request->input('quantite');
        $prod->save();
        $files = $request->file('attachment');

        if($request->hasFile('attachment'))
        {
            foreach ($files as $file) {
                $image=new produitimage();
                $image->path=$file->store('image');
                $image->produit_id=$prod->id;
                $image->save();
            }
        }
     return redirect('/home');
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
        $data=DB::table('produits')->where('id',$id)->get();
        return view('update',(['data'=>$data]));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod=produit::find($id);
        $prod->titre=$request->input('titre');
        $prod->description=$request->input('description');
        $prod->prix=$request->input('prix');
        $prod->stock=$request->input('quantite');
        $prod->save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('produits')->where('id',$id)->delete();
        return redirect('/home');
    }
}
