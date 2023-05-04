<h3>Fonecedor</h3>

@php
    /*
        if(empty($variavel)) {} //retorna true se a vriavel estiver vazia
    */
@endphp

{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}
    <!--
        $variavel testada não estiver definida (isset)
        ou
        $variavel testada possuir o valor null
    -->
@endisset
