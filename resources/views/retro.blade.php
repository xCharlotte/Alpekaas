@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Hallo  {{ Auth::user()->name }}</h1>

    <form method="post" action="{{action('RetroController@store')}}">
        <section id="pickacardSection">
            <select required name="title" id="choice1">
                <option value="" hidden="maak een keuze"</option>
                @foreach($cards as $card)
                    <option v-bind:value="{{$card->name}}">{{$card->title}}</option>
                @endforeach
            </select>
        </section>
    </form>
</div>





@endsection