@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div style="height: 400px;">
               <div>
                    <h1  style=" font-family:'HWT Slab';font-size:130px;text-align:center">make something happen today!</h1>
               </div>
        </div>
@if(Auth::user())
        {{ Form::open(['route' => 'activities.add', 'method' => 'patch']) }}
        {{ Form::hidden('user_id', Auth::user()->id) }}
        {{ Form::hidden('entry_id', 1) }}
        <div>


        @foreach(array_chunk($activities, 4) as $chunk)
        <div class="row">
                @foreach($chunk as $activity)
                <div class="col-sm-3" >
                    <div class="card" style="width: 18rem;min-height:35em;">
                    <img class="card-img-top" src="https://www.schiffner.com/wp-content/themes/schiff-responsive/images/noimage.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h3 class="card-title" style = "font-family:'RiftSoftBold';display:inline-grid;">{{$activity->name}} </h3>
                        {{ Form::checkbox("box[]", $activity->id, $activity->finished) }}  <br/>
                        <p>
                             Lorem ipsum fafdsk fksldg jksdfjg fkd jsd ksjdLorem ipsum fafdsk fksldg jksdfjg fkd jsd ksjd

                        </p>
                        <span class="badge badge-secondary" style="float:right;">{{$activity->genre}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
        @endforeach

        <div style="margin:auto;">
            <button  type="submit" class="btn btn-primary btn-lg">Accomplish!</button>
        </div>

        {!! Form::close() !!}
       @endif

</div>

</div>

@endsection
