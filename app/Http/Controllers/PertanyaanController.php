<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::orderBy('created_at', 'desc')->get();
        
        return \view('qna.question')->with('pertanyaan', $pertanyaan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('qna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_pertanyaan' => 'required',
            'isi_pertanyaan' => 'required'
        ]);
        
        $new_quest = new Pertanyaan;
        $new_quest->judul_pertanyaan = $request->input('judul_pertanyaan');
        $new_quest->isi_pertanyaan = $request->input('isi_pertanyaan');
        $new_quest->save();

        return \redirect('/pertanyaan')->with('success', 'Question Created');
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
        $jawab = Jawaban::where('pertanyaan_id', $id);
        if ($judul && $jawab == null) {
            $jawab = [];
            return view('qna.showans', compact('judul', 'jawab'));

        } else {
            
            
            $jawab = Jawaban::where('pertanyaan_id', $id)->get();
            return view('qna.showans', compact('judul', 'jawab'));
        }
        
        
        
        // return view('qna.showquest')->with('judul', $judul);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judul =  Pertanyaan::find($id);
        return \view('qna.edit')->with('pertanyaan', $judul);
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
        $this->validate($request, [
            'judul_pertanyaan' => 'required',
            'isi_pertanyaan' => 'required'
        ]);
        
        $new_quest = Pertanyaan::find($id);
        $new_quest->judul_pertanyaan = $request->input('judul_pertanyaan');
        $new_quest->isi_pertanyaan = $request->input('isi_pertanyaan');
        $new_quest->save();

        return \redirect('/pertanyaan')->with('success', 'Question Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $judul =  Pertanyaan::find($id);
        $jawab = Jawaban::where('pertanyaan_id', $id);
        $jawab->delete();
        $judul->delete();
        return \redirect('/pertanyaan')->with('success', 'Question Deleted, answer would removed if any');
    }
}
