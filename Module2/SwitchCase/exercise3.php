<?php
// Identifies nationality
$nationality  = 'Argentina';

switch ($nationality) 
{
    case 'Argentina':
        print 'The person is argentinian';
        break;
    case 'Italy':
        print 'The person is italian';
        break;
    case 'Colombia':
        print 'The person is colombian';
        break;
    case 'Germany':
        print 'The person is german';
        break;
    default:
        print 'Nationality is not defined';
        break;
}