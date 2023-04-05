function showCookies() {
    var cookies = document.cookie.split(';');
    var tab = document.getElementById('table')
    for(var i = 0; i < cookies.length; i++) {
      var name = cookies[i].split('=')[0].trim();
      var value = cookies[i].split('=')[1].trim();
      var tr = document.createElement('tr');
      var td1 = document.createElement('td')
      td1.innerText = name 
      var td2 = document.createElement('td')
      var input = document.createElement('input')
      input.type = "text";
      input.defaultValue = value
      td2.appendChild(input)

      var td3 = document.createElement('td')
      var btn1 = document.createElement('button')
      btn1.innerText = "delete";
      btn1.addEventListener("click", () => {
        deleteCookie(name)
      })
      var btn2 = document.createElement('button')
      btn2.innerText = "edit";
      btn2.addEventListener("click", () => {
        setCookie(name, input.value, 10);
      })
      
      td3.appendChild(btn1)
      td3.appendChild(btn2)
      tr.appendChild(td1);
      tr.appendChild(td2);
      tr.appendChild(td3);
      tab.appendChild(tr);
    }
}

function addCookie() {
  var name = document.getElementById("name").value
  var value = document.getElementById("value").value
  var days = parseInt(document.getElementById("days").value);
  setCookie(name, value, days);
}

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + ';' + expires + "; path=/";
    window.location.reload();
}

function deleteCookie(name) {
  console.log(5)
  document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  window.location.reload();
}

showCookies()


