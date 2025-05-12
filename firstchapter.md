# Modern PHP Practice Exercises

This set of exercises covers each topic from your PHP learning path, focusing on modern PHP practices with strict
typing. Complete each exercise, then share your solution for feedback.

## 1. How to Choose a Programming Language

**Exercise 1.1:**
Create a PHP file named `info.php` that:

- Uses strict typing
- Outputs your PHP version
- Lists installed extensions
- Shows configuration information about your PHP environment
- Uses proper error handling

**Exercise 1.2:**
Create a simple PHP script that receives data via GET and POST, processes it, and returns JSON. Include handling for
different HTTP methods.

## 2. Tools of the Trade

**Exercise 2.1:**
Set up a modern PHP development environment:

- Install PHP 8.2+
- Set up Composer
- Configure a simple project with autoloading
- Add a code style checker like PHP_CodeSniffer
- Create a Hello World script that uses autoloaded classes

**Exercise 2.2:**
Write a simple PHPUnit test for a function that:

- Takes two numbers
- Returns their sum
- Includes type declarations and strict typing

## 3. Your First PHP Tag

**Exercise 3.1:**
Create a PHP file with:

- Proper opening/closing tags
- Strict type declaration
- A namespace declaration
- A simple class with at least one method
- Code that instantiates and uses the class

**Exercise 3.2:**
Create a PHP template file that:

- Uses short echo tags appropriately
- Contains HTML with embedded PHP
- Demonstrates proper PHP tag usage in templates
- Includes conditional statements within the template

## 4. Variables

**Exercise 4.1:**
Create a PHP script that demonstrates:

- All primitive data types with proper type declarations
- Type casting between different types
- Variable scope (global, local, static)
- Constants vs variables

**Exercise 4.2:**
Write functions that:

- Accept and return strictly typed parameters
- Use union types (PHP 8+)
- Use nullable types
- Use the mixed type (PHP 8+)
- Show correct error handling with type mismatches

## 5. Conditionals and Booleans

**Exercise 5.1:**
Create a user input validation system that checks:

- Email format
- Password strength (length, special chars, numbers, etc.)
- Username format
- Date validity
- Phone number format

Use modern comparison operators and error handling.

**Exercise 5.2:**
Write a script that uses PHP 8's match expression to:

- Process different input types differently
- Handle HTTP status codes
- Calculate shipping costs based on weight ranges
- Format output based on data types

## 6. Arrays

**Exercise 6.1:**
Write functions that:

- Transform arrays using array_map, array_filter, and array_reduce
- Sort a multi-dimensional array by multiple keys
- Extract specific data from nested arrays
- Flatten a multi-dimensional array
- Perform array intersection and difference operations

**Exercise 6.2:**
Create a script that demonstrates:

- Array destructuring
- Using the spread operator with arrays
- Named arguments with arrays
- Unpacking arrays into function arguments
- Array key existence checking with null coalescing

## 7. Associative Arrays

**Exercise 7.1:**
Create a data processing system that:

- Parses this CSV string into associative arrays:
  ```
  id,name,age,department,salary
  1,John Doe,35,Engineering,75000
  2,Jane Smith,42,Marketing,65000
  3,Bob Johnson,28,Engineering,55000
  4,Alice Brown,31,HR,45000
  5,Charlie Wilson,45,Management,120000
  ```
- Filters employees by department
- Finds the highest and lowest paid employees
- Calculates average salary by department
- Formats the data for display

**Exercise 7.2:**
Create a config management system that:

- Stores configuration in associative arrays
- Merges default and custom configurations
- Validates configuration values
- Provides a way to access nested configuration values
- Has a function to export configuration to different formats

## 8. Functions and Filters

**Exercise 8.1:**
Build a set of utility functions for:

- Input sanitization (HTML, SQL, etc.)
- Data validation (email, URL, etc.)
- Data formatting (dates, numbers, currency)
- Error handling

All functions should use strict typing and proper error handling.

**Exercise 8.2:**
Create a function that:

- Takes a multi-dimensional array of user data
- Filters out invalid users
- Transforms the data into a consistent format
- Sorts the users by multiple criteria
- Returns the processed data

## 9. Lambda Functions

**Exercise 9.1:**
Create examples of:

- Anonymous functions with use()
- Arrow functions (PHP 7.4+)
- Functions that return callbacks
- Using callables as arguments
- A simple event system using callbacks

**Exercise 9.2:**
Build a small query builder that uses lambda functions:

- To filter records
- To transform results
- To sort data
- To group results
- To perform calculations on data

## 10. Separate Logic From the Template

**Exercise 10.1:**
Create a simple MVC structure:

- A Model class for user data
- A Controller class with methods for user operations
- View templates for displaying user information
- A router that connects URLs to controller actions

**Exercise 10.2:**
Refactor this code to separate logic from presentation:

```php
<?php
// Bad practice example
$db = new PDO('mysql:host=localhost;dbname=test', 'user', 'pass');
$result = $db->query('SELECT * FROM products');
?>
<html>
<body>
    <h1>Product List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php while ($row = $result->fetch()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td>$<?php echo number_format($row['price'], 2); ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
```

## 11. Technical Check (Practice Exam)

**Exercise 11.1:**
Build a complete mini-application that:

- Uses strict typing throughout
- Has proper class structure with namespaces
- Implements proper error handling
- Separates logic from presentation
- Uses modern PHP features (PHP 8+)
- Processes user input securely
- Is well-documented with comments
- Uses autoloading

The application could be a simple task manager, contact form processor, or any other small but complete system.

## How to Submit Your Solutions

For each exercise:

1. Write your code with strict typing enabled
2. Test your code to make sure it works
3. Share your solution
4. I'll review your code and provide feedback

Remember to focus on:

- Using strict types everywhere
- Modern PHP syntax (PHP 8+)
- Clean, readable code
- Proper error handling
- Following best practices

Let me know when you've completed an exercise, and I'll help you refine your PHP skills!