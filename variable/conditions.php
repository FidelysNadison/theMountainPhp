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
                echo "$morning";
            }
            if($now >= "9" and $now <= "12"){
                echo "$daygood";
            }
            if($now >= "12" and $now <= "16"){
                echo "$afternoon";
            }
            if($now >= "16" and $now <= "21"){
                echo "$evenig ";
            }
            if($now >= "21" and $now < "5"){
                echo "$night";
            }
            


            // 3. "Different greetings according to age" Exercise
            $kiddo = 'Hello kiddo!';
            $teenager = 'Hello Teenager!';
            $adult ='Hello Adult!';
            $robot = 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';

            if (isset($_GET['age']){
                // Form processing
                if(){
                    echo "kiddo";
                }
                if(){
                    echo "teenager";
                }
                if(){
                    echo "adult";
                }
                if(){
                    echo "robot"
                }
            }
            // Form (incomplete)
        ?>
            <form method="get" action="">
                <label for="age">...</label>
                <input type="" name="age">
                <input type="submit" name="submit" value="Greet me now">
            </form>
    </body>
</html>