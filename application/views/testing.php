<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>TESTING</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <a href='#' onclick="tambah_form(); return false;" >Add</a>
      <a href='#' onclick="kurangi_form(); return false;">Remove</a>
      <form method="post" action="">
          <table id="formku">
              <tr><td><input type="text" name="inputan[]"></td></tr>
          </table>
      <input type="submit" name="ok" value="Submit">
      </form>
    </div>
    <div class="row mt-30">
       <a href='#' onclick="testing_form(); return false;" >Tambah</a>
       <form id="form_dua" class="form-horizontal">
         <div class="form-group row">
           <input type="text" name="jawaban[]">
         </div>
       </form>
    </div>
  </div>


</body>
<script>
function tambah_form(){
    var target=document.getElementById("formku");
    var tabel_row=document.createElement("tr");
    var tabel_col=document.createElement("td");
    var radio=document.createElement("input");
    var tambah=document.createElement("input");
    var button=document.createElement("input");
    target.appendChild(tabel_row);
    tabel_row.appendChild(tabel_col);
    tabel_col.appendChild(radio);
    tabel_col.appendChild(tambah);
    tabel_col.appendChild(button);
    radio.setAttribute('type','radio');
    tambah.setAttribute('type','text');
    tambah.setAttribute('name','inputan[]');
    tambah.setAttribute('placeholder','tuliskan jawaban');
    button.setAttribute('type','button');
    button.setAttribute('value','+');
}
function kurangi_form(){
    var target=document.getElementById("formku");
    var akhir=target.lastChild;
    target.removeChild(akhir);
}
function testing_form(){
  var target=document.getElementById("form_dua");
  var div=document.createElement("div");
  var div_dua=document.createElement("div");
  var text=document.createElement("input");
  target.appendChild(div);
  div.appendChild(text);
  target.appendChild(div_dua);
  div.setAttribute('class','form-group row');
  div_dua.setAttribute('class','line');
  text.setAttribute('type','text');
}
 
</script>
</html>