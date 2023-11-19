# toy-robot-challenge-php


Xplor Toy Robot Challenge

Reference Material: Toy Robot Challenge - Reference File https://github.com/myxplor/toy-robot-php

The toy robot challenge is a coding challenge that within my team, is provided to senior engineers during the recruitment phase. Ive come to learn there are a lot of publically assessible repos that candidates take a bunch of inspo from however the trick to this challenge is actually being able to understand and describe what you are implementing.

So... As a junior in this team, with one year under my belt I decided to give it a go as a measure to see where I was at. As a first attempt, I've attempted this challenge using PHP as my knowledge of PHP has increased to a "sort of readible doesnt make my seniors cry so much standard". Ive attempted keep SOLID principles in mind however Im still learning/navigating best practice here and their fundamental meanings in the real world outside of 'learn to code docs'.

My ToyRobot class is designed to handle distinct responsibilities related to the robot's movement, placement, and reporting, aligning well with the Single Responsibility Principle. This feels self explanatory and I have tried not to duplicate responsibility here. I made extreme use of comments in my code so that I fundamentally understood exactly what the role of each method was. This also made me realise I was missing a lot of early exit errors recently which I went back and added in.

The ToyRobot class continues to be open to extention rather than closed off and ive attempted to take this into consideration with more senior engineers telling tales of adding obstacles to the board, and triggering earthquakes and how these might come into play. Id like to think the class could be extended without altering any exisiting functionality.

I am also acutely aware that the entire project is one file (except for tests) and whilst I attempted to consider how I would seperate this I fell short here. I am eager to get some guidence here about how I may do this. perhaps abstracting the the movement or the board? At the moment, these feel like pie in the sky ideas to me that I know of, and use on a daily basis but have never completed myself.

Overall , this was a fun challenge and I suprised myself. I am really keen to complete this again in JS and design a fun interface to zip the robot around on. Id also love to extend this to take commands directly from a user in the terminal (old shareware game style) and provide the errors in real time. Its provided some great small wins, some vists to the php docs for gudiance and some sombering truth that there is still so many wonderful things to learn.

Skys the limit!
