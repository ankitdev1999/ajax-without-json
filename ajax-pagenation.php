<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die();

if (isset($_POST["page"])) {
    $page = $_POST["page"];

} else {
    $page = 1;

}


$select = "SELECT * FROM `student`";
$res = mysqli_query($conn, $select);

$limit = 3;
$totallist = mysqli_num_rows($res);
$total_pages = ceil($totallist / $limit);
$offset = ($page - 1) * $limit;

$select1 = "SELECT * FROM `student` limit $offset ,$limit;";

$res1 = mysqli_query($conn, $select1);

if (mysqli_num_rows($res1) > 0) {


    $outpt = '<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Action</th>
       
    </tr>
    </thead>
    <tbody>';
    ?>


    <?php
    while ($row = mysqli_fetch_assoc($res1)) {
        $outpt .= "<tr>
            <th scope=\"row\">{$row ["id"]}</th>
            <td>{$row ["first_name"]}</td>
            <td>{$row ["last_name"]}</td>
            
            <td>
            <button  type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#showModal\" class=\"btn btn-edit btn-primary\" data-id='{$row ["id"]}'  >EDIT</button>
            <button  type=\"button\" class=\"btn btn-delet btn-primary\" data-id='{$row ["id"]}'  >Delete</button></td>

        </tr>"


        ?>
        <?php

    }
    $outpt .= "   </tbody>
</table>";


    $outpt .=  "<div class=\"container\">
                     <div class=\"row\">
                         <div class=\"col \">
                             <ul id=\"pagination\" class=\"pagination \">" ;
    $num = 1;
    while ($num <= $total_pages) {
        $outpt .= "  <li class=\"page-item\"><a id=\"2\" data-pgid=\"$num\" class=\"page-link\" href=\"#\">$num</a></li>" ;

        $num++;
    }
    $outpt .= `</ul>
      </div>
    </div>
</div>`;
    echo $outpt;

} else {
    echo "<h2>RECORD not found</h2>";
}
?>
