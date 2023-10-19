function search_info(){

    var loader = document.getElementById("loading");
    document.getElementById("loading").style.display = 'block';
    var id = document.getElementById("search").value;
    var stu_photo = document.getElementById("student_photo");
    var stu_firstname = document.getElementById("firstname");
    var stu_middlename = document.getElementById("middlename");
    var stu_lastname = document.getElementById("lastname");
    var stu_email = document.getElementById("email");
    var stu_birthday = document.getElementById("birthday");
    var stu_age = document.getElementById("age");
    var stu_emer = document.getElementById("emer");
    var par_firstname = document.getElementById("parentfirstname");
    var par_lastname = document.getElementById("parentlastname");
    var par_phone = document.getElementById("workphone");
    
    var xml = new XMLHttpRequest;

    xml.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
           var reply = JSON.parse(this.responseText);
           stu_photo.src = reply[0];
           stu_firstname.value = reply[1];
           stu_middlename.value = reply[2];
           stu_lastname.value = reply[3];
           stu_email.value = reply[4];
           stu_age.value = reply[5];
           stu_birthday.value = reply[6];
           stu_emer.value = reply[7];
           par_firstname.value = reply[8];
           par_lastname.value = reply[9];
           par_phone.value = reply[10];
           loader.style.display = "none";
        }
    }
  
    xml.open("GET","db.php?id="+id,true);
    xml.send();


}