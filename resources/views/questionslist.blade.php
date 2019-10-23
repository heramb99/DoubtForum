@extends('layout.navbar')

@section('content')

    
    <ul>
         @foreach ($qno as $singleques)
            <li><a href="/">{{$singleques}}</a></li>
        @endforeach
    </ul>


@endsection