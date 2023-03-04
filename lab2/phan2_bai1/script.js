count = 0

function createTable() {
    var tableContainer = document.getElementById("tableContainer");
    var table = document.createElement("table");
    var row, cell;

    row = document.createElement("tr");
    cell = document.createElement("td");
    cell.textContent = count;
    count++;
    row.appendChild(cell);
    cell = document.createElement("td");
    cell.textContent = count;
    count++;
    row.appendChild(cell);
    table.appendChild(row);

    row = document.createElement("tr");
    cell = document.createElement("td");
    cell.textContent = count;
    count++;
    row.appendChild(cell);
    cell = document.createElement("td");
    cell.textContent = count;
    count++;
    row.appendChild(cell);
    table.appendChild(row);

    tableContainer.innerHTML = "";
    tableContainer.appendChild(table);
}

function addRow() {
    var table = document.getElementsByTagName("table")[0];
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
    var cell;

    for (var i = 0; i < table.rows[0].cells.length; i++) {
        cell = row.insertCell(i);
        cell.textContent = count;
        count++;
    }
}

function addColumn() {
    var table = document.getElementsByTagName("table")[0];

    for (var i = 0; i < table.rows.length; i++) {
        var cell = table.rows[i].insertCell(-1);
        cell.textContent = count;
        count++;
    }
}

function deleteRow() {
    var rowIndex = document.getElementById("deleteRow").value;
    checktype(rowIndex);
    var table = document.getElementsByTagName("table")[0];
    table.deleteRow(rowIndex);
}

function deleteColumn() {
    var columnIndex = document.getElementById("deleteColumn").value;
    checktype(columnIndex);
    var table = document.getElementsByTagName("table")[0];

    for (var i = 0; i < table.rows.length; i++) {
        table.rows[i].deleteCell(columnIndex);
    }
}

function deleteTable() {
    var tableContainer = document.getElementById("tableContainer");
    tableContainer.innerHTML = "";
    count = 0;
}

function checktype(columnIndex) {
    if (typeof(columnIndex) != "number") {
        alert("you must enter a number")
    }
}