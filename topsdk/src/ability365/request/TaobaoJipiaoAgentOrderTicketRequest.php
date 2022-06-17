<?php
namespace Topsdk\Topapi\Ability365\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoJipiaoAgentOrderTicketRequest {

    /**
        淘宝系统订单id
     **/
    private $orderId;

    /**
        成功订单参数：列表元素结构为——
1.航班号（注：是订单里的航班号，非实际承运航班号）;
2.旧乘机人姓名;
3.新乘机人姓名;
4.票号 （乘机人、航段对应的票号）
说明：
1.往返订单，2段航班对应1个票号的，需要2条success_info记录，分别对应去程、回程；
2.有时用户输入的乘机人姓名输入错误或者有生僻字，代理商必须输入新的名字以保证验真通过；即旧乘机人姓名和新乘机人姓名不需要变化时可以相同
     **/
    private $successInfo;


    public function getOrderId() : int{
        return $this->orderId;
    }

    public function setOrderId(int $orderId){
        $this->orderId = $orderId;
    }

    public function getSuccessInfo() : array{
        return $this->successInfo;
    }

    public function setSuccessInfo(array $successInfo){
        $this->successInfo = $successInfo;
    }


    public function getApiName() : string {
        return "taobao.jipiao.agent.order.ticket";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->successInfo)) {
            $requestParam["success_info"] = TopUtil::convertBasicList($this->successInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

