function create_table() {
    // creates a <table> element
      var x = document.getElementById("myTable");
      if (x.rows[0] != null) {
          alert("Table already exists!")
          return false;
      }
  
      for (let i = 0; i < 2; i++) {
          var row = document.createElement("tr");
  
          for (let j = 0; j < 2; j++) {
          var cell = document.createElement("td");
          var cellText = document.createTextNode(`cell`);
          cell.appendChild(cellText);
          row.appendChild(cell);
          }
  
          x.appendChild(row);
      }
  }
  
  function delete_row() {
      var x = document.getElementById("myTable");
      var index = document.getElementById("del_row").value;
      if (x.rows[0] == null || index >= x.rows.length) {alert( "Invalid value of index!" ); return false;} 
      if (index == '') alert( "Please provide index of row!" )
      else x.deleteRow(index);
  }
  
  function delete_col(index) {
    var x = document.getElementById("myTable");
    var index = document.getElementById("del_col").value;
    if (x.rows[0] == null || index >= x.rows[0].cells.length) {alert( "Invalid value of index!" ); return false;}
    if (index == '') {alert( "Please provide index of column!" ); return false}
  
    var row = x.rows;  
  
    // Removing the column at index(index).  
    for (var j = 0; j < row.length; j++) {
  
        // Deleting the ith cell of each row.
        row[j].deleteCell(index);
      }
  }
  
  function add_row() {
      var x = document.getElementById("myTable");
  
      if (x.rows[0] == null) var rowlength = 1
      else var rowlength = x.rows[0].cells.length;
  
      var row = document.createElement("tr");
      for (let i = 0; i  < rowlength; i++) {   
        var cell = document.createElement("td");
        var cellText = document.createTextNode(`cell`);
        cell.appendChild(cellText);
        row.appendChild(cell);
      }
  
      x.appendChild(row);
  }
  
  function add_col() {
      var x = document.getElementById("myTable");
  
      if (x.rows.length == 0) add_row()
      else {
          var rowcount = x.rows.length;
  
          for (let i = 0; i  < rowcount; i++) {   
          var cell = document.createElement("td");
          var cellText = document.createTextNode(`cell`);
          cell.appendChild(cellText);
          x.rows[i].appendChild(cell);
          }
      }
  }
  
  function delete_table() {
      var x = document.getElementById("myTable");
      x.innerHTML = "";
  }  