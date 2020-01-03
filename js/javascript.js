function to() {
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("right").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","tochuyenmon.php", true);
        xmlhttp.send();
	}