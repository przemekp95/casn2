<?php

declare(strict_types=1);

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    exit;
}

const CONTACT_ADDRESS = 'p.pietrzak@sluzbaniepodleglej.pl';

/**
 * Legacy standalone endpoint preserved for compatibility with the original
 * frontend contact form. The form is currently disabled in the Blade view, but
 * the endpoint remains available in case the static template is re-enabled.
 */
function errorResponse(string $message): never
{
    echo '<div class="error_message">'.$message.'</div>';
    exit;
}

function sanitizeHeaderValue(string $value): string
{
    return trim(str_replace(["\r", "\n"], '', $value));
}

function postedValue(string $key): string
{
    $value = $_POST[$key] ?? '';

    return is_string($value) ? trim($value) : '';
}

$name = postedValue('name');
$email = postedValue('email');
$comments = postedValue('comments');

if ($name === '') {
    errorResponse('You must enter your name.');
}

if ($email === '' || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    errorResponse('Please enter a valid email address.');
}

if ($comments === '') {
    errorResponse('Please enter your message.');
}

$safeName = sanitizeHeaderValue($name);
$safeEmail = sanitizeHeaderValue($email);
$safeComments = str_replace(["\r\n", "\r"], "\n", $comments);

$subject = 'You have been contacted by '.$safeName.'.';
$body = "You have been contacted by {$safeName}. Their additional message is as follows.".PHP_EOL.PHP_EOL;
$content = "\"{$safeComments}\"".PHP_EOL.PHP_EOL;
$reply = "You can contact {$safeName} via email, {$safeEmail}";
$message = wordwrap($body.$content.$reply, 70);

$headers = "From: {$safeEmail}".PHP_EOL;
$headers .= "Reply-To: {$safeEmail}".PHP_EOL;
$headers .= 'MIME-Version: 1.0'.PHP_EOL;
$headers .= 'Content-type: text/plain; charset=utf-8'.PHP_EOL;
$headers .= 'Content-Transfer-Encoding: quoted-printable'.PHP_EOL;

if (! mail(CONTACT_ADDRESS, $subject, $message, $headers)) {
    echo 'ERROR!';

    exit;
}

$escapedName = htmlspecialchars($safeName, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

echo '<fieldset>';
echo "<div id='success_page'>";
echo '<h3>Email Sent Successfully.</h3>';
echo "<p>Thank you <strong>{$escapedName}</strong>, your message has been submitted to us.</p>";
echo '</div>';
echo '</fieldset>';
