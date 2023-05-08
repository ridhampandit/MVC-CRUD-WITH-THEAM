<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Add Delete Tr With jquery</title>
    <style>#container{
      margin:0 auto;
      width:800px;
      text-align:center}
      #employee-table{
        width:800px;
        border:1px solid #aaa}
    </style>
</head>
<body>
<div id="container">
      <h2>Add and Delete Table Rows using jQuery</h2> 
      <button id="add-new-btn" >Add New Row
      </button>
      <button id="delete-btn">Delete Row
      </button>
      <br>
      <br>
      <table id="employee-table">
        <tr>
          <th>Select Product
          </th>
          <th>Product Id
          </th>
          <th>Order No
          </th>
          <th>M.R.P
          </th>
          <th colspan="2">Action
          </th>
        </tr>
      </table>
      <input type="submit" value="submit">
    </div>		
</body>
<script src="jq/jquery-3.6.4.min.js"></script>
<script>
  var selectedValues = []
    $("#add-new-btn").on("click",function(){
        addRow();
        $("#employee-table").append(row);
    });
    $("#delete-btn").on("click", function(ele){
      //calling method to delete the last row
        deleteRow();
    });
    function addRow(){
        var row ='<tr><td><select id="myDropdown" class="dropdown" name="myDropdown"><option value="">--Select Product--</option>'
        +'<option value="Moniter">Moniter</option>'
        +'<option value="CPU">CPU</option>'
        +'<option value="Keybord">Keybord</option>'
        +'<option value="Mouse">Mouse</option>'
        +'</select></td>'
        +'<td><input type="text"></td>'
        +'<td><input type="text"></td>'
        +'<td><input type="text"></td>'
        +'<td><input type="button" value="delete" onclick="deleteRow(this)" /></td></tr>';
       
        $("#employee-table").append(row);
    }
    function deleteRow(ele){
        var table = $('#employee-table')[0];
        var rowCount = table.rows.length;
        if(rowCount <= 1){
            alert("There is no row available to delete!");
            return;
        }
        if(ele){
          //delete specific row
          $(ele).parent().parent().remove();
        }
        else{
            //delete last row
            table.deleteRow(rowCount-1);
        }
    }
</script>
</html>