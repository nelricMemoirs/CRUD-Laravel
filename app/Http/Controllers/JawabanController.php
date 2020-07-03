<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;
use App\Pertanyaan;

class JawabanController extends Controller
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
    public function create($id)
    { 
        
        $tanya_id = Pertanyaan::find($id);
        // var_dump($tanya_id);
        return view('qna.createans')->with('tanya_id', $tanya_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'jawaban' => 'required',
        ]);
        // dd($request->all());
        $judul = Pertanyaan::find($id);
        $new_quest = new Jawaban;
        $new_quest->pertanyaan_id = $judul->id;
        // $new_quest->question()->associate($request->question());
        // dd(var_dump($new_quest->question->id));
        $new_quest->jawaban = $request->input('jawaban');
        $new_quest->save();

        $jawab = Jawaban::where('pertanyaan_id', $id)->get();
        
        
        return view('qna.showans',['success'=> 'Thank You for your answer', 'judul'=>$judul, 'jawab'=>$jawab]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $judul =  Pertanyaan::find($id);
        $jawab = Jawaban::where('pertanyaan_id', $id)->get();
        return view('qna.showans', compact('judul', 'jawab'));
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
