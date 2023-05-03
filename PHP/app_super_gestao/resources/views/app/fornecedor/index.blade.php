<h3>Fonecedor</h3>

@php
    /*
        if(isset($variavel)) {} //retorna true se a vriavel for true
    */
@endphp

{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fonecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @endisset
@endisset
