<?php
// Calculator
$operator = '*';
$num1 = 3;
$num2 = 4;
switch ($operator) 
{
    case '+':
        print $num1 + $num2;
        break;
    case '-':
        print $num1 - $num2;
        break;
    case '*':
        print $num1 * $num2;
        break;
    case '/':
        print $num1 / $num2;
        break;
    default:
        print 'Operation is not defined';
        break;
}