<?php

namespace App\Http\Controllers\Api\V1;

class ApiResponse
{
    public static function success($data = null, $message = 'Success', $statusCode = 200)
    {
        return response()->json([
            'status' => $statusCode,
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    public static function error($message = 'Error', $statusCode = 500)
    {
        return response()->json([
            'status' => $statusCode,
            'message' => $message
        ], $statusCode);
    }
}

