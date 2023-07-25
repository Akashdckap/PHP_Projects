<html>
    <head>
        <title>SignIn Homepage</title>
    </head>
    <body><?php if(isset($_SESSION['userName'])):?>
    <center>
        <h2>Welcome <?php print_r($_SESSION['userName'])?> to the New Web Developing Project</h2>
    </center>
        <?php endif;?>
    <div>
        <form method="post" action="/logOut">
            <button type="submit">Logout</button>
        </form>
    </div>
    </body>
</html>