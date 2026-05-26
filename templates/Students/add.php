<h1>Add Student</h1>

<?php echo $this->Form->create(); 


echo $this->Form->control('name');
echo $this->Form->control('email');
echo $this->Form->control('class');
echo $this->Form->control('roll_no');


echo $this->Form->button('Save Student'); 

echo $this->Form->end(); ?>