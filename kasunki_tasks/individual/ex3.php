<?php
    $title = "Exercise 3: Variable, Strings & Operators"; 
    include 'header.php'; ?>

    <h3>2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. 
        Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h3>

        <form method="post" name="user_reg_form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
        First name: <input type="text" name="fname" placeholder="Enter first name here" required> <br> <br>
        Last name: <input type="text" name="lname" placeholder="Enter last name here" required> <br> <br>
        <button type="submit" class="btn btn-danger">Submit</button><br><br>
        </form>

        <?php
        //processing form in the same page

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname =$_POST["fname"];
            $lastname =$_POST["lname"];
            echo "<h3>Hello ".$firstname." ".$lastname.",<br> You are welcome to my site.</h3>";
        }
        ?>
        <br><br>
        
    <h3>4. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. 
        If you wish, you can use the same table.</h3>

        <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
        ?>
        
    <table class="table table-hover">  
        <tr>
            <th>S.n.</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>   
        <tr>
            <td>1</td>
            <td>John</td>
            <td><?php echo $g1 ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td><?php echo $g2 ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bob</td>
            <td><?php echo $g3 ?></td>
        </tr>
    </table>
    <br><br>

    <h3>5. String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
        Join them together and print the length of the string.</h3>

        <?php
        $str1 = "Hello";
        $str2 = "World";
        $str3 = $str1 . " " . $str2;
        echo $str3 ."<br>";
        echo "The length of the string is: " . strlen($str3);
        ?>
         <br><br>

    <h3> 6. Number Addition: Write a script to add up the numbers: 298, 234, 46. 
         Use variables to store these numbers and an echo statement to output your answer.</h3>
 
         <?php
        $n1 = 298;
        $n2 = 234;
        $n3 = 46;
        $total = $n1+$n2+$n3;
        echo "The total of these numbers are: " .$total;
        ?>
     <br><br>

    <h3>7. Browser Detection: Write a PHP script to detect the browser being used to view your pages. 
        Hint: Use predefined variables: $_SERVER </h3>

       <?php     
       echo $_SERVER['HTTP_USER_AGENT'];
       echo "<br>";
       ?>
     <br><br>



<?php include 'footer.php'; ?>