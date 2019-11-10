@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="d-flex justify-content-center">
                <h3 class="d-inline mr-4">Edit FAQ</h3>
                <a class="d-inline btn btn-outline-darkblue" href="{{ route('faqs.index') }}">Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Question:</strong>
                    {{-- <input type="text" name="name" value="{{ $faq->question }}" class="form-control" placeholder="Question"> --}}
                    <textarea class="form-control" style="height:150px" name="question" placeholder="Question">{{ $faq->question }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Answer:</strong>
                    <textarea class="form-control" style="height:150px" name="answer" placeholder="Answer">{{ $faq->answer }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-outline-darkblue">Submit</button>
            </div>
        </div>
   
    </form>
@endsection