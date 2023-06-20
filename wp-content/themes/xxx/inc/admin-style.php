<?php

add_action('admin_print_styles', 'custom_admin_styles');

function custom_admin_styles()
{
?>
    <style>
        .one-half {
            width: 50%;
            float: left;
        }

        .postbox.cmb2-postbox {
            overflow: hidden
        }

        .cmb2-wrap .cmb-td input.cmb2-text-medium {
            width: 95%;
        }

        #cmb2-metabox-book_demo .cmb-td {
            width: 100%
        }
    </style>


<?php }
