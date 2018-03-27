function upload_file()
{
	var file = $('#file').prop('files')[0];
	var file_info = $('#info').val(); 
    var form_data = new FormData();
    form_data.append('info', file_info);
    form_data.append('file', file);
	form_data.append('submit', true);   	
    $.ajax({
                url: 'php.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(data){
                    alert(data);
                }
     });
}