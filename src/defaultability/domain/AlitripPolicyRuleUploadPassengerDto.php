<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlitripPolicyRuleUploadPassengerDto {

    /**
        身份类型：1，身份证
     **/
    private $documents_type;

    /**
        身份证号区域限制
     **/
    private $documents_limit;

    /**
        产品类型：0，普通；1，学生；2，青年；3，老年；4，地区；5，小团；6，学生认证票
     **/
    private $product_code;

    /**
        年龄限制
     **/
    private $age_limit;

    /**
        数量限制
     **/
    private $pax_num;


    public function getDocumentsType() : array{
        return $this->documents_type;
    }

    public function setDocumentsType(array $documentsType){
        $this->documents_type = $documentsType;
    }

    public function getDocumentsLimit() : string{
        return $this->documents_limit;
    }

    public function setDocumentsLimit(string $documentsLimit){
        $this->documents_limit = $documentsLimit;
    }

    public function getProductCode() : int{
        return $this->product_code;
    }

    public function setProductCode(int $productCode){
        $this->product_code = $productCode;
    }

    public function getAgeLimit() : string{
        return $this->age_limit;
    }

    public function setAgeLimit(string $ageLimit){
        $this->age_limit = $ageLimit;
    }

    public function getPaxNum() : string{
        return $this->pax_num;
    }

    public function setPaxNum(string $paxNum){
        $this->pax_num = $paxNum;
    }


}

