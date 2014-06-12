<h1>List of <?php echo $count ?> Category Items</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Year</th>
        <th>Length</th>
    </tr>
    <?php foreach ($items as $item): ?>
    <tr>
        <td>
            <?php echo h($item['Item']['id']); ?>
        </td>
        <td>
            <?php echo $this->Html->link($item['Item']['title'],
                                         array('controller' => 'items',
                                               'action'     => 'view',
                                               $item['Item']['id']));?>

        </td>
        <td>
            <?php echo h($item['Item']['year']); ?>
        </td>
        <td>
            <?php echo h($item['Item']['length']); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($item); ?>
</table>