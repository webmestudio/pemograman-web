//library untuk mempermudah mengambil data 
//dari xmlhttprequest
var objekXHR=false;
// kode di bawah ini untuk membuat objekXHR
function permintaanAJAX(namaFile) {
   try {
    // Untuk  Firefox  IE7 dan lainnya
    objekXHR= new XMLHttpRequest();
   } catch (error) {
    try {
      // untuk  IE 5 dan IE 6
      objekXHR = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (error) {
      return false;
    }
   }
   //untuk mengambil data dari nama file
   objekXHR.open("GET", namaFile);
   objekXHR.onreadystatechange = responAJAX;
   objekXHR.send(null);
}
// responAJAX: menunggu respon dan 
//jika sukses akan memanggil fungsi jikaSukses()
function responAJAX() {
   if (objekXHR.readyState !=4) return;
   if (objekXHR.status==200) {
      // jika request sukses
	  kaloSukses();
   } else alert("Request gagal: " + objekXHR.statusText);
   return true;
}