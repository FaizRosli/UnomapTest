

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

                   
                   
                   

                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">email</th>
                            <th scope="col">action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($data_user as $user)
                            <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="/Admin/{{$user->id}}/update">update</a> <a href="/Admin/{{$user->id}}/delete">delete</a></td>
                            </tr>
                            
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
