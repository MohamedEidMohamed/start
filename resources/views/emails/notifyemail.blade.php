@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{$details['head']}}
            </div>
            <div class="card">
                {{$details['body']}}
            </div>
        </div>
    </div>
</div>
@endsection
