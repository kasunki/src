<?php 
        $title = "Exercise 4: Control flow and loops"; 
              
        include 'header.php' ?>

        <h3> 2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age,
             decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input). </h3>


        <form method="post" name="eligibility_for_voting" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
        age: <input type="number" name="userAge" placeholder="Enter age here" required> <br> <br>
        <button type="submit" class="btn btn-danger">Submit</button><br><br>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["userAge"])) {
            $age =$_POST["userAge"];

        if ($age >=18){
            echo "You are eligible for voting.";
        }
        else {
            echo "You are not eligible for voting.";
        }
       }
    }
        ?>
        <br><br>

        <h3>3. Write a PHP script that gets the current month and prints one of the following responses,depending on whether it's August or not:</h3>

        <?php
        $currentMonth = date("F");

        switch($currentMonth) {
            case "August":
                echo "It's August, so it's still holiday.";
                break;
                default:
                echo "Not August, this is $currentMonth so I don't have any holidays.";
        }
        ?>
        <br><br>

        <h3>4. For Loop: Write a PHP script that will print the multiplication table of a number 
            (n, use form to get user input).</h3><br>

        <form method="post" name="multiplication_table" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
        number: <input type="number" name="number" placeholder="Enter a number" required> <br> <br>
        <input type="submit" class="btn btn-danger" value="Generate Table"><br><br>
        
        </form>


        <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST["number"])) {
            $number = $_POST["number"];

            if (is_numeric($number) && $number > 0) {
                echo "Multiplication Table";
                echo "<table border='1'>";
                for ($i = 1; $i <= 12; $i++) {
                    $result = $number * $i;
                    echo 
                    "<tr>
                    <td>$number x $i</td>
                    <td>=</td><td>$result</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "please enter a valid number.";
        }
    }
}
       ?>
       <br><br>

       <h3> 5. While Loop: Write a PHP script that will print all the numbers from 1 to n. 
       (use form to get user input)</h3><br>

       <form method="post" name="multiplication_table" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
        number: <input type="number" name="number1" placeholder="Enter a number" required> <br> <br>
        <input type="submit" class="btn btn-danger" value="submit"><br><br>
        
       </form>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST["number1"])) {
            $number1 = $_POST["number1"];

            if (is_numeric($number1) && $number1 > 0) {
                echo "<ul>";

           $i = 1; 
           while ($i <= $number1) {
                    echo "<li>$i</li>";
                    $i++;
           }

           echo "</ul>";
        } else {
            echo "Enter a valid number";
        }
    }
}
   ?>
     <br><br>
     <h3>6. Foreach Loop: Write a PHP script that will print all the elements of an array. 
         $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3> <br>

         <?php
         $myarray= array("HTML", "CSS", "PHP", "JavaScript");
         foreach ($myarray as $value) {
            echo "".$value."<br>"; 
        }
        ?>


<?php include 'footer.php'; ?>

