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

        <div class="row">
                @for($i=0; $i<4; $i++)
                <div class="col-sm-3" >
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.schiffner.com/wp-content/themes/schiff-responsive/images/noimage.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title" style = "display:inline-grid;">{{$activities[$i]->name}} </h5>
                        {{ Form::checkbox("box[]", $activities[$i]->id, $activities[$i]->finished) }}  <br/>
                        <p>
                             Lorem ipsum fafdsk fksldg jksdfjg fkd jsd ksjdLorem ipsum fafdsk fksldg jksdfjg fkd jsd ksjd

                        </p>
                        <span class="badge badge-secondary" style="float:right;">{{$activities[$i]->genre}}</span>


                        </div>
                    </div>
                </div>
                @endfor
        </div>
        <div class="row">
                @for($i=4; $i<8; $i++)
                <div class="col-sm-3" >
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.schiffner.com/wp-content/themes/schiff-responsive/images/noimage.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title" style = "display:inline-grid;">{{$activities[$i]->name}} </h5>
                        {{ Form::checkbox("box[]", $activities[$i]->id, $activities[$i]->finished) }} <br/>
                        <p>
                             Lorem ipsum fafdsk fksldg jksdfjg fkd jsd ksjdLorem ipsum fafdsk fksldg jksdfjg fkd jsd ksjd
                    
                        </p>
                        <span class="badge badge-secondary" style="float:right;">{{$activities[$i]->genre}}</span>
                        </div>
                    </div>
                </div>
                @endfor
        </div>
        <button  type="submit" class="btn btn-primary btn-lg">Accomplish!</button>
        {!! Form::close() !!}
       @endif

</div>

</div>




@endsection
