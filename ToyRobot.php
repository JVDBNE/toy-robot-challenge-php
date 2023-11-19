<?php

    class ToyRobot 
    {
        private $x;
        private $y;
        private $facing;
        private $directions = ['NORTH', 'EAST', 'SOUTH', 'WEST'];

        public const TABLE_WIDTH = 5;
        public const TABLE_HEIGHT = 5;

        public const NOT_PLACED = -1;
        
        public function __construct() {
            // Within the constructor, the robot has not been placed on the table yet.
            $this->x = self::NOT_PLACED; 
            $this->y = self::NOT_PLACED;
            $this->facing = '';
        }

        public function placeRobot($x, $y, $facing) {
            if ($this->isValidPosition($x, $y) && in_array($facing, $this->directions)) {
                $this->x = $x;
                $this->y = $y;
                $this->facing = $facing;
            }
        }

        public function moveRobot() {
        if (!$this->isPlaced()) {
            return "Invalid Move. The Robot is not placed on the table.";
        } else {
            $newX = $this->x;
            $newY = $this->y;

            switch ($this->facing) {
                case 'NORTH':
                    $newY++;
                    break;
                case 'EAST':
                    $newX++;
                    break;
                case 'SOUTH':
                    $newY--;
                    break;
                case 'WEST':
                    $newX--;
                    break;
        }

        if (!$this->isValidPosition($newX, $newY)) {
            return "Silly Robot..... You Are Going To Fall.";
        } else {
            $this->x = $newX;
            $this->y = $newY;
        }
    }
}

        public function leftTurnRobot() {
            // turns the direction the robot is facing 90 degrees left.
            if (!$this->isPlaced()) {
                return "Invalid Turn. Robot is not placed on the table.";
            } else {
                $currentDirection = array_search($this->facing, $this->directions);
                $newDirection = ($currentDirection + 3) % 4;
                $this->facing = $this->directions[$newDirection];
            }
        }

        public function rightTurnRobot() {
            // turns the direction the robot is facing 90 degrees right.
            if (!$this->isPlaced()) {
                return "Invalid Turn. Robot is not placed on the table.";
            } else {
                $currentDirection = array_search($this->facing, $this->directions);
                $newDirection = ($currentDirection + 1) % 4;
                $this->facing = $this->directions[$newDirection];
            }
        }

        public function report() {
            //  Output of where robot is sitting on the table when called.
            if (!$this->isPlaced()) {
                return "No Report Avaliable. Robot is not placed on the table.";
            } else {
                return "{$this->x},{$this->y},{$this->facing}";
            }
        }

        private function isValidPosition($x, $y) {
            // Checks if x & y are within the table width (less than 4 but greater than 0)
            return $x >= 0 && $x < self::TABLE_WIDTH && $y >= 0 && $y < self::TABLE_HEIGHT;
        }

        private function isPlaced() {
            // Checks if the robot has been placed on the table. Coordinates will be between 0-4)
            return $this->x !== self::NOT_PLACED && $this->y !== self::NOT_PLACED;
        }
    }
