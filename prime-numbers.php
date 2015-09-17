<?php
if (isset($_POST['submit'])) {
	if (isset($_POST['count']) && isset($_POST['max'])) {
        $count = filter_var(trim($_POST['count']), FILTER_VALIDATE_INT);
        $max = filter_var(trim($_POST['max']), FILTER_VALIDATE_INT);
    
        if ($count && $max && $count > 0 && $max > 1) {
            $primes = array();
            $primesCount = 0;
            
            while($primesCount < $count) {
                $number = mt_rand(2, $max);
                
                if (isset($primes[$number])) {
                    $primes[$number]++;
                    $primesCount++;
                    
                } elseif (isPrime($number)) {
                    $primes[$number] = 1;
                    $primesCount++;
                }
            }
            
            arsort($primes);
        } else {
            $errorMessage = 'Невалидни данни!';
        }
    } else {
        $errorMessage = 'Невалидни данни!';
    }
}
    

function isPrime($number) {
    $isNumberPrime = true;
    $sqrtNum = sqrt($number);

    for ($i = 2; $i <= $sqrtNum; $i++) {
        if ($number % $i == 0) {
            $isNumberPrime = false;
            break;
        }
    }

    return $isNumberPrime;
}
