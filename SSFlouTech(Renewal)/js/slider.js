var emailViewer = function() {
    /* 이메일 견적 문의 부분을 보여주기 위한 이동&투명도 제거 함수 */
    var $est = $('#estiView'), // 사라져야할 상호작용 메뉴
        $viw = $('#viewBox'); // 나타나야할 이메일 견적 문의 부분
    // $est.css({'left': '-100vw'});
    $est.toggleClass('hidden move'); // 사라짐 & 이동
    $viw.toggleClass('hidden move'); // 나타남 & 이동
}
var estimateViewer = function() {
    /* 상호작용 메뉴를 보여주기 위한 뒤로가기 버튼 리스너 */
    var $est = $('#estiView'), // 나타나야할 상호작용 메뉴
        $viw = $('#viewBox'); // 사라져야할 이메일 견적 문의 부분
    // $est.css({'left': '0'});
    $est.toggleClass('hidden move'); // 나타남 & 이동
    $viw.toggleClass('hidden move'); // 사라짐 & 이동
}
var agreement = function() {
    /* 동의하기 버튼을 눌렀을 때 */
    $('#personalInfoView') // 개인정보 동의 부분
        .toggleClass('hidden move') // 사라짐 & 이동
        .find('input').attr('disabled', true); // 동의 버튼을 비활성화 시킴(이미 눌렀기 때문에)
    $('#emailView') // 이메일 작성 부분
        .toggleClass('hidden move') // 나타남 & 이동
        .find('.use').removeAttr('disabled'); // 비활성화 된 모든 버튼을 활성화 시킴
}