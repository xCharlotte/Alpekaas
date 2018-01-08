@extends('layouts.app')

@section('content')
    <div class="col-md-5" >
        <list :type="`positive`"></list>
    </div>

    <div class="col-md-5" >
        <list :type="`negative`"></list>
    </div>

    <div class="col-md-2">
        <div class="users-block">
            <h4>Hallo {{ Auth::user()->name }}</h4>

        </div>
    </div>
@endsection
