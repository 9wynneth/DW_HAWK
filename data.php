<?php
include 'connection.php';

// Retrieve the query from the AJAX request
$query = $_POST['query'];

// Execute the query
$result = $conn->query($query);

// Fetch the column names
$columns = array();
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $columns = array_keys($row);
}

// Fetch the data and store it in an array
$data = array();
if ($result->num_rows > 0) {
  do {
    $data[] = $row;
  } while ($row = $result->fetch_assoc());
}

// Close the connection
$conn->close();

// Generate the HTML code for the table
$html = '
  <table id="example2" class="display dataTable no-footer" style="width: 100%" aria-describedby="example_info">
    <thead>
      <tr>';
foreach ($columns as $column) {
  $html .= '<th>' . $column . '</th>';
}
$html .= '
      </tr>
    </thead>
    <tbody>';
foreach ($data as $row) {
  $html .= '<tr>';
  foreach ($row as $value) {
    $html .= '<td>' . $value . '</td>';
  }
  $html .= '</tr>';
}
$html .= '
    </tbody>
  </table>';

// Return the HTML code
echo $html;
?>
