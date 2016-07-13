@extends('layouts.master')

@section('content')

    <div class="row" xmlns="http://www.w3.org/1999/html">
        <div class="col-md-4">
            <a href="{{ route('niceaction',['action' => 'greet']) }}">Greet</a>
            <a href="{{ route('niceaction',['action' => 'hug']) }}">Hug</a>
            <a href="{{ route('niceaction',['action' => 'kiss']) }}">Kiss</a>
            <hr/>
            <div class="from-group">
                <form action="{{route('benice')}}" method="post">
                <label for="select-action">I want to ...</label>
                <select name="action" id="select-action" class="form-control">
                    <option value="greet">Greet</option>
                    <option value="hug">Hug</option>
                    <option value="kiss">Kiss</option>
                </select>

                <input class="form-control" type="text" name="name"/>
                <input class="btn btn-default" type="submit" value="Submit"/>
                 <input type="hidden" value="{{Session::token()}}" name="_token"/>
                </form>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <ul>
                @for($i =0 ; $i < 5; $i++)
                    @if($i % 2 === 0)
                        <li>Iteration {{ $i + 1 }}</li>
                    @endif
                @endfor
            </ul>
        </div>
    </div>



@endsection
