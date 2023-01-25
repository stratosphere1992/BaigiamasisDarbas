@extends('layouts.app')
@section('content')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- Parodomas prisjungusio vartotojo vardas -->
                <div class="card-header">Home</div>
                <div class="card-body">Hello, {{auth()->user()->name}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
