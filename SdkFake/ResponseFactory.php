<?php

declare(strict_types=1);


namespace App\SdkFake;


use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

class ResponseFactory
{
    public static function makeAccountListResponse(): ResponseInterface
    {
    }

    public static function makeLocationListResponse(): ResponseInterface
    {
        $data = file_get_contents(__DIR__ . '/mock/location_list_response.json');

        return new Response(200, [], $data);
    }

    public static function makeReviewListResponse(): ResponseInterface
    {
        $data = file_get_contents(__DIR__ . '/mock/review_list_response.json');

        return new Response(200, [], $data);
    }

    public static function makeReviewDetailResponse(): ResponseInterface
    {
        $data = file_get_contents(__DIR__ . '/mock/review_detail_response.json');

        return new Response(200, [], $data);
    }

    public static function makePostListResponse(): ResponseInterface
    {
    }

    public static function makeQuestionListResponse(): ResponseInterface
    {
        $data = file_get_contents(__DIR__ . '/mock/question_list_response.json');

        return new Response(200, [], $data);
    }

    public static function makeAnswerListResponse(): ResponseInterface
    {
    }
}