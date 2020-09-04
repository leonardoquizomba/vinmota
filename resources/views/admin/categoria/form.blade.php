<div class="card-body">
    <div class="form-group row">
        {{ Form::label('nome', 'Nome', ['class' => 'col-sm-2 col-form-label']) }}
        <div class="col-sm-10">
            {{ Form::text('nome',  old('nome'), ['class' => 'form-control','placeholder'=>'Nome','id'=>'nome', 'autofocus']) }}
            @error('nome')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        {{ Form::label('descricao', 'Descrição', ['class' => 'col-sm-2 col-form-label']) }}
        <div class="col-sm-10">
            {{ Form::text('descricao', old('descricao'), ['class' => 'form-control','placeholder'=>'Descrição','id'=>'descricao']) }}
            @error('descricao')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
