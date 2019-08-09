<div class="container" align="center">
        <h4>Blog Posts Addition</h4>
    <div class="row"> 
        

            <?php 
            echo $this->element('flashMessages');?>
           <div class="row" align="right">
            <?php
            //   echo $this->Html->link(
            //     'Add User',
            //     array('controller' => 'registrations', 'action' => 'register')
            // );
           
            echo $this->Form->create('Post');
            // echo $this->Form->input('username');
            echo $this->Form->input('title',array('required' =>  false));
            echo $this->Form->input('body',array('required' => false));
            echo $this->Form->end('Add Post');
            ?>
           </div>

            <!-- Here is where we loop through our $posts array, printing out post info -->


    </div>
</div>
    

