<div class="container" align="center">
        <h3>Blog Posts</h3>
        <h5 style="margin-right:600px;">
           
        </h5> 
    <div class="row"> 

        <table align="center" class="table-striped" width="400px;" style="font-size: 14px;">
            <tr>
                <th>Id &nbsp;</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
            </tr>

            <!-- Here is where we loop through our $posts array, printing out post info -->

            <?php //foreach ($post as $posts): ?>
            <tr>
                <td><?php echo $post['Post']['id']; ?></td>
                <td><?php echo $post['Post']['title']; ?></td>
                <td><?php echo $post['Post']['body']; ?></td>
                <td><?php echo $post['Post']['created']; ?></td>
                   

                 
            </tr>
            <?php //endforeach; ?>
            <?php unset($post); ?>
        </table>