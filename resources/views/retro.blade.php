@extends('layouts.app')

@section('content')


<h1>Hallo</h1>
{{--@foreach ($users as $user)--}}
    {{--{{ $user->name }}--}}
{{--@endforeach--}}

{{ Auth::user()->name }}
@endsection