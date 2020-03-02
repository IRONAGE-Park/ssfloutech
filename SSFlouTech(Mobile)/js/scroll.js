var count = false; // 단 한 번 퍼센트 설정을 위한 변수
var date = new Date(); // 현재 날짜를 받아옴

var preScroll = 0, // 이전 스크롤 위치
    delta = 0; // 현재 헤더의 델타 값

var eventScroll = function(e) {
    /* 전체 페이지의 스크롤을 제어 */
    var scroll = $(window).scrollTop(); // 스크롤의 위치를 받아옴
    var $header = $('#header'),
        $banner = $('#banner'),
        $view_estimate = $('#view_estimate'),
        $view_state = $('#view_state'),
        $view_product = $('#view_product'),
        $view_company = $('#view_company');
        // 각 부분의 정보를 받아오기위한 변수 선언
    $view_estimate.removeClass('on');
    $view_state.removeClass('on');
    $view_product.removeClass('on');
    $view_company.removeClass('on');
    // 모든 화살표 클래스를 삭제함
    $header.addClass('out')
        .addClass('mobileOut');
    if(scroll <= $banner.offset().top + 100) {
        // 최상단이 이면
        $header.removeClass('mobileOut');    
    }
    if (scroll >= $('#estimate').offset().top - 1) {
        // 견적 문의를 가르킴
        $view_estimate.addClass('on');
	} else if (scroll >= $('#system_state').offset().top - 1) {
        // 설비 현황을 가르킴
        $view_state.addClass('on');
	} else if(scroll >= $('#intro_product').offset().top - 1) {
        // 제품 소개를 가르킴
        $view_product.addClass('on');
	} else if(scroll >= $('#intro_company').offset().top - 1) {
        // 회사 소개를 가르킴
        $view_company.addClass('on');
    } else { $header.removeClass('out'); }
    // 각 높이에 맞는 상태 설정(소수점으로 표현되는 경우도 있기 때문에 1을 빼서 확실하게 셋팅)

    if (scroll >= $('#estimate').offset().top - $(window).height()) {
        // 견적문의 상위 일정 부분에 도달하면(아래로 내리면)
        if(count == false) {
            var percent = 95 + Math.floor(Math.random() * 5); // 현재 시간에 맞는 배열 값 + 랜덤 값으로 최대 5까지
            // 시간에 따라 다른 퍼센트를 셋팅함
            count = countUp(percent); // 그 후 퍼센트만큼 숫자를 올리고
            moveUp(); // 아래 상호작용 메뉴를 나타나게 함
        }
    }
    else {
        // 견적문위 상위 일정부분에서 벗어나면(위로 올리면)
        if(count) {
            moveDown(); // 상호작용 메뉴를 사라지게 하고
            countUp(0); // 퍼센트를 0퍼센트로 설정
            count = false;
        }
    }

    /* 모바일에서 헤더를 컨트롤하기 위한 부분 */
    delta -= preScroll - scroll; // 전의 스크롤과 현재 스크롤의 차이를 저장
    
    if($(window).width() >= 900 || delta < 0) delta = 0; // 모바일 화면이 아니거나 최대치를 넘어설 경우 원위치
    if(delta > 70) delta = 70; // 최대치를 넘어설 경우 원위치
    $header.css({'transform':'translateY('+ -delta +'px)'});
    preScroll = scroll; // 이전의 스크롤 값 저장
}

var eventHorizontalScroll = function(e) {
    // 수평 이동을 위한 함수(제품 소개 파트에서)
    var event = e.originalEvent; // 마우스 스크롤 정보를 받아옴
    var pre = $(this).scrollLeft(); // 이전의 스크롤 위치
    if(event.detail) { // 파이어 폭스에서만 실행
        // $(this).scrollLeft(event.detail * 40 + pre);
        $(this).stop().animate({scrollLeft: event.detail * 5 * 40 + pre}, 300);
    } else { // 그 외의 브라우저
        // $(this).scrollLeft(-event.wheelDelta + pre);
        $(this).stop().animate({scrollLeft: event.wheelDelta * -5 + pre}, 300);
    }
     // 애니메이션 효과로 일정 크기만큼 이동
    e.preventDefault(); // 이전에 입력된(연속된) 스크롤 함수 제거
}

var agree_possible = false; // 개인정보 동의가 되었는지 안 되었는지
var personalInformationScroll = function(e) {
    // 개인정보 동의 버튼을 활성화시키기위한 스크롤 인식 함수
    if (agree_possible == false) {
        var doc = $(this);
        var scroll_height = doc.prop('scrollHeight'); // 개인정보부분의 스크롤 전체 높이
        var scroll_pos = doc.scrollTop() + doc.height(); // 스크롤의 현재 아래 높이 = 스크롤의 위쪽 높이 + 현재 보이는 부분의 높이
        if(scroll_pos >= scroll_height - 20) {
            // 스크롤의 높이가 전체 스크롤의 높이와 같으면
            doc.siblings('input') // 비활성화 되어있던 동의 버튼을 활성화 시킴
                .removeClass('disable') // 형제 요소 제거
                .removeAttr('disabled'); // 비활성화 제거
            agree_possible = true;
        }
    }
}