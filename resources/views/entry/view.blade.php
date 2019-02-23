@extends('layouts.app')

@section('content')

<div class="container">

              <div class = "row">
              <div class = "col align-self-center" style = "text-align: center;">
                  <h1>{{$entry->name}}</h1>
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                            edit
                        </button>

                    <!-- Modal -->
                    <{{ Form::open(['route' => 'entries.update', 'method' => 'patch']) }}
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                
                                <h4 class="modal-title" id="myModalLabel">Edit name</h4>
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
              </div>
              <div class = "col-sm-2">
                  {{$day}}
                  {{$month}}
                  {{$year}}
                  </div>
              <div class = "col-sm-6" style = "">
                  <div class="card task" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        @if($activities)
                            @foreach($activities as $a)
                            <li class="list-group-item">{{$a->name}}</li>
                            @endforeach
                        @endif
                    </ul>
                  </div>
              </div>
              </div>


</div>



@endsection

@push('scripts')
<script>
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })
</script>
@endpush
