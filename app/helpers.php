<?php

use Illuminate\Http\Response;

function responseBuilder($collection, $code)
{
    $data = [
        'status_code' => $code,
        'messages_code' => Response::$statusTexts[$code],
        'data' => $collection,
    ];
    return response($data, $code);
}
