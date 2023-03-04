function validateForm() {
    const firstName = document.getElementById("first-name").value;
    const lastName = document.getElementById("last-name").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const day = document.getElementById("day").value;
    const month = document.getElementById("month").value;
    const year = document.getElementById("year").value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const country = document.getElementById("country").value;
    const about = document.getElementById("about").value;
  
    const errorMsg = document.getElementById("error-msg");
    errorMsg.innerHTML = "";
  
    if (firstName.length < 2 || firstName.length > 30) {
      errorMsg.innerHTML = "Họ phải có từ 2 đến 30 kí tự";
      return false;
    }
  
    if (lastName.length < 2 || lastName.length > 30) {
      errorMsg.innerHTML = "Tên phải có từ 2 đến 30 kí tự";
      return false;
    }
  
    const emailRegex = /\S+@\S+\.\S+/;
    if (!emailRegex.test(email)) {
      errorMsg.innerHTML = "Email không hợp lệ";
      return false;
    }
  
    if (password.length < 2 || password.length > 30) {
      errorMsg.innerHTML = "Mật khẩu phải có từ 2 đến 30 kí tự";
      return false;
    } 

    var date = year +'-' + month + '-' + day;
    if (!isValidDate(date)) {
      errorMsg.innerHTML = "Ngày sinh không hợp lệ";
      return false;
    }
  
    if (!gender) {
      errorMsg.innerHTML = "Vui lòng chọn giới tính";
      return false;
    }
  
    if (!country) {
      errorMsg.innerHTML = "Vui lòng chọn quốc gia";
      return false;
    }
  
    if (about.length > 10000) {
      errorMsg.innerHTML = "Giới hạn 10000 kí tự cho phần thông tin thêm";
      return false;
    }
  
}
  
function isValidDate(dateString) {
  var regEx = /^\d{4}-\d{2}-\d{2}$/;
  if(!dateString.match(regEx)) return false;  // Invalid format
  var d = new Date(dateString);
  var dNum = d.getTime();
  if(!dNum && dNum !== 0) return false; // NaN value, Invalid date
  return d.toISOString().slice(0,10) === dateString;
}