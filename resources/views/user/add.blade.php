@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">add post</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/user/add" method ="post">
                        @csrf
                        <label for="basic-url">title :</label>
                        <input type="text" class="form-control" placeholder="title" aria-label="name" aria-describedby="basic-addon1" name ="title">
                        <br>
                        <label for="basic-url">content :</label>
                        <input type="text" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1" name = "content">
                        <br>
                    
                       <input type="submit" class="btn btn-primary" value = "Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
