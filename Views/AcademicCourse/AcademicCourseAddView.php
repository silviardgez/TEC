<?php
class AcademicCourseAddView {

function __construct(){
    $this->render();
}
function render(){
?>
<head>
    <link rel="stylesheet" href="../CSS/default.css" />
    <link rel="stylesheet" href="../CSS/forms.css" />
</head>
    <main role="main" class="margin-main ml-sm-auto px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
            <h1 class="h2"><p data-translate="Insertar curso académico"></p></h1>
            <a class="btn btn-primary" role="button" href="../Controllers/AcademicCourseController.php" ><p data-translate="Volver"></p></a>
        </div>
        <form action='../Controllers/AcademicCourseController.php?action=add' method='POST'>
            <div class="form-group">
                <label for="start_year" data-translate="Año de inicio"></label>
                <input type="number" min="2000" max="9999" class="form-control" id="start_year" name="start_year" placeholder="Introducir año de inicio">
            </div>
            <div class="form-group">
                <label for="end_year" data-translate="Año de fin"></label>
                <input type="number"  min="2000" max="9999" class="form-control" id="end_year" name="end_year" placeholder="Introducir año de fin">
            </div>
            <button name="submit" type="submit" class="btn btn-primary" data-translate="Enviar"></button>
        </form>
    </main>
<?php
    }
}
?>


