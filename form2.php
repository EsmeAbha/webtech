<Html>
    <head>
        <title>Registration</title>

    </head>
    <body>
        <h1>Registration</h1>
        <table>
            <tr>

                <td>
                    <td>
                        <fieldset>
                            <legend>Account Information:</legend>
                            <table>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <?php
                                    echo "<td> $_POST[username] </td>"
                                    ?>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <?php
                                    echo "<td> $_POST[pass] </td>"
                                    ?>                                </tr>
                                                                <tr>
                                    <td>Confirm Password</td>
                                    <td>:</td>
                                    <?php
                                    echo "<td> $_POST[confirmpass] </td>"
                                    ?>                                </tr>


                            </table>
                        </fieldset>

                    </td>
                    
                </td>
            </tr>
        </table>
    </body>
</Html>
