<?php
namespace Topsdk\Topapi\Ability365\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoAlitripSellerModifyListRequest {

    /**
        改签发起时间的查询结束日期 和 更新时间必选其一
     **/
    private $applyDateEnd;

    /**
        改签发起时间的查询开始日期 和 更新时间必选其一
     **/
    private $applyDateStart;

    /**
        申请单ID
     **/
    private $applyId;

    /**
        页码
     **/
    private $currentPage;

    /**
        乘客起飞时间的查询结束日期
     **/
    private $flyDateEnd;

    /**
        乘客起飞时间的查询开始日期
     **/
    private $flyDateStart;

    /**
        淘宝订单号
     **/
    private $orderId;

    /**
        每页记录数
     **/
    private $pageSize;

    /**
        1：初始状态，2：已改签成功，3：已拒绝，4：未付款（已回填退票费），5：已付款
     **/
    private $status;

    /**
        记录修改结束时间  和 改签发起时间必选其一
     **/
    private $modifyDateEnd;

    /**
        记录修改起始时间 和 改签发起时间必选其一
     **/
    private $modifyDateStart;


    public function getApplyDateEnd() : string{
        return $this->applyDateEnd;
    }

    public function setApplyDateEnd(string $applyDateEnd){
        $this->applyDateEnd = $applyDateEnd;
    }

    public function getApplyDateStart() : string{
        return $this->applyDateStart;
    }

    public function setApplyDateStart(string $applyDateStart){
        $this->applyDateStart = $applyDateStart;
    }

    public function getApplyId() : int{
        return $this->applyId;
    }

    public function setApplyId(int $applyId){
        $this->applyId = $applyId;
    }

    public function getCurrentPage() : int{
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage){
        $this->currentPage = $currentPage;
    }

    public function getFlyDateEnd() : string{
        return $this->flyDateEnd;
    }

    public function setFlyDateEnd(string $flyDateEnd){
        $this->flyDateEnd = $flyDateEnd;
    }

    public function getFlyDateStart() : string{
        return $this->flyDateStart;
    }

    public function setFlyDateStart(string $flyDateStart){
        $this->flyDateStart = $flyDateStart;
    }

    public function getOrderId() : int{
        return $this->orderId;
    }

    public function setOrderId(int $orderId){
        $this->orderId = $orderId;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getModifyDateEnd() : string{
        return $this->modifyDateEnd;
    }

    public function setModifyDateEnd(string $modifyDateEnd){
        $this->modifyDateEnd = $modifyDateEnd;
    }

    public function getModifyDateStart() : string{
        return $this->modifyDateStart;
    }

    public function setModifyDateStart(string $modifyDateStart){
        $this->modifyDateStart = $modifyDateStart;
    }


    public function getApiName() : string {
        return "taobao.alitrip.seller.modify.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->applyDateEnd)) {
            $requestParam["apply_date_end"] = TopUtil::convertBasic($this->applyDateEnd);
        }

        if (!TopUtil::checkEmpty($this->applyDateStart)) {
            $requestParam["apply_date_start"] = TopUtil::convertBasic($this->applyDateStart);
        }

        if (!TopUtil::checkEmpty($this->applyId)) {
            $requestParam["apply_id"] = TopUtil::convertBasic($this->applyId);
        }

        if (!TopUtil::checkEmpty($this->currentPage)) {
            $requestParam["current_page"] = TopUtil::convertBasic($this->currentPage);
        }

        if (!TopUtil::checkEmpty($this->flyDateEnd)) {
            $requestParam["fly_date_end"] = TopUtil::convertBasic($this->flyDateEnd);
        }

        if (!TopUtil::checkEmpty($this->flyDateStart)) {
            $requestParam["fly_date_start"] = TopUtil::convertBasic($this->flyDateStart);
        }

        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        if (!TopUtil::checkEmpty($this->modifyDateEnd)) {
            $requestParam["modify_date_end"] = TopUtil::convertBasic($this->modifyDateEnd);
        }

        if (!TopUtil::checkEmpty($this->modifyDateStart)) {
            $requestParam["modify_date_start"] = TopUtil::convertBasic($this->modifyDateStart);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

