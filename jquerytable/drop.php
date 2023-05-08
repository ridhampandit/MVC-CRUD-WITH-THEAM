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
<div id="dropdownContainer">
  <!-- <select class="dynamicDropdown">
    <option value="">Select an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
</select> -->
<!-- Add more options as needed -->
</div>

<button id="addDropdown">Add Dropdown</button>
    </div>		
</body>
<script src="jq/jquery-1.11.1.min.js"></script>
<script src="jq/jquery.ajaxy.min.js"></script>
<script>
   $(document).ready(function() {
  // Collection to store selected values
  var selectedValues = [];

  // Event delegation for dynamically added dropdowns
  $('#dropdownContainer').on('change', '.dynamicDropdown', function() {
    var selectedValue = $(this).val();

    // Check if selected value already exists in the collection
    if (selectedValues.includes(selectedValue)) {
      alert('Duplicate selection. Please choose a different option.');
      // Perform any other necessary actions
      $(this).val(''); // Clear the duplicate selection
    } else {
      // Add the selected value to the collection
      selectedValues.push(selectedValue);
    }
  });

  // Add a new dropdown on button click
  $('#addDropdown').click(function() {
    var newDropdown = '<select class="dynamicDropdown">' +
                      '<option value="">Select an option</option>' +
                      '<option value="1">Option 1</option>' +
                      '<option value="2">Option 2</option>' +
                      '</select>';

    $('#dropdownContainer').append(newDropdown);
  });
});

</script>
</html>