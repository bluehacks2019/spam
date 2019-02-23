edit page
<?php $user = Auth::user() ?>

{{ Form::open(['route' => 'users.update', 'method' => 'patch']) }}

<div class="form-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="goal" class="control-label">goal</label>
                {{ Form::hidden('id', $user->id) }}
                {{ Form::textarea('goal', null, ['id' => 'goal', 'class' => 'form-control', 'rows' => 4]) }}
            </div>
        </div>
    </div>
</div>

{{ Form::submit('Click Me!') }}

{{ Form::close() }}
