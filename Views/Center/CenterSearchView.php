<?php
class CenterSearchView {
    private $universities;
    private $buildings;
    private $users;

    function __construct($universities, $buildingsData, $userData){
        $this->universities = $universities;
        $this->buildings = $buildingsData;
        $this->users = $userData;
        $this->render();
    }
    function render(){
        ?>
        <head>
            <link rel="stylesheet" href="../CSS/default.css" />
            <link rel="stylesheet" href="../CSS/forms.css" />
            <script src="../JS/Validations/CenterValidations.js"></script>
        </head>
        <main role="main" class="margin-main ml-sm-auto px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
                <h1 class="h2" data-translate="Búsqueda de centros"></h1>
                <a class="btn btn-primary" role="button" href="../Controllers/CenterController.php"><p data-translate="Volver"></p></a>
            </div>
            <form id="centerSearchForm" action='../Controllers/CenterController.php?action=search' method='POST'
                  onsubmit="areCenterSearchFieldsCorrect()">
                <div id="name-div" class="form-group">
                    <label for="name" data-translate="Nombre"></label>
                    <input type="text" class="form-control" id="name" name="name" data-translate="Introducir nombre"
                           maxlength="30" oninput="checkNameEmptyCenter(this)">
                </div>
                <div class="form-group">
                    <label for="university_id" data-translate="Universidad"></label>
                    <select class="form-control" id="university_id" name="university_id"?>
                        <option data-translate="Introducir universidad" value=""></option>
                        <?php foreach ($this->universities as $university): ?>
                            <option value="<?php echo $university->getId() ?>"><?php echo $university->getName() ?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="building_id" data-translate="Edificio"></label>
                    <select class="form-control" id="building_id" name="building_id">
                        <option data-translate="Introducir edificio" value=""></option>
                        <?php foreach ($this->buildings as $building): ?>
                            <option value="<?php echo $building->getId() ?>"><?php echo $building->getName() ?></option>
                        <?php endforeach;?>
                    </select>                </div>
                <button name="submit" type="submit" class="btn btn-primary" data-translate="Enviar"></button>
            </form>
        </main>
        <?php
    }
}
?>
