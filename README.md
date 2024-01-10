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






Professional Feedback:

Firstly, I love that you're looking into SOLID principles. It's a hard thing to do and no one ever does it 100% correct, because there is no 100% correct way to implement it. It's a great thing to always keep in the back of your mind when developing. 

Be consistent with styling/formatting. Check out PSR-12. In your code you have curly braces on both new lines and the same lines (i.e. line 4 and 15). 

No docblocks on any methods or properties. Check out all the popular/professional/well adopted libraries and frameworks. They all docblock their code for good reason. It describes to the developer what the intent of the peice of code is, helps IDEs auto document and helps linters do their thing. 

Typehint everything that you can. PHP has come a very long way since the v5.X days. Typehint properties and method returns. This allows us, the developers, to know what to expect in a property just by looking at the typehinting. It also helps with all the things mentioned in the note above. 

Since you're in a class called ToyRobot, you can make your methods read a little easier and more fluently by removing the "Robot" part out of the name. So for example, you can change $robot->moveRobot() to $robot->move() and $robot->leftTurnRobot() to $robot->turnLeft(). 

You may have heard me, and others talk about enums. A great nomination for an enum in your code would be $directions. You could have a "Direction" enum that has the NORTH/SOUTH/EAST/WEST values. This allows you to typehint "Direction" whenever you're expecting a direction value. It also makes it clear what the $direction property is when you typehint it. 

private Direction $direction; 

It seems the way error handling is done is by returning a string in whatever method. How could you go about doing this differently? For example, if there was a method that would typically return a string (i.e. a person's name), how would the developer know if the method call was sucessful (i.e. was it the person's name that was returned or an error)? Hint: look up exceptions. 

I noticed you have to duplicate the "isPlaced" validation in all your "commands". A nice little thing to think about is how could you go about building this in a way where core validation (such as isPlaced) can only be written once. This would require a bit of refactoring so more of a thinking exercise. 

In ToyRobot::placeRobot(), if the validation fails, what happens? Looks like we continue without any knowledge of what has happened. 

Good use of private/public on your methods and properties. 

The actually logic looks fine on the surface. Nothing is overcomplicated :). Overall, a great attempt! You should be proud of how far you've come in a short amount of time. 
