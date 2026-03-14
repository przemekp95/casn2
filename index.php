<?php

declare(strict_types=1);

// Shared-hosting compatibility layer: allow the repository root to act as the
// document root while delegating the real application bootstrap to public/.
require __DIR__.'/public/index.php';
