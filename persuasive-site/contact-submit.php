<?php
session_start();

$pageTitle = 'Enquiry Status | Managix Technology';
$pageDescription = 'Contact form submission status for Managix Technology.';
$activePage = 'contact';

function clean_text(string $value, int $maxLength = 1200): string
{
    $value = trim(str_replace(["\r", "\0"], '', $value));
    return function_exists('mb_substr') ? mb_substr($value, 0, $maxLength) : substr($value, 0, $maxLength);
}

function smtp_read($socket): string
{
    $data = '';
    while (($line = fgets($socket, 515)) !== false) {
        $data .= $line;
        if (strlen($line) >= 4 && $line[3] === ' ') {
            break;
        }
    }
    return $data;
}

function smtp_command($socket, string $command, array $expectedCodes): string
{
    fwrite($socket, $command . "\r\n");
    $response = smtp_read($socket);
    $code = (int) substr($response, 0, 3);
    if (!in_array($code, $expectedCodes, true)) {
        throw new RuntimeException('SMTP command failed.');
    }
    return $response;
}

function smtp_send_mail(string $to, string $subject, string $body, string $replyTo): void
{
    $host = 'mail.managixglobal.com';
    $username = 'info@managixglobal.com';
    $password = 'qahyd123.';
    $from = 'info@managixglobal.com';
    $fromName = 'Managix Website';
    $timeout = 20;

    $socket = @stream_socket_client('tcp://' . $host . ':587', $errorNumber, $errorMessage, $timeout, STREAM_CLIENT_CONNECT);
    $implicitTls = false;

    if (!$socket) {
        $socket = @stream_socket_client('ssl://' . $host . ':465', $errorNumber, $errorMessage, $timeout, STREAM_CLIENT_CONNECT);
        $implicitTls = true;
    }

    if (!$socket) {
        throw new RuntimeException('Could not connect to SMTP server.');
    }

    stream_set_timeout($socket, $timeout);

    try {
        $greeting = smtp_read($socket);
        if ((int) substr($greeting, 0, 3) !== 220) {
            throw new RuntimeException('SMTP server did not accept the connection.');
        }

        smtp_command($socket, 'EHLO managixglobal.com', [250]);

        if (!$implicitTls) {
            smtp_command($socket, 'STARTTLS', [220]);
            if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
                throw new RuntimeException('Could not start TLS encryption.');
            }
            smtp_command($socket, 'EHLO managixglobal.com', [250]);
        }

        smtp_command($socket, 'AUTH LOGIN', [334]);
        smtp_command($socket, base64_encode($username), [334]);
        smtp_command($socket, base64_encode($password), [235]);
        smtp_command($socket, 'MAIL FROM:<' . $from . '>', [250]);
        smtp_command($socket, 'RCPT TO:<' . $to . '>', [250, 251]);
        smtp_command($socket, 'DATA', [354]);

        $headers = [
            'From: ' . $fromName . ' <' . $from . '>',
            'To: Managix Technology <' . $to . '>',
            'Reply-To: ' . $replyTo,
            'Subject: ' . $subject,
            'MIME-Version: 1.0',
            'Content-Type: text/plain; charset=UTF-8',
            'X-Mailer: Managix Website SMTP'
        ];

        $message = implode("\r\n", $headers) . "\r\n\r\n" . $body;
        $message = preg_replace('/^\./m', '..', $message);
        fwrite($socket, $message . "\r\n.\r\n");
        $response = smtp_read($socket);
        if ((int) substr($response, 0, 3) !== 250) {
            throw new RuntimeException('SMTP server rejected the message.');
        }

        smtp_command($socket, 'QUIT', [221]);
    } finally {
        fclose($socket);
    }
}

$sent = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$honeypot = clean_text($_POST['website'] ?? '', 120);
if ($honeypot !== '') {
    $sent = true;
} else {
    $name = clean_text($_POST['name'] ?? '', 140);
    $email = clean_text($_POST['email'] ?? '', 180);
    $phone = clean_text($_POST['phone'] ?? '', 80);
    $service = clean_text($_POST['service'] ?? '', 180);
    $message = clean_text($_POST['message'] ?? '', 3000);
    $captcha = clean_text($_POST['captcha'] ?? '', 20);
    $captchaAnswer = $_SESSION['contact_captcha_answer'] ?? '';
    unset($_SESSION['contact_captcha_answer']);

    if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please go back and complete the required fields with a valid email address.';
    } elseif ($captchaAnswer === '' || !hash_equals((string) $captchaAnswer, $captcha)) {
        $error = 'Please go back and complete the security check correctly.';
    } else {
        $subject = 'New website enquiry from ' . $name;
        $body = "New project enquiry from the Managix website\n\n"
            . "Name: {$name}\n"
            . "Email: {$email}\n"
            . "Phone: " . ($phone !== '' ? $phone : 'Not provided') . "\n"
            . "Priority: {$service}\n\n"
            . "Message:\n{$message}\n\n"
            . "Submitted from: " . ($_SERVER['HTTP_HOST'] ?? 'Managix website') . "\n"
            . "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unavailable') . "\n";

        try {
            smtp_send_mail('info@managixglobal.com', $subject, $body, $email);
            $sent = true;
        } catch (Throwable $exception) {
            $error = 'The message could not be sent right now. Please email info@managixglobal.com or call +91 91606 28999.';
            error_log('Managix contact form SMTP error: ' . $exception->getMessage());
        }
    }
}

include __DIR__ . '/partials/header.php';
?>
    <main>
      <section class="page-hero">
        <div class="page-hero-inner" data-reveal>
          <p class="eyebrow">Contact Managix</p>
          <h1><?= $sent ? 'Thank you. Your enquiry has been sent.' : 'We could not send your enquiry.' ?></h1>
          <p><?= $sent ? 'Our team will review your message and get back to you shortly.' : htmlspecialchars($error, ENT_QUOTES) ?></p>
          <div class="hero-actions">
            <a class="button button-primary" href="contact.php">Back to Contact</a>
            <a class="button button-ghost" href="calculator.php">Estimate Project Cost</a>
          </div>
        </div>
      </section>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
