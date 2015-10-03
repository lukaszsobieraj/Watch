<?php

/**
 * Simple stopper in a skeleton form.
 */
class Timer {

    protected $startTime;
    protected $stopTime;

    public function start() {
        $start = $this->startTime = microtime(true);
        return intval($start);
    }

    public function stop($start) {
        $stop = $this->stopTime = microtime(true);
        $delta = (intval($stop)) - $start;
        return $delta;
    }

}
