

<div class="container" align="center">
        <h3>Blog Posts</h3>
        <h5 style="margin-right:600px;">
            <button>
                           <?php  echo $this->Html->link(
                                                        'Add New Post',
                                                        Router::url('/post/add/', true)
                                                        );
                            ?>  
            </button>
        </h5> 
    <div class="row"> 

        <table align="center" class="table-striped" width="400px;" style="font-size: 14px;">
            <tr>
                <th>Id &nbsp;</th>
                <th>Title</th>
                <th>Created</th>
                <th>Action</th>
            </tr>

            <!-- Here is where we loop through our $posts array, printing out post info -->

            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post['Post']['id']; ?></td>
                <td>
                    <?php echo $this->Html->link($post['Post']['title'],
        array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
                </td>
                <td><?php echo $post['Post']['created']; ?></td>
                <td> 
                    <?php echo $this->Html->link('Edit',
                    array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?>

                    <?php echo $this->Html->link('Delete',
                        ['controller' => 'posts', 'action' => 'delete', 'id' => $post['Post']['id']],
                        ['confirm' => 'Do you want to delete this post']
                    ); ?>

                 </td>
            </tr>
            <?php endforeach; ?>
            <?php unset($post); ?>
        </table>

        

    </div>
</div>



    

