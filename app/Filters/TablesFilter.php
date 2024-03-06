<?php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class TablesFilter extends ApiFilter{ 

    protected $safeParams = [
        'id' => ['eq', 'gt', 'lt'],
        'paid' => ['eq']
    ]; 
    protected $columnMap = [
        'paid' => 'paid',
        'id' => 'id',
        
    ]; 
    protected $operatorMap = [
        'like' => 'like',
        'eq' => '=',
        'gt' => '>',
        'lt' => '<'
    ]; 
}