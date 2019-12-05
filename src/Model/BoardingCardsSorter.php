<?php
namespace App\Model\Manager;

use App\Controller\CardsController;
require_once "src/Controller/CardsController.php";

class BoardingCardsSorter
{
    //
    public function sortMiddleBoarding($converted)
    {
        //var_dump($converted);die;
        for ($i=0, $max = count($converted) -1 ; $i < $max ; $i++) {
            // Foreach trip we test for the arrival city and the departure city
            foreach ($converted as $idx => $trip) {
                //echo $cards[$i]['arrival'];
                //echo $trip['departure'];
                if (strcasecmp($converted[$i]['arrival'], $trip['departure']) == 0) {
                    $nextIdx = $i + 1;
                    $tempBoarding = $converted[$nextIdx];
                    $converted[$nextIdx] = $trip;
                    $converted[$idx] = $tempBoarding;
                    
                    return $converted;
                    //var_dump($converted[$nextIdx], $converted[$idx]);die;
                }
            }
        }
    }

    public function setFirstAndLastBoarding($converted)
    {
        $isLastBoarding = true;
        $hasPrevBoarding = false;
        for ($i=0, $max = count($converted); $i < $max ; $i++) {
            // Foreach trip we test for the arrival city and the departure city
            foreach ($converted as $trip) {
                // If current trip's departure is another trip arrivel, then we have a previous trip
                if (strcasecmp($converted[$i]['departure'], $trip['arrival']) == 0) {
                    $hasPrevBoarding = true;
                }
                // If current trip's arrival is another trip departure, then it is not the last trip
                elseif (strcasecmp($converted[$i]['arrival'], $trip['departure']) == 0) {
                    $isLastBoarding = false;
                }
            }
            // Assign the last and the first trip
            if (!$hasPrevBoarding) {
                // It is the first trip so we put it on the top
                array_unshift($converted, $converted[$i]);
                unset($converted[$i]);
            } elseif ($isLastBoarding) {
                // It is the last trip so we put it at the bottom
                array_push($converted, $converted[$i]);
                unset($converted[$i]);
            }
        }
        return $converted;
        //echo json_encode($converted);
    }
    }

