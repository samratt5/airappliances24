<?php
if(isset($_POST['enquiry'])) {

    // Sanitize input
    $service = isset($_POST['service']) ? urlencode($_POST['service']) : '';
    $type    = isset($_POST['type']) ? urlencode($_POST['type']) : '';
    $name    = isset($_POST['name']) ? urlencode($_POST['name']) : '';
    $phone   = isset($_POST['phone']) ? urlencode($_POST['phone']) : '';
    $city    = isset($_POST['city']) ? urlencode($_POST['city']) : '';

    // WhatsApp number with country code
    $whatsapp_number = "918250791200";

    // Message text
    $message = "New Service Booking:%0A";
    $message .= "Service: $service%0A";
    $message .= "Type: $type%0A";
    $message .= "Name: $name%0A";
    $message .= "Phone: $phone%0A";
    $message .= "Location: $city";

    // WhatsApp link
    $whatsapp_url = "https://api.whatsapp.com/send?phone={$whatsapp_number}&text={$message}";

    // Redirect using JavaScript
    echo "<script>
            window.location.href = '$whatsapp_url';
          </script>";
    exit();

} else {
    echo "Please submit the form properly.";
}
?>
