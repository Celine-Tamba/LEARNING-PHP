<?php

class Calculator{
    public int $num1;
    public int  $num2;

    public function __construct(int $num1, int $num2){
        $this->num1= $num1;
        $this->num2= $num2;
    }
    public function calculate(string $operator){
        switch ($operator) {
            case '+':
                return $this->num1 + $this->num2;
                
            case '-':
                return $this->num1 - $this->num2;
                
            case '/':
                try {
                    
                } catch (Exception $e) {
                    
                }
                return $this->num1 / $this->num2;
                
            case '*':
                return $this->num1 * $this->num2;
                
            

            
            
        };
    }

};

$cal = new Calculator(3,4);
$result = $cal->calculate('/');
echo $result;

echo __DIR__;




?>



