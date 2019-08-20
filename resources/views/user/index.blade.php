

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List all post
                <a href="/user/add" class="btn btn-primary float-right">Add New Post</a>
                </div>
                
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
                            <th scope="col">title</th>
                            <th scope="col">content</th>
                            <th scope="col">action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($data_post as $post)
                            <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td><a href="/user/{{$post->id}}/update">update</a> <a href="/user/{{$post->id}}/delete">delete</a></td>
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
