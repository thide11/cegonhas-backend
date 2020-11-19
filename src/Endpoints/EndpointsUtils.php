<?php
namespace Cegonhas\EndPoints;

class EndpointsUtils {
    static function print_sucess_response($data = null) {
        $responseData = array(
            "error" => false,
            "data" => $data
        );
        echo json_encode($responseData);
    }
    static function print_error_response($message) {
        $responseData = array(
            "error" => true,
            "message" => $message
        );
        echo json_encode($responseData);
    }    
}