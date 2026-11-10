
<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Please submit the registration form.");
}

$fields = [
    "fullname", "email", "phone",
    "dob", "gender", "course", "address"
];

$data = [];

foreach ($fields as $field) {
    $data[$field] = trim($_POST[$field] ?? "");

    if ($data[$field] === "") {
        http_response_code(400);
        exit("Please complete all required fields.");
    }
}

if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit("Invalid email address.");
}

if (!preg_match('/^[0-9]{10}$/', $data["phone"])) {
    http_response_code(400);
    exit("Invalid phone number.");
}

function safe($value) {
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}

$labels = [
    "fullname" => "Full Name",
    "email" => "Email Address",
    "phone" => "Phone Number",
    "dob" => "Date of Birth",
    "gender" => "Gender",
    "course" => "Selected Course",
    "address" => "Residential Address"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Application Successful</title>

    <link rel="stylesheet" href="style.css?v=4">
</head>

<body>

<div class="result-wrapper">

    <div class="result-card">

        <div class="success-icon">✓</div>

        <h1>Application Submitted!</h1>

        <p class="success-message">
            Congratulations! Your application has been submitted successfully.
        </p>

        <div class="application-heading">
            <h2>Applicant Details</h2>
            <p>Please verify your submitted information.</p>
        </div>

        <div class="table-container">

            <table class="result-table">

                <?php foreach ($labels as $key => $label): ?>

                    <tr>
                        <th><?php echo safe($label); ?></th>
                        <td><?php echo safe($data[$key]); ?></td>
                    </tr>

                <?php endforeach; ?>

            </table>

        </div>

        <div class="action-buttons">

            <button type="button"
                    class="print-btn"
                    onclick="window.print()">
                <span>🖨</span> Print Application
            </button>

            <a href="index.php" class="back-btn">
                ← Back to Registration
            </a>

        </div>

        <p class="email-notice">
    📧 Please keep your registered email address active for admission updates.
</p>

        <p class="result-footer">
            Thank you for choosing our College Admission Portal!
        </p>

    </div>

</div>

</body>
</html>
