<?php

class sessionMangerAll{

    public function __contractor(){

    }
    // strat the session
    public function start_session(){
        session_start();
    }
    // destroy the session
    public function destroy_Session(){
        if (session_status() == PHP_SESSION_ACTIVE) {
        session_destroy();
        }
        
    }
}

?>