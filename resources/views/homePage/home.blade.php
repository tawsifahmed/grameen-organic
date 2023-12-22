@extends('layouts.master')

@section('content')
 <div>
  <h1>Home Page</h1>
  <p>This is the home page</p>
 </div>

 <a href="{{ route('create.account') }}"> Create Account </a>

@endsection