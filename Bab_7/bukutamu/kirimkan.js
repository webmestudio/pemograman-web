var http_request = false;
	function makePOSTRequest(url, parameters) {
	http_request = false;
	if (window.XMLHttpRequest) { // Mozilla, Safari,dst
	http_request = new XMLHttpRequest();
	if (http_request.overrideMimeType) {
	// Mengeset tipe sesuai konten yang diinginkan 
	http_request.overrideMimeType('text/html');
	}
	} else if (window.ActiveXObject) { // IE
	try {
	//menentukan jenis objek XMLHttpRequest sesuai browser.
	http_request = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	try {
	http_request = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (e) {}
	}
	}
	if (!http_request) {
	alert('Tidak bisa membuat instance XMLHTTP');
	return false;
	}

	http_request.onreadystatechange = alertContents;
	http_request.open('POST', url, true);
	http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http_request.setRequestHeader("Content-length", parameters.length);
	http_request.setRequestHeader("Connection", "close");
	http_request.send(parameters);
	}

	function alertContents() {
	if (http_request.readyState == 4) {
	if (http_request.status == 200) {
	//alert(http_request.responseText);
	result = http_request.responseText;
	document.getElementById('informasi').innerHTML = result;
	} else {
	alert('Ada yang error.');
	}
	}
	if (http_request.readyState == 3) {
	document.getElementById('informasi').innerHTML = "loading…";
	}

	}

	function get(obj) {
	var poststr ="idnama=" + encodeURI( document.getElementById("idnama").value ) +
	"&idemail=" + encodeURI( document.getElementById("idemail").value ) +
	"&idasal=" + encodeURI( document.getElementById("idasal").value ) +
	"&idhomepage=" + encodeURI( document.getElementById("idhomepage").value ) +
	"&idkomentar=" + encodeURI( document.getElementById("idkomentar").value );
	makePOSTRequest('masukkan.php', poststr);
	}
