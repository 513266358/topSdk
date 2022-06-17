<?php
namespace Topsdk\Topapi\Ability365\Domain;

class TaobaoAlitripBuyerGetRequestAxbDo {

    /**
        请求内容：0手机号
     **/
    private $req_content;

    /**
        业务类型：0国内机票,1国际机票
     **/
    private $biz_type;

    /**
        商家联系号码,多个号码以“,”分割；传证件号时为乘机人姓名
     **/
    private $contact_no;

    /**
        用途
     **/
    private $purpose;

    /**
        订单号
     **/
    private $order_id;


    public function getReqContent() : int{
        return $this->req_content;
    }

    public function setReqContent(int $reqContent){
        $this->req_content = $reqContent;
    }

    public function getBizType() : int{
        return $this->biz_type;
    }

    public function setBizType(int $bizType){
        $this->biz_type = $bizType;
    }

    public function getContactNo() : string{
        return $this->contact_no;
    }

    public function setContactNo(string $contactNo){
        $this->contact_no = $contactNo;
    }

    public function getPurpose() : string{
        return $this->purpose;
    }

    public function setPurpose(string $purpose){
        $this->purpose = $purpose;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }


}

