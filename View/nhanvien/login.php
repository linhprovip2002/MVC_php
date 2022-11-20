<body style="background-color: lightgreen;">
    <form action="../../Controller/C_Authentication.php" method="POST" style="text-align: center;" name="Login">
        <h2> Login </h2>
        <h3> Username &emsp; <input type="text" name="username"> </h3>
        <h3> Password &emsp; <input type="password" name="password"> </h3>
        <p> <input type="submit" value="Login"> &emsp; <input type="reset"> </p>
    </form>
</body>
<?php
session_start();

?>



