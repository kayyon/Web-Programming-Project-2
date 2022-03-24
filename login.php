<?php
include_once 'header.php';
?>
<section>
    <div class="box">
        <h2>Log In to Wordle!</h2>
        <form action="config.php">
            <div class="input-box">
                <input type="text" name="username" autocomplete="off" required>
                <label for="">Username</label>
            </div>
            <div class="input-box">
                <input type="password" name="password" autocomplete="off" required>
                <label for="">Password</label>
            </div>
            <input type="submit" value="Save">
        </form>
    </div>
</section>

<?php
include_once 'footer.php';
?>