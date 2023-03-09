@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Our FAQs:</h1>
                    </div>
                    <div class="col-4">
                        <p>Create new FAQ</p>
                        <a href="/create" class="btn btn-primary btn-sm">Add a FAQ</a>
                    </div>
                </div>
                @forelse($faqs as $faq)
                    <ul>
                        <li><p>{{ ucfirst($faq->question) }}</p></li>
                    </ul>
                @empty
                    <p class="text-warning">No FAQs available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
