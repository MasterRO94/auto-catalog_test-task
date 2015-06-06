<div class="col-md-3 {{ $class }}">
    {!! Form::label($name, $label) !!}
    {!! Form::select($name, $values, $selected, ['class' => 'form-control' ]) !!}
</div>