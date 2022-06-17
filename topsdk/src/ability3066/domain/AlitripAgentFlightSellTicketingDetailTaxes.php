<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellTicketingDetailTaxes {

    /**
        税值
     **/
    private $amount;

    /**
        税项二字码
     **/
    private $tax_code;


    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getTaxCode() : string{
        return $this->tax_code;
    }

    public function setTaxCode(string $taxCode){
        $this->tax_code = $taxCode;
    }


}

