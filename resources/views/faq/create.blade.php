@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/faq" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Create a New FAQ</h1>
                    <p>Fill and submit this form to create a FAQ</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="question">Question</label>
                                <input type="text" id="question" class="form-control" name="question"
                                       placeholder="Enter Question" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="answer">Answer</label>
                                <input type="text" id="answer" class="form-control" name="answer"
                                       placeholder="Enter Answer" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="published">Publish</label>
                                <input class="switch-input" type="checkbox" value="1" {{ old('published') ? 'checked="checked"' : '' }}id="published" name="published">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create FAQ
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
