var $shade = $('#shade'); // 팝업창의 정보
var openImageView = function() {
    /* 팝업 창을 여는 함수 */
    var name = $(this).attr('src') // 눌러진 부분의 이미지 주소
    // ex) "images/system_state/auto_sending.png" 
    var lastIdx = name.lastIndexOf('/');
    var fileName = name.substr(0, lastIdx + 1) // 파일의 경로까지 잘라준 후
                        + "view_" // 파일명 가장 앞에 "view_"를 추가
                        + name.substr(lastIdx + 1); // 후에 파일 이름을 추가
    $shade
        .show() // 팝업창과 음영을 보여주고
        .children() // 그 자식(이미지 부분)
        .attr('src', fileName); // 자식의 이미지를 바꿈
}
var closeImageView = function() {
    /* 열려있는 팝업 창을 닫는 함수 */
    $shade.hide(); // 팝업창을 가림
}
$shade.on('click', closeImageView); // shade를 클릭했을 때 shade가 사라지도록 선언