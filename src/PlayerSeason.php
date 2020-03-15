<?php
namespace DanAbrey\RookiesApi;

class PlayerSeason
{
    public $season;
    public $college_id;
    /** @var College */
    public $college;
    public $games_played;
    public $rushing_attempts;
    public $rushing_yards;
    public $rushing_touchdowns;
    public $receptions;
    public $receiving_yards;
    public $receiving_touchdowns;
    public $punt_returns;
    public $punt_return_yards;
    public $punt_return_touchdowns;
    public $punt_return_long;
    public $kickoff_returns;
    public $kickoff_return_yards;
    public $kickoff_return_long;
    public $fumbles;
    public $fumbles_lost;
    public $passing_attempts;
    public $passing_completions;
    public $passing_yards;
    public $passing_interceptions;
    public $passing_touchdowns;
    public $sacked;
    public $passer_rating;

    public $receiving_market_share;
    public $receptions_receiving_market_share;
    public $rushing_market_share;
    public $college_dominator_rating;
    public $receptions_college_dominator_rating;
}
