<?php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class MenuFilter extends ApiFilter{ 

    protected $safeParams = [
        'name' => ['like', 'eq'],
    ]; // <-- parametros con los que voy a querer filtrar los modelos
    protected $columnMap = [
        'name' => 'name',
    ]; // <-- mapeo de los parametros que voy a querer filtrar (no termine de entender)
    protected $operatorMap = [
        'like' => 'like',
        'eq' => '=',
        'gt' => '>',
        'lt' => '<'
    ]; // <-- mapeo de los operadores que voy a querer filtrar 

}