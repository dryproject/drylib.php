<?php
/* This is free and unencumbered software released into the public domain. */

declare(strict_types=1);

namespace dry;

if (version_compare(phpversion(), '7.0', '<')) {
  die("DRYlib for PHP requires PHP 7.0+\n");
}

if (PHP_INT_SIZE < 8) {
  die("DRYlib for PHP requires a 64-bit PHP runtime (CFLAGS='-m64').\n");
}
