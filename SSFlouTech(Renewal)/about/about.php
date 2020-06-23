<?php
  include "../INC/header.php";
  $conf_tbanner['title'] = '회사소개';
  $conf_tbanner['images'] = 'about.png';
  include "../INC/top_banner.php";
?>
<table class="about-wrap" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">
      <table width="95%" style="max-width: 1374px;" class="about-intro">
        <tr height="150"></tr>
        <tr>
          <td class="about-content">
            <div class="about-content-box">
              <img class="about-content-blogo" src="../img/logo/logo.svg">
              <div class="about-content-btext">
                (주) 에스에스플로텍
              </div>
            </div>
          </td>
          <td class="about-content">
            <div class="about-content-box">
              <div class="about-content-stext">
                <div class="about-content-stext-top">
                  (주)에스에스플로텍은<br>
                  테프론 · 세라믹 코팅 전문 회사입니다.
                </div>
                <div class="about-content-stext-mid">
                  에스에스플로텍은 풍부한 실무경험과 노하우를 보유한<br>
                  엔지니어들이 결집하여 출범한 업체입니다.<br>
                  산업전반에 산재한 여러가지 문제점들을<br>
                  테프론 · 세라믹 코팅 분야의 기술로 해결해 나가고 있습니다.<br>
                  에스에스플로텍만의 기술로 원가절감, 품질향상 및 신제품 개발의<br>
                  고부가가치 생산성을 경험하십시오.
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr height="150"></tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="center">
      <table width="95%" style="max-width: 1374px;" class="about-summary">
        <tr>
          <td colspan="2" class="about-title">
            한 눈에 보는 에스에스플로텍
          </td>
        </tr>
        <tr>
          <td class="about-summary-element">
            <div class="about-summary-image" style="background-image: url('../img/skill.png');">
              <div class="about-summary-title">정밀 코팅 기술력</div>
            </div>
            <div class="about-summary-text">
              <div class="about-summary-stitle">반도체 부문 정밀 코팅</div>
              <div class="about-summary-stext">
                정밀 코팅 기술력을 바탕으로 반도체 부문까지
                적용하여 제품의 차별화를 구축합니다.
              </div>
            </div>
          </td>
          <td class="about-summary-element">
            <div class="about-summary-image" style="background-image: url('../img/tefron.png');">
              <div class="about-summary-title">테프론 · 세라믹</div>
            </div>
            <div class="about-summary-text">
              <div class="about-summary-stitle">
                열경화성 코팅/동남권 유일 ETFE 작업
              </div>
              <div class="about-summary-stext">
                PTFE / FEP / PFA  작업 및 테프론 세라믹 코팅 
                동남권 유일의 ETFE  작업
                에스에스플로텍의 기술입니다.
              </div>
            </div>
          </td>
          <td class="about-summary-element">
            <div class="about-summary-image" style="background-image: url('../img/knowhow.png');">
              <div class="about-summary-title">20년 노하우</div>
            </div>
            <div class="about-summary-text">
              <div class="about-summary-stitle">
                축적된 경험과 안정성
              </div>
              <div class="about-summary-stext">
                20년간 수많은 고객과 함께한 경험을 바탕으로
                뛰어난 제품 생산성을 제공합니다.
              </div>
            </div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="center">
      <table width="95%" style="max-width: 1374px;" class="about-position">
        <tr>
          <td colspan="2" class="about-title">
            찾아오시는 길
          </td>
        </tr>
        <tr>
          <td>
            <!-- CONTACT-US KAKAO MAP API -->
            <div class="contact-us-kakao-map-wrap">
              <div id="contact-us-kakao-map"></div>
              <!-- 지도 확대, 축소 컨트롤 div 입니다 -->
              <div class="custom_zoomcontrol radius_border">
                <span onclick="zoomIn()"><img src="https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/ico_plus.png"
                    alt="확대"></span>
                <span onclick="zoomOut()"><img src="https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/ico_minus.png"
                    alt="축소"></span>
              </div>
            </div>
          </td>
          <td>
            <div class="about-position-text">
              경상남도 김해시 김해대로 1402번길 37<br>
              경상남도 김해시 한림면 신천리 900-3
            </div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr height="100"></tr>
</table>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=ca1e5d6a161cacfa0aa90a97d6f8c9d1"></script>
<script>
  var container = document.getElementById('contact-us-kakao-map'); //지도를 담을 영역의 DOM 레퍼런스
  var options = { //지도를 생성할 때 필요한 기본 옵션
    center: new kakao.maps.LatLng(35.27509232296432, 128.82484233856476), //지도의 중심좌표.
    level: 3 //지도의 레벨(확대, 축소 정도)
  };
  var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴
  map.addOverlayMapTypeId(kakao.maps.MapTypeId.HYBRID);
  function zoomIn() {
    map.setLevel(map.getLevel() - 1);
  }
  // 지도 확대, 축소 컨트롤에서 축소 버튼을 누르면 호출되어 지도를 확대하는 함수입니다
  function zoomOut() {
    map.setLevel(map.getLevel() + 1);
  }
  var marker = new kakao.maps.Marker({
    // 지도 중심좌표에 마커를 생성합니다 
    position: map.getCenter(),
  });
  // 지도에 마커를 표시합니다
  marker.setMap(map);
  var iwContent = '<div style="width: 150px; padding:5px; text-align: center;">에스에스플로텍</div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwPosition = new kakao.maps.LatLng(35.27509232296432, 128.82484233856476); // 인포윈도우 표시 위치입니다
  // 인포윈도우를 생성합니다
  var infowindow = new kakao.maps.InfoWindow({
    position: iwPosition,
    content: iwContent
  });
  // 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
  infowindow.open(map, marker);
</script>

<?php include "../INC/footer.php"; ?>