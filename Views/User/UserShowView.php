<?php
class UserShowView {
    private $user;
    function __construct($userData){
        $this->user = $userData;
        $this->render();
    }
    function render(){
        ?>
        <head>
            <link rel="stylesheet" href="../CSS/default.css" />
            <link rel="stylesheet" href="../CSS/forms.css" />
        </head>
        <main role="main" class="margin-main ml-sm-auto px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3
            border-bottom">
                <h1 class="h2" data-translate="Usuario %<?php echo $this->user->getLogin() ?>%"></h1>
                <a class="btn btn-primary" role="button" href="../Controllers/UserController.php" data-translate="Volver"></a>
            </div>
            <?php if(!is_null($this->user)): ?>
                <form>
                    <div class="form-group">
                        <label for="login" data-translate="Login"></label>
                        <input type="text" class="form-control" id="login" name="login"
                               value="<?php echo $this->user->getLogin() ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="dni" data-translate="DNI"></label>
                        <input type="text" class="form-control" id="dni" name="dni"
                               value="<?php echo $this->user->getDni() ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name" data-translate="Nombre"></label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="<?php echo $this->user->getName() ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="surname" data-translate="Apellido"></label>
                        <input type="text" class="form-control" id="surname" name="surname"
                               value="<?php echo $this->user->getSurname() ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email" data-translate="Email"></label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="<?php echo $this->user->getEmail() ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="address"  data-translate="Dirección"></label>
                        <input type="text" class="form-control" id="address" name="address"
                               value="<?php echo $this->user->getAddress() ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="telephone" data-translate="Teléfono"></label>
                        <input type="text" class="form-control" id="telephone" name="telephone"
                               value="<?php echo $this->user->getTelephone() ?>" readonly>
                    </div>
                </form>
            <?php else: ?>
                <p data-translate="El usuario no existe">.</p>
            <?php endif; ?>
        </main>
        <?php
    }
}
?>