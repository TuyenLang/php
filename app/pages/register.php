<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $errors = [];
    $values = [];

    // Validate email
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    } else {
        $values['email'] = trim($_POST['email']);
    }

    // Validate password
    if (empty($_POST['password']) || strlen($_POST['password']) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    } else {
        $values['password'] = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); // Hash password
    }

    // Validate name
    if (empty($_POST['username']) || strlen($_POST['username']) < 3) {
        $errors[] = "Name must be at least 3 characters.";
    } else {
        $values['username'] = trim($_POST['username']);
    }

    // Proceed if no errors
    if (empty($errors)) {
        $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $result = db_query($query, $values);
        redirect('login');
       
    }

    // Store errors in a session or output
    foreach ($errors as $error) {
        message($error);
    }
}

?>

<?php require page('includes/header') ?>

<section class="content">
    <div class="register-holder">
        <?php if (message()): ?>
            <div class="alert"><?= message('', true) ?></div>
        <?php endif; ?>

        <form method="post">
            <center>
                <img src="assets/images/logo.jpg" style="width: 150px; border-radius: 50%; border: solid thin #ccc;">
            </center>
            <h2>Register</h2>
            <input value="<?= htmlspecialchars(set_value('username')) ?>" 
                   class="my-1 form-control" 
                   type="text" 
                   name="username" 
                   placeholder="Name">
            <input value="<?= htmlspecialchars(set_value('email')) ?>" 
                   class="my-1 form-control" 
                   type="email" 
                   name="email" 
                   placeholder="Email">
            <input value="<?= htmlspecialchars(set_value('password')) ?>" 
                   class="my-1 form-control" 
                   type="password" 
                   name="password" 
                   placeholder="Password">
            <button class="my-1 btn bg-blue">Đăng ký</button>
        </form>
    </div>
</section>

<?php require page('includes/footer') ?>
