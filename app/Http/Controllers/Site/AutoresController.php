<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AutoresRequest;
use App\Models\User;
use App\Models\AutorModel;
use App\Models\ModelBook;

class AutoresController extends Controller
{
    public $search = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autors = AutorModel::all();

        return view('autores.index',['autors' => $autors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AutorModel::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        $autors = AutorModel::all();

        if($autors){
            return view('autores.index',['autors' => $autors]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autors = AutorModel::find($id);

        $book = ModelBook::all();
        $Books = $book->where('id_autor',$id);

        return view('autores.show',['autors' => $autors],['books' => $Books]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autors = AutorModel::find($id);
       
        return view('autores.edit',['autors'=>$autors]);
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
        AutorModel::where(['id'=>$id])->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        $autors = AutorModel::all();

        return view('autores.index',['autors' => $autors]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor = AutorModel::find($id);

        $autor->delete();

        $autors = AutorModel::all();

        return view('autores.index',['autors' => $autors]);
    }

    public function confirm($id){
        
        $autors = AutorModel::find($id); 
       
        return view('autores.destroy',['autors' => $autors]);

    }
    public function searchAutor(Request $request)
    {
        $search = $request->search;
        $autors = AutorModel::where('name',$search)->get();
        if(count($autors)){
            return view('autores.index',['autors' => $autors]);
        }else{
            $msg = 'O autor não foi localizado';
            return view('books.nulo',compact('msg'));
        }

    }


}
