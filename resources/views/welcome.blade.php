@extends('layouts.master')
@section('title')
Welcome
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h4>Crud</h4>
            </div>
            <div class="pull-right">
                <a href="{{route('create')}}"class="btn btn-primary"  >Create new item</a>
            </div>
        </div>
         <div class="col-lg-12">
            <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th style="width: width="280px";">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td><a href="{{route('showdetails',['id'=>$item->id])}}" class="btn btn-info">show</a><a href="{{route('editdetails',['id'=>$item->id])}}" class="btn btn-primary">Edit</a><a href="{{route('delete',['id'=>$item->id])}}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
             </table>
         </div>
    </div>
{{ $items->render()}}
@endsection
