<?php
namespace Requiem\Topsdk\Defaultability\Request;
use Requiem\Topsdk\TopUtil;

class TaobaoOpentradeCustomizationOssGetRequest
{

    /**
        更新文件存储的请求对象
     **/

    public function getMiniappId() : string
    {
        return $this->miniappId;
    }

    public function setMiniappId(string $miniappId)
    {
        return $this->miniappId = $miniappId;
    }

    public function getFileName() : string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName)
    {
        return $this->fileName = $fileName;
    }

    public function getBuyerOpenId() : string
    {
        return $this->buyerOpenId;
    }

    public function setBuyerOpenId(string $buyerOpenId)
    {
        return $this->buyerOpenId = $buyerOpenId;
    }



    public function getApiName() : string {
        return "taobao.opentrade.customization.oss.get";
    }

    public function toMap() : array{
        // return $requestParam;
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->miniappId)) {
            $requestParam["miniappId"] = TopUtil::convertBasic($this->miniappId);
        }

        if (!TopUtil::checkEmpty($this->buyerOpenId)) {
            $requestParam["buyerOpenId"] = TopUtil::convertBasic($this->buyerOpenId);
        }

        return $requestParam;

    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}
