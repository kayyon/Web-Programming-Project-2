<?php
include_once 'header.php';
?>

<section class="signup-form">
    <h1>Sign Up to Wordle!</h1>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password-repeat" placeholder="Repeat Password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</section>

<?php
include_once 'footer.php';
?>