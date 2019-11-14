$(document).ready(function () {
    //Show All Data
    readRecords();

    //Add User
    $(document).on('click', '#add_user_submit', function () {
        var name = $('#add_user').val();
        var contact = $('#add_user_contact').val();
        var insertper = "insertper";
        $.ajax({
            url: 'main.php',
            type: 'POST',
            data: {
                'name': name,
                'contact': contact,
                'insertper': insertper,
            },
            success: function (data, status) {
                $('#add_user').val("");
                $('#add_user_contact').val("");
                $('#addModal').modal('hide');
                readRecords();
            }
        });
    });

    //Read Function
    function readRecords() {
        var readrecords = "readrecords";
        $.ajax({
            url: "main.php",
            type: "POST",
            data: {readrecords: readrecords},
            success: function (data, status) {
                $('#records_content').html(data);
            },
        });
    }

    //Delete Data
    $(document).on('click', '.delete', function () {
        var id = $(this).attr('value');
        var del = "permission";

        if (confirm("are you Sure?")) {
            $.ajax({
                url: 'main.php',
                type: 'POST',
                data: {
                    'del': del,
                    'id': id,
                },
                success: function (response) {
                    readRecords();
                }
            });
        }
    });

    // Read By id
    $(document).on('click', '.edit', function () {
        var id = $(this).attr('value');
        var editper = "permission";
        $.ajax({
            url: 'main.php',
            type: 'POST',
            data: {
                'editper': editper,
                'id': id,
            },
            success: function (response) {
                $('#records_content_edit').html(response);
            }
        });
    });

    //Edit Data
    $(document).on('click', '#edit_final', function () {
        var id = $('#its_id').attr('value');
        var editperfinal = "permission";
        var uname = $('#update_user').val();
        var ucontact = $('#update_user_contact').val();
        $.ajax({
            url: 'main.php',
            type: 'POST',
            data: {
                'editperfinal': editperfinal,
                'id': id,
                'name': uname,
                'contact': ucontact,
            },
            success: function (response) {
                $('#add_user').val("");
                $('#add_user_contact').val("");
                $('#editMoadl').modal('hide');
                readRecords();
            }
        });
    });

});
