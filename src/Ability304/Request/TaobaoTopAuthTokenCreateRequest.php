<?php
namespace Requiem\Topsdk\Ability304\Request;
use Requiem\Topsdk\TopUtil;

class TaobaoTopAuthTokenCreateRequest
{

    /**
        grantType==refresh_token 时需要
     **/

    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }


    public function getApiName() : string {
        return "taobao.top.auth.token.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->code)) {
            $requestParam["code"] = TopUtil::convertBasic($this->code);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

