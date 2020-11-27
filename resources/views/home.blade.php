@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <form action="{{ route('storePosts') }}" method="POST" class="form-control" enctype="multipart/form-data">
        @csrf
        <input type="text" name="description" class="form-control mt-2">        
        <input type="text" name="champion" class="form-control mt-2">
        <input type="file" name="image" class="form-control mt-2">

        <button type="submit" class="btn btn-primary mt-2">add post</button>        
    </form>
</div>
@endsection
