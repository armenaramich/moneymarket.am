    <?php if(isset($this->msg)) echo $this->msg; ?>
    <form action="index.php?controller=login&action=doLogin" method="post">
        <label class="login-label">
            <input type="text" name="username" placeholder="Username">
        </label>
        <label class="login-label">
            <input type="password" name="password" placeholder="Password">
        </label>
        <label class="login-label">
            <input type="submit" name="submit" value="Submit">
        </label>

    </form>
