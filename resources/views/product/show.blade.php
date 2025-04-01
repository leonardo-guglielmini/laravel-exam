@extends('layouts.default')

@section('page_title')
    Show
@endsection

@section('main')
    <h1>{{$product->name}}</h1>
    <p>{{$product->company->name}}</p>
@endsection
