@extends('layouts.app')
{{-- @extends('layout.qna') --}}

@section('content')
<div class="container">
    <a href="/pertanyaan" class="btn btn-outline-secondary">Back</a>
    <hr>
    <h1>{{$judul->judul_pertanyaan}}</h1>
    
    <small>Written by {{$judul->created_at}}</small>
    &emsp;
    <small>Updated at {{$judul->updated_at}}</small>
    <hr>
    
    <div class=" ml-3 bg-white">
        <h4>{{$judul->isi_pertanyaan}}</h4> 
        
    </div>
    <hr>
    <div class=" container d-flex flex-column">
        <h3>Answer :</h3>
        @if (count($jawab) > 0)
                @foreach ($jawab as $answer)
                    @if ($answer->pertanyaan_id == $judul->id)
                        <h5 class=" mt-5  ml-5 border-left border-primary">{{$answer->jawaban}}</h5>
                        <small>Answered at {{$answer->created_at}}</small>
                        <hr>
                    @endif    
                @endforeach
            @else
            <h6>Belum ada jawaban</h6>
        @endif
        
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