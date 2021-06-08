<?php

declare(strict_types=1);


namespace GoogleMyBusinessMock;


use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * Class ResponseFactory
 * @package GoogleMyBusinessMock
 */
class ResponseFactory
{
    public static function makeAccountListResponse(
        string $method,
        string $url,
        array $options
    ): ResponseInterface {
    }

    public static function makeLocationListResponse(
        string $method,
        string $url,
        array $options
    ): ResponseInterface {
        return MockResponse::fromRequest(
            $method,
            $url,
            $options,
            new MockResponse(
                file_get_contents(__DIR__ . '/mock/location_list_response.json')
            )
        );
    }

    public static function makeReviewListResponse(
        string $method,
        string $url,
        array $options
    ): ResponseInterface {
        return MockResponse::fromRequest(
            $method,
            $url,
            $options,
            new MockResponse(
                file_get_contents(__DIR__ . '/mock/review_list_response.json')
            )
        );
    }

    public static function makeReviewDetailResponse(
        string $method,
        string $url,
        array $options
    ): ResponseInterface {
        return MockResponse::fromRequest(
            $method,
            $url,
            $options,
            new MockResponse(
                file_get_contents(__DIR__ . '/mock/review_detail_response.json')
            )
        );
    }

    public static function makePostListResponse(
        string $method,
        string $url,
        array $options
    ): ResponseInterface {
    }

    public static function makeQuestionListResponse(
        string $method,
        string $url,
        array $options
    ): ResponseInterface {
        return MockResponse::fromRequest(
            $method,
            $url,
            $options,
            new MockResponse(
                file_get_contents(__DIR__ . '/mock/question_list_response.json')
            )
        );
    }

    public static function makeAnswerListResponse(
        string $method,
        string $url,
        array $options
    ): ResponseInterface {
    }
}