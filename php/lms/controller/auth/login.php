<?php

/**
 * Formulaire de connexion
 */

// récupération des données
$email = array_key_exists('email', $_POST) ? $_POST['email'] : '';
$password = array_key_exists('password', $_POST) ? $_POST['password'] : '';
$error_message = '';

if(!empty($email)&& !empty($password)){
	require 'config/connexion.php';
	require 'model/user/userManger.php';
	
	$UserManager = new UserManager($bdd);
	$user =$UserManager->findUserByEmail($email);
	var_dump($user);
	if($user && $user['password']=== $password){
		$_SESSION['user'] = $user;
		// mise à jour de last login
		$UserManager->updateUser($user['id']);
		// redirection vers le dashboard
		header('Location: index.php/dashboard');
	}
	$error_message = 'email ou mot de passe erroné !';
	
	
}

?>

<div class="row align-items-center justify-content-center" id="login">
    <div class="col-sm-6 ">
        <form id="loginForm" method="post">
            <div id="icon" class="text-primary">
                <i class="fas fa-lock"></i>
            </div>
			 <!-- debut affichage d'erreur -->
            <?php if( !empty($error_message)) { ?>
                <div class="alert alert-danger">
                    <?=$error_message?>
                </div>
            <?php } ?>
            <!-- fin affichage d'erreur -->
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email"
                       class="form-control"
                       name="email"
                       id="exampleInputEmail1"
                       placeholder="Email"
                       value="<?=$email?>"
                       autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"
                       class="form-control"
                       name="password"
                       id="exampleInputPassword1"
                       placeholder="Password"
                       value="<?=$password?>"
                       autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary btn-block">LOG IN</button>
        </form>
    </div>
</div>