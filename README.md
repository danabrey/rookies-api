# Rookies API

Object-oriented PHP package for reading data from my rookies data API at https://rookies.abrey.dev.

[![Build Status](https://travis-ci.com/danabrey/rookies-api.svg?branch=master)](https://travis-ci.com/danabrey/rookies-api)

## Installation

Via Composer:

`composer require danabrey/rookies-api`

## Usage

Player data:

```$php
use DanAbrey\RookiesApi\Client;

$stats = new Client();
$player = $stats->getPlayer('jerry-jeudy');
```

The return from `getPlayer()` will be a `Player` object.

## Contributing/Contact

Please feel free to raise issues or open pull requests with suggestions on how to improve this project. For any informal questions, find me on Twitter at [@danabrey](https://www.twiter.com/danabrey).

## License

[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
- Copyright 2020 © Dan Abrey
