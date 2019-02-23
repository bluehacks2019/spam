@extends('layouts.app')

@section('content')


        @foreach(array_chunk($entries, 4) as $chunk)
             <div class="four-column-row">
                 @foreach($chunk as $entry)
                      <!-- <div class="four-column-row"> -->
                         <div class="four-row-card">
                             <div class="title">{{$entry->name}}</div>
                             <div class="day">{{Carbon\Carbon::parse($entry->created_at)->format('d')}}</div>
                             <div class="month">{{Carbon\Carbon::parse($entry->created_at)->format('F')}}</div>
                         </div>
                 @endforeach
                    </div>
              </div>
         @endforeach


@endsection
