@extends('layouts.app')

@section('content')

<div class="bg">

<div class="container">
    <div class="row justify-content-center home-header-div">

        <div style="height: 400px; margin-bottom:200px;">
               <div>
                    <h1  style=" font-family:'HWT Slab';font-size:130px;text-align:left">make<br  />something happen<br  />today.</h1>
               </div>
        </div>
@if($activities)
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
                        <h3 class="card-title" style = "font-size: 20px;text-transform: uppercase;display:inline-grid;">{{$activity->name}} </h3>
                        {{ Form::checkbox("box[]", $activity->id, $activity->finished) }}  <br/>
                        <p>
                             {{$activity->description}}

                        </p>
                        <span class="badge badge-secondary" style="float:right;">{{$activity->genre}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
        @endforeach

        <div style="display:flex; justify-content:center;">
            <button  type="submit" class="btn btn-primary btn-lg" style="background-color:#0e2369;border:0px;">Accomplish!</button>
        </div>

        {!! Form::close() !!}
       @endif

</div>

</div>
</div>
</div>


@endsection
