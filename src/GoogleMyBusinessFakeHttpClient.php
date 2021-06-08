<?php

declare(strict_types=1);

namespace GoogleMyBusinessMock;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;


/**
 * @method withOptions(array $options)
 */
class GoogleMyBusinessFakeHttpClient implements HttpClientInterface
{
    public function request(
        string $method,
        string $url,
        array $options = []
    ): string {
        if ('https://mybusiness.googleapis.com/v4/accounts/108494581129006735086/locations' === $url && 'GET' === $method) {
            return ResponseFactory::makeLocationListResponse($method, $url, $options);
        }

        if ('https://mybusiness.googleapis.com/v4/accounts/108494581129006735086/locations/6394464039148850881/reviews' === $url && 'GET' === $method) {
            return ResponseFactory::makeReviewListResponse($method, $url, $options);
        }

        if ('https://mybusiness.googleapis.com/v4/accounts/108494581129006735086/locations/13195921940790549583/reviews/AbFvOqmDfUP0EhJuYm-w3KXy3gSxYn-NS9CiDOo4tOjO4PRuq4PWUWbGkh6K-fePdKQaXi0cycFGGg' === $url && 'GET' === $method) {
            return ResponseFactory::makeReviewDetailResponse($method, $url, $options);
        }

        if ('https://mybusiness.googleapis.com/v4/accounts/108494581129006735086/locations/6394464039148850881/questions' === $url && 'GET' === $method) {
            return ResponseFactory::makeQuestionListResponse($method, $url, $options);
        }

        if ('https://mybusiness.googleapis.com/v4/accounts/108494581129006735086/locations/13195921940790549583/questions/AIe9_BF8X4EpR_fF6mwcYdso9awgNBXZYS-R4EHEW06LmxMr91KSWl_9vqMChjmP_lpnINp1kxXgkp5abmOdyb03He-ESr6SJkSiDuR9p25gq0NZ3dwvC7bgj0LUTqKnjuhhBXVth9ys/answers' === $url && 'GET' === $method) {
            return ResponseFactory::makeQuestionListResponse($method, $url, $options);
        }
    }

    public function stream($responses, float $timeout = null): ResponseStreamInterface
    {
        // TODO: Implement stream() method.
    }

    public function __call(string $name, array $arguments)
    {
        // TODO: Implement @method  withOptions(array $options)
    }
}