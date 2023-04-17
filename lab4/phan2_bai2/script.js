var table = document.getElementById("tab")

function createtd(e) {
    var tr = document.createElement('tr')
    tr.className = e.id 

    var td1 = document.createElement('td')
    td1.innerHTML = e.id
    tr.appendChild(td1)

    var td2 = document.createElement('td')
    td2.innerHTML = e.name
    tr.appendChild(td2)

    var td3 = document.createElement('td')
    td3.innerHTML = e.description
    tr.appendChild(td3)

    var td4 = document.createElement('td')
    td4.innerHTML = e.price
    tr.appendChild(td4)

    var btn1 = document.createElement('button')
    btn1.textContent = "edit"
    btn1.onclick = function handle(event) {
        edit(e.id)
    }

    var btn2 = document.createElement('button')
    btn2.textContent = "delete"
    btn2.onclick = function handle(event) {
        del(e.id)
    }

    var td5 = document.createElement('td')
    td5.appendChild(btn1)
    td5.appendChild(btn2)

    tr.appendChild(td5)

    table.appendChild(tr)
}

function edit(id) {
    window.location = "c.php?id=" + id 
}

function del(id) {
    
    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify({
    "id": id
    });

    var requestOptions = {
    method: 'DELETE',
    headers: myHeaders,
    body: raw,
    redirect: 'follow'
    };

    fetch("http://localhost", requestOptions)
    .then(response => response.text())
    .then(result => console.log(result))
    .catch(error => console.log('error', error))
    alert("ok")
    window.location.reload()
}

function add() {
    window.location = "b.php"
}

async function getData() { 
    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
    };
      
    res = await fetch("http://localhost", requestOptions)
    json = await res.json()
    var lst = json.map(e => createtd(e))   
}

$("#form").submit(async function(e) {
    e.preventDefault();
    var id = parseInt(document.getElementById('id').value)
    var name = document.getElementById('name').value
    var desc = document.getElementById("description").value
    var price = parseInt(document.getElementById("price").value)
    var image = document.getElementById("image").value

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify({
        "id": id,
        "name": name,
        "description": desc,
        "price": price,
        "image": image
    });

    var requestOptions = {
    method: 'POST',
    headers: myHeaders,
    body: raw,
    redirect: 'follow'
    };

    var res = await fetch("http://localhost", requestOptions)
    var json = await res.json()
    if (json.result == 'ok') {
        alert("ok")
        window.location.reload()
    }
    else {
        alert(json.message)
    }
});

function get(name){
    if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
       return decodeURIComponent(name[1]);
}

$('#formEdit').submit(async function(e) {
    e.preventDefault();
    var id = parseInt(get('id'));
    var name = document.getElementById('name').value
    var desc = document.getElementById("description").value
    var price = parseInt(document.getElementById("price").value)
    var image = document.getElementById("image").value

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify({
    "id": id,
    "name": name,
    "des": desc,
    "price": price,
    "image": image
    });

    var requestOptions = {
    method: 'PUT',
    headers: myHeaders,
    body: raw,
    redirect: 'follow'
    };

    var res = await fetch("http://localhost", requestOptions)
    var json = await res.json()
    if (json) {
        alert("ok")
        window.location.reload()
    }
    else {
        alert(json.message)
    }

})

getData()