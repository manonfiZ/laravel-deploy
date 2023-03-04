<?php
namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class ApiBaseController extends Controller
{
    public function successResponse(
        $data = null ,
        string $message = 'Success',
        int $statusCode = 200
    ): JsonResponse {
        return response()->json(
            [
                'success' => true,
                'success_message' => $message,
                'data' => $data,
            ],
            $statusCode
        );
    }

    public function errorResponse(
        ?array $data = null,
        string $message = 'Error',
        int $statusCode = 400
    ): JsonResponse {
        return response()->json(
            [
                'success' => false,
                'error_message' => $message,
                'data' => $data,
            ],
            $statusCode
        );
    }
}
