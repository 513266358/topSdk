<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellModifyApproveModifyApproveRequestDto {

    /**
        改签申请单号
     **/
    private $apply_id;

    /**
        国内国际标识:1:国内,2:国际
     **/
    private $domestic_intl;

    /**
        改签数据
     **/
    private $change_list;

    /**
        0:原路退回; 1:退银行卡; 2:原路退回+退银行卡
     **/
    private $refund_way_type;


    public function getApplyId() : string{
        return $this->apply_id;
    }

    public function setApplyId(string $applyId){
        $this->apply_id = $applyId;
    }

    public function getDomesticIntl() : int{
        return $this->domestic_intl;
    }

    public function setDomesticIntl(int $domesticIntl){
        $this->domestic_intl = $domesticIntl;
    }

    public function getChangeList() : array{
        return $this->change_list;
    }

    public function setChangeList(array $changeList){
        $this->change_list = $changeList;
    }

    public function getRefundWayType() : int{
        return $this->refund_way_type;
    }

    public function setRefundWayType(int $refundWayType){
        $this->refund_way_type = $refundWayType;
    }


}

