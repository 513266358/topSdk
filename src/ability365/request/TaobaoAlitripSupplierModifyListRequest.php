<?php
namespace Topsdk\Topapi\Ability365\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoAlitripSupplierModifyListRequest {

    /**
        页码
     **/
    private $currentPage;

    /**
        乘客出发时间查询结束日期
     **/
    private $depEnd;

    /**
        乘客出发时间查询开始日期
     **/
    private $depStart;

    /**
        申请单创建时间查询结束日期
     **/
    private $gmtCreateEnd;

    /**
        申请单创建时间查询开始日期
     **/
    private $gmtCreateStart;

    /**
        每页记录数
     **/
    private $pageSize;

    /**
        1：改签申请列表，2：改签已支付列表，3：改签成功列表
     **/
    private $status;


    public function getCurrentPage() : int{
        return $this->currentPage;
    }

    public function setCurrentPage(int $currentPage){
        $this->currentPage = $currentPage;
    }

    public function getDepEnd() : string{
        return $this->depEnd;
    }

    public function setDepEnd(string $depEnd){
        $this->depEnd = $depEnd;
    }

    public function getDepStart() : string{
        return $this->depStart;
    }

    public function setDepStart(string $depStart){
        $this->depStart = $depStart;
    }

    public function getGmtCreateEnd() : string{
        return $this->gmtCreateEnd;
    }

    public function setGmtCreateEnd(string $gmtCreateEnd){
        $this->gmtCreateEnd = $gmtCreateEnd;
    }

    public function getGmtCreateStart() : string{
        return $this->gmtCreateStart;
    }

    public function setGmtCreateStart(string $gmtCreateStart){
        $this->gmtCreateStart = $gmtCreateStart;
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


    public function getApiName() : string {
        return "taobao.alitrip.supplier.modify.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->currentPage)) {
            $requestParam["current_page"] = TopUtil::convertBasic($this->currentPage);
        }

        if (!TopUtil::checkEmpty($this->depEnd)) {
            $requestParam["dep_end"] = TopUtil::convertBasic($this->depEnd);
        }

        if (!TopUtil::checkEmpty($this->depStart)) {
            $requestParam["dep_start"] = TopUtil::convertBasic($this->depStart);
        }

        if (!TopUtil::checkEmpty($this->gmtCreateEnd)) {
            $requestParam["gmt_create_end"] = TopUtil::convertBasic($this->gmtCreateEnd);
        }

        if (!TopUtil::checkEmpty($this->gmtCreateStart)) {
            $requestParam["gmt_create_start"] = TopUtil::convertBasic($this->gmtCreateStart);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

