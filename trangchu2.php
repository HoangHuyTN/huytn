<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
<!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
    <title>ADMIN</title>
</head>
<body>
  <div>
    <style type="text/css">
      * {
  margin: 0;
  padding: 0;
}
.button {
  -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
  -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
  box-shadow:inset 0px 1px 0px 0px #ffffff;
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
  background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
  background-color:#ededed;
  -webkit-border-top-left-radius:6px;
  -moz-border-radius-topleft:6px;
  border-top-left-radius:6px;
  -webkit-border-top-right-radius:6px;
  -moz-border-radius-topright:6px;
  border-top-right-radius:6px;
  -webkit-border-bottom-right-radius:6px;
  -moz-border-radius-bottomright:6px;
  border-bottom-right-radius:6px;
  -webkit-border-bottom-left-radius:6px;
  -moz-border-radius-bottomleft:6px;
  border-bottom-left-radius:6px;
  text-indent:0;
  border:1px solid #dcdcdc;
  display:inline-block;
  color:#777777;
  font-family:Times New Roman;
  font-size:15px;
  font-weight:normal;
  font-style:normal;
  height:25px;
  line-height:25px;
  width:100px;
  text-decoration:none;
  text-align:center;
  text-shadow:1px 1px 0px #ffffff;
}
.button:hover {
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
  background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
  background-color:#dfdfdf;
}.button:active {
  position:relative;
  top:1px;
}
/* This button was generated using http://tools.ngoisaoso.vn/css3button/ */


#menu {
        font-size: 15px;
    color: white;
    padding: 5px 5px 0 5px;
    background-color: #FF6600;
    height: 30px;
    top: 89px;
    right: 0px;
   text-align: right;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}
#menu a{
  color: white;
  padding: 5px;
  text-decoration: none;
  text-align: center;
  
  right: 5px;

}
.h1{
  font-family: arial;
  width: 300px;
  height: 50px;
  padding-left: 10px;
  font-size: 20px;
  font-weight: bold;
  text-align: justify;
}
.h2{
    font-family: arial;
  width: 700px;
  height: 150px;
  padding-left: 10px;
  font-size: 18px;
  text-align: justify;
  padding-top: 5px;
}
#news-block-title {
    font-size: 18px;
        border-bottom: 1px solid #cd2122;
        position: relative;
        left: 300px;
        font-size: 30px;
        top: 50px;

}
p{
  padding-top: 10px;
  font-size: 16px;
  font-weight: normal;
}
.a3{
  font-size: 20px;
  text-decoration: none;
  font-style: bold;
  color: black;
  font-size: 20px;
}
.a3:hover{
  color: #CD2122;
}
.tr{
      margin: 0 0 30px;
    overflow: hidden;
    list-style-type: none;
}
    </style>
    <div align="center">
        <a href="">
            <img src="img/logo.png">
        </a>
    </div>
<div id="menu">
    
    <a href="trangchu2.php">Trang Chủ</a>
    |
    <a href="view/quanlysinhvien.php">Quản lý sinh viên</a>
    |
     <a href="view/quanlymonhoc.php">Quản lý môn học</a>
    |
    
      Bạn là ADMIN -
    <a href="login.php">thoát</a>
    

</div>
</div>
<div >
<span style="z-index: -1; " id="news-block-title">TIN TỨC SỰ KIỆN</span>

<div align="center" style="padding-top: 20px">
  <table style="position: relative; top: 80px;" width="1000px">

     <tr>
      <td class="" rowspan="2"><img height="250px" src="http://utt.edu.vn/uploads/file-manager/images/BOTT0572(1).jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://utt.edu.vn/utt/tin-tuc/hoat-dong-sinh-vien/co-mot-utt-than-thuong-nhu-the-a14252.html">
      Có một UTT thân thương như thế...!</a>
        
                      <p>24/06/2022</p>
</td >
      <tr><td class="h2" >Một ngày nắng đẹp, ta muốn quay lại cảm giác một ngày làm sinh viên năm ấy. Những kỷ niệm, những ký ức về khoảng trời tươi đẹp, trọn vẹn trong những cung bậc cảm xúc. Các bạn có thấy thời sinh viên của mình trong từng bức ảnh không? Một điều duy nhất chúng mình muốn chia sẻ với các bạn rằng, hãy trân trọng...</td></tr>
    </tr>
    <tr class="tr">
      <td class="" rowspan="2"><img height="250px" src="https://utt.edu.vn/uploads/file-manager/images/gap-mat-hsg-2022-03.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://utt.edu.vn/utt/tin-tuc/cong-doan-truong/tin-tuc-cong-doan/gap-mat-tuyen-duong-khen-thuong-cac-chau-la-con-cbvcnld-nha-truong-dat-thanh-tich-cao-trong-hoc-tap-nam-hoc-2021-2022-a14243.html">
      Gặp mặt tuyên dương khen thưởng các cháu là con CB,VC,NLĐ Nhà trường đạt thành tích cao trong học tập năm học 2021-2022</a>
        
                      <p>22/06/2022</p>
</td >
      <tr><td class="h2" >Sáng ngày 22/6/2022, Công đoàn Trường Đại học Công nghệ GTVT đã tổ chức buổi gặp mặt tuyên dương, khen thưởng các cháu là con cán bộ, viên chức, người lao động Nhà trường đã đạt thành tích cao trong học tập năm học 2021-2022...</td></tr>
    </tr>

   
<tr>
      <td class="" rowspan="2"><img height="250px" src="http://utt.edu.vn/uploads/file-manager/images/ra-mat-clb-logistic-2022-01.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://utt.edu.vn/utt/tin-tuc/hoat-dong-sinh-vien/le-ra-mat-cau-lac-bo-logistics-va-toa-dam-cung-doanh-nghiep-ve-thuong-mai-dien-tu-a14211.html">
      Lễ ra mắt Câu lạc bộ Logistics và Toạ đàm cùng doanh nghiệp về thương mại điện tử</a>
        
                      <p>05/06/2022</p>
</td >
      <tr><td class="h2" >Ngày 4/6/2022, Trường Đại học Công nghệ GTVT đã tổ chức lễ ra mắt Câu lạc bộ Logistics (LCU). Đây là sự kiện nằm trong chuỗi hoạt động mạng lưới Câu lạc bộ Logistics Sinh viên Việt Nam (LCN) nhằm gắn kết các bạn sinh viên có cùng niềm đam mê về Logistics và Chuỗi cung ứng...</td></tr>
    </tr>

<tr>
      <td class="" rowspan="2"><img height="250px" src="http://utt.edu.vn/uploads/file-manager/images/doi-thoai-sv-utt-2022-00.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://utt.edu.vn/utt/tin-tuc/hoi-nghi-gap-go-doi-thoai-giua-sinh-vien-voi-lanh-dao-nha-truong-nam-hoc-2021-2022-a14174.html">
      Hội nghị gặp gỡ đối thoại giữa sinh viên với Lãnh đạo Nhà trường năm học 2021-2022</a>
        
                      <p>31/05/2022</p>
</td >
      <tr><td class="h2" >Sáng 31/5, Trường Đại học Công nghệ GTVT đã tổ chức Hội nghị gặp gỡ đối thoại giữa sinh viên với Lãnh đạo Nhà trường năm học 2021-2022. PGS.TS Nguyễn Hoàng Long, Hiệu trưởng Nhà trường chủ trì Hội nghị...</td></tr>
    </tr>
  </table>
</div>
</div>
</body>
</html>