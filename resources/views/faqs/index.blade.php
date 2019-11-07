@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            {{-- <div class="pull-left">
                <h2>CRUD_Laravel</h2>
            </div> --}}
            <div class="pull-right">
                <a class="btn btn-outline-success mb-3" href="{{ route('faqs.create') }}"> Create New FAQ</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Question</th>
            <th>Answer</th>
            @can('delete', $faqs) 
                <th width="280px">Action</th>  {{-- th still not showing for some reason--}}              
            @endcan
        </tr>
        @foreach ($faqs as $faq)
        <tr>
            <td>{{ $faq->id }}</td> {{-- {{ ++$i }} --}}
            <td>{{ $faq->question }}</td>
            <td>{{ $faq->answer }}</td>
            @can('delete', $faq)
                <td>
                    <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST">
    
                        @can('view', $faq)
                            <a class="btn btn-outline-info" href="{{ route('faqs.show', $faq->id) }}">Show</a>
                        @endcan

                        @can('update', $faq)
                            <a class="btn btn-outline-warning" href="{{ route('faqs.edit', $faq->id) }}">Edit</a>
                        @endcan

                        @csrf
                        @method('DELETE')
                        
                        @can('delete', $faq)
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        @endcan
                    </form>
                </td>
            @endcan
        </tr>
        @endforeach
    </table>
    
        <div class="justify-content-center"> {{-- justify-content-center not working some reason --}}
            {!! $faqs->links() !!}
        </div>
    
@endsection