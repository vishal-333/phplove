
<div class="container" align="center">
        <h3>Blog Posts</h3>
        <h5 style="margin-right:600px;">
           
        </h5> 
    <div class="m-4 p-4"> 

        <table align="center" class="table-striped" width="400px;" style="font-size: 14px;">
            <tr>
                <th>Id &nbsp;</th>
                <th>Title</th>
                <th>Created</th>
                <!-- <th>Action</th> -->
            </tr>

            <!-- Here is where we loop through our $posts array, printing out post info -->

            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post['Post']['id']; ?></td>
                <td>
                    <?php echo $this->Html->link($post['Post']['title'],
        array('controller' => 'posts', 'action' => 'view' ,'id' => $post['Post']['id'])); ?>
                </td>
                <td><?php echo $post['Post']['created']; ?></td>
                <td> 
                   

                 </td>
            </tr>
            <?php endforeach; ?>
            <?php unset($post); ?>
        </table>
        
    </div>
</div>



    

