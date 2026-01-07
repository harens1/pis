<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<?php include 'header.php'; ?>

    <main>
        <h2>कर्मचारी विवरण</h2>
        <div class="search-container">
            <i class="fa fa-search"></i>
            <input type="text" id="search-input" placeholder="बे.न.पा.नं. वा नाम खोज्नुहोस्">
            <button onclick="searchEmployee()">खोज्नुहोस्</button>
        </div>
        <div id="no-result" class="no-result"></div>

        <table id="employee-table">
            <tr>
                <th>क्र.सं.</th>
                <th>बे.न.पा.नं.</th>
                <th>क.सं.नं.</th>
                <th>नाम</th>
                <th>पद</th>
                <th>तह</th>
                <th>सेवा</th>
                <th>समूह</th>
                <th>शाखा</th>
                <th>उपशाखा</th>
                <th>वडाकार्यालय</th>
                <th>स्वास्थ्य चौकी</th>
                <th>अवस्था</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                $count = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$count."</td>";
                    echo "<td>".$row['emp_code']."</td>";
                    echo "<td>".$row['emp_number']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['position']."</td>";
                    echo "<td>".$row['level']."</td>";
                    echo "<td>".$row['service']."</td>";
                    echo "<td>".$row['group_name']."</td>";
                    echo "<td>".$row['branch']."</td>";
                    echo "<td>".$row['sub_branch']."</td>";
                    echo "<td>".$row['ward_office']."</td>";
                    echo "<td>".$row['health_center']."</td>";
                    echo "<td>".$row['status']."</td>";
                    echo "</tr>";
                    $count++;
                }
            } else {
                echo "<tr><td colspan='13'>कुनै डाटा उपलब्ध छैन</td></tr>";
            }
            ?>
        </table>
    </main>
    <footer>
        <p>&copy; 2025 कर्मचारी व्यवस्थापन प्रणाली</p>
    </footer>

    <script>
        function searchEmployee() {
            var input, filter, table, tr, td, i, txtValue;
            var found = false;
            input = document.getElementById("search-input");
            filter = input.value.toUpperCase();
            table = document.getElementById("employee-table");
            tr = table.getElementsByTagName("tr");
            var noResult = document.getElementById("no-result");
            noResult.innerHTML = ''; 
            
            for (i = 1; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                var rowMatch = false;
                for (var j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            rowMatch = true;
                            td[j].innerHTML = txtValue.replace(new RegExp(filter, "gi"), (match) => `<span class="highlight">${match}</span>`);
                        } else {
                            td[j].innerHTML = txtValue;
                        }
                    }
                }
                if (rowMatch) {
                    tr[i].style.display = "";
                    found = true;
                } else {
                    tr[i].style.display = "none";
                }
            }
            if (!found) {
                noResult.innerHTML = "फेला परेन";
            }
        }
    </script>
</body>
</html>

<?php $conn->close(); ?>
