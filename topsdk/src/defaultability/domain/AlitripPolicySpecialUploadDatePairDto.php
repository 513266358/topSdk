<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicySpecialUploadDatePairDto {

    /**
        允许航班截止日期
     **/
    private $end;

    /**
        允许航班起始日期
     **/
    private $start;


    public function getEnd() : string{
        return $this->end;
    }

    public function setEnd(string $end){
        $this->end = $end;
    }

    public function getStart() : string{
        return $this->start;
    }

    public function setStart(string $start){
        $this->start = $start;
    }


}

