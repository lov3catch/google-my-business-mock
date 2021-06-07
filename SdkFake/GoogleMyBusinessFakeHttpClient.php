<?php

declare(strict_types=1);

namespace App\SdkFake;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class GoogleMyBusinessFakeHttpClient implements ClientInterface
{
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $url = $request->getUri();
        $method = $request->getMethod();

        if ('https://mybusiness.googleapis.com/v4/accounts/108494581129006735086/locations' === $url && 'GET' === $method) {
            return ResponseFactory::makeLocationListResponse();
        }

        if ('https://mybusiness.googleapis.com/v4/accounts/108494581129006735086/locations/6394464039148850881/reviews' === $url && 'GET' === $method) {
            return ResponseFactory::makeReviewListResponse();
        }

        if ('https://mybusiness.googleapis.com/v4/accounts/108494581129006735086/locations/13195921940790549583/reviews/AbFvOqmDfUP0EhJuYm-w3KXy3gSxYn-NS9CiDOo4tOjO4PRuq4PWUWbGkh6K-fePdKQaXi0cycFGGg' === $url && 'GET' === $method) {
            return ResponseFactory::makeReviewDetailResponse();
        }

        if ('https://mybusiness.googleapis.com/v4/accounts/108494581129006735086/locations/6394464039148850881/questions' === $url && 'GET' === $method) {
            return ResponseFactory::makeQuestionListResponse();
        }


        if ('https://mybusiness.googleapis.com/v4/accounts/108494581129006735086/locations/13195921940790549583/questions/AIe9_BF8X4EpR_fF6mwcYdso9awgNBXZYS-R4EHEW06LmxMr91KSWl_9vqMChjmP_lpnINp1kxXgkp5abmOdyb03He-ESr6SJkSiDuR9p25gq0NZ3dwvC7bgj0LUTqKnjuhhBXVth9ys/answers' === $url && 'GET' === $method) {
            return ResponseFactory::makeQuestionListResponse();
        }
    }
}