<?php

use DanAbrey\RookiesApi\Transformer\PlayerTransformer;

class GetPlayerTest extends \PHPUnit\Framework\TestCase
{
    public function players()
    {
        return [
            [
                file_get_contents('./tests/fixtures/jerry-jeudy.json'),
                'jerry-jeudy',
                3,
                'Junior',
                'WR',
            ],
            [
                file_get_contents('./tests/fixtures/henry-ruggs.json'),
                'henry-ruggs',
                3,
                'Junior',
                'WR',
            ],
        ];
    }

    /**
     * @dataProvider players
     * @param $json
     * @param $expectedSlug
     * @param $expectedNumberOfSeasons
     * @param $expectedClass
     * @param $expectedPosition
     */
    public function test_can_denormalize_player($json, $expectedSlug, $expectedNumberOfSeasons, $expectedClass, $expectedPosition)
    {
        $data = json_decode($json, true)['data'];

        $transformer = new PlayerTransformer($data);
        $player = $transformer->transform();

        $this->assertEquals($expectedSlug, $player->slug);
        $this->assertCount($expectedNumberOfSeasons, $player->seasons);
        $this->assertEquals($expectedClass, $player->class_readable);
        $this->assertEquals($expectedPosition, $player->position_readable);

    }
}
