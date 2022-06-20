<?php

namespace AliSoleimani;

class NSFW
{
    
    protected function exec($file,$output = 'output.txt')
    {
        shell_exec("python ".__DIR__."/python/nude.py $file $output");
        return $this->getOutput($output);
    }

    protected function getOutput($output)
    {
        $data =  json_decode(str_replace("'",'"',file_get_contents($output)),true);
    
        foreach($data as $value)
            return $value;
    }

    public static function predict($file)
    {
        $instance = new self();
        return $instance->exec($file);
    }

    public static function detect($file, $sensitivity = 1.00)
    {
        $data = self::predict($file);
        $sum = 0;
        foreach($data as $term => $item)
        {
            
            $sum += $item * self::getCoefficient($term);
            echo $item.PHP_EOL;
        }
        echo "SUM: ".$sum .PHP_EOL;
        return $sum >= $sensitivity;
    }

    protected static function getCoefficient($term)
    {
        return ['drawings' => 1,'hentai' => 1,'neutral' => 0.5,'porn' => 1.1,'sexy' => 1.1][$term];
    }
}