<h3>Fonecedor</h3>

@php
    /*
        if(empty($variavel)) {} //retorna true se a vriavel estiver vazia
    */
@endphp

{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
    <br>
    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('85')
            Fortaleza - CE
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @default
            Estado não identificado
    @endswitch
@endisset
