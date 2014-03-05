@extends('layout')

@section('content')
  ZZZ!
  
  <br />
  
  @foreach($users as $user)
    <p>{{ $user->name }}</p>
  @endforeach
  
@stop
