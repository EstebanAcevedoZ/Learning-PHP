<?php
// basic use of switch
$motor = 5;
switch ($motor) 
{
    case 1:
        print 'No defined';
        break;
    case 2:
        print 'Water';
        break;
    case 3:
        print 'Gas';
        break;
    case 4:
        print 'Concrete';
        break;
    default:
        print 'Not found';
        break;
}