<?
function checkPrime($number)
{
    if ($number == 2)
        return true;
    if ($number % 2 == 0)
        return false;
    $i = 3;
    $max_factor = (int)sqrt($number);
    while ($i <= $max_factor){
        if ($number % $i == 0)
            return false;
        $i += 2;
    }
    return true;
}

function getMaxNumber($maxNumber)
{
    $primes = [];
    for ($i = 3; $i <= $maxNumber; $i++){
        if (checkPrime($i))
            $primes[] = $i;
    }
    return $primes;
}

$newArrayPrimes = getMaxNumber(100);
foreach ($newArrayPrimes as $indexOfNumber => $valueArray) {
    $indexValue = $indexOfNumber + 1;
    echo "$valueArray - это простое число №$indexValue<br/>";
}
?>