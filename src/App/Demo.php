<?php
namespace App\App;

use App\Util\HttpRequest;
class Demo {
    const URL = "https://www.aijkt.com/api/article/list/1?page=1&limit=10";
    private $_logger;
    private $_req;
    function __construct($logger, HttpRequest $req) {
        $this->_logger = $logger;
        $this->_req = $req;
    }
    function set_req(HttpRequest $req) {
        $this->_req = $req;
    }
    function foo() {
        return "bar";
    }
    function get_user_info() {
        $result = $this->_req->get(self::URL); 
        $result_arr = json_decode($result, true);  
        if (!empty($result_arr) && $result_arr['status'] == 200) { 
               if (!empty($result_arr['data']) && sizeof($result_arr['data'])>0) 
                   return $result_arr['data'][0];
               else 
                  $this->_logger->info("no data"); 
        } else {
            $this->_logger->error("fetch data error.");
        }
       return null;
    }
}
