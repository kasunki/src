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
            $age =$_POST["userAge"];

        if ($age >=18){
            echo "You are eligible for voting.";
        }
        else {
            echo "You are not eligible for voting.";
        }
       }
        ?>

<?php include 'footer.php'; ?>

