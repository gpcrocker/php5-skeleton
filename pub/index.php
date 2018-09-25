<?php

if (PHP_SAPI === 'cli-server') {
    throw new \Exception('Pub should be accessible by Web servers');
}
