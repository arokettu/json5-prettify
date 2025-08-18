#!/usr/bin/env php
<?php

use Arokettu\Json5\Json5Encoder;

require __DIR__ . '/../vendor/autoload.php';

Json5Encoder::encodeToStream(STDOUT, json5_decode(stream_get_contents(STDIN)));
