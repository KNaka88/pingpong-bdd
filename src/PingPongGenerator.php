<?php

    class PingPongGenerator
    {
        function generatePingPongArray($number)
        {
            if(!is_int($number)){
                return "non integer number entered";
            } else {
                $results = array();
                for($i = 1; $i <= $number; $i++) {

                    switch ($number) {
                        case ($i % 3 == 0 && $i % 15 != 0):
                            array_push($results, "Ping" );
                            break;
                        case ($i % 5 == 0 && $i % 15 != 0):
                            array_push($results, "Pong" );
                            break;
                        case ($i % 15 == 0):
                            array_push($results, "PingPong" );
                            break;
                        default:
                            array_push($results, $i);
                    }
                }
                return $results;
            }
        }
    }
