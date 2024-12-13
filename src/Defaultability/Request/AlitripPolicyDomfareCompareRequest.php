<?php
namespace Requiem\Topsdk\Defaultability\Request;
use Requiem\Topsdk\TopUtil;
use Requiem\Topsdk\Defaultability\Domain\AlitripPolicyDomfareCompareCompareDomFareRequestDTO;

class AlitripPolicyDomfareCompareRequest {

    /**
        查询参数
     **/
    private $compareDomFareRequestDTO;


    public function getCompareDomFareRequestDTO() : AlitripPolicyDomfareCompareCompareDomFareRequestDTO{
        return $this->compareDomFareRequestDTO;
    }

    public function setCompareDomFareRequestDTO(AlitripPolicyDomfareCompareCompareDomFareRequestDTO $compareDomFareRequestDTO){
        $this->compareDomFareRequestDTO = $compareDomFareRequestDTO;
    }


    public function getApiName() : string {
        return "alitrip.policy.domfare.compare";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->compareDomFareRequestDTO)) {
            $requestParam["compare_dom_fare_request_d_t_o"] = TopUtil::convertStruct($this->compareDomFareRequestDTO);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

