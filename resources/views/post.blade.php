
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List all post (news feed)
                <!-- <a href="/Admin/add" class="btn btn-primary float-right">Add New User</a> -->
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
                            <th scope="col">date</th>
                            <th scope="col">author</th>

                            
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($posts as $post)
                            <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td>{{$post->user->name}}</td>
                  
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
