<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellRefundApproveRefundApproveRequestDto {

    /**
        申请单号,必填
     **/
    private $apply_id;

    /**
        国内国际标识:1:国内,2:国际
     **/
    private $domestic_intl;

    /**
        退票数据, 必填,
     **/
    private $refund_list;

    /**
        交易币种: CNY:人民币, USD:美元, HKD:港元
     **/
    private $currency;


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

    public function getRefundList() : array{
        return $this->refund_list;
    }

    public function setRefundList(array $refundList){
        $this->refund_list = $refundList;
    }

    public function getCurrency() : string{
        return $this->currency;
    }

    public function setCurrency(string $currency){
        $this->currency = $currency;
    }


}

