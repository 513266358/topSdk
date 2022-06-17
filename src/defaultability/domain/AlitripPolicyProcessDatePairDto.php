<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessDatePairDto {

    /**
        开始日期
     **/
    private $start;

    /**
        结束日期
     **/
    private $end;


    public function getStart() : string{
        return $this->start;
    }

    public function setStart(string $start){
        $this->start = $start;
    }

    public function getEnd() : string{
        return $this->end;
    }

    public function setEnd(string $end){
        $this->end = $end;
    }


}

