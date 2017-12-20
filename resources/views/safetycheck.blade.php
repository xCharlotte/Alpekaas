
@extends('layouts.app')

@section('content')
  <script src="https://unpkg.com/vue@2.5.10/dist/vue.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Safetycheck</div>
                <div class="panel-body">

                <div id="returnvalue">

                  @foreach($anonymous as $noname)
                    <button v-on:click.native="sadClick()"></button>
                  @endforeach

                  @foreach($showName as $name)
                    <button v-on:click.native="sadClick()"> </button>
                  @endforeach

                </div>
                <script>
                  new Vue({
                    el: '#returnvalue',
                    module.exports = {
                    data: function(){
                      return {
                      noname: 1
                      }
                    },
                    methods: {
                      sadClick: function() {
                         this.noname += 1;
                      }
                    }
                  };
                </script>

                    @if (count($noname) <= '2')
                      <p>No email</p>
                    @elseif (count($name) >= '3')
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
