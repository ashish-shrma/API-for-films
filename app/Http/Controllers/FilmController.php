<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comments;
use App\Genre;
use App\Genre_Movie;

use Illuminate\Support\Str;
use Input as Input;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies= Movie::all();
        return view('allfilms',compact('movies'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                $genres = Genre::all();

        return view('create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = $request->photo->getClientOriginalName();

        if($request->hasFile('photo')){
            $request->photo->storeAs('public',$filename);
        }
 



            $Movie = Movie::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->desc,
            'release_date' => $request->date,
            'rating' => $request->rating,
            'ticket_price' => $request->ticket_price,
            'country' => $request->country,
            'photo' => $request->file('photo')->getClientOriginalName()
            ]);     
      

        foreach($request->genre as $g) {
            Genre_Movie::create([
                'movie_id' => $Movie->id,
                'genre_id' => $g
            ]);
        }
        return $this->create();


    }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $film = Movie::with('genres')->get()->where('slug', $slug)->first();

        $comments = Comments::where('user_id',\Auth::user()->id);

        return view('film',compact('film','comments'));

        // return response()->json($film);

    }

        public function addComment($id, Request $request)
    {

            $Movie = Comments::create([
            'film_id' => $id,
            'user_id' => \Auth::user()->id,
            'message' => $request->message,
            'name'=>$request->name
            ]);     
      
            return redirect('api/films/'.Movie::find($id)->slug);     
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
