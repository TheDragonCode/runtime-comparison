<?php

declare(strict_types=1);

namespace DragonCode\RuntimeComparison\Services;

class Runner
{
    public function call(callable $callback): float
    {
        $startAt = $this->time();

        $callback();

        return $this->diff($startAt);
    }

    protected function diff(float $startAt): float
    {
        return round($this->time() - $startAt, 4);
    }

    protected function time(): float
    {
        return microtime(true);
    }
}
