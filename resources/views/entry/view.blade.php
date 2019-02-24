@extends('layouts.app')

@section('content')


<div class="container">

               <div class='card' style="min-height: 32em">
                    <div class="card-header" style="text-align:center">
                         <div>
                              <h1 style = "font-size:4em;font-family:'HWT Slab'" >{{$entry->name}}</h1>

                              <!-- Button trigger modal -->
                               <button type="button" class="btn btn-primary btn-lg" style="float:right;" data-toggle="modal" data-target="#myModal">
                                       edit
                              </button>


                         </div>

                    </div>

                   <div class = "row">
                   <!-- <div class = "col align-self-center" style = "text-align: center;">

                   </div> -->
                   <div class = "col-sm-3" style="margin:auto">
                       <div style="margin:auto;">
                            <div style="font-size:12em;font-family:'HWT Slab'">
                                 {{$day}}

                            </div>
                            <div style="font-size:2em">
                                 {{$month}}
                                {{$year}}
                            </div>

                          <div>

                            </div>
                       </div>
                   </div>

                   <div class = "col-sm-6" style = "">
                        <div style="text-align: center;padding-bottom:2em;">
                            <span style="font-size:4em;font-family:'HWT Slab'">{{$activities->count()}}</span> <br /> activities accomplished today!
                        </div>
                       <div class="card task" style="width: 25rem; margin:auto;text-align:center ">
                         <ul class="list-group list-group-flush" style="font-size:2em">
                              @if($activities)
                                 @foreach($activities as $a)
                                 <li class="list-group-item">{{$a->name}}  <i class="fas fa-check-circle" style="float:right;color:#1ced68"></i></li>
                                 @endforeach
                             @endif
                         </ul>
                       </div>
                   </div>
                   </div>
              </div>


</div>

<!-- Modal -->
{{ Form::open(['route' => 'entries.update', 'method' => 'patch']) }}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">


          <h4 class="modal-title" id="myModalLabel">Edit Title</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
          {{ Form::hidden('entry_id', 1) }}
          {{ Form::text('name', $entry->name, ['id' => 'goalname', 'class' => 'form-control']) }}
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>

          </div>
        </div>
        </div>
    </div>
</form>


@endsection


@push('scripts')
<script>
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })
</script>
@endpush
