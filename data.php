<?php
include 'connection.php';

// Retrieve the query from the AJAX request
$query = $_POST['query'];

$heading = '';
if (strpos($query, 'V_TotalPemasukanTiapBranch') !== false) {
  $heading = 'Branch';
} elseif (strpos($query, 'V_TotalPemasukanTiapCustomer') !== false) {
  $heading = 'Customer';
} elseif (strpos($query, 'V_TotalPemasukanPerProduk') !== false) {
  $heading = 'Product';
} elseif (strpos($query, 'view2_sumCustBranch') !== false) {
  $heading = 'Branch-Customer';
} elseif (strpos($query, 'view3_sumProdBranch') !== false) {
  $heading = 'Branch-Product';
} elseif (strpos($query, 'V_TotalPemasukanPerCustomerProd') !== false) {
  $heading = 'Customer-Product';
} elseif (strpos($query, 'V_TotalPemasukanPerbranch_cust_prod`') !== false) {
  $heading = 'Branch-Customer-Product';
}

// Execute the query
$result = $conn->query($query);

if (!$result) {
  // Error occurred, handle it appropriately (e.g., log, display error message)
  die("Error executing the query: " . $conn->error);
}

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
<h2>' . $heading . '</h2>
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
