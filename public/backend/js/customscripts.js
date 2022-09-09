jQuery(document).ready(function () {

    jQuery(document).on('click', '.btn-edit', function () {
        var id = jQuery(this).val();
        jQuery('.editnow').val(id);
        $.ajax({
            url: '/student/get/' + id,
            type: 'get',
            dataType: 'JSON',
            success: function (response) {
                jQuery('#name').val(response.data.name);
                jQuery('#roll').val(response.data.roll);
                jQuery('#registration_no').val(response.data.registration_no);
                jQuery('#department').val(response.data.department);
                jQuery('#semester').val(response.data.semester);
                jQuery('#father_name').val(response.data.father_name);
                jQuery('#mother_name').val(response.data.mother_name);
                jQuery('#gender').val(response.data.gender);
                jQuery('#status').val(response.data.status);
            }
        })
    });
    jQuery(document).on('click', '.editnow', function () {
        var id = jQuery(this).val();
        var name = jQuery('#name').val();
        var roll = jQuery('#roll').val();
        var registration_no = jQuery('#registration_no').val();
        var department = jQuery('#department').val();
        var semester = jQuery('#semester').val();
        var father_name = jQuery('#father_name').val();
        var mother_name = jQuery('#mother_name').val();
        var gender = jQuery('#gender').val();
        var status = jQuery('#status').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/student/update/' + id,
            type: 'post',
            dataType: 'JSON',
            data: {
                name: name,
                roll: roll,
                registration_no: registration_no,
                department: department,
                semester: semester,
                father_name: father_name,
                mother_name: mother_name,
                gender: gender,
                status: status,
            },
            success: function (response) {
                jQuery('.alert').css('display', 'block');
                jQuery('.alert').html('Data Update Successfull');
                jQuery('.alert').fadeOut(3000);
                jQuery('#editModal').modal('hide');
                show();

            }
        });
    });

    jQuery(document).on('click', '.btn-status', function () {
        var id = jQuery(this).val();
        jQuery('.statusnow').val(id);
    });

    jQuery(document).on('click', '.statusnow', function () {
        var id = jQuery(this).val();
        $.ajax({
            url: '/student/status/' + id,
            type: 'get',
            dataType: 'JSON',
            success: function (response) {
                jQuery('#statusModal').modal('hide');
                jQuery('.alert').css('display', 'block');
                jQuery('.alert').html('Data Change Successfull');
                jQuery('.alert').fadeOut(3000);
                show();

            }
        })
    });

    jQuery(document).on('click', '.btn-delete', function () {
        var id = jQuery(this).val();
        jQuery('.deletenow').val(id);
    });
    jQuery(document).on('click', '.deletenow', function () {
        var id = jQuery(this).val();
        $.ajax({
            url: '/student/destroy/' + id,
            type: 'get',
            dataType: 'JSON',
            success: function (response) {
                jQuery('#deleteModal').modal('hide');
                jQuery('.alert').css('display', 'block');
                jQuery('.alert').html('Data Delete Successfull');
                jQuery('.alert').fadeOut(3000);
                show();

            }
        })
    });


    show();

    function show() {
        $.ajax({
            url: '/student/show',
            type: 'get',
            dataType: 'JSON',
            success: function (response) {
                data = '';
                sl = 1;
                $.each(response.data, function (key, item) {
                    btn = 'success';
                    if (item.status == 1) {
                        btn = 'success';
                    }
                    else {
                        btn = 'danger';
                    }

                    data += '<tr>\
                        <td>'+ sl + '</td>\
                        <td>'+ item.name + '</td>\
                        <td>'+ item.roll + '</td>\
                        <td>'+ item.semester + '</td>\
                        <td><button class="btn btn-'+ btn + ' btn-sm btn-status" value="' + item.id + '"  data-toggle="modal" data-target="#statusModal" ><i class="fas fa-check-square"></i></button></td>\
                        <td><button class="btn btn-info btn-sm btn-edit" value="'+ item.id + '"  data-toggle="modal" data-target="#editModal" ><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-sm btn-delete" data-toggle="modal" data-target="#deleteModal" value="' + item.id + '"><i class="fa fa-trash"></i></button></td>\
                    </tr>';
                    sl++;
                });

                jQuery('.tbody').html(data);
            }
        })
    }


    jQuery(document).on('click', '.btnAddStudent', function () {
        var name = jQuery('.name').val();
        var roll = jQuery('.roll').val();
        var registration_no = jQuery('.registration_no').val();
        var department = jQuery('.department').val();
        var semester = jQuery('.semester').val();
        var father_name = jQuery('.father_name').val();
        var mother_name = jQuery('.mother_name').val();
        var gender = jQuery('.gender').val();
        var status = jQuery('.status').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/student/store',
            type: 'post',
            dataType: 'JSON',
            data: {
                name: name,
                roll: roll,
                registration_no: registration_no,
                department: department,
                semester: semester,
                father_name: father_name,
                mother_name: mother_name,
                gender: gender,
                status: status,
            },
            success: function (response) {
                jQuery('.name').val('');
                jQuery('.roll').val('');
                jQuery('.registration_no').val('');
                jQuery('.department').val('');
                jQuery('.semester').val('');
                jQuery('.father_name').val('');
                jQuery('.mother_name').val('');
                jQuery('.gender').val('');
                jQuery('.status').val('1');
                jQuery('.alert').css('display', 'block');
                jQuery('.alert').html('Data Insert Successfull');
                jQuery('.alert').fadeOut(3000);
                show();

            }
        });
    });
});