function validate(evt) {
   
    let a = document.forms["myForm"]["name"].value;
    
    if (a == "" || a.toString().length < 5 ) {
    alert("Вкажіть ваше ім'я та ім'я не повинно бути менше 5 і не більше 6 символів");
    return false; 
    }
    
    let с = document.forms["myForm"]["email"].value;
    function validateEmail(email) { 
        var с = /\S+@\S+\.\S+/; if(с.test(email) == false){
            alert('E-mail не правильний!') 
    } 
    }
    //alert(validateEmail(с));
    if (с == "") {
    alert("Вкажіть ваш Е-майл");
    return false;
    }
    let d = document.forms["myForm"]["message"].value;
    if (d == "" || d.toString().length < 5 || d.toString().length > 200) {
    alert("Вкажіть Текст не менш 10 і не більше 200");
    return false;
    };
    // Проверка фото    
    // var _URL = window.URL || window.webkitURL;
    // var file = document.getElementById('file');
    // var img;
    // if ((file = this.files[0])) {
    // alert(file);
    // img = new Image();
    // img.onload = function() {
    //     alert(this.width + " " + this.height);
    // };
    // img.onerror = function() {
    //     alert( "not a valid file: " + file.type);
    // };
    // img.src = _URL.createObjectURL(file);
    // }       
}