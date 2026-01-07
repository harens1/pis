
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recommendation_type = $_POST["recommendation_type"];
    $recommendation_date = $_POST["recommendation_date"];
    $appointment_date = $_POST["appointment_date"];
    $adjustment_date = $_POST["adjustment_date"];
    $transfer_date = $_POST["transfer_date"];
    $promotion_date = $_POST["promotion_date"];
    $level_up_date = $_POST["level_up_date"];
    $temporary_assign_date = $_POST["temporary_assign_date"];
    $temporary_office = $_POST["temporary_office"];
    $leave_type = $_POST["leave_type"];
    $leave_start_date = $_POST["leave_start_date"];

    echo "<h2>प्राप्त डेटा</h2>";
    echo "सिफारिस भएको मा: " . $recommendation_type . "<br>";
    echo "सिफारिस मिति: " . $recommendation_date . "<br>";
    echo "नियुक्ति मिति: " . $appointment_date . "<br>";
    echo "समायोजन मिति: " . $adjustment_date . "<br>";
    echo "सरुवा मिति: " . $transfer_date . "<br>";
    echo "बढुवा मिति: " . $promotion_date . "<br>";
    echo "स्तर वृद्धि मिति: " . $level_up_date . "<br>";
    echo "काज तोकेको मिति: " . $temporary_assign_date . "<br>";
    echo "काज खटाएको कार्यालय: " . $temporary_office . "<br>";
    echo "लामो बिदा भए: " . $leave_type . "<br>";
    if (!empty($leave_start_date)) {
        echo "बिदा सुरु मिति: " . $leave_start_date . "<br>";
    }
} else {
    echo "No data received.";
}
?>
