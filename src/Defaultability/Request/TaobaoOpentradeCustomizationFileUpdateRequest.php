<?php
namespace Requiem\Topsdk\Defaultability\Request;
use Requiem\Topsdk\TopUtil;

class TaobaoOpentradeCustomizationFileUpdateRequest
{

    /**
        更新文件存储的请求对象
     **/
    private $fileUpdateList;

    public function getFileUpdateList() : array{
        return $this->fileUpdateList;
    }

    public function setFileUpdateList(array $fileUpdateList){
        $this->fileUpdateList = $fileUpdateList;
    }

    public function getApiName() : string {
        return "taobao.opentrade.customization.file.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fileUpdateList)) {
            $requestParam["fileUpdateList"] = TopUtil::convertStructList($this->fileUpdateList);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}
