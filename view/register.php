<?php 
    return "

    <form method='post' action='./view/register-code.php'>
  <div class='form-group'>
    <label for='exampleInputEmail1'>Email address</label>
    <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email' name='name'>
    <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
  </div>
  <div class='form-group'>
    <label for='exampleInputPassword1'>Password</label>
    <input type='password' class='form-control' id='exampleInputPassword1' placeholder='Password' name='password'>
  </div>
  <button type='submit' class='btn btn-primary' name='new-register'>Submit</button>
</form>

"
?>