@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Posts</h1>
        @can('isAdmin')
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('posts.create') }}">Add New</a>
        </h1>
        
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('posts.table')
            </div>
            
        </div>
        <div class="text-center">
        
        </div>
        @elsecan('isGuest')
        <br>
        <br>
        <div class="container col-md-6">
        <h1>Form Request</h1>
        <form action="{{url('guest-mail')}}">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group" >
              <label for="exampleInputPassword1">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        @endcan
    </div>
@endsection

