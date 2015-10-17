<?php
//signin-form for sign-html.php
return "
        <div class='jumbotron' id='jumbotron-signin'>
            <div class='container'>
                <h1>Sign in here.</h1>
            </div>

            <form method='post' action='index.php?page=userinfo' class='form-inline'>
                <input type='text' class='form-control' name='userid' placeholder='Userid'/>
                <input type='password' class='form-control' name='password' placeholder='Password'/>

                <input type='submit' class='form-control' name='signin-submitted' value='signin' />
            </form>
        </div>";