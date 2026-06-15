<?php

header('X-Robots-Tag: noindex, nofollow', true);

require(__DIR__ . '/PHPMailer/PHPMailerAutoload.php');
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

function contact_log_mail_issue($context, $message)
{
    $logFile = __DIR__ . '/mail_error.log';
    $timestamp = date('Y-m-d H:i:s');
    error_log('[' . $timestamp . '] ' . $context . ': ' . $message . PHP_EOL, 3, $logFile);
}

function contact_is_ajax_request()
{
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

function contact_respond($success, $message, $redirect = '')
{
    if (contact_is_ajax_request()) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => $success,
            'message' => $message,
            'redirect' => $redirect,
        ]);
        exit;
    }

    if ($redirect !== '') {
        header('Location: ' . $redirect);
        exit;
    }

    echo $message;
    exit;
}

function contact_build_mailer()
{
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = gethostbyname('smtp.gmail.com');
    $mail->SMTPAuth = true;
    $mail->Username = 'support@technofra.com';
    $mail->Password = 'kcdi vqko dwgv yaku';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Timeout = 20;
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAutoTLS = true;
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    ];

    return $mail;
}

function contact_store_submission($submission)
{
    $logFile = __DIR__ . '/contact_submissions.log';
    $payload = json_encode($submission, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    if ($payload === false) {
        return false;
    }

    return file_put_contents($logFile, $payload . PHP_EOL, FILE_APPEND | LOCK_EX) !== false;
}

function contact_html_rows($fields)
{
    $rows = '';

    foreach ($fields as $label => $value) {
        $rows .= '<tr>
            <td style="padding:13px 16px;border-bottom:1px solid #edf0e8;color:#5f6658;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.3px;width:36%;vertical-align:top;">' . htmlspecialchars($label) . '</td>
            <td style="padding:13px 16px;border-bottom:1px solid #edf0e8;color:#111013;font-size:14px;line-height:1.6;vertical-align:top;">' . nl2br(htmlspecialchars($value)) . '</td>
        </tr>';
    }

    return $rows;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    contact_respond(false, 'Invalid request method.', 'contactus.php');
}

date_default_timezone_set('Asia/Kolkata');
$currentDateTime = date('Y-m-d H:i:s');

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$contact = trim($_POST['contact'] ?? '');
$message = trim($_POST['message'] ?? '');
$hiddenField = trim($_POST['hidden_field'] ?? '');
$errors = [];

if ($hiddenField !== '') {
    $errors[] = 'Bot detected.';
}

if ($name === '' || $email === '' || $contact === '' || $message === '') {
    $errors[] = 'All fields are required.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email address.';
}

if (!preg_match('/^\d{10}$/', $contact)) {
    $errors[] = 'Invalid phone number. Please enter a 10-digit number.';
}

$recaptchaSecret = '6LdwUeYsAAAAAPFjoQi9O4BBco2NbpqAVPiynyXH';
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

if ($recaptchaResponse === '') {
    $errors[] = 'Please complete the reCAPTCHA.';
} else {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $recaptchaResult = curl_exec($ch);
    $recaptchaError = curl_error($ch);
    curl_close($ch);

    $recaptchaDecoded = json_decode($recaptchaResult, true);

    if ($recaptchaResult === false) {
        contact_log_mail_issue('Contact reCAPTCHA', 'cURL request failed: ' . $recaptchaError);
        $errors[] = 'reCAPTCHA verification failed. Please try again.';
    } elseif (empty($recaptchaDecoded['success'])) {
        $errors[] = 'reCAPTCHA verification failed. Please try again.';
    }
}

if (!empty($errors)) {
    contact_respond(false, implode("\n", $errors), 'contactus.php');
}

$fields = [
    'Full Name' => $name,
    'Mobile No' => $contact,
    'Email ID' => $email,
    'Message' => $message,
];

contact_store_submission([
    'submitted_at' => $currentDateTime,
    'name' => $name,
    'email' => $email,
    'contact' => $contact,
    'message' => $message,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '',
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
]);

$adminBody = '<html><body style="margin:0;padding:0;background:#f4f6f1;font-family:Arial,Helvetica,sans-serif;color:#111013;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f4f6f1;padding:28px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="640" cellspacing="0" cellpadding="0" style="max-width:640px;width:100%;background:#ffffff;border-radius:16px;overflow:hidden;border:1px solid #e6ebdf;">
                    <tr>
                        <td style="background:#080808;padding:28px 30px;">
                            <div style="color:#8cff00;font-size:12px;font-weight:700;letter-spacing:1.4px;text-transform:uppercase;">Contact Enquiry</div>
                            <h1 style="margin:8px 0 0;color:#ffffff;font-size:26px;line-height:1.25;">New message from ' . htmlspecialchars($name) . '</h1>
                            <p style="margin:10px 0 0;color:#cfd6c6;font-size:14px;">Submitted on ' . htmlspecialchars($currentDateTime) . '</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:26px 30px;">
                            <p style="margin:0 0 18px;color:#4f4f57;font-size:15px;line-height:1.6;">A new contact enquiry has been submitted from the website.</p>
                            <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;width:100%;font-family:Arial,Helvetica,sans-serif;background:#fbfcf8;border:1px solid #edf0e8;border-radius:12px;overflow:hidden;">' .
                                contact_html_rows($fields) .
                            '</table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:18px 30px;background:#f7f9f2;color:#73786e;font-size:12px;line-height:1.5;">This email was generated from the Mark Identitiez contact page.</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body></html>';

$clientBody = '<html><body style="margin:0;padding:0;background:#f4f6f1;font-family:Arial,Helvetica,sans-serif;color:#111013;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f4f6f1;padding:28px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" style="max-width:600px;width:100%;background:#ffffff;border-radius:16px;overflow:hidden;border:1px solid #e6ebdf;">
                    <tr>
                        <td style="background:#080808;padding:30px;text-align:center;">
                            <div style="display:inline-block;padding:8px 14px;border-radius:999px;background:#8cff00;color:#111013;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:.8px;">Message Received</div>
                            <h1 style="margin:18px 0 0;color:#ffffff;font-size:28px;line-height:1.25;">Thank you, ' . htmlspecialchars($name) . '</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;text-align:center;">
                            <p style="margin:0;color:#42433f;font-size:16px;line-height:1.7;">We have received your message successfully. Our team will review your enquiry and get back to you shortly.</p>
                            <div style="margin:24px auto 0;padding:16px 18px;background:#f7f9f2;border-radius:12px;color:#60665a;font-size:14px;line-height:1.6;text-align:left;">
                                <strong style="color:#111013;">Your enquiry</strong><br>
                                Contact: ' . htmlspecialchars($contact) . '<br>
                                Submitted: ' . htmlspecialchars($currentDateTime) . '
                            </div>
                            <p style="margin:26px 0 0;color:#111013;font-size:15px;line-height:1.6;">Regards,<br><strong>Team Mark Identitiez</strong></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body></html>';

$mail = contact_build_mailer();
$mail->setFrom('support@technofra.com', 'Mark Identitiez');
$mail->addAddress('support@technofra.com');
$mail->isHTML(true);
$mail->Subject = 'Received an inquiry from the Mark Identitiez website contact page (' . $currentDateTime . ')';
$mail->Body = $adminBody;

if (!$mail->send()) {
    contact_log_mail_issue('Contact admin mail', $mail->ErrorInfo);
    contact_respond(false, 'Unable to send your message right now. Please try again.', 'failed.php');
}

$clientMail = contact_build_mailer();
$clientMail->setFrom('support@technofra.com', 'Mark Identitiez');
$clientMail->addAddress($email);
$clientMail->isHTML(true);
$clientMail->Subject = 'Thank you for your enquiry - Mark Identitiez Team';
$clientMail->Body = $clientBody;

if (!$clientMail->send()) {
    contact_log_mail_issue('Contact client mail', $clientMail->ErrorInfo);
}

contact_respond(true, 'Your message has been submitted successfully.', 'success.php');
