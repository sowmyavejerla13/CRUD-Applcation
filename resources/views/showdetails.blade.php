@extends('layouts.master')
@section('title')
Welcome
@endsection
@section('content')
<div class="row">
<div class="col-lg-6 col-lg-offset-3">
	<div class="pull-right">
                <a class="btn btn-primary" href="{{ route('welcome') }}"> Back</a>
            </div>
	<h4>Show detail</h4>
	Title:  <span>{{$item->title}}</span><br>
	Description: <span>{{$item->description}}</span>

</div>
</div>
@endsection