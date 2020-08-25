$(document).ready(function(){
    $('#new_family_form').hide();
    $('#load_csv_file_form').hide();
    $('#select_capture_family_form_info').change(function(){
        var capture_info_way = $('#select_capture_family_form_info').val();
        var csv_file = $('#select_capture_family_csvFile_info').val();
        if(capture_info_way == 'filling_form'){
            $('#load_csv_file_form').hide();
            $('#new_family_form').show();

        }
        else if(capture_info_way == 'csv_file'){
            $('#new_family_form').hide();
            $('#load_csv_file_form').show();
        }
        else{
            $('#new_family_form').hide();
            $('#load_csv_file_form').hide();
        }
    });
});