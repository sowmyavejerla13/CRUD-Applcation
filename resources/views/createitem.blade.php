@extends('layouts.master')
@section('title')
Welcome
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h4>Create new item</h4>
            </div>
           <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('welcome') }}"> Back</a>
            </div>
        </div>
    </div>

      <div class="row">
         <div class="col-lg-12">
           <form class="form-horizontal" method="POST" action="{{route('postcreate')}}">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="title">Title:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name ="title" id="title" placeholder="Title">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="description">Description:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name ="description" id="description" placeholder="Description">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
                <input type="hidden" name="_token" value="{{Session::token()}}">
             </form>
         </div>

    </div>
     <div class="row">
         <div class="col-lg-6 col-lg-offset-3">
             @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
         </div>
      </div>

@endsection