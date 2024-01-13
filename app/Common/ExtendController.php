<?php

namespace App\Common;

trait ExtendController
{
    /**
     * @param $message
     * @param $result
     * @param $code
     * @param $redirect
     * @param $delay
     * @param $hide
     * @return \Illuminate\Http\JsonResponse
     */
    protected function makeSuccessResponse($message = '', $result = [], $code = 200, $redirect = '', $delay = 1000, $hide = true)
    {
        $response = [
            'status' => true,
            'message' => $message
        ];

        if (!empty($result)) {
            $response['data'] = $result;
        }
        if (!empty($redirect)) {
            $response['redirect'] = $redirect;
        }
        if (!empty($delay)) {
            $response['delay'] = $delay;
        }
        if (!empty($hide)) {
            $response['hide'] = $hide;
        }

        return response()->json($response, $code);
    }

    /**
     * @param $message
     * @param $result
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function makeApiSuccessResponse($message = '', $result = [], $code = 200)
    {
        return $this->makeSuccessResponse($message, $result, $code, '', null, '');
    }

    /**
     * @param $message
     * @param $errors
     * @param $code
     * @param $redirect
     * @param $delay
     * @param $hide
     * @return \Illuminate\Http\JsonResponse
     */
    protected function makeErrorResponse($message = '', $errors = [], $code = 404, $redirect = '', $delay = 1000, $hide = true)
    {
        $response = [
            'status' => false,
            'message' => $message
        ];

        if (!empty($errors)) {
            $response['errors'] = $errors;
        }
        if (!empty($redirect)) {
            $response['redirect'] = $redirect;
        }
        if (!empty($delay)) {
            $response['delay'] = $delay;
        }
        if (!empty($hide)) {
            $response['hide'] = $hide;
        }

        return response()->json($response, $code);
    }

    /**
     * @param $message
     * @param $errors
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function makeApiErrorResponse($message = '', $errors = [], $code = 500)
    {
        return $this->makeErrorResponse($message, $errors, $code, '', null, '');
    }

    /**
     * @param $errors
     * @param $message
     * @param $code
     * @param $redirect
     * @param $delay
     * @param $hide
     * @return \Illuminate\Http\JsonResponse
     */
    protected function makeValidationResponse($errors = [], $message = 'The given data was invalid.', $code = 404, $redirect = '', $delay = 1000, $hide = true)
    {
        $response = [
            'status' => false,
            'message' => $message,
            'errors' => $errors,
        ];

        if (!empty($redirect)) {
            $response['redirect'] = $redirect;
        }
        if (!empty($delay)) {
            $response['delay'] = $delay;
        }
        if (!empty($hide)) {
            $response['hide'] = $hide;
        }

        return response()->json($response, $code);
    }

    /**
     * @param $errors
     * @param $message
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function makeApiValidationResponse($errors = [], $message = 'The given data was invalid.', $code = 404)
    {
        return $this->makeValidationResponse($errors, $message, $code, '', null, '');
    }
}
