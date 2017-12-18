@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-lg-3 col-md-2">
    <h1>Hallo  {{ Auth::user()->name }}</h1>

    <form method="post" action="{{action('RetroController@store')}}">
        <section id="pickacardSection">
            <select required name="title">
                <option value="" disabled selected>maak een keuze</option>

            @foreach($card_options as $option)
                    <option value="{{$option}}">{{$option}}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="description">Comment:</label>
                <textarea class="form-control" rows="3" name="description" id="description" required></textarea>
            </div>
        </section>

        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="buttonCenter">
            <input type="submit" class="button gradientcolor" title="button" value="Volgende vraag">
        </div>
    </form>
    </div>

<div class="col-md-2 col-lg-3">
    @foreach($cards as $card)
        {{$card->title}}
        @endforeach
</div>

</div>

@endsection