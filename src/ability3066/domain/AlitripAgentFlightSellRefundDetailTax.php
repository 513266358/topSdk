<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellRefundDetailTax {

    /**
        税费编码(CN:机场建设费 ,YQ	燃油附加税)
     **/
    private $tax_code;

    /**
        税费金额，单位:分
     **/
    private $amount;

    /**
        不可退税费，单位:分
     **/
    private $not_refund_amount;


    public function getTaxCode() : string{
        return $this->tax_code;
    }

    public function setTaxCode(string $taxCode){
        $this->tax_code = $taxCode;
    }

    public function getAmount() : int{
        return $this->amount;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }

    public function getNotRefundAmount() : int{
        return $this->not_refund_amount;
    }

    public function setNotRefundAmount(int $notRefundAmount){
        $this->not_refund_amount = $notRefundAmount;
    }


}

