$(document).ready(function() {
    /* html 페이지가 첫 로드 되었을 때 적용될 모든 소스(대체로 타 html페이지를 로드하고
         로드됐을 때 내부 객체에 접근하여 on listener를 추가하기 위해 사용 */
    $("#header").load("header.html"); // 헤더 추가
    $("#banner").load("banner.html"); // 베너 추가
    $("#intro_company").load("intro_company.html"); // 회사 소개 추가
    $("#position").load("position.html"); // 회사 위치 추가
    $("#intro_product").load("intro_product.html", function() {
        /* 제품 소개 추가 후 사용할 함수 */
        $(window).scroll(eventScroll); // 전체 페이지에서 스크롤 될 때마다 사용할 이벤트
        $(".product_list").on('mousewheel DOMMouseScroll', eventHorizontalScroll); // 제품 소개의 가로 스크롤 이벤트
        // 마우스 스크롤 이벤트 추가
    });
    $("#system_state").load("system_state.html", function() {
        /* 설비 현황 추가 후 사용할 함수 */
        $('.systemStateImage').on('click', openImageView); // 설비 현황 이미지 클릭 시 팝업 버튼 추가를 위해 사용
    });
    $("#estimate").load("estimate.html", function() {
        /* 견적 문의 추가 후 사용할 함수 */
        $('#file').on('change', fileNameChanger); // 파일 입력시 변경 이벤트 추가
        $('#in_email').on('click', emailViewer); // 이메일로 문의 기능
        $('.backspace').on('click', estimateViewer); // 이메일로 문의에서 뒤로가기 기능
        $('#nextWrite').on('click', agreement); // 개인정보 제공 동의 후 입력 부분 이동
        $('#contentText') // 개인정보 제공 동의서의
            .load("personal_information_content.txt") // 내용을 받아오고
            .scroll(personalInformationScroll); // 마우스 휠을 끝까지 내렸을 때 동의가 가능하도록 설정
    });
    $("#footer").load("footer.html", function() {
        /* 푸터 추가 후 사용할 함수 */
        $("#header, #banner").find("a[href^='#']").on('click', function() {
            /* 헤더의 위치 이동 버튼 클릭 시 부드럽게 이동시키는 함수 */
            $('html, body').animate( { scrollTop: $(this.hash).offset().top }, 500);
            // return false;
        })
    }); 
});