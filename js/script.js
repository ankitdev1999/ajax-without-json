$(document).ready(function () {
//     JQ start

//search auto suggetion
    $( function() {
        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];
        $( "#search_box" ).autocomplete({
            source: availableTags
        });
    } );


    function loadTables(pag) {


        // $.post("ajax-pagenation.php", {page: pag}, function (r) {
        //     $("#box").html(r)
        // })


        $.ajax({
            url: "ajax-pagenation.php",
            data: {page: pag},
            type: "POST",
            success: function (e) {

                    $("#box").html(e)





            }

        })
    }

    loadTables()

    // insert data into php form
    $("#btn_save").on("click", (e) => {
        e.preventDefault()
        $fname = $("#first_name").val();
        $lname = $("#last_name").val();

        $.ajax({
            url: "ajax-insert.php",
            type: "POST",
            data: {first_name: $fname, last_name: $lname},
            success: function (data) {
                alert(data)
                loadTables();
                $fname = $("#first_name").val("");
                $lname = $("#last_name").val("");
            }


        })
    })

//     Delete Record
    $(document).on("click", ".btn-delet", function (e) {

        if (confirm("Are you shure to delet the recoed")) {
            $stid = $(this).data("id")
            element = this
            $.ajax({
                url: "ajax-delete.php",
                type: "POST",
                data: {stid: $stid},
                success: function (e) {
                    if (e == 1) {
                        $(element).closest("tr").fadeOut();
                        ;

                    } else {
                        alert("data not delete")
                    }

                }

            })
        }

    });

    // Update
    $(document).on("click", ".btn-edit", function (e) {
        console.log(this);
        $stid = $(this).data("id")
        $model = $(".modal-body")

        $l_u_name = $("#m_last_name")
        element = this
        $.ajax({
            url: "ajax-edit.php",
            type: "POST",
            data: {id: $stid},
            success: function (e) {
                // alert(e)
                if (e == 0) {


                } else {
                    $model.html(e)

                }

            }

        })


    });

    // Save  Edited Data
    $(document).on("click", "#save_update", function (e) {

        $igd = $("#u_id").val()
        console.log($igd);
        modl = $("#showModal")
        $f_u_name = $("#m_first_name").val()
        $l_u_name = $("#m_last_name").val()
        $.ajax({
            url: "ajax-save-edit.php",
            type: "POST",
            data: {id: $stid, fname: $f_u_name, lname: $l_u_name},
            success: function (e) {
                // alert(e)
                if (e == 1) {
                    // alert("updated")
                    modl.modal("hide")
                    loadTables()
                } else {
                    alert(e)


                }

            }

        })

    })

    // Live Search
    $("#search_box").on("keyup", (e) => {
        $sterm = $("#search_box").val();
        // alert($sterm)
        // console.log($sterm)

        $.ajax({
            url: "ajax-livesearch.php",
            type: "POST",
            data: {search: $sterm},
            success: function (e) {
                // alert(e)
                $("#box").html(e)

            }

        })

    })


    $(document).on("click", "#pagination a", function (e) {
        e.preventDefault()

        $pago = $(this).data("pgid")
        loadTables($pago)

    })


//     JQ end
})

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))