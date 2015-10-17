<?php
//register-form for register-html.php
return "
			<h3>Update your informantion</h3>
            <form method='post' action='index.php?page=userinfo' class='form-horizontal' role='form'>
				<div class='form-group'>
                    <label class='col-sm-1 control-label'>New password</label>
                    <div class='col-sm-3'>  
                        <input type='text' class='form-control' name='newpassword' placeholder='New password'/>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='col-sm-1 control-label'>New email</label>
                    <div class='col-sm-3'>  
                        <input type='email' class='form-control' name='newemail' placeholder='New email'/>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='col-sm-1 control-label'>New phone</label>
                    <div class='col-sm-3'>  
                        <input type='text' class='form-control' name='newphone' placeholder='New phone'/>
                    </div>
                </div>
                <div class='form-group'>
                    <label class='col-sm-1 control-label'></label>
                    <div class='col-sm-3'> 
                        <input type='submit' class='form-control' name='update-submitted' value='update' />
                    </div>
                </div>
            </form>";