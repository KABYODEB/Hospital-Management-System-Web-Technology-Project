function Search(){
    let src = document.getElementById("search").value;
    let xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() {
  
               if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("patient").innerHTML =this.responseText;
               }
  
               else
               {
                   document.getElementById("patient").innerHTML = this.status;
               }
             };
             xhttp.open("POST", "../controller/SearchCheck.php", true);
             xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
             xhttp.send("Search="+src);
            }
  
  