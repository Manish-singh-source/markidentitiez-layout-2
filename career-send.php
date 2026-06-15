<?php

header('X-Robots-Tag: noindex, nofollow', true);

require(__DIR__ . '/PHPMailer/PHPMailerAutoload.php');
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

function career_log_mail_issue($context, $message)
{
    $logFile = __DIR__ . '/mail_error.log';
    $timestamp = date('Y-m-d H:i:s');
    error_log('[' . $timestamp . '] ' . $context . ': ' . $message . PHP_EOL, 3, $logFile);
}

function career_is_ajax_request()
{
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

function career_respond($success, $message, $redirect = '')
{
    if (career_is_ajax_request()) {
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

function career_build_mailer()
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

function career_array_field($value)
{
    if (!is_array($value)) {
        return [];
    }

    return array_map('trim', $value);
}

function career_pair_items($names, $levels)
{
    $items = [];
    $maxItems = max(count($names), count($levels));

    for ($i = 0; $i < $maxItems; $i++) {
        $name = trim($names[$i] ?? '');
        $level = trim($levels[$i] ?? '');

        if ($name === '' && $level === '') {
            continue;
        }

        $items[] = [
            'name' => $name,
            'level' => $level,
        ];
    }

    return $items;
}

function career_items_to_text($items, $suffix = '')
{
    $lines = [];

    foreach ($items as $item) {
        $name = $item['name'];
        $level = $item['level'];
        $lines[] = $name . ($level !== '' ? ' - ' . $level . $suffix : '');
    }

    return implode("\n", $lines);
}

function career_store_submission($submission)
{
    $logFile = __DIR__ . '/career_submissions.log';
    $payload = json_encode($submission, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    if ($payload === false) {
        return false;
    }

    return file_put_contents($logFile, $payload . PHP_EOL, FILE_APPEND | LOCK_EX) !== false;
}

function career_html_rows($fields)
{
    $rows = '';

    foreach ($fields as $label => $value) {
        if ($value === '') {
            continue;
        }

        $rows .= '<tr>
            <td style="padding:13px 16px;border-bottom:1px solid #edf0e8;color:#5f6658;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.3px;width:36%;vertical-align:top;">' . htmlspecialchars($label) . '</td>
            <td style="padding:13px 16px;border-bottom:1px solid #edf0e8;color:#111013;font-size:14px;line-height:1.6;vertical-align:top;">' . nl2br(htmlspecialchars($value)) . '</td>
        </tr>';
    }

    return $rows;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    career_respond(false, 'Invalid request method.', 'career.php#apply-now');
}

date_default_timezone_set('Asia/Kolkata');
$currentDateTime = date('Y-m-d H:i:s');

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$contact = trim($_POST['contact'] ?? '');
$role = trim($_POST['role'] ?? '');
$experience = trim($_POST['experience'] ?? '');
$currentCtc = trim($_POST['current_ctc'] ?? '');
$expectedCtc = trim($_POST['expected_ctc'] ?? '');
$location = trim($_POST['location'] ?? '');
$noticePeriod = trim($_POST['notice_period'] ?? '');
$referrerName = trim($_POST['referrer_name'] ?? '');
$jobSource = trim($_POST['job_source'] ?? '');
$portfolioLink = trim($_POST['portfolio_link'] ?? '');
$hiddenField = trim($_POST['hidden_field'] ?? '');

$skills = career_pair_items(
    career_array_field($_POST['skill_name'] ?? []),
    career_array_field($_POST['skill_level'] ?? [])
);
$aiTools = career_pair_items(
    career_array_field($_POST['ai_tool_name'] ?? []),
    career_array_field($_POST['ai_tool_level'] ?? [])
);
$skillsText = career_items_to_text($skills, '%');
$aiToolsText = career_items_to_text($aiTools);

$resumeFile = $_FILES['resume'] ?? null;
$hasResume = is_array($resumeFile) && ($resumeFile['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_NO_FILE;
$resumePath = '';
$resumeName = '';
$errors = [];

if ($hiddenField !== '') {
    $errors[] = 'Bot detected.';
}

if ($name === '' || $email === '' || $contact === '' || $role === '' || $location === '' || $noticePeriod === '' || $jobSource === '') {
    $errors[] = 'Please fill all required fields.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email address.';
}

if (!preg_match('/^\d{10}$/', $contact)) {
    $errors[] = 'Invalid phone number. Please enter a 10-digit number.';
}

if (empty($skills)) {
    $errors[] = 'At least one skill is required.';
}

foreach ($skills as $skill) {
    if ($skill['name'] === '' || $skill['level'] === '') {
        $errors[] = 'Please add both skill name and proficiency percentage.';
        break;
    }

    if (!ctype_digit($skill['level']) || (int) $skill['level'] < 1 || (int) $skill['level'] > 100) {
        $errors[] = 'Skill proficiency must be between 1 and 100.';
        break;
    }
}

if (empty($aiTools)) {
    $errors[] = 'At least one AI tool is required.';
}

foreach ($aiTools as $aiTool) {
    if ($aiTool['name'] === '' || $aiTool['level'] === '') {
        $errors[] = 'Please add both AI tool name and proficiency level.';
        break;
    }
}

if (!$hasResume) {
    $errors[] = 'Resume / Portfolio file is required.';
} elseif (($resumeFile['error'] ?? UPLOAD_ERR_OK) !== UPLOAD_ERR_OK) {
    $errors[] = 'Resume upload failed. Please try again.';
} else {
    $resumeName = $resumeFile['name'] ?? '';
    $resumePath = $resumeFile['tmp_name'] ?? '';
    $resumeExtension = strtolower(pathinfo($resumeName, PATHINFO_EXTENSION));

    if (!in_array($resumeExtension, ['pdf', 'docx'], true)) {
        $errors[] = 'Resume / Portfolio must be a PDF or DOCX file.';
    }
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
        career_log_mail_issue('Career reCAPTCHA', 'cURL request failed: ' . $recaptchaError);
        $errors[] = 'reCAPTCHA verification failed. Please try again.';
    } elseif (empty($recaptchaDecoded['success'])) {
        $errors[] = 'reCAPTCHA verification failed. Please try again.';
    }
}

if (!empty($errors)) {
    career_respond(false, implode("\n", $errors), 'career.php#apply-now');
}

$fields = [
    'Full Name' => $name,
    'Email ID' => $email,
    'Contact Details' => $contact,
    'Role' => $role,
    'Years of Experience' => $experience,
    'Current CTC' => $currentCtc,
    'Expected CTC' => $expectedCtc,
    'Location' => $location,
    'Skills' => $skillsText,
    'AI Tools' => $aiToolsText,
    'Notice Period' => $noticePeriod,
    'Referrer Name' => $referrerName,
    'Job Source' => $jobSource,
    'Portfolio Link' => $portfolioLink,
    'Resume / Portfolio' => $resumeName,
];

career_store_submission([
    'submitted_at' => $currentDateTime,
    'name' => $name,
    'email' => $email,
    'contact' => $contact,
    'role' => $role,
    'experience' => $experience,
    'current_ctc' => $currentCtc,
    'expected_ctc' => $expectedCtc,
    'location' => $location,
    'skills' => $skills,
    'ai_tools' => $aiTools,
    'notice_period' => $noticePeriod,
    'referrer_name' => $referrerName,
    'job_source' => $jobSource,
    'portfolio_link' => $portfolioLink,
    'resume' => $resumeName,
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
                            <div style="color:#8cff00;font-size:12px;font-weight:700;letter-spacing:1.4px;text-transform:uppercase;">Career Application</div>
                            <h1 style="margin:8px 0 0;color:#ffffff;font-size:26px;line-height:1.25;">New career application from Mark Identitiez website</h1>
                            <p style="margin:10px 0 0;color:#cfd6c6;font-size:14px;">Submitted on ' . htmlspecialchars($currentDateTime) . '</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:26px 30px;">
                            <p style="margin:0 0 18px;color:#4f4f57;font-size:15px;line-height:1.6;">A new candidate has submitted the career form. Resume / portfolio is attached with this email.</p>
                            <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;width:100%;font-family:Arial,Helvetica,sans-serif;background:#fbfcf8;border:1px solid #edf0e8;border-radius:12px;overflow:hidden;">' .
                                career_html_rows($fields) .
                            '</table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:18px 30px;background:#f7f9f2;color:#73786e;font-size:12px;line-height:1.5;">This email was generated from the Mark Identitiez career page.</td>
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
                            <div style="display:inline-block;padding:8px 14px;border-radius:999px;background:#8cff00;color:#111013;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:.8px;">Application Received</div>
                            <h1 style="margin:18px 0 0;color:#ffffff;font-size:28px;line-height:1.25;">Thank you, ' . htmlspecialchars($name) . '</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;text-align:center;">
                            <p style="margin:0;color:#42433f;font-size:16px;line-height:1.7;">We have received your career application successfully. Our team will review your details and get back to you if your profile matches the role.</p>
                            <div style="margin:24px auto 0;padding:16px 18px;background:#f7f9f2;border-radius:12px;color:#60665a;font-size:14px;line-height:1.6;text-align:left;">
                                <strong style="color:#111013;">Application summary</strong><br>
                                Role: ' . htmlspecialchars($role) . '<br>
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

$mail = career_build_mailer();
$mail->setFrom('support@technofra.com', 'Mark Identitiez');
$mail->addAddress('support@technofra.com');
$mail->isHTML(true);
$mail->Subject = 'New career application from Mark Identitiez website (' . $currentDateTime . ')';
$mail->Body = $adminBody;

if ($resumePath !== '' && is_uploaded_file($resumePath)) {
    $mail->addAttachment($resumePath, $resumeName);
}

if (!$mail->send()) {
    career_log_mail_issue('Career admin mail', $mail->ErrorInfo);
    career_respond(false, 'Unable to send your application right now. Please try again.', 'failed.php');
}

$clientMail = career_build_mailer();
$clientMail->setFrom('support@technofra.com', 'Mark Identitiez');
$clientMail->addAddress($email);
$clientMail->isHTML(true);
$clientMail->Subject = 'Thank you for your career application - Mark Identitiez';
$clientMail->Body = $clientBody;

if (!$clientMail->send()) {
    career_log_mail_issue('Career client mail', $clientMail->ErrorInfo);
}

career_respond(true, 'Your application has been submitted successfully.', 'success.php');
