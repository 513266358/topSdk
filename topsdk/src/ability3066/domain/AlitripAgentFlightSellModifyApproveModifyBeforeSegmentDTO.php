<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellModifyApproveModifyBeforeSegmentDTO {

    /**
        到达城市
     **/
    private $arr_city;

    /**
        起飞城市
     **/
    private $dep_city;


    public function getArrCity() : string{
        return $this->arr_city;
    }

    public function setArrCity(string $arrCity){
        $this->arr_city = $arrCity;
    }

    public function getDepCity() : string{
        return $this->dep_city;
    }

    public function setDepCity(string $depCity){
        $this->dep_city = $depCity;
    }


}

