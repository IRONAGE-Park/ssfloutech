function countUp(percent) {
    /* 퍼센트 상승(그래프 효과 추가) 소스코드 */
    var $el = $("#responRate"); // 적용(숫자를 올리는 변화)시킬 객체를 받아옴)
    var rn = percent; // 매개변수로 받은 퍼센트
    $({ val : 0 }).animate({ val : rn }, {
        duration: 1500, // 1.5초 동안
        step: function() {
            var percent = "%";
            $el.text(String(Math.floor(this.val)).concat(percent));
        },
        complete: function() {
            var percent = "%";
            $el.text(String(Math.floor(this.val)).concat(percent));
        } // 계속해서 숫자를 변화시킴
    });
    $('.rate').css('width', 'calc(' + percent + '% - 20px)'); // 애니메이션 효과가 적용된 그래프 바의 크기 변경
    return true;
}

function moveUp() {
    /* 견적 문의에서 상호작용 메뉴의 애니메이션을 위한 함수 */
    var $el = $('.block'); // 상호작용 블록의 정보를 모두(3개) 받아옴
    var sequence = Array(0, 1, 2); // 올라올 순서
    $({val : 0}).animate({val : 2}, {
        duration: 700, // 0.7초 간격으로
        step: function() {
            $el.eq(sequence[Math.floor(this.val)]).css({'opacity': '1.0',
                            'transform': 'translateY(-200px)'});
        },
        complete: function() {
            $el.eq(sequence[Math.floor(this.val)]).css({'opacity': '1.0',
                            'transform': 'translateY(-200px)'});
        } // 한 개씩 상자를 보여주면서 상승시킴
    });
}

function moveDown() {
    /* 견적 문의에서 상호작용 메뉴의 애니메이션을 위한 함수 */
    var $el = $('.block'); // 상호작용 블록의 정보를 모두(3개) 받아옴
    var sequence = Array(2, 1, 0); // 내려갈 순서
    $({val : 0}).animate({val : 2}, {
        duration: 700, // 0.7초 간격으로
        step: function() {
            $el.eq(sequence[Math.floor(this.val)]).css({'opacity': '0',
                            'transform': 'translateY(0px)'});
        },
        complete: function() {
            $el.eq(sequence[Math.floor(this.val)]).css({'opacity': '0',
                            'transform': 'translateY(0px)'});
        } // 한 개씩 상자를 사라지게 하면서 하강시킴
    });
}