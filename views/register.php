<h1>Register</h1>
<br>
<form action="" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input placeholder="E.g.: John Doe" type="text" name="fullName" value="<?php echo $model->fullName ?>"
               class="form-control<?php echo $model->hasError('fullName') ? ' is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError("fullName") ?>
        </div>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input placeholder="Enter your username..." type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input placeholder="E.g.: example@email.com" type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input placeholder="Enter your password." type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="confirmPassword">Confirm password</label>
        <input placeholder="One more time." type="password" name="confirmPassword" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

