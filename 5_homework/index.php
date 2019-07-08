<style>
  .main{
    margin: 5% auto;
    text-align: center;
    width: 500px;
    font-family: 'Microsoft JhengHei';
    border-radius: 12px;
   
  }
  .data{
    text-align: left;
    border: #999 solid 3px;
    border-radius: 0.3rem;
    padding: 5px 20px;
    margin-bottom: 30px;
    padding: 0 10%;
  }

</style>

<div class="main">
  <h1>Vcard_嘟~嘟嚕~!</h1>
  
  <form method="post" action="api.php" enctype="multipart/form-data">
    <div class="data">
    <p>NAME / <input type="text" name="user" value="三峽甲斯丁"></p>
    <p>OCCUPATION / <input type="text" name="title" value="筋曲歌王"></p>
    <span style="vertical-align:top">SKILL / </span>
    <textarea name="skill" cols="30" rows="10">POP/R&B/RAP/HIP-HOP/EDM/台語歌/客語歌/經典老歌</textarea>
    <p>E-MAIL / <input type="text" name="email" value="justing_beer@gamil.com"></p>
    <p>MOBILE / <input type="text" name="phone" value="0437-111-487"></p>
    <hr>
    <p>PHOTO / <input type="file" name="pic"></p>
    <p>LAYOUT STYLE / <select name="layout">
      <option value="color1" selected>STYLE1</option>
      <option value="color2">STYLE2</option>
      <option value="color3">STYLE3</option>
    </select></p>
    </div>
  <input type="submit" value="PREVIEW">  
  </form>
  
</div>









<!-- <style>
   .main {
    margin: 5% auto;
    text-align: center;
    width: 400px;
  }
  .data {
    text-align: left;
    padding: 0 20px;
    border: #000 2px solid;
    margin-bottom: 20px;
  }
  .data p{
    min-width:300px;
    }
</style>

<div class="main">
<h1>vCard產生器</h1>
<form method="post" action="1_check.php?get=123&var=456">
  <p>帳號:<input type="text" name="acc"></p>
  <p>密碼:<input type="password" name="pwd"></p>
  <p>生日:<input type="date" name="birth"></p>
  <p>信箱:<input type="email" name="mail"></p>
  <p>電話:<input type="number" name="phone"></p>
  <p>國籍:
    <select name="country" id="">
      <option value="tw">台灣</option>
      <option value="jp">日本</option>
      <option value="hk">香港</option>
    </select></p>
  <p>性別:
    <input type="radio" name="gender" value="man">男生
    <input type="radio" name="gender" value="woman">女生
  </p>
  <p>專長:
    <input type="checkbox" name="skill[]" value="網頁">網頁開發
    <input type="checkbox" name="skill[]" value="設計">平面設計
    <input type="checkbox" name="skill[]" value="資料庫">資料庫處理
  </p>
  <p>簡介:
    <textarea name="about" cols="30" rows="10"></textarea>
  </p>


  <input type="submit" value="資料送出">
  <input type="reset" value="重置">
</form>

</div> -->