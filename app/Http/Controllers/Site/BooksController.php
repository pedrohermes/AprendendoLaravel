<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\ModelBook;
use App\Models\AutorModel;
use App\Models\User;

class BooksController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Books = ModelBook::all();

        return view('books.index',['books' => $Books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autors = AutorModel::all();
        return view('books.create',compact('autors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        ModelBook::create([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
            'id_autor'=>$request->id_autor
        ]);

        $Books = ModelBook::all();

        if($Books){
            return view('books.index',['books' => $Books]);
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
        $Books = ModelBook::find($id);

        return view('books.show',['books' => $Books]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autors = AutorModel::all();
        $Books = ModelBook::find($id);
       
        return view('books.edit',['books'=>$Books],['autors'=>$autors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        ModelBook::where(['id'=>$id])->update([
            'id_autor'=>$request->id_autor,
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price
            
        ]);

        $Books = ModelBook::all();

        return view('books.index',['books' => $Books]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $book = ModelBook::find($id);

        $book->delete();

        $Books = ModelBook::all();
        
        return view('books.index',['books' => $Books]);
    }

    public function confirm($id){
        
        $Books = ModelBook::find($id); 
       
        
        $autor = $Books['id_autor'];

        $autors = AutorModel::find($autor);

        return view('books.destroy',['books' => $Books],['autors' => $autors]);

    }



}
