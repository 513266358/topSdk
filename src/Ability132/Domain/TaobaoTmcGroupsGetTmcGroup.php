<?php
namespace Requiem\Topsdk\Ability132\Domain;

class TaobaoTmcGroupsGetTmcGroup {

    /**
        分组名称
     **/
    private $name;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }


}

