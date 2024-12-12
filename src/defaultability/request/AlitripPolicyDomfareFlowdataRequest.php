<?php
namespace Requiem\Topsdk\Defaultability\Request;
use Requiem\Topsdk\TopUtil;
use Requiem\Topsdk\Defaultability\Domain\AlitripPolicyDomfareFlowdataCompareFlowDataQueryDTO;

class AlitripPolicyDomfareFlowdataRequest {

    /**
        入参
     **/
    private $compareFlowDataQueryDTO;


    public function getCompareFlowDataQueryDTO() : AlitripPolicyDomfareFlowdataCompareFlowDataQueryDTO{
        return $this->compareFlowDataQueryDTO;
    }

    public function setCompareFlowDataQueryDTO(AlitripPolicyDomfareFlowdataCompareFlowDataQueryDTO $compareFlowDataQueryDTO){
        $this->compareFlowDataQueryDTO = $compareFlowDataQueryDTO;
    }


    public function getApiName() : string {
        return "alitrip.policy.domfare.flowdata";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->compareFlowDataQueryDTO)) {
            $requestParam["compare_flow_data_query_d_t_o"] = TopUtil::convertStruct($this->compareFlowDataQueryDTO);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

