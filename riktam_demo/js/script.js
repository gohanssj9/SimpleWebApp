// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}

function addRecord() {
    // get values
    var student_id = $("#student_id").val();
    var student_name = $("#student_name").val();
    var student_age = $("#student_age").val();
    var student_college = $("#student_college").val();
    var student_dept = $("#student_dept").val();

    if(student_id == "" || student_name == "" || student_age == "" || student_college == "" || student_dept == ""){
        alert("Please Enter the required fields!");
    }
    else if(student_age>150){
        alert("Enter a valid age.");
        return ;
    }
    else{
        $.post("ajax/addRecord.php", {
            student_id: student_id,
            student_name: student_name,
            student_age: student_age,
            student_college: student_college,
            student_dept: student_dept
            },function (data, status) {
                $("#add_new_record_modal").modal("hide");
                readRecords();
                $("#student_id").val("");
                $("#student_name").val("");
                $("#student_age").val("");
                $("#student_college").val("");
                $("#student_dept").val("");
        });
    }
}
function DeleteUser(student_id){
    if(confirm("Do you want to delete this?")){
        $.post("ajax/deleteUser.php",{
            student_id:student_id
        },
        function(data,status){
            readRecords();
        });
    }
}

function GetUserDetails(student_id){
    $.post("ajax/readUserDetails.php",{
        student_id:student_id
    },
    function(data,status){
        var user = JSON.parse(data);
        $("#update_student_id").val(user.student_id);
        $("#update_student_name").val(user.student_name);
        $("#update_student_age").val(user.student_age);
        $("#update_student_college").val(user.student_college);
        $("#update_student_dept").val(user.student_dept);
    });
    $("#update_user_modal").modal("show");
}
function UpdateUserDetails(){
    var student_id = $("#update_student_id").val();
    var student_name = $("#update_student_name").val();
    var student_age = $("#update_student_age").val();
    var student_college = $("#update_student_college").val();
    var student_dept = $("#update_student_dept").val();


    if(student_id == "" || student_name == "" || student_age == "" || student_college == "" || student_dept == ""){
        alert("Please Enter the required fields!");
    }
    else if(student_age>150){
        alert("Enter a valid age.");
        return ;
    }
    else{
        $.post("ajax/updateUserDetails.php",{
            student_id:student_id,
            student_name:student_name,
            student_age:student_age,
            student_college:student_college,
            student_dept:student_dept
        },
        function(data,status){
            readRecords();
            $("#update_user_modal").modal("hide");
        });
    }
}

$(document).ready(function () {
    readRecords(); // calling function
});