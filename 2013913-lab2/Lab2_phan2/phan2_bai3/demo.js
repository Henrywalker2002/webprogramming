function limitName(name, num1, num2) {
    var text = document.getElementById(name).value;
    var x = text.length;
    if (text.length < num1 || text.length > num2) {alert("Độ dài " + name + " không hợp lệ!"); return false;}
    return true;
} 

function checkmail() {
    var mail = document.getElementById("email").value;
    let pattern = /^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$/
    if (!mail.match(pattern)) {alert("email sai cấu trúc!"); return false;}
    return true;
}

function checkselect() {
    var day = document.getElementById("day").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    var country = document.getElementById("country").value;
    if (day == "") {alert("Bạn chưa chọn ngày sinh!"); return false;}
    if (month == "") {alert("Bạn chưa chọn tháng sinh!"); return false;}
    if (year == "") {alert("Bạn chưa chọn năm sinh!"); return false;}
    if (country == "") {alert("Bạn chưa chọn quốc gia!"); return false;}
    return true;
}

function checkradio() {
    var male = document.getElementById("male").checked;
    var female = document.getElementById("female").checked;
    var none = document.getElementById("none").checked;
    if (male == false && female == false && none == false) {alert("Bạn chưa chọn giới tính!"); return false;}
    return true;
}

function validateForm() {
    if (limitName("Firstname", 2, 30) 
    && limitName("Lastname", 2, 30)
    && checkmail()
    && limitName("password", 2, 30)
    && checkselect()
    && checkradio()
    && limitName("about", 0, 10000)
    ) alert("Complete!");
    
    else return false;
}

function reset() {
    document.getElementById("Firstname").value = '';
    document.getElementById("Lastname").value = '';
    document.getElementById("email").value = '';
    document.getElementById("password").value = '';
    document.getElementById("day").value = '';
    document.getElementById("month").value = '';
    document.getElementById("year").value = '';
    document.getElementById("male").checked = false;
    document.getElementById("female").checked = false;
    document.getElementById("none").checked = false;
    document.getElementById("country").value = '';
    document.getElementById("about").value = '';
}