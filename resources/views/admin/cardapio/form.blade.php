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
        {{ Form::label('preco', 'Preço ', ['class' => 'col-sm-2 col-form-label']) }}
        <div class="col-sm-10">
            {{ Form::number('preco',  old('preco'), ['class' => 'form-control','placeholder'=>'Preço','id'=>'preco']) }}
            @error('preco')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        {{ Form::label('categoria_id', 'Categoria ', ['class' => 'col-sm-2 col-form-label']) }}
        <div class="col-sm-10">
            {{ Form::select('categoria_id',$categorias,  old('categoria_id'), ['data-placeholder'=>'Click to Choose...','class' => 'select2 form-control','id'=>'categoria_id']) }}
            @error('categoria_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        {{ Form::label('arquivos_id', 'Imagem ', ['class' => 'col-sm-2 col-form-label']) }}
        <div class="col-sm-10">
            {{ Form::file('arquivos_id', ['class' => 'form-control','id'=>'arquivos_id']) }}
            @error('arquivos_id')
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
