Certainly! Here's a simple example of exception handling in PHP:

```php
<?php
// Custom exception class


class CustomException extends Exception {
    public function errorMessage() {
        // Error message
        return 'Error on line ' . $this->getLine() . ' in ' . $this->getFile() . ': <b>' . $this->getMessage() . '</b>';
    }
}

// Function that may throw an exception
function checkNum($number) {
    if ($number > 1) {
        throw new CustomException("Value must be 1 or below");
    }
    return true;
}

// Exception handling
try {
    // Test with a number greater than 1
    checkNum(2);
} catch (CustomException $e) {
    // Display custom error message
    echo $e->errorMessage();
} catch (Exception $e) {
    // Display general error message
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
```

### Explanation:

1. **Custom Exception Class**: The `CustomException` class extends the built-in `Exception` class and includes a method to format error messages.

2. **Function with Exception**: The `checkNum` function throws a `CustomException` if the input number is greater than 1.

3. **Try-Catch Block**: The `try` block executes code that may throw an exception. The `catch` block handles exceptions of type `CustomException` specifically, while another `catch` can handle general exceptions.

You can test this code by changing the argument passed to `checkNum`. If you provide a number greater than 1, it will trigger the custom exception.