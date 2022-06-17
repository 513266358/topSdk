<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessStockDto {

    /**
        退票是否还库存
     **/
    private $return_stock;

    /**
        库存限制
     **/
    private $stock_limit;

    /**
        库存数量
     **/
    private $stock_num;


    public function getReturnStock() : int{
        return $this->return_stock;
    }

    public function setReturnStock(int $returnStock){
        $this->return_stock = $returnStock;
    }

    public function getStockLimit() : int{
        return $this->stock_limit;
    }

    public function setStockLimit(int $stockLimit){
        $this->stock_limit = $stockLimit;
    }

    public function getStockNum() : int{
        return $this->stock_num;
    }

    public function setStockNum(int $stockNum){
        $this->stock_num = $stockNum;
    }


}

