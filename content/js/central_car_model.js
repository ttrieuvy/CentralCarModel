$(document).ready(function (){
    $("#check-all").click(function (){
        $(":checkbox").prop("checked", true);
    });
    $("#clear-all").click(function (){
        $(":checkbox").prop("checked", false);
    });
    $("#btn-delete").click(function (){
        if($(":checked").length === 0){
            Swal.fire({
                icon: 'warning',
                text: 'Vui lòng chọn ít nhất một mục',
            })
            return false;
        }
    });
});