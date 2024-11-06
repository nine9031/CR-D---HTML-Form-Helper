<?php
echo form_open('Manage_product/delete');
echo form_label('Code :', 'code');
echo form_input('code');
echo br();
echo br();
echo form_submit('mysubmit', 'Submit Post!');
echo form_close();