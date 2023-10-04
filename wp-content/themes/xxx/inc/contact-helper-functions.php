<?php
add_action('wp_ajax_request_contact', 'ajax_request_contact');
add_action('wp_ajax_nopriv_request_contact', 'ajax_request_contact');

function ajax_request_contact()
{
  $tos = get_post_meta($_POST['postId'], '_qa_contact_email-template_tos', true);
  $ccs = get_post_meta($_POST['postId'], '_qa_contact_email-template_ccs', true);
  $bccs = get_post_meta($_POST['postId'], '_qa_contact_email-template_bccs', true);

  $tos_final = array();
  $ccs_final = array();
  $bccs_final = array();

  foreach ($tos as $to) {
    $tos_final[] = $to['_qa_contact_email-template_to'];
  }

  foreach ($ccs as $cc) {
    $ccs_final[] = $cc['_qa_contact_email-template_cc'];
  }

  foreach ($bccs as $bcc) {
    $bccs_final[] = $bcc['_qa_contact_email-template_bcc'];
  }

  $subject = get_post_meta($_POST['postId'], '_qa_contact_email-template_subject', true);

  $name = $_POST['name'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $phone = $_POST['phone'];
  $content = $_POST['content'];

  $template = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
      <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }

        .header-row {
            background: #053177;
            background-image: linear-gradient(-225deg, rgba(0,224,255,0.00) 0%, rgba(0,224,255,0.50) 100%);
            font-weight: bold;
            color: white;
        }

        .header-column {
            text-align: right;
            font-weight: bold;
            background: lightslategray;
            color: white;
        }
      </style>
    </head>

    <body>
      <div>Hi,</div>
      <br>
      <div>Below are customer data collected from the form submission on the website.</div>
      <table>
        <tr>
          <td colspan="2" class="header-row">Submitted Form Data</td>
        </tr>
        <tr>
          <td class="header-column">First Name</td>
          <td>' . $name . '</td>
        </tr>
        <tr>
          <td class="header-column">Business Email</td>
          <td>' . $email . '</td>
        </tr>
        <tr>
        <td class="header-column">Title</td>
        <td>' . $title . '</td>
      </tr>
          <td class="header-column">Phone Number</td>
          <td>' . $phone . '</td>
        </tr>
        <tr>
          <td class="header-column">Your Message</td>
          <td>' . $content . '</td>
        </tr>
      </table>
      <div>Regards,</div>
      <div></div>
    </body>

    </html>';

  // Send mail
  send_mail($tos_final, $ccs_final, $bccs_final, $subject, $template);
}
