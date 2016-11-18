@extends('layouts.master')
@section('title')
Welcome
@endsection
@section('content')
    <div class="row" >
        <div class="col-lg-12">
            <div class="col-lg-3">
                <h4>Crud</h4>
            </div>
           
            <div class="pull-right">

                <a href='{{route("create")}}'class="btn btn-primary"  >Create new item</a>
            </div>
        </div>
         <div class="col-lg-12">
            <table id="grid-basic"class="table">
                <thead>
                  <tr>
                    <th  data-column-id="id" data-type="numeric">Id</th>
                    <th  data-column-id="title" >Title</th>
                    <th  data-column-id="description">Description</th>
                    <th data-column-id="actions" data-formatter="actions" data-sortable="false"style="width:280px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                  <tr >
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                   <!--  <td><a href="{{route('showdetails',['id'=>$item->id])}}" class="btn btn-info">show</a><a href="{{route('editdetails',['id'=>$item->id])}}" class="btn btn-primary">Edit</a><a href="{{route('delete',['id'=>$item->id])}}" class="btn btn-danger">Delete</a></td> -->
                  </tr>
                  @endforeach
                </tbody>
             </table>
         </div>
    </div>
    <script >
   $( document ).ready(function(){
           $("#grid-basic").bootgrid({
             formatters: {
               "actions": function(column, row)
               {
                 return "<a  href =\"{{route('showdetails',['id'=>$item->id])}} \"data-id=\"" + row.id + "\" data-title=\"" + row.title + "\" data-description=\"" + row.description + "\" class=\"btn btn-info\"><span class=\"fa fa-pencil\"></span>show</a> " +
                 "<a  href =\"{{route('editdetails',['id'=>$item->id])}} \"  data-id=\"" + row.id + "\" data-title=\"" + row.title + "\" data-description=\"" + row.description + "\" class=\"btn btn-primary\"><span class=\"fa fa-remove\"></span>edit</a>"+
                 "<a   href=\"{{route('delete',['id'=>$item->id])}} \"data-id=\"" + row.id + "\"data-title=\"" + row.title + "\" data-description=\"" + row.description + "\" class=\"btn btn-danger\"><span class=\"fa fa-remove\"></span>delete</a>";
               }
             }})
          
           });
    var token = '{{Session::token()}}';
 
    </script>
<!-- $items->render() for pagination-->
@endsection
