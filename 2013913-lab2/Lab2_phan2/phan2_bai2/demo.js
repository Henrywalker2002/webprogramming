function isFloat(str) {
    let pattern = /^-?\d*(\.\d+)?$/;
    if (!str.match(pattern)) return false;
    let val = parseFloat(str);
    return true;
}

function MMath(op) {
    var r = document.getElementById("result");
    var n = document.getElementById("num");
    if (isFloat(r.value)) {var result = parseFloat(r.value)} 
    else {alert("First number error! Please input again!"); document.getElementById("result").value = ''; return false;};

    if (isFloat(n.value)) {var num = parseFloat(n.value)} 
    else {alert("Second number error! Please input again!"); document.getElementById("num").value = ''; return false;};

    if (isNaN(result) || isNaN(num)) {alert("Please input number!"); return false;} 
    
    if (op == '+') {
        document.getElementById("result").value = result + num;
        document.getElementById("num").value ='';
    }
    else if (op == '-') {
        document.getElementById("result").value = result - num;
        document.getElementById("num").value ='';
    }
    else if (op == '*') {
        document.getElementById("result").value = result * num;
        document.getElementById("num").value ='';
    }
    else if (op == '/') {
        document.getElementById("result").value = result / num;
        document.getElementById("num").value ='';
    }
    else if (op == '^') {
        document.getElementById("result").value = Math.pow(result, num);
        document.getElementById("num").value ='';
    }
}

function C() {
    document.getElementById("result").value = '';
    document.getElementById("num").value ='';  
}