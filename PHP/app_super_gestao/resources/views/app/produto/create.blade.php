@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            @if (isset($produto->id))
                <p>Editar Produto</p>
            @else
                <p>Adicionar Produto</p>
            @endif
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @if (isset($produto->id))
                    <form action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                @else
                    <form action="{{ route('produto.store') }}" method="post">
                        @csrf
                @endif
                        <input type="text" value="{{ $produto->nome ?? old('nome') }}" name="nome" placeholder="Nome" class="borda-preta">
                        {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                        <input type="text" value="{{ $produto->descricao ?? old('descricao') }}" name="descricao" placeholder="Descrição" class="borda-preta">
                        {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

                        <input type="text" value="{{ $produto->peso ?? old('peso') }}" name="peso" placeholder="Peso" class="borda-preta">
                        {{ $errors->has('peso') ? $errors->first('peso') : '' }}

                        <select name="unidade_id" placeholder="E-mail" class="borda-preta">
                            <option>-- Selecione a unidade de medida --</option>
                            @foreach ($unidades as $unidade)
                                <option value="{{ $produto->unidade_id ?? $unidade->id }}" {{ old('unidade_id') == $unidade->id ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
                            @endforeach
                        </select>
                        {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

                        <button type="submit" class="borda-preta">Cadastrar</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
