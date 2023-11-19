<?php

require_once 'ToyRobot.php';

function testScenarioOne()
{
    $robot = new ToyRobot();
    $robot->placeRobot(0, 0, 'NORTH');
    $robot->moveRobot();
    $result = $robot->report(); 
    
    echo ($result === '0,1,NORTH') ? "Test 1: Pass\n" : "Test 1: Fail\n";
}

function testScenarioTwo()
{
    $robot = new ToyRobot();
    $robot->placeRobot(0, 0, 'NORTH');
    $robot->leftTurnRobot();
    $result = $robot->report(); 
    
    echo ($result === '0,0,WEST') ? "Test 2: Pass\n" : "Test 2: Fail\n";
}

function testScenarioThree()
{
    $robot = new ToyRobot();
    $robot->placeRobot(1, 2, 'EAST');
    $robot->moveRobot();
    $robot->moveRobot();
    $robot->leftTurnRobot();
    $robot->moveRobot();;
    $result = $robot->report();
   
    echo ($result === '3,3,NORTH') ? "Test 3: Pass\n" : "Test 3: Fail\n";
}

function testScenarioFourFail()
{
    
    $robot = new ToyRobot();
    $robot->moveRobot();
    $robot->moveRobot();
    $robot->leftTurnRobot();
    $robot->moveRobot();;
    $result = $robot->report();

    echo ($result === "No Report Avaliable. Robot is not placed on the table.") ? "Test 4: Pass\n" : "Test 4: Fail\n";
}

function testScenarioFiveFails()
{
    $robot = new ToyRobot();
    $robot->placeRobot(4, 4, 'NORTH');
    $result = $robot->moveRobot();

    echo ($result === 'Silly Robot..... You Are Going To Fall.') ? "Test 5: Pass\n" : "Test 5: Fail\n";
}    


testScenarioOne();
testScenarioTwo();
testScenarioThree();
testScenarioFourFail();
testScenarioFiveFails();
