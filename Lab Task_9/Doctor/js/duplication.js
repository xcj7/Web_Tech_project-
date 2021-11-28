
// function showHint(str) {
//   if (str.length == 0) {
//     document.getElementById("txtHint").innerHTML = "";
//     return;
//   } else {
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         document.getElementById("txtHint").innerHTML = this.responseText;
//       }
//     }
//     xmlhttp.open("GET", "emailduplicationcheck.php?q="+str, true);
//     //console.log(7);
//     xmlhttp.send();
//   }
// }




function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Model/emailduplicationcheck.php?q="+str,true);
    xmlhttp.send();
  }
}




function showUser_name(str) {
  if (str == "") {
    document.getElementById("txtHint_2").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_2").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Model/usernameduplication.php?q="+str,true);
    xmlhttp.send();
  }
}


function showUser_phonenumber(str) {
  if (str == "") {
    document.getElementById("txtHint_3").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_3").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Model/phonenumberduplication.php?q="+str,true);
    xmlhttp.send();
  }
}


function showUser_doctorid(str) {
  if (str == "") {
    document.getElementById("txtHint_4").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_4").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Model/doctoridduplication.php?q="+str,true);
    xmlhttp.send();
  }
}


function showUser_current_and_retype_password(str,str1) {
  if (str == "") {
    document.getElementById("txtHint_5").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_5").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Model/currentpassword and retype password can not be same.php?q="+str,true);
    xmlhttp.send();
  }
}