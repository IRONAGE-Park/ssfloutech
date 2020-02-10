var fileNameChanger = function() {
    if(window.FileReader){ // modern browser 
        var filename = $(this)[0].files[0].name; 
    } else { // old IE 
        var filename = $(this).val().split('/').pop().split('\\').pop(); // 파일명만 추출 
    }
    $('#fileName').val(filename); // 파일명을 input[type='text']에 보여줌
}