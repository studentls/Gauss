<?php
include_once('LinearSystem.php');
include_once('RationalNumber.php');
include_once('math.php');


// ALl tests in this file can be easily loaded via loadTestXYZ... and set the global vars
// A, b, R

function loadTest1()
{
    global $A;
    global $b;
    global $R;

    // note, here matrix has rk = 2!! => vector space as solution
    // Test matrix: 1 2 3  *  1  =  1
    //              4 5 6  *  3  =  7
    //              7 8 9  * -2  =  13

    $A[0][0] = new RationalNumber(1); // first column
    $A[0][1] = new RationalNumber(4);
    $A[0][2] = new RationalNumber(7);

    // second column zero
    $A[1][0] = new RationalNumber(2); // second column
    $A[1][1] = new RationalNumber(5);
    $A[1][2] = new RationalNumber(8);

    // third column zero
    $A[2][0] = new RationalNumber(3); // third column
    $A[2][1] = new RationalNumber(6);
    $A[2][2] = new RationalNumber(9);

    // b
    $b[0] = new RationalNumber(1);
    $b[1] = new RationalNumber(7);
    $b[2] = new RationalNumber(13);

    $R[0][0] = new RationalNumber(1); // first column
    $R[0][1] = new RationalNumber(7);
    $R[0][2] = new RationalNumber(13);

    // second column zero
    $R[1][0] = new RationalNumber(0); // second column
    $R[1][1] = new RationalNumber(0);
    $R[1][2] = new RationalNumber(0);

    // third column zero
    $R[2][0] = new RationalNumber(0); // third column
    $R[2][1] = new RationalNumber(0);
    $R[2][2] = new RationalNumber(0);

    // fourth column zero
    $R[3][0] = new RationalNumber(0); // fourth column
    $R[3][1] = new RationalNumber(0);
    $R[3][2] = new RationalNumber(0);
}


function loadTest2()
{
    global $A;
    global $b;
    global $R;

    // Test matrix: 1 2 3  *  1  =  4
    //              0 1 2  *  0  =  2
    //              0 1 1  *  1  =  1
    $A[0][0] = new RationalNumber(1); // first column
    $A[0][1] = new RationalNumber(0);
    $A[0][2] = new RationalNumber(0);

    // second column zero
    $A[1][0] = new RationalNumber(2); // second column
    $A[1][1] = new RationalNumber(1);
    $A[1][2] = new RationalNumber(1);

    // third column zero
    $A[2][0] = new RationalNumber(3); // third column
    $A[2][1] = new RationalNumber(2);
    $A[2][2] = new RationalNumber(1);

    // b
    $b[0] = new RationalNumber(4);
    $b[1] = new RationalNumber(2);
    $b[2] = new RationalNumber(1);

    $R[0][0] = new RationalNumber(1); // first column
    $R[0][1] = new RationalNumber(0);
    $R[0][2] = new RationalNumber(1);

    // second column zero
    $R[1][0] = new RationalNumber(0); // second column
    $R[1][1] = new RationalNumber(0);
    $R[1][2] = new RationalNumber(0);

    // third column zero
    $R[2][0] = new RationalNumber(0); // third column
    $R[2][1] = new RationalNumber(0);
    $R[2][2] = new RationalNumber(0);

    // fourth column zero
    $R[3][0] = new RationalNumber(0); // fourth column
    $R[3][1] = new RationalNumber(0);
    $R[3][2] = new RationalNumber(0);
}

function loadTest3()
{
    global $A;
    global $b;
    global $R;

    // 3rd test case, solution is R^3
    // Test matrix: 0 0 0 * (t)    = 0
    //              0 0 0 * (s)    = 0
    //              0 0 0 * (r)    = 0

    // <-> solution: R^3
    $A[0][0] = new RationalNumber(0); // first column
    $A[0][1] = new RationalNumber(0);
    $A[0][2] = new RationalNumber(0);

    // second column zero
    $A[1][0] = new RationalNumber(0); // second column
    $A[1][1] = new RationalNumber(0);
    $A[1][2] = new RationalNumber(0);

    // third column zero
    $A[2][0] = new RationalNumber(0); // third column
    $A[2][1] = new RationalNumber(0);
    $A[2][2] = new RationalNumber(0);

    // b
    $b[0] = new RationalNumber(0);
    $b[1] = new RationalNumber(0);
    $b[2] = new RationalNumber(0);

    $R[0][0] = new RationalNumber(0); // first column
    $R[0][1] = new RationalNumber(0);
    $R[0][2] = new RationalNumber(0);

    // second column zero
    $R[1][0] = new RationalNumber(0); // second column
    $R[1][1] = new RationalNumber(0);
    $R[1][2] = new RationalNumber(1);

    // third column zero
    $R[2][0] = new RationalNumber(0); // third column
    $R[2][1] = new RationalNumber(1);
    $R[2][2] = new RationalNumber(0);

    // fourth column zero
    $R[3][0] = new RationalNumber(1); // fourth column
    $R[3][1] = new RationalNumber(0);
    $R[3][2] = new RationalNumber(0);
}

// no solution
function loadTest4()
{
    global $A;
    global $b;
    global $R;

    // 3rd test case, solution is R^3
    // Test matrix: 0 0 0 * (t)    = 0
    //              0 0 0 * (s)    = 0
    //              0 0 0 * (r)    = 1

    // <-> solution: R^3
    $A[0][0] = new RationalNumber(0); // first column
    $A[0][1] = new RationalNumber(0);
    $A[0][2] = new RationalNumber(0);

    // second column zero
    $A[1][0] = new RationalNumber(0); // second column
    $A[1][1] = new RationalNumber(0);
    $A[1][2] = new RationalNumber(0);

    // third column zero
    $A[2][0] = new RationalNumber(0); // third column
    $A[2][1] = new RationalNumber(0);
    $A[2][2] = new RationalNumber(0);

    // b
    $b[0] = new RationalNumber(0);
    $b[1] = new RationalNumber(0);
    $b[2] = new RationalNumber(1);

    $R[0][0] = new RationalNumber(0); // first column
    $R[0][1] = new RationalNumber(0);
    $R[0][2] = new RationalNumber(0);

    // second column zero
    $R[1][0] = new RationalNumber(0); // second column
    $R[1][1] = new RationalNumber(0);
    $R[1][2] = new RationalNumber(1);

    // third column zero
    $R[2][0] = new RationalNumber(0); // third column
    $R[2][1] = new RationalNumber(1);
    $R[2][2] = new RationalNumber(0);

    // fourth column zero
    $R[3][0] = new RationalNumber(1); // fourth column
    $R[3][1] = new RationalNumber(0);
    $R[3][2] = new RationalNumber(0);
}
?>