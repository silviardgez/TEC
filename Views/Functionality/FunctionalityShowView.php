<?php
class FunctionalityShowView {
    private $functionality;
    function __construct($functionalityData){
        $this->functionality = $functionalityData;
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
                <h1 class="h2" data-translate="Funcionalidad '%<?php echo $this->functionality->getId()?>%'"></h1>
                <a class="btn btn-primary" role="button" href="../Controllers/FunctionalityController.php" data-translate="Volver"></a>
            </div>
            <?php if(!empty($this->functionality)): ?>
                <form>
                    <div class="form-group">
                        <label for="id" data-translate="Id funcionalidad"></label>
                        <input type="text" class="form-control" id="id" name="id"
                               value="<?php echo $this->functionality->getId() ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name" data-translate="Nombre"></label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="<?php echo $this->functionality->getName() ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="description" data-translate="Descripción"></label>
                        <input type="text" class="form-control" id="description" name="description"
                               value="<?php echo $this->functionality->getDescription() ?>" readonly>
                    </div>
                </form>
            <?php else: ?>
                <p data-translate="La funcionalidad no existe">.</p>
            <?php endif; ?>
        </main>
        <?php
    }
}
?>