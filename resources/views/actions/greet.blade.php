@extends('layouts.master')

@section('content')
    <div class="col-md-12">

        <h1>Hi Greet you! {{ $name == null ? 'you' : $name  }}</h1>
    </div>

@endsection