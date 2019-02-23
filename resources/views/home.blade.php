@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <a href={{ route('users.show') }} type="button" class="btn btn-default">go to profile</a>
                    {{ Form::open(['route' => 'activities.add', 'method' => 'patch']) }}
                    {{ Form::hidden('user_id', Auth::user()->id) }}
                    {{ Form::hidden('entry_id', 1) }}
                    @foreach($activities as $a)
                    {{$a->name}} {{$a->genre}}
                    {{ Form::checkbox("box[]", $a->id, $a->finished) }}
                    @endforeach
                    
                    {{ Form::submit('Click Me!') }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
