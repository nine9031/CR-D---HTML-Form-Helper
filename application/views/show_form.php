<?php
echo form_open('Manage_product/create');
echo form_label('Code :', 'code');
echo form_input('code');
echo br();
echo form_label('Name :', 'name');
echo form_input('pname');
echo br();
echo form_label('Price :', 'price');
echo form_input('price');
echo br();
echo br();
echo form_submit('mysubmit', 'Submit Post!');
echo form_close();