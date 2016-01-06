<?php

namespace Demo\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use JStormes\PHPSlickGrid\Models\AbstractSlickGridGateway;
use JStormes\PHPSlickGrid\Models\Traits\DataCacheTraits;
use JStormes\PHPSlickGrid\Models\Traits\ColumnsTraits;


class SlickGridTables extends AbstractSlickGridGateway
{
    use DataCacheTraits;
    use ColumnsTraits;
    
    public $table = "demo";
    
    function test() {
        $t=$this->getColumns();
        
        return $t;
        //fb($t);
    }
}