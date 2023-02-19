<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">


    <script
            src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
            crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

</head>

<body>


<div id="search-container" class="container">
    <div class="row">
        <div class="col my-5 ui-widget ">
            <input type="text" class="form-control" id="search_box">
        </div>
    </div>
</div>


</div>

<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="showModalLabel">Modal title</h1>
                <button type="button" id="close-modal" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body  ">

                <div class="col-md-4 position-relative " style="width: 80%; margin: auto" ;>
                    <label for="m_first_name" class="form-label">First name</label>
                    <input type="text" class="form-control" id="m_first_name" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative" style="width: 80%; margin: auto">
                    <label for="m_last_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="m_last_name" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="save_update" class="btn btn-primary ">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL END-->
<div id="info" class="container">
    <form class="row g-3 needs-validation" novalidate>

        <div class="col-md-4 position-relative">
            <label for="first_name" class="form-label">First name</label>
            <input type="text" class="form-control" id="first_name" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="last_name" class="form-label">First name</label>
            <input type="text" class="form-control" id="last_name" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>

        <div class="col-12">
            <button id="btn_save" type="submit" class="btn btn-primary">Add Data</button>
        </div>
    </form>

</div>


<div id="box" class="container my-4">
    <!--show tables dynamically-->

</div>

<div class="container">
    <div class="row">
        <div class="col ">
            <!--                <ul id="pagination" class="pagination ">-->
            <!---->
            <!---->
            <!--                    <li id="li1" class="page-item"><a id="1" data-pgid="1" class="page-link" href="#">Prev</a></li>-->
            <!--                    <li id="li2" class="page-item"><a id="2" data-pgid="5" class="page-link" href="#">1</a></li>-->
            <!---->
            <!---->
            <!--                </ul>-->


        </div>
    </div>
</div>

<button type="button" class="btn btn-secondary"
        data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        data-bs-title="This top tooltip is themed via CSS variables.">
    Custom tooltip
</button>


<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

<script src="js/script.js"></script>
</body>
</html>