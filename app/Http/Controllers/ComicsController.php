<?php

namespace App\Http\Controllers;

use App\Fumetto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fumettos = Fumetto::paginate(5);

        return view('comics.index',compact('fumettos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('comics.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_comic = new Fumetto();

/*         $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->image = $data['image'];            
        $new_comic->series = $data['series'];
        $new_comic->price = $data['price'];
        $new_comic->type = $data['type'];
        $new_comic->date = $data['date'];
        $new_comic->slug = Str::slug($data['title'], '-'); */
        
        $data['slug'] = Str::slug($data['title'], '-');
        $new_comic->fill($data);

        $new_comic->save();
        
        return redirect()->route('fumetti.show',$new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$fumetto = Fumetto::where('slug',$slug)->first();
        $fumetto = Fumetto::find($id);

        if($fumetto){
            
            return view('comics.show',compact('fumetto'));

        }
        abort(404);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
