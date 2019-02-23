edit page
<?php $user = Auth::user() ?>

<<<<<<< HEAD
{{ Form::open(['route' => 'users.update', 'method' => 'patch', 'files' => true]) }}
    
=======
{{ Form::open(['route' => 'users.update', 'method' => 'patch']) }}

>>>>>>> ec25d6bd73d8efd8bf21413862f8d23e1938cf70
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
