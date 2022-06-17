<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellModifyBackfillModifyBackFillRequestDto {

    /**
        申请单号
     **/
    private $apply_id;

    /**
        国际国内标识:1:国内,2:国际
     **/
    private $domestic_intl;

    /**
        改签数据
     **/
    private $change_list;

    /**
        币种
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

    public function getChangeList() : array{
        return $this->change_list;
    }

    public function setChangeList(array $changeList){
        $this->change_list = $changeList;
    }

    public function getCurrency() : string{
        return $this->currency;
    }

    public function setCurrency(string $currency){
        $this->currency = $currency;
    }


}

