@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="d-flex justify-content-center">
                <h3 class="d-inline mr-4">Show FAQ</h3>
                <a class="d-inline btn btn-outline-darkblue" href="{{ route('faqs.index') }}">Back</a>
            </div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="d-flex justify-content-center">
                <div class="form-group">
                    <strong>Question:</strong>
                    {{ $faq->question }}
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="d-flex justify-content-center">
                <div class="form-group">
                    <strong>Answer:</strong>
                    {{ $faq->answer }}
                </div>
            </div>
        </div>
    </div>
@endsection