<?php

namespace App;

class Functions
{
    public static function nearest($array, $pos){
        $arraymin;
        $min = 99999999;
        $coord = array();
        $tmp;
        foreach ($array as $row){
            $val = sqrt(pow($row['x'] - $pos['x'], 2) + pow($row['y'] - $pos['y'], 2));
            if ($val < $min){
                $min = $val;
                $coord['x'] = $row['x'];
                $coord['y'] = $row['y'];
                $tmp=$row;
                
            } 
        }
        
        return $tmp;
    }
    
    
    
    
    
    public static function average_point($array){
        
        
        $arrayx = array();
        $arrayy = array();
        
        $j = 0;
        $k = 0;	
        
        echo $k;
        foreach ($array as $xar){
            $arrayx[$j] = $xar['x'];
            $j++;
        }
            foreach ($array as $yar){
            $arrayy[$k] = $yar['y'];
            $k++;
        }
        $minx = min($arrayx);
        $maxx = max($arrayx);
        $miny = min($arrayy);
        $maxy = max($arrayy);
        $pointx = ($minx + $maxx) / 2;
        $pointy = ($miny + $maxy) / 2;
        
        $arraydist;
        $i = 0;
        foreach ($array as $aaa){	
            $arraydist[$i] = sqrt(pow($pointx - $aaa['x'], 2) + pow($pointy - $aaa['y'], 2));
            $i++;
        }
        $radius = array_sum($arraydist)/count($arraydist);
        $arrayres = array('x' => $pointx, 'y' => $pointy, 'z' => $radius);
        return $arrayres;
    }
    
}
