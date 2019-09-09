<?php


class ComparableShape implements Comparable
{
public function compareTo($objOne, $objTwo)
{
    $areaOne = $objOne->getArea();
    $areaTwo = $objTwo->getArea();

    if ($areaOne > $areaTwo) {
        return 1;
    } else if ($areaOne < $areaTwo) {
        return -1;
    }
    return 0;
}
}