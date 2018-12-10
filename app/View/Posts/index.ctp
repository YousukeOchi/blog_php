<h1>Blog posts</h1>
<p><?php echo $this->Html->link('記事を書く', array('action' => 'add')); ?></p>
<table class="main-contents">
    <tr>
        <!-- <th>Id</th> -->
        <th class="title">Title</th>
        <th class="action">Actions</th>
        <th class="time">Created</th>
    </tr>

<!-- ここで $posts 配列をループして、投稿情報を表示 -->

    <?php foreach ($posts as $post): ?>
    <tr>
<!--         <td><?php echo $post['Post']['id']; ?></td> -->
        <td class="title">
            <?php
                echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id'])
                );
            ?>
        </td>
        <td class="action">
            <?php
                echo $this->Form->postLink(
                    '削除',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    '編集', array('action' => 'edit', $post['Post']['id'])
                );
            ?>
        </td>
        <td class="time">
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

