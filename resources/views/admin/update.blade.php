@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">update user</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="">
                        <label for="basic-url">Name :</label>
                        <input type="text" class="form-control" placeholder="name" aria-label="name" aria-describedby="basic-addon1" value ="{{$user->name}}">
                        <br>
                        <label for="basic-url">Email :</label>
                        <input type="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1" value ="{{$user->email}}">
                        <br>
                       <input type="submit" class="btn btn-primary" value = "Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
