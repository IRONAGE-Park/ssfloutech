function open_search() {
    $('#search-wrap').removeClass('invisible');
    $('#search-input').focus();
}
function close_search() {
    $('#search-wrap').addClass('invisible');
}

$(document).ready(function () {

    $(".hamburger").click(function () {
        $(".sidebar").toggleClass("is-active");
        $(".shade").toggleClass("is-active");
    });
    $(".shade").click(function () {
        $(this).toggleClass("is-active");
        $(".sidebar").toggleClass("is-active");
    });
    let input_product_search = document.querySelector('#product-search')
    let search_result = document.querySelector('#search-result')
    input_product_search.addEventListener('keyup', function (e) {
        $.ajax({
            url: "/main/prolist.php", // 클라이언트가 요청을 보낼 서버의 URL 주소
            data: { find_word: e.target.value },                // HTTP 요청과 함께 서버로 보낼 데이터
            type: "GET",                             // HTTP 요청 방식(GET, POST)
            dataType: "html"                       // 서버에서 보내줄 데이터의 타입
        })
        // HTTP 요청이 성공하면 요청한 데이터가 done() 메소드로 전달됨.
        .done(function(data) {
            search_result.innerHTML = data;
        })
        // HTTP 요청이 실패하면 오류와 상태에 관한 정보가 fail() 메소드로 전달됨.
        .fail(function(xhr, status, errorThrown) {

        })
        // HTTP 요청이 성공하거나 실패하는 것에 상관없이 언제나 always() 메소드가 실행됨.
        .always(function(xhr, status) {

        });
    })

});