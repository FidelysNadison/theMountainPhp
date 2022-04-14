<html>
    <body>
        <?php   
            // 1.1 Clean your room Exercise 
            $room_is_filthy = true;

            if(!$room_is_filthy){
                echo "Yuk, Room is dirty : let's clean it up !";
                cleanup_room();
                echo "<br>Room is now clean!";
                $room_is_filthy = true;
            } else {
                echo "<br>Nothing to do, room is neat.";
            }

            // 1.2 Clean your room Exercise, improved
            // Create the array of possible states
            $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];
            // When testing, change the index value to navigate to the possible array values
            $room_filthiness = $possible_states[0]; 

            if($room_filthiness == $possible_states[0]){
                echo "Yuk, Room is Disgusting! Let's clean it up !";
            } else if($room_filthiness == $possible_states[3]){
                echo "Yuk, Room is dirty : let's clean it up !";  
            // ...
            } else {
                echo "<br>Nothing to do, room is neat.";
            }

        ?>

        <?php
            // 2. "Different greetings according to time" Exercise
            $now = date('H');
            echo "<br>" . date('h:i:sa');
            $morning = "Good morning";
            $daygood = "Good day";
            $afternoon = "Good afternoon!";
            $evenig = " Good evening";
            $night = "Good night";
            // Test the value of $now and display the right message according to the specifications.
            if($now >= "5" and $now <= "9" ){
                echo " $morning";
            }
            if($now >= "9" and $now <= "12"){
                echo " $daygood";
            }
            if($now >= "12" and $now <= "16"){
                echo " $afternoon";
            }
            if($now >= "16" and $now <= "21"){
                echo " $evenig ";
            }
            if($now >= "21" and $now < "5"){
                echo " $night";
            }
        ?>

        <?php    
            // 3. "Different greetings according to age" Exercise
            if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])){
                // Form processing
                if ($_GET['english'] == "yes") {
                    echo "<br>Hello ";
                } else {
                    echo "<br>Aloha ";
                }

                if($_GET['age'] < 12){
                    if($_GET['gender']  == "male")
                        echo "Mister Kiddo!";
                    if($_GET['gender'] == "female")    
                        echo "Miss Kiddo";
                }
                
                if($_GET['age'] > 12 and $_GET['age'] < 18 ){
                    if($_GET['gender'] == "male") 
                    echo "Mister Teenager!";   
                    if($_GET['gender'] == "female") 
                    echo "Miss Teenager!";
                }

                if($_GET['age'] > 18 and $_GET['age'] < 115){
                    if($_GET['gender'] == "male") 
                    echo "Mister Adult!";   
                    if($_GET['gender'] == "female") 
                    echo "Miss Adult!";
                }

                if($_GET['age'] > 18 and $_GET['age'] < 115){
                    if($_GET['gender'] == "male") 
                    echo "Wow Mister! Still alive ? Are you a robot, like me ? Can I hug you ?";
                    if($_GET['gender'] == "female") 
                    echo "Wow Miss! Still alive ? Are you a robot, like me ? Can I hug you ?";
                }
            }
            // Form (incomplete)
        ?>
        <form method="get" action="conditions.php">
                <!--For age-->
                <label for="gender">Quel âge avez-vous ?
                    <input type="number" name="age">
                    </br>
                </label>
                <!--For gender-->
                <label for="gender">Gender :   Male
                    <input type="radio" name= "gender" value = "male" checked>
                </label>
                <label for="gender">Female
                    <input type="radio" name= "gender" value = "female">
                </label>
                <!--For Language-->
                </br>
                <label for="gender"> Do you speak english?
                    <input type="radio" name = "english" values = "yes" >Yes
                </label>  
                <label for="gender">No
                    <input type="radio" name = "english" values = "no" checked >
                </label>
                <!--Btn Submit-->
                </br>
                <input type="submit" name="submit">
        </form>
    </body>
</html>