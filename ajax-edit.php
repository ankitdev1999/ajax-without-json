<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die();

//if (isset($_POST["first_name"])){

$id = $_POST["id"];


$select = "select * FROM `student` WHERE id=$id";

$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res)>0) {
    $row = mysqli_fetch_assoc($res);

    $output ="  <div class=\"col-md-4 position-relative \" style=\"width: 100%; margin: auto\";>
                        <label for=\"m_first_name\" class=\"form-label\">First name</label>
                        <input type=\"text\" class=\"form-control\" id=\"m_first_name\" value=\"{$row['first_name']}\" required>
                        <div class=\"valid-tooltip\">
                            Looks good!
                        </div>
                    </div>
                    
                    <div class=\"col-md-4 position-relative\" style=\"width: 100%; margin: auto\">
                        <input type=\"hidden\" value=\"{$row['id']}\"   class=\"form-control\" id=\"u_id\">
                        <label for=\"m_last_name\" class=\"form-label\">Last name</label>
                        <input type=\"text\" class=\"form-control\" id=\"m_last_name\"  value=\"{$row['last_name']}\"  required>
                        <div  class=\"valid-tooltip\">
                            Looks good!
                        </div>
                    </div>
";
    echo $output;

}else{
    echo 0;

}
mysqli_close($conn)

?>
<!--<input type="hidden"  class="form-control" id="u_id">-->