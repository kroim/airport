

function load_profile(event, baseURL){
    console.log(baseURL);
    try{
        var file = event.target.files[0];
        var fileName = file['name'];
        var extension = fileName.split('.').pop();
        if (['bmp', 'gif', 'png', 'jpg', 'jpeg'].indexOf(extension) > -1) {
            $("#img_prev").html("<img src="+baseURL+"assets/images/image_logo.png style='width: 100px; height: 100px;'/>");
        } else if(['docx', 'doc'].indexOf(extension) > -1) {
            $("#img_prev").html("<img src="+baseURL+"assets/images/doc_logo.png style='width: 100px; height: 100px;'/>");
        } else if(['pdf'].indexOf(extension) > -1){
            $("#img_prev").html("<img src="+baseURL+"assets/images/pdf_logo.png style='width: 100px; height: 100px;'/>");
        }
    }catch (except){
        console.log(except)
    }
}
function upload_file() {
    var id = $("#file_task_id").val();
    console.log(id);
    var file_data = $("#select-file-tag").prop("files")[0];
    $.ajax(
        {
            url:"<?php echo base_url(); ?>upload/index",
            method: "POST",
            data:{
                task_id: id
            },
            contentType: false,
            cache: false,
            processData: false,
            success:function (response) {
                if(response != false){
                    console.log(response);

                }
            }
        }
    );
}