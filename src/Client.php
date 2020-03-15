<?php
namespace DanAbrey\RookiesApi;

use DanAbrey\RookiesApi\Exception\PlayerNotFoundException;
use DanAbrey\RookiesApi\Transformer\PlayerTransformer;

class Client
{
    private const API_BASE = 'https://rookies.danabrey.com/api';

    public function getPlayer(string $slug)
    {
        $json = file_get_contents(
            sprintf(
                '%s/player/%s',
                static::API_BASE,
                $slug
            )
        );

        $json = json_decode($json, true);

        if (!$json || $json['status'] !== 'success') {
            throw new PlayerNotFoundException();
        }

        $transformer = new PlayerTransformer($json['data']);
        return $transformer->transform();
    }
}
