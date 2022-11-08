@extends('layout.header')
@section('title', 'Menu')
@section('content')

<div class="list-group">

    <h2 class="text-center">Our Menu</h2>
    @foreach($menu as $mn)

        @if($mn == "Nasi Goreng")
            {{$spiceLevel = 3}}
        @elseif($mn == "Bakmi Ayam")
            {{$spiceLevel = 1}}
        @elseif($mn == "Bakso Goreng")
            {{$spiceLevel = "4"}}
        @endif

        <a href="#" class="list-group-item list-group-item-action text-center">{{$mn}} Spice Level: {{$spiceLevel}}</a>
     @endforeach


    <div class= "alert alert-success d-inline-block text-center">
            Note: Please take note of our spice level
    </div>
     
</div>

    

    
@endsection
