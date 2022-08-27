function CheckMail(){
  let mail = document.getElementById("email").value;
  
  let xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
               document.getElementById("ErrMail").innerHTML =this.responseText;
             }
             else
             {
                 document.getElementById("ErrMail").innerHTML = this.status;
             }
            
           };
           xhttp.open("POST", "../controller/EmailAjax.php", true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send("Email="+mail);
          }