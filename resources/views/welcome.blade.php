@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>These are FAQs, click the button below to see them</p>
                <br>
                <a href="/faq" class="btn btn-outline-primary">Show FAQs</a>
            </div>
        </div>
    </div>
@endsection
