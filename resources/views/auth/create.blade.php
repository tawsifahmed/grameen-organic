@extends('layouts.authMaster')

@section('content')
 <div>
  <h1>Home Auth Page</h1>
  <p>This is the home page</p>

    <a href="{{ route('login') }}">
    <button>
        Login
    </button>
    </a>

<a href="{{ route('signup') }}">
    <button>
        SignUp
    </button>
    </a>
 </div>

@endsection