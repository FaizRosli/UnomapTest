@extends('layouts.app')

@section('content')
<div class="container">
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

                    @if(Auth::user()->role=='admin')
                    
                         <a href="/Admin/index">manage user</a>
                    
                    @else
                    
                        <a href="/user/index">manage post</a>
                    
                    @endif
                    <br>
                    <a href="/Page">landing page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
