@extends('layouts.app')

@section('content')
profile view page

name
{{Auth::user()->name}}

goal
{{Auth::user()->goal}}
@endsection
