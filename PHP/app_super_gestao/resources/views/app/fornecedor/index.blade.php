<h3>Fonecedor</h3>

@php
    /*
        if(empty($variavel)) {} //retorna true se a vriavel estiver vazia
    */
@endphp

{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)
    @foreach($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach
@endisset

<br>
