

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>H.A.W.K</title>

    <link href="DataTables/datatables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery library -->
    <script src="DataTables/datatables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <style></style>
  </head>
  <body>
    <div class="fw-body">
      <div class="content">
        <h1 class="page_title">H.A.W.K</h1>
        <div class="demo-html">
          <div id="example_wrapper" class="dataTables_wrapper no-footer">
            <table id="example2" class="display dataTable no-footer" style="width: 100%" aria-describedby="example_info">
              <thead>
                <tr>
                  <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 116px" aria-sort="ascending" aria-label="First name: activate to sort column descending">First name</th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 114px" aria-label="Last name: activate to sort column ascending">Last name</th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 251px" aria-label="Position: activate to sort column ascending">Position</th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 121px" aria-label="Office: activate to sort column ascending">Office</th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 93px" aria-label="Salary: activate to sort column ascending">Salary</th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['customer_id'] . "</td>";
                    echo "<td>" . $row['customer_firstName'] . "</td>";
                    echo "<td>" . $row['customer_lastName'] . "</td>";
                    echo "<td>" . $row['customer_gender'] . "</td>";
                    echo "<td>" . $row['customer_email'] . "</td>";
                    echo "</tr>";
                }
              ?>
                <tr>
                  <td>Ashton</td>
                  <td>Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <td>Cedric</td>
                  <td>Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <td>Airi</td>
                  <td>Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>$162,700</td>
                </tr>
                <tr>
                  <td>Brielle</td>
                  <td>Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>$372,000</td>
                </tr>
                <tr>
                  <td>Herrod</td>
                  <td>Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>$137,500</td>
                </tr>
                <tr>
                  <td>Brielle</td>
                  <td>Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>$372,000</td>
                </tr>
                <tr>
                  <td>Herrod</td>
                  <td>Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>$137,500</td>
                </tr>
                <tr>
                  <td>Brielle</td>
                  <td>Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>$372,000</td>
                </tr>
                <tr>
                  <td>Herrod</td>
                  <td>Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>$137,500</td>
                </tr>
                <tr>
                  <td>Brielle</td>
                  <td>Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>$372,000</td>
                </tr>
                <tr>
                  <td>Herrod</td>
                  <td>Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>$137,500</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        $("#example2").DataTable({
          columnDefs: [
            {
              targets: [0],
              orderData: [0, 1],
            },
            {
              targets: [1],
              orderData: [1, 0],
            },
            {
              targets: [4],
              orderData: [4, 0],
            },
          ],
        });
      });

      $(document).ready(function () {
        /*
        $("#example2").DataTable({
          ajax: "data.php", // Path to the server-side script
          columns: [
            { data: "customer_id" }, // Replace "first_name" with the actual column name in your database
            { data: "customer_firstName" }, // Replace "last_name" with the actual column name in your database
            { data: "customer_lastName" }, // Replace "position" with the actual column name in your database
            { data: "customer_gender" }, // Replace "office" with the actual column name in your database
            { data: "customer_address" }, // Replace "salary" with the actual column name in your database
          ],
        });
        */
      });
    </script>
  </body>
</html>
