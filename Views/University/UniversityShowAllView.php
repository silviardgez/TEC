<?php
include_once '../Functions/HavePermission.php';

class UniversityShowAllView
{
    private $universities;
    private $itemsPerPage;
    private $currentPage;
    private $totalUniversities;
    private $totalPages;
    private $stringToSearch;
    private $searching;

    function __construct($universitiesData, $itemsPerPage = NULL, $currentPage = NULL, $totalUniversities = NULL, $toSearch = NULL, $searching = False)
    {
        $this->universities = $universitiesData;
        $this->itemsPerPage = $itemsPerPage;
        $this->currentPage = $currentPage;
        $this->totalUniversities = $totalUniversities;
        $this->totalPages = ceil($totalUniversities / $itemsPerPage);
        $this->stringToSearch = $toSearch;
        $this->searching = $searching;
        $this->render();
    }

    function render()
    {
        ?>
        <head>
            <link rel="stylesheet" href="../CSS/default.css"/>
            <link rel="stylesheet" href="../CSS/table.css"/>
        </head>
        <main role="main" class="margin-main ml-sm-auto px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3">
                <h1 class="h2" data-translate="Listado de universidades"></h1>

                <!-- Search -->
                <form class="row" action='../Controllers/UniversityController.php' method='POST'>
                    <input type="text" class="form-control" id="search" name="search" data-translate="Texto a buscar">
                    <button name="submit" type="submit" class="btn btn-primary" data-translate="Buscar"></button>
                </form>

                <?php if ($this->searching): ?>
                    <a class="btn btn-primary" role="button" href="../Controllers/UniversityController.php">
                        <p data-translate="Volver"></p>
                    </a>
                <?php else:
                    if (HavePermission("University", "ADD")): ?>
                        <a class="btn btn-success" role="button"
                           href="../Controllers/UniversityController.php?action=add">
                            <span data-feather="plus"></span>
                            <p data-translate="Añadir universidad"></p>
                        </a>
                    <?php endif; endif; ?>

            </div>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th><label data-translate="Nombre"></label></th>
                        <th><label data-translate="Curso académico"></label></th>
                        <th><label data-translate="Responsable"></label></th>
                        <th class="actions-row"><label data-translate="Acciones"></label></th>
                    </tr>
                    </thead>
                    <?php if (!empty($this->universities)): ?>
                    <tbody>
                    <?php foreach ($this->universities as $university): ?>
                        <tr>
                            <td><?php echo $university->getName() ;?></td>
                            <td><?php echo $university->getAcademicCourse()->getAcademicCourseAbbr() ;?></td>
                            <td><?php echo $university->getUser()->getName() . " " . $university->getUser()->getSurname() ;?></td>
                            <td class="row">
                                <?php if (HavePermission("University", "SHOWCURRENT")) { ?>
                                    <a href="../Controllers/UniversityController.php?action=show&id=<?php echo $university->getId() ?>">
                                        <span data-feather="eye"></span></a>
                                <?php }
                                if (HavePermission("University", "EDIT")) { ?>
                                    <a href="../Controllers/UniversityController.php?action=edit&id=<?php echo $university->getId() ?>">
                                        <span data-feather="edit"></span></a>
                                <?php }
                                if (HavePermission("University", "DELETE")) { ?>
                                    <a href="../Controllers/UniversityController.php?action=delete&id=<?php echo $university->getId() ?>">
                                        <span data-feather="trash-2"></span></a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    </table>
                    <p data-translate="No se ha obtenido ninguna universidad">. </p>
                <?php endif; ?>

                <?php new PaginationView($this->itemsPerPage, $this->currentPage, $this->totalUniversities,
                    "University") ?>

            </div>
        </main>

        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace();
        </script>
        <?php
    }
}

?>
