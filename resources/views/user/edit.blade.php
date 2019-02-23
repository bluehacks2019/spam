edit page
<?php $user = Auth::user() ?>

{{ Form::open(['route' => 'users.update', 'method' => 'patch', 'files' => true]) }}
    
<div class="form-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="goal" class="control-label">goal</label>
                {{ Form::hidden('id', $user->id) }}
                {{ Form::textarea('goal', $user->goal, ['id' => 'goal', 'class' => 'form-control', 'rows' => 4]) }}
                {{ Form::file('image', ['class' => 'form-control']) }}	
            </div>
        </div>
    </div>
</div>

{{ Form::submit('Click Me!') }}

{{ Form::close() }}
