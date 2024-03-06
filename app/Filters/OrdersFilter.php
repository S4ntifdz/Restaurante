<?php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class OrdersFilter extends ApiFilter{ 

    protected $safeParams = [
        'id' => ['eq', 'gt', 'lt'],
        'table_id' => ['like', 'eq'],
        'quantity' => ['eq', 'gt', 'lt'],
        'item_id' => ['eq'],
        'total' => ['eq', 'gt', 'lt'],
    ]; // <-- parametros con los que voy a querer filtrar los modelos
    protected $columnMap = [
        'table_id' => 'table_id',
        'quantity' => 'quantity',
        'item_id' => 'item_id',
        'total' => 'total'
    ]; // <-- mapeo de los parametros que voy a querer filtrar (no termine de entender)
    protected $operatorMap = [
        'like' => 'like',
        'eq' => '=',
        'gt' => '>',
        'lt' => '<'
    ]; // <-- mapeo de los operadores que voy a querer filtrar 

}
    