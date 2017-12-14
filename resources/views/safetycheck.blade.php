@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Safetycheck</div>
                <div class="panel-body">
                @foreach($anonymous as $noname)
                  <button type="button" value="{{$noname}}" name="sad"></button>
                @endforeach
                
                @foreach($showName as $name)
                  <button type="button" value="{{$name}}" name="happy"></button>
                @endforeach

                    @if (count($anonymous) <= '2')
                      <p>No email</p>
                    @elseif (count($showName) >= '3')
                      <p>Yes email!</p>
                    @else
                      <p>Okay</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
