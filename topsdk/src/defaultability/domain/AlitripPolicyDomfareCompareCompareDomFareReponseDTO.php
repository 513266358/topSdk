<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyDomfareCompareCompareDomFareReponseDTO {

    /**
        返回信息
     **/
    private $message;

    /**
        返回政策信息
     **/
    private $price_comparison_list;


    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getPriceComparisonList() : array{
        return $this->price_comparison_list;
    }

    public function setPriceComparisonList(array $priceComparisonList){
        $this->price_comparison_list = $priceComparisonList;
    }


}

