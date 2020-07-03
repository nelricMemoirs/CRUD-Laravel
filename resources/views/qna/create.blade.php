@extends('layouts.app')

@section('content')
    <h1>CREATE QUESTIONS</h1>
    {!! Form::open(['action'=> 'PertanyaanController@store', 'method' => 'POST']) !!}
        <div class=" container-fluid">
            <div class="form-group">
                {{Form::label('judul_pertanyaan', 'Judul')}}
                {{Form::text('judul_pertanyaan', '',['class' => 'form-control col-lg-7 col-sm-5', 'placeholder' => 'title'])}}
            </div>
            <div class="form-group">
                {{Form::label('judul_pertanyaan', 'Judul')}}
                {{Form::textarea('isi_pertanyaan', '',['class' => 'form-control col-lg-7 col-sm-5', 'placeholder' => 'isi pertanyaan'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
        
        
    {!! Form::close() !!}
@endsection