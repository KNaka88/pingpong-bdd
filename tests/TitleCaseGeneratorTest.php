<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        //test1 : input a non integer number (float) error feedback
        //input-> 0.87 output-> Error "non integer number entered"

        function test_non_int()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator();
            $input = 0.87;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals("non integer number entered", $result);

        }

        //test2 : input an int number and program counts from 1 to that number
        //input->5 output-> 1.2.3.4.5
        function test_count()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator();
            $input = 5;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1, 2, 3, 4, 5], $result);

        }

        //test3 : input an int over 3 and program counts from 1 to that number and turns all numbers divisible by three into Ping
        //input->4 output-> 1.2.Ping.4
        function test_ping()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator();
            $input = 4;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1, 2, "Ping", 4], $result);
        }

        //test4 : input an int over 5 and program counts from 1 to that number and turns all numbers divisible by three into Ping and all numbers divisible by 5 into Pong
        //input->6 output-> 1.2.Ping.4.Pong.Ping
        function test_pong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator();
            $input = 6;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1, 2, "Ping", 4, "Pong", 6], $result);
        }

        //test 5 : input an int over 15 and program counts from 1 to that number and turns all numbers divisible by three into Ping and all number divisible by 5 into Pong and all numbers divisible by both 3 and 5 into PingPong
        //input->16 output-> 1.2.Ping.4.Pong.Ping.7.8.Ping.Pong.11.Ping.13.14.PingPong.16
        function test_pingpong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator();
            $input = 16;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals([1, 2, "Ping", 4, "Pong", "Ping", 7, 8, "Ping", "Pong", 11, "Ping", 13, 14, "PingPong", 16], $result);
        }


    }
