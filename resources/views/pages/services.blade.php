@extends('layouts/app')

@section('content')
    <h1>{{$title}}</h1>
    {{-- the count services makes sure that at least theres one service in that array --}}
    @if(count($services) > 0)
        <ul>     
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
