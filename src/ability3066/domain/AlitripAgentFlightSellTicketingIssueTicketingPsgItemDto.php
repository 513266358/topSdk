<?php
namespace Topsdk\Topapi\Ability3066\Domain;

class AlitripAgentFlightSellTicketingIssueTicketingPsgItemDto {

    /**
        乘客姓名
     **/
    private $passenger_name;

    /**
        票号
     **/
    private $tickets;

    /**
        pnr
     **/
    private $pnr;

    /**
        航段
     **/
    private $segments;


    public function getPassengerName() : string{
        return $this->passenger_name;
    }

    public function setPassengerName(string $passengerName){
        $this->passenger_name = $passengerName;
    }

    public function getTickets() : array{
        return $this->tickets;
    }

    public function setTickets(array $tickets){
        $this->tickets = $tickets;
    }

    public function getPnr() : string{
        return $this->pnr;
    }

    public function setPnr(string $pnr){
        $this->pnr = $pnr;
    }

    public function getSegments() : array{
        return $this->segments;
    }

    public function setSegments(array $segments){
        $this->segments = $segments;
    }


}

