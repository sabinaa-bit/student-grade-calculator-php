<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
// Sample Marks
$english = 85;
$math = 90;
$science = 88;
$computer = 95;
$nepali = 80;

// Calculation
$total = $english + $math + $science + $computer + $nepali;
$percentage = $total / 5;

// Grade
if ($percentage >= 80) {
    $grade = "A";
} elseif ($percentage >= 70) {
    $grade = "B";
} elseif ($percentage >= 60) {
    $grade = "C";
} elseif ($percentage >= 50) {
    $grade = "D";
} else {
    $grade = "F";
}
?>

<div class="container">

    <div class="card">
        <h2>Grade Calculator</h2>

        <table>
            <tr>
                <th>Subject</th>
                <th>Marks</th>
            </tr>

            <tr>
                <td>English</td>
                <td><?php echo $english; ?></td>
            </tr>

            <tr>
                <td>Math</td>
                <td><?php echo $math; ?></td>
            </tr>

            <tr>
                <td>Science</td>
                <td><?php echo $science; ?></td>
            </tr>

            <tr>
                <td>Computer</td>
                <td><?php echo $computer; ?></td>
            </tr>

            <tr>
                <td>Nepali</td>
                <td><?php echo $nepali; ?></td>
            </tr>
        </table>

        <div class="result">
            <p><strong>Total Marks:</strong> <?php echo $total; ?></p>
            <p><strong>Percentage:</strong> <?php echo $percentage; ?>%</p>
            <p><strong>Grade:</strong> <?php echo $grade; ?></p>
        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>