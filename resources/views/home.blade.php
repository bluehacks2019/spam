@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div style="height: 400px;">
               <div>
                    <h1  style="font-size:130px;text-align:center">Make something happen today!</h1>
               </div>
        </div>
@if(Auth::user())
        {{ Form::open(['route' => 'activities.add', 'method' => 'patch']) }}
        {{ Form::hidden('user_id', Auth::user()->id) }}
        {{ Form::hidden('entry_id', 1) }}

        @if($activities)
        <div class="row">
                @for($i=0; $i<4; $i++)
                <div class="col-sm-3" >
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/exercise_card.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title" style = "display:inline-grid;">Card title</h5>
                        {{ Form::checkbox("box[]", $activities[$i]->id, $activities[$i]->finished) }}
                        {{$activities[$i]->name}} {{$activities[$i]->genre}}

                        </div>
                    </div>
                </div>
                @endfor
        </div>
        <div class="row">
                @for($i=4; $i<8; $i++)
                <div class="col-sm-3" >
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="images/exercise_card.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title" style = "display:inline-grid;">Card title</h5>
                        {{ Form::checkbox("box[]", $activities[$i]->id, $activities[$i]->finished) }}
                        {{$activities[$i]->name}} {{$activities[$i]->genre}}

                        </div>
                    </div>
                </div>
                @endfor
        </div>
        @endif
        {{ Form::submit('Click Me!') }}
        {!! Form::close() !!}
       @endif

</div>

</div>




@endsection
