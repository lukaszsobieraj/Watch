<?php

/**
 * Simple stopper in a skeleton form.
 */
class Timer {

    protected $startTime;
    protected $stopTime;

    public function start() {
        return $this->startTime = microtime(true);
    }

    public function stop($start) {
        $this->stopTime = microtime(true);
        $delta = $this->stopTime - $start;
        return $delta;
        
    }
    
    
    

}
