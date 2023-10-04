<?php
// Add custom admin menu
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{
  add_menu_page(
    'Global Data',
    'Global Data',
    'manage_options',
    'global-configurations',
    'global_data',
    'dashicons-admin-settings',
    2
  );
}

function global_data()
{
?>
  <div class="wrap">
    <h2>Global Data</h2>
    <form method="post" action="options.php">
      <?php
      wp_nonce_field('update-options');

      $option_values = [
        'sendgrid-api-key',
        'sendgrid-sender-email'
      ];
      ?>
      <table>
        <tr>
          <td>
            <h3>SendGrid</h3>
          </td>
        </tr>
        <tr>
          <td><strong>API Key</strong></td>
          <td><input type="text" size="100" name="sendgrid-api-key" value="<?php echo get_option('sendgrid-api-key'); ?>" /></td>
        </tr>
        <tr>
          <td><strong>Sender Email</strong></td>
          <td><input type="text" size="100" name="sendgrid-sender-email" value="<?php echo get_option('sendgrid-sender-email'); ?>" /></td>
        </tr>
      </table>
      <p><input type="submit" class="button button-primary" name="Submit" value="Save Changes" /></p>
      <input type="hidden" name="action" value="update" />
      <input type="hidden" name="page_options" value="<?php echo implode(',', $option_values); ?>" />
    </form>
  </div>
<?php
}
