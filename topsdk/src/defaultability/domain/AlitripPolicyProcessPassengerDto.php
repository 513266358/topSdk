<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyProcessPassengerDto {

    /**
        年龄限制
     **/
    private $age_limit;

    /**
        身份地域限制
     **/
    private $documents_limit;

    /**
        任务限制
     **/
    private $pax_num;

    /**
        产品类型
     **/
    private $product_code;

    /**
        证件类型
     **/
    private $documents_type;


    public function getAgeLimit() : string{
        return $this->age_limit;
    }

    public function setAgeLimit(string $ageLimit){
        $this->age_limit = $ageLimit;
    }

    public function getDocumentsLimit() : string{
        return $this->documents_limit;
    }

    public function setDocumentsLimit(string $documentsLimit){
        $this->documents_limit = $documentsLimit;
    }

    public function getPaxNum() : string{
        return $this->pax_num;
    }

    public function setPaxNum(string $paxNum){
        $this->pax_num = $paxNum;
    }

    public function getProductCode() : int{
        return $this->product_code;
    }

    public function setProductCode(int $productCode){
        $this->product_code = $productCode;
    }

    public function getDocumentsType() : array{
        return $this->documents_type;
    }

    public function setDocumentsType(array $documentsType){
        $this->documents_type = $documentsType;
    }


}

