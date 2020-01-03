function loaddulieu(str) {
  if (str == "") {
    document.getElementById("hienthi").innerHTML = "";
    return;
  } else { 

   if(window.XMLHttpRequest)
   {
    var xhttp = new XMLHttpRequest();}
    else
    {
      var xhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("hienthi").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "laydl.php?", true);
    xhttp.send();
  }
}