<?php

namespace App\Http\Controllers;

use App\Helpers\Utils\ResponseUtil;
use Response;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Laravel Generator APIs",
 *     version="1.0.0",
 *   )
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404)
    {
        return Response::json(ResponseUtil::makeError($error), $code);
    }

    public function sendWithErrorCode($code)
    {
        return [
            'error' => [
                'code' => intval($code),
                'message' => constant('ERROR_' . $code . '_MESSAGE')
            ],
            'success' => false
        ];
    }

    public function responseOk($data = [])
    {
        return response()
            ->json(['success' => true, 'data' => $data], 200);
    }
}
