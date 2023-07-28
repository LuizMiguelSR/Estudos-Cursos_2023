@if (isset($produto_detalhe->id))
    <form action="{{ route('produto-detalhe.update', ['produto_detalhe' => $produto_detalhe->id]) }}" method="post">
        @csrf
        @method('PUT')
@else
    <form action="{{ route('produto-detalhe.store') }}" method="post">
        @csrf
@endif
        <input type="text" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}" name="produto_id" placeholder="ID do Produto" class="borda-preta">
        {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}

        <input type="text" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}" name="comprimento" placeholder="Comprimento" class="borda-preta">
        {{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}

        <input type="text" value="{{ $produto_detalhe->largura ?? old('peso') }}" name="largura" placeholder="Largura" class="borda-preta">
        {{ $errors->has('largura') ? $errors->first('largura') : '' }}

        <input type="text" value="{{ $produto_detalhe->altura ?? old('altura') }}" name="altura" placeholder="Altura" class="borda-preta">
        {{ $errors->has('altura') ? $errors->first('altura') : '' }}

        <select name="unidade_id" placeholder="E-mail" class="borda-preta">
            <option>-- Selecione a unidade de medida --</option>
            @foreach ($unidades as $unidade)
                <option value="{{ $produto_detalhe->unidade_id ?? $unidade->id }}" {{ old('unidade_id') == $unidade->id ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
            @endforeach
        </select>
        {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

        <button type="submit" class="borda-preta">Cadastrar</button>
    </form>
