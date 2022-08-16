<body>
    <!-- Create an html form to get the user's firstname, lastname, country of origing using the POST method. Then display the information on a table. -->
    <!-- If any of the fields where empty show "All fields should be filled" in a H2 tag with red color. -->
    <!-- If the form has not yet been submitted, display "Welcome to My Page" in a H1 tag. -->

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="firstN" placeholder="Write your first name" />
        <input type="text" name="lastN" placeholder="Write your last name" />
        <!-- <input type="text" name="country" placeholder="Write your country" /> -->
        <select name="country">
            <option value="">Select a country</option>
            <option>Canada</option>
            <option>USA</option>
            <option>UK</option>
            <option>Japan</option>
            <option>Korea</option>
            <option>Taiwan</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    
    <?php
        // if($_SERVER['REQUEST_METHOD'] == "POST"){
        //     $firstN = $_POST["firstN"];
        //     $lastN = $_POST["lastN"];
        //     $country = $_POST["country"];
        //     if($firstN != "" && $lastN != "" && $country != ""){
        //         echo "<table>
        //                 <thead>
        //                     <tr>
        //                         <th>First Name</th>
        //                         <th>Last Name</th>
        //                         <th>Country</th>
        //                     </tr>
        //                 </thead>
        //                 <tbody>
        //                     <tr>
        //                         <td>$firstN</td>
        //                         <td>$lastN</td>
        //                         <td>$country</td>
        //                     </tr>
        //                 </tbody>
        //             </table>";
        //     }else{
        //         echo "<h2 style='color: red;'>All fields should be filled</h2>";           
        //     }
        // }
        // elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
        //     echo "<h1>Welcome to My Page</h1>";
        // }

        // use switch
        switch($_SERVER['REQUEST_METHOD']){
            case "GET":
                echo "<h1>Welcome to My Page</h1>";
            break;
            case "POST":
                $firstN = $_POST["firstN"];
                $lastN = $_POST["lastN"];
                $country = $_POST["country"];
                if($firstN != "" && $lastN != "" && $country != ""){
                    echo "<table>
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$firstN</td>
                                    <td>$lastN</td>
                                    <td>$country</td>
                                </tr>
                            </tbody>
                        </table>";
                }else{
                    echo "<h2 style='color: red;'>All fields should be filled</h2>";           
                }
        }

    ?>
</body>
</html>