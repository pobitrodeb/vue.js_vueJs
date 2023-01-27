<?php

function send_response($message, $data){

    $response = [
        'status' => true,
        'message' => $message,
        'data'  => $data
    ];
    return response()->json([$response]);
}
function send_error($message, $messages=[], $code=404 ){

    $response = [
        'status' => false,
        'message' => $message
    ];
    !empty($message) ? $response['errors'] = $message : null;
    return response()->json($response, $code);
}

