<!-- <?php
echo "test"
?> -->


<!-- answer 1 -->
<?php
    $num = 300;
    if ( $num > 250) {
        echo 'Your Electricity bill is:'.$num*7.50.'/unit';

     }else if ($num >= 100 && $num <= 250) {
        echo 'Your Electricity bill is:'.$num*6.20.'/unit';

     }else if ($num > 50 && $num <= 99) {
        echo 'Your Electricity bill is:'.$num*5.00.'/unit';
        
     }else if ($num <= 50) {
        echo 'Your Electricity bill is:'.$num*2.50.'/unit';
     }
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 2 -->

<?php
$num1 = 5;
$num2 = 5;
$opar = '/';
if ($opar == '+'){
    echo "Addition: ";
    echo $num1 + $num2;
} elseif ($opar == '-') {
    echo "Addition: ";
    echo $num1 - $num2;
} elseif ($opar == '*') {
    echo "Addition: ";
    echo $num1 * $num2;
} elseif ($opar == '/') {
    echo "Addition: ";
    echo $num1 / $num2;
}
?>
<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 3 -->

<?php
function password_generate($chars){
    if ($chars >= 18 ) {
        return "person is eligible to vote";
    } else {
        return "person is not eligible to vote";
    }
}
echo password_generate(18);
?>

<!-- ************************************************** -->
<?php echo '<br>'?>
<!-- answer 4 -->

<?php
    $num = "a";
    if (is_integer($num)) {
        if ($num > 0) {
    
            echo 'The Number is Positive';
        }else if ($num < 0){
    
            echo 'The Number is Negative ';
        }else if ( $num == 0){
    
            echo 'The Number is Zero ';
        }
    }else {
        echo 'Please Enter the Number ';
    }
?>