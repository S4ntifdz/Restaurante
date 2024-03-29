<?php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ItemsFilter extends ApiFilter{ 

    protected $safeParams = [
        'name' => ['like', 'eq'],
        'price' => ['eq', 'gt', 'lt'],
        'menu_id' => ['eq']
    ]; // <-- parametros con los que voy a querer filtrar los modelos
    protected $columnMap = [
        'name' => 'name',
        'price' => 'price',
        'menu_id' => 'menu_id'
    ]; // <-- mapeo de los parametros que voy a querer filtrar (no termine de entender)
    protected $operatorMap = [
        'like' => 'like',
        'eq' => '=',
        'gt' => '>',
        'lt' => '<'
    ]; // <-- mapeo de los operadores que voy a querer filtrar 

}
    