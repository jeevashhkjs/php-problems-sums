<?php

$summed =[];
$column=0;
$columntotal=[0,0,0];
$sum=0;
for ($i=1;$i<=3;$i++)
{
    for ($j=1;$j<=3;$j++)
    {
        if ($i == 1)
        {
            echo " ". $j*3;
            $sum+=$j*3;
            $columntotal[$j-1]+= $j*3;

        }

        if ($i ==2)
        {
            echo" ". $j*5;
            $sum+= $j*5;
            $columntotal[$j-1]+= $j*5;


        }
        if ($i ==3)
        {
            echo" ". $j*10;
            $sum+= $j*10;
            $columntotal[$j-1]+= $j*10;

        }


    }
    $summed[]=$sum;
    $sum=0;
    echo "\n";

}
echo "The Summed of all rows:",print_r($summed);
echo "The Summed of all Column:",print_r($columntotal);


/** Diagonal problem*/
$left_diagonal_sum=0;
for ($i=1;$i<=3;$i++)
{
    for ($j=1;$j<=3;$j++)
    {
        if ($i!=$j)
        {
            echo "  ";
        }
        else
        {
            if ($i ==1)
            {
                echo $j*3;
                $left_diagonal_sum+=$j*3;
            }

            if ($i ==2)
            {
                echo $j*5;
                $left_diagonal_sum+=$j*5;

            }

            if ($i ==3)
            {
                echo $j*10;
                $left_diagonal_sum+=$j*10;

            }
        }

    }
    echo "\n";
}

echo "Left Diagonal Total Sum: $left_diagonal_sum"."\n";

$right_diagonal_sum=0;
for ($i=1;$i<=3;$i++)
{
    for ($j=1;$j<=3;$j++)
    {

        if ($i == 1 && $j == 3)
        {
            $right_diagonal_sum+=$j*3;
            echo  $j*3;
        }
        if ($i == 2 && $j == 2)
        {
            echo  $j*5;
            $right_diagonal_sum+=$j*5;

        }
        if ($i == 3 && $j == 1)
        {
            echo  $j*10;
            $right_diagonal_sum+=$j*10;

        }
        else
        {
            echo " ";
        }

    }
    echo "\n";
}

echo "Right Diagonal Total Sum: $right_diagonal_sum"."\n";