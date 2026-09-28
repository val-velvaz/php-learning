
<?php
    // We can incorporate more complex code using functions
    $lucky_number = 5 * 2 - 1;

    echo "<h1>Your lucky number is ${lucky_number}</h1>";
?>


<?php
    // my first function
    function makeHeaderGreeting($name) {
        return "<h1>Hello, &{name}!</h1>";
    }

    echo makeHeaderGreeting("World");
?>
