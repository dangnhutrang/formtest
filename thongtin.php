<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $inquiry = $_POST['inquiry'];

    // Compose the Google Form URL with the collected data as query parameters
    $google_form_url = "https://docs.google.com/forms/d/e/1FAIpQLSeMqNvvC5_WGWq08yarLaKMb1HlhXAA4BklxMZLSxx446lYWg/viewform?entry.464645440=$name&entry.651818880=$phone&entry.1306189916=$inquiry";

    // Output message
    $output_message = "<p class='output-message'><strong>Thank you!</strong> Your inquiry has been submitted. We'll get back to you soon!</p>";
} else {
    $output_message = "";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="contact-form">
        <h1>Contact Us</h1>
        <?php echo $output_message; ?>
        <form method="post" action="">
            <?php if (!$output_message) { ?>
                <label for="name">Name:</label>
                <input type="text" name="name" required><br><br>

                <label for="phone">Phone Number:</label>
                <input type="tel" name="phone" required><br><br>

                <label for="inquiry">Inquiry:</label>
                <select name="inquiry" required>
                    <option value="General Inquiry">General Inquiry</option>
                    <option value="Product Information">Product Information</option>
                    <option value="Support Request">Support Request</option>
                </select><br><br>
                <label for="message">Message:</label>
                <textarea name="message" required></textarea><br><br>
                
                <input type="submit" name="submit" value="Submit">
            <?php } ?>
        </form>
        <iframe style="display: none;" src="<?php echo $google_form_url; ?>"></iframe>
    </div>
</body>

</html>
