<a href="<?php echo strstr(devolveUrlActual(), '&log=login', true); ?>" id="lightboxLogin" >
    <div class="loginRegistoBox">
        <h1>Login</h1>
        <form id="formLogin" action="efetua_login.php" method="post">
            <p>
                <label for="email">Email</label>
                <input id="email" type="text" name="email" />
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" />
            </p>
            <input type="submit" value="Entrar" />
            <div id="recuperaPassword"><p>Esqueceu-se da password?</p></div>
        </form>
    </div>
</a>