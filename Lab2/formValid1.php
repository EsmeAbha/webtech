<Html>
    <head>
        <title>Registration</title>

    </head>
    <body>
    <?php
    $isValid=[];
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["firstname"]))
        {
            $isValid["firstname"="Field is empty"];
        }

        if(empty($_POST["lastname"]))
        {
            $isValid["lastname"="Field is empty"];
        }
        if(empty($_POST["gender"]))
        {
            $isValid["gender"="Field is empty"];
        }
        if(empty($_POST["fathername"]))
        {
            $isValid["fathername"="Field is empty"];
        }
        if(empty($_POST["mothername"]))
        {
            $isValid["mothername"="Field is empty"];
        }
        if(empty($_POST["bloodgroup"]))
        {
            $isValid["bloodgroup"="Field is empty"];
        }
        if(empty($_POST["religion"]))
        {
            $isValid["religion"="Field is empty"];
        }

        if(empty($_POST["email"]))
        {
            $isValid["email"="Field is empty"];
        }
        if(empty($_POST["contactno"]))
        {
            $isValid["contactno"="Field is empty"];
        }
        if(empty($_POST["website"]))
        {
            $isValid["website"="Field is empty"];
        }

        if(empty($_POST["address"]))
        {
            $isValid["address"="Field is empty"];
        }
        if(empty($_POST["city"]))
        {
            $isValid["city"="Field is empty"];
        }
        if(empty($_POST["postcode"]))
        {
            $isValid["postcode"="Field is empty"];
        }

        if(empty($_POST["country"]))
        {
            $isValid["country"="Field is empty"];
        }
        if(empty($_POST["username"]))
        {
            $isValid["username"="Field is empty"];
        }
        if(empty($_POST["pass"]))
        {
            $isValid["pass"="Field is empty"];
        }
        if(empty($_POST["confirmpass"]))
        {
            $isValid["confirmpass"="Field is empty"];
        }

        if(empty($isValid))
        {
            header(Location:"FormValid.php");
        }
    }

    
    
    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" novalidate>
        <h1>Registration</h1>
        <table>
            <tr>
                <td>
                
                    <fieldset>
                        <legend> General Information:</legend>
                        <table>
                            <tr>
                                <td> First Name</td>
                                <td>:</td>
                                <td><input type="text" name="firstname" id="firstname" value=<?php= echo isset($_POST["firstname"])
                                ?>></td>
                                
                            </tr>
                            <tr>
                                <td> Last Name</td>
                                <td>:</td>
                                <td><input type="text" name="lastname" id="lastname"></td>
                            </tr>
                            <tr>
                                <td> Gender</td>
                                <td>:</td>
                                <td>
                                    <input type="radio" id="male" name="gender" value="Male"> <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="Female"> <label for="female">Female</label>
                        
                                </td>
                            </tr>
                            <tr>
                                <td> Father's Name</td>
                                <td>:</td>
                                <td><input type="text" name="fathername" id="fathername"></td>
                            </tr>
                            <tr>
                                <td> Mother's Name</td>
                                <td>:</td>
                                <td><input type="text" name="mothername" id="mothername"></td>
                            </tr>
                            <tr>
                                <td> Blood Group</td>
                                <td>:</td>
                                <td>
                                    <select name="blood" id="blood">
                                        <option value="a+">A+</option>
                                        <option value="a-">A-</option>
                                        <option value="b+">B+</option>
                                        <option value="b-">B-</option>
                                        <option value="ab+">AB+</option>
                                        <option value="ab-">AB-</option>
                                        <option value="o+">O+</option>
                                        <option value="o-">O-</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> Religion</td>
                                <td>:</td>
                                <td>
                                    <select name="religion" id="religion">
                                        <option value="islam">Islam</option>
                                        <option value="christian">Christian</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="buddhist">Buddhist</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
                <td>
                    <fieldset>
                        <legend>Contact Information:</legend>
                        <table>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input type="text" name="email" id="email"></td>
                            </tr>
                            <tr>
                                <td>Phone/Mobile</td>
                                <td>:</td>
                                <td><input type="text" name="contactno" id="contactno"></td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>:</td>
                                <td><input type="text" name="website" id="website" ></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td>
                                    <fieldset>
                                        <legend>Present Address:</legend>
                                        <select name="country" id="country">
                                            <option value="bd">Bangladesh</option>
                                            <option value="in">America</option>
                                            <option value="pk">Libya</option>
                                            <option value="sn">Singapore</option>
                                        </select>
                                        <select name="city" id="city">
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Benghazi">Benghazi</option>
                                            <option value="Phuket">Phuket</option>
                                        </select>
                                        <br>
                                        <br>
                                        <textarea name="address" id="" cols="30" rows="4" placeholder="Road/Street/City"></textarea>
                                        <br>
                                        <br>
                                        <input type="text" name="postcode" id="postcode" placeholder="Post Code">
                                    </fieldset>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
                <td>
                    <td>
                        <fieldset>
                            <legend>Account Information:</legend>
                            <table>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input type="text" id="username" name="username"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="text" id="pass" name="pass"></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password</td>
                                    <td>:</td>
                                    <td><input type="text" id="confirmpass" name="confirmpass"></td>
                                </tr>
                            </table>
                        </fieldset>
                        <br>
                        <input type="submit" id="register" value="Register">
                    </td>
                    
                </td>

            </tr>
        </table>
        </form>
    </body>
</Html>
