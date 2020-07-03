@extends('layouts.app')
{{-- @extends('layout.qna') --}}


@section('content')
    <div class="container m-auto bg-light-gray">
                <h1 class=" col-7">Questions and Answer</h1>
                <a href="{{route('pertanyaan.create')}}" class=" btn btn-default btn-outline-primary">Create a Question</a>
                <hr>
            @if (count($pertanyaan) > 0)
                @foreach ($pertanyaan as $judul)
                <div class="well">
                    <h3><a href="/pertanyaan/{{$judul->id}}">{{$judul->judul_pertanyaan}}</a></h3>
                    <p>Pertanyaan: {{Str::limit($judul->isi_pertanyaan, 100)}} <span class=" text-success"> click to see more</span></p>
                    <small>Written at {{$judul->created_at}}</small>
                    &emsp;
                    <small>Updated at {{$judul->updated_at}}</small>
                    <hr>
                </div>           
                @endforeach
                
            @else
                <h4>No Questions Yet</h4>
            @endif
    </div>
    
@endsection