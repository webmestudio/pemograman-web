//Mengaktifkan getXmlHTTPrequest, coba pelajari buku Ajax.
function getXmlHttpRequestObject() {
 if (window.XMLHttpRequest) {
    return new XMLHttpRequest(); //Mozilla, Safari,dst
 } else if (window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP"); //IE
 } else {
    //Menampilkan Error jika browser tidak support AJAX
    alert("Browser anda tidak mendukung Ajax.");
 }
}

//menjadikan getXMLHttpRequest ke instance variabel bernama objekXHR
var objekXHR = getXmlHttpRequestObject();

//memulai request AJAX
function buatRequest(url, param) {
//jika readystate belum dimulai atau belum selesai, inisialisasi request baru
 if (objekXHR.readyState == 4 || objekXHR.readyState == 0) {
   //setup koneksi ke captcha_test.html (halman index) 
   objekXHR.open("POST", url, true);
   //Set fungsi yang akan dipanggil jika state dari objek XmlHttpRequest berubah
   objekXHR.onreadystatechange = updateHalaman; 

   objekXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   objekXHR.setRequestHeader("Content-length", param.length);
   objekXHR.setRequestHeader("Connection", "close");

   //Membuat request
   objekXHR.send(param);
 }   
}

//Dipanggil tiap kali kondisi state berubah
function updateHalaman() {
 //Mengecek apakah respon sudah benar
 if (objekXHR.readyState == 4) {
   //Mengeset konten elemen DIV dengan teks tertentu
   document.getElementById('hasil').innerHTML = objekXHR.responseText;
   //memanggil image captch a
   img = document.getElementById('imgCaptcha'); 
   //Mengubah image
   img.src = 'buat_gambar.php?' + Math.random();
 }
}

//JIka form berubah
function getParam(formNya) {
 //Memanggil URL
 var url = 'captcha.php';
 //Seting parameter panggilan  AJAX
 var postStr = formNya.txtCaptcha.name + "=" + encodeURIComponent( formNya.txtCaptcha.value );
 //Memanggil fungsi untuk AJAX request
 buatRequest(url, postStr);
}
