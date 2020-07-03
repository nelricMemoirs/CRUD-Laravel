@extends('layouts.app')
{{-- @extends('layout.qna') --}}

@section('content')
<div class="container">
    <a href="/pertanyaan" class="btn btn-outline-secondary">Back</a>
    <hr>
    <h1>{{$judul->judul_pertanyaan}}</h1>
    
    <small>Written by {{$judul->created_at}}</small>
    <hr>
    
    <div class=" ml-3 bg-white col-10">
        <h3>{{$judul->isi_pertanyaan}}</h3> 
        
    </div>
    <hr>
    
    <a href="/pertanyaan/{{$judul->id}}/edit" class=" btn btn-default btn-outline-primary">Edit Question</a>
    <a href="{{route('jawaban.create', ['pertanyaan_id'=> $judul->id])}}" class=" btn btn-default btn-outline-primary">Answer</a>
    {!! Form::open(['action'=> ['PertanyaanController@destroy', $judul->id], 'method'=> 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
</div>
@endsection