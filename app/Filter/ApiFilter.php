<?php
namespace App\Filter;
use Illuminate\Http\Request;

class ApiFilter{ 

    protected $safeParams = []; // <-- parametros con los que voy a querer filtrar los modelos
    protected $columnMap = []; // <-- mapeo de los parametros que voy a querer filtrar (no termine de entender)
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
    
