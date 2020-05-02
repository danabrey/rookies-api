<?php
namespace DanAbrey\RookiesApi\Transformer;

use DanAbrey\RookiesApi\College;
use DanAbrey\RookiesApi\NflTeam;
use DanAbrey\RookiesApi\Player;
use DanAbrey\RookiesApi\PlayerSeason;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class PlayerTransformer
{
    /**
     * @var array
     */
    private $data;

    public function __construct(array $playerData)
    {
        $this->data = $playerData;
    }

    public function transform(): Player
    {
        $normalizers = [new ArrayDenormalizer(), new ObjectNormalizer()];
        $serializer = new Serializer($normalizers);
        /** @var Player $player */
        $player = $serializer->denormalize($this->data, Player::class);
        if ($player->draft_team) {
            $player->draft_team = $serializer->denormalize($player->draft_team, NflTeam::class);
        }
        foreach ($player->seasons as &$season) {
            $season = $serializer->denormalize($season, PlayerSeason::class);
        }
        return $player;
    }
}
