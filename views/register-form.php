<?php
//register-form for register-html.php
return "
        <div class='jumbotron' id='jumbotron-register'>
            <div class='container'>
                <h1>Sign Up Now.</h1>
                <p>Become a member and have more.</p>
            </div>

            <form method='post' action='index.php?page=register' class='form-horizontal' role='form'>
				<div class='form-group'>
                    <label class='col-sm-1 control-label'>User ID</label>
                    <div class='col-sm-3'>  
                        <input type='text' class='form-control' name='userid' placeholder='User ID'/>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='col-sm-1 control-label'>Name</label>
                    <div class='col-sm-3'>  
                        <input type='text' class='form-control' name='name' placeholder='Name'/>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='col-sm-1 control-label'>Email</label>
                    <div class='col-sm-3'>  
                        <input type='email' class='form-control' name='email' placeholder='Email'/>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='col-sm-1 control-label'>Password</label>
                    <div class='col-sm-3'>  
                        <input type='password' class='form-control' name='password' placeholder='Password'/>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='col-sm-1 control-label'></label>
                    <div class='col-sm-3'> 
                        <input type='submit' class='form-control' name='reg-submitted' value='post' />
                    </div>
                </div>
            </form>
        </div>";