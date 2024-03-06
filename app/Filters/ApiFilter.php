<?php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

//el objetivo de esto es que si voy a querer filtrar por parametros, no tenga que hacer un if por cada parametro que quiero filtrar
//en este caso, se le pasan los parametros que se van a querer filtrar


class ApiFilter{ //#TODO ESTUDIAR ESTA FUNCION! 

    protected $safeParams = []; // <-- parametros con los que voy a querer filtrar los modelos
    protected $columnMap = []; // <-- mapeo de los parametros que voy a querer filtrar 
    protected $operatorMap = []; // <-- mapeo de los operadores que voy a querer filtrar 

    public function transform(Request $request){
        $eloQuery = [];
        foreach($this->safeParams as $param => $operators){
            $query = $request->query($param);
            if(!isset($query)){
                continue;
            }
            $column = $this->columnMap[$param] ?? $param;
            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloQuery;
    }
}