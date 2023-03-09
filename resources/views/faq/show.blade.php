@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/faq" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($faq->question) }}</h1>
                <p>{!! $faq->answer !!}</p>
                <hr>
                <a href="/blog/{{ $faq->id }}/edit" class="btn btn-outline-primary">Edit FAQ</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete FAQ</button>
                </form>
            </div>
        </div>
    </div>
@endsection
