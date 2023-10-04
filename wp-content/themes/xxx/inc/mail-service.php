<?php

require 'vendor/autoload.php';

use SendGrid\Mail\Mail;

function send_mail($tos, $ccs, $bccs, $subject, $template)
{
  $email = new Mail();

  $email->setFrom(get_option('sendgrid-sender-email'));

  if (!empty($tos)) {
    foreach ($tos as $to) {
      $email->addTo($to);
    }
  }

  if (!empty($ccs)) {
    foreach ($ccs as $cc) {
      $email->addCc($cc);
    }
  }

  if (!empty($bccs)) {
    foreach ($bccs as $bcc) {
      $email->addBcc($bcc);
    }
  }

  if (!empty($subject)) {
    $email->setSubject($subject);
  }

  if (!empty($template)) {
    $email->addContent('text/html', $template);
  }

  $sendgrid = new \SendGrid(get_option('sendgrid-api-key'));
  $sendgrid->send($email);
}
