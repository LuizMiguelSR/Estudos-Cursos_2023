<h3>Fonecedor</h3>


{{ 'Texto de teste' }}
<?= 'Texto de teste' ?>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php
    /*if() {

    } elseif (condition) {
        # code...
    } else {
        # code...
    }*/
@endphp

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
