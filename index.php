<?php
$a = 10;
$b = 5;
while (true)
{
    echo "\n МЕНЮ \n";
    echo "1. Ввести два числа\n";
    echo "2. Сложить\n";
    echo "3. Вычесть\n";
    echo "4. Разделить\n";
    echo "5. Возвести в степень\n";
    echo "6. Выйти\n";
    echo "Выберите: ";
    $answer = readline();
    if($answer == '1')
    {
        echo "Введите первое число: ";
        $a=readline("a = "); 
        echo "Введите второе число: ";
        $b=readline("b = ");
    }
    else if ($answer == '2')
    {
        echo "Сумма: " . $a + $b;
    }
    else if ($answer == '3')
    {
        echo "Разность: " . $a - $b;
    }
    else if ($answer == '4')
    {
         if ($b != 0)
        {
            echo "Деление: " . round($a / $b, 3);
        }
        else
        {
            echo "Нельзя делить на 0!";
        }
    }
    else if ($answer == '5')
    {
        echo "В какую степень возвести число? \n";
        $c=readline("c= ");
        echo "a^c: " . pow($a, $c) . "\n";
        echo "b^c: " . pow($b, $c) . "\n";
    }
    else if ($answer == '6')
    {
        exit;
    }
    else{
        
    }
}
?>