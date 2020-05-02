<?php
namespace DanAbrey\RookiesApi;

class Player
{
    /** @var string */
    public $slug;

    /** @var string */
    public $name;

    /** @var array|PlayerSeason[] */
    public $seasons;

    /** @var NflTeam|null */
    public $draft_team;

    /** @var integer|null */
    public $draft_round;

    /** @var integer|null */
    public $draft_round_pick;

    /** @var string */
    public $class_readable;

    /** @var string */
    public $position_readable;

    public $height_feet;
    public $height_inches;
    public $height_readable;
    public $weight_readable;
    public $age;
    public $age_at_draft;
    public $draft_year;
    public $breakout_age;
    public $receptions_breakout_age;
    public $forty_yard_dash;
    public $bench;
    public $vert;
    public $broad;
    public $three_cone;
    public $shuttle_20;
    public $shuttle_60;
    public $speed_score;
    public $speed_score_height_adjusted;
    public $agility_score;
    public $hand_size;
    public $arm_length;
    public $wingspan;
    public $date_of_birth;
}
