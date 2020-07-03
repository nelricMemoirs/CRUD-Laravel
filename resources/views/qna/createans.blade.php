@extends('layouts.app')

@section('content')
    <h1>CREATE Answer</h1>
    {{-- <h1>{{$judul->id}}</h1> --}}
    {!! Form::open(['action'=> ['JawabanController@store', $tanya_id->id], 'method' => 'POST']) !!}
        <div class=" container-fluid">
            <div class="form-group">
                {{Form::label('jawaban', 'Judul')}}
                {{Form::label('pertanyaan_id', 'Judul')}}
                {{Form::textarea('jawaban', '',['class' => 'form-control col-lg-7 col-sm-5', 'placeholder' => 'jawaban anda'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
        
        
    {!! Form::close() !!}
@endsection