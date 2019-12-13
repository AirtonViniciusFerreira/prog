<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoOrcamento extends Model
{
    protected $filleble = [
        'orcamento_id', 'produto_id', 'amount', 'value',
    ];
}
