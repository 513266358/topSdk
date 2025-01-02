<?php
namespace Requiem\Topsdk\Defaultability\Request;
use Requiem\Topsdk\TopUtil;

class TaobaoOpentradeCustomizationFileGetRequest
{

    private $filePreviewUrlList;

    public function getFilePreviewUrlList() : array{
        return $this->filePreviewUrlList;
    }

    public function setFilePreviewUrlList(array $filePreviewUrlList){
        $this->filePreviewUrlList = $filePreviewUrlList;
    }


    public function getApiName() : string {
        return "taobao.opentrade.customization.file.get";
    }

    public function toMap() : array{
        // return $requestParam;
        $requestParam = array();

        if (!TopUtil::checkEmpty($this->filePreviewUrlList)) {
            $requestParam["file_preview_url_list"] = TopUtil::convertStructList($this->filePreviewUrlList);
        }

        return $requestParam;

    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}
