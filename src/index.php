<?php
use Requiem\Topsdk\TopsdkClient;
use Requiem\Topsdk\Defaultability\Request\TaobaoItemsSellerListGetRequest;
use Requiem\Topsdk\Defaultability\Defaultability;


// create Client
$client = new TopApiClient("34892800","bc008b72e6bf16d8634d71425b8d62c7","https://pre-gw.api.taobao.com/top/router/rest");
$ability = new Defaultability($client);

// create domain

// create request
$request = new TaobaoItemsSellerListGetRequest();
/*
    num_iid,title,nick,approve_status,num,sku
*/
$postData   = array(array(
        "file_token"    => "wda984f89e4f98aw",
        "miniapp_id"    => "3000002252",
        "file_name"     => "测试.text",
        "buyer_open_id" => "wd46a4f86qa4f861aw6f",
        "file_size"     => "5162",
        "file_url"      => "appkey-123456/miniappId-3005111616/wadafwafafaf",
));
$request->setFileUpdateList($postData);
/*
    123456,234567
*/

$response = $ability->taobaoOpentradeCustomizationFileUpdate($request);
var_dump($response);
