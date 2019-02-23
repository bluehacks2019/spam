@extends('layouts.app')

@section('content')
profile view page

name
{{Auth::user()->name}}

goal
{{Auth::user()->goal}}

<a class="btn btn-default" href={{ route('users.edit') }}>Edit</a>

@endsection
