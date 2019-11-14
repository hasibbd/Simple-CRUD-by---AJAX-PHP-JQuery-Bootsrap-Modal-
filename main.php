<?php
include ("phpclass.php");
$obj = new AjaxCrud();

//Edit
if (isset($_POST['editperfinal'])) {
    $name    = $_POST['name'];
    $id      = $_POST['id'];
    $contact = $_POST['contact'];
    $obj->UserUpdate ($id, $name, $contact, "users");
}

//Inser
if (isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['insertper'])) {
    $obj->insertData ($_POST['name'], $_POST['contact'], "users");
}

//Delete
if (isset($_POST['del'])) {
    $obj->deleteData ($_POST['id'], "users");
}

//Show By id
if (isset($_POST['editper'])) {
    $on   = $obj->getById ($_POST['id'], "users");
    $data = '      <label for="id">User Names</label>
                    <input class="form-control" type="hidden" name="user" value="' . $on['id'] . '" id="its_id">
                    <label for="user">User Names</label>
                    <input class="form-control" type="text" name="user" value="' . $on['name'] . '" id="update_user">
                    <label for="user_contact">User Contact</label>
                    <input class="form-control" type="text" name="user_contact" value="' . $on['contact'] . '" id="update_user_contact">
            ';
    echo $data;
}

//All show
if (isset($_POST['readrecords'])) {
    $data = ' <table class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>';
    $id   = 1;
    foreach ($obj->showData ("users") as $value) {
        $data .= '  <tr">
                            <td>' . $id . '</td>
							<td>' . $value['name'] . '</td>
							<td>' . $value['contact'] . ' </td>
							<td>
							<button class="btn btn-warning edit"  value="' . $value['id'] . '" data-toggle="modal" data-target="#editMoadl">Edit</button>
							<button class="btn btn-danger delete" value="' . $value['id'] . '">Delete</button>
                            </td>
						</tr>	
                ';
        $id++;
    }
    $data .= ' </tbody>
           </table>';
    echo $data;
}
?>