<?php
    /**
     * Variable donde se almacena el primer número que haya ingresado el usuario
     * @var double
     */
    $first = $_POST['first'];

    /**
     * Variable donde se almacena el segundo número que haya ingresado el usuario
     * @var double
     */
    $second = $_POST['second'];
?>

<tr>
    <td><?= $first; ?></td>
    <td>+</td>
    <td><?= $second; ?></td>
    <td>=</td>
    <td><?= number_format(($first + $second), 2); ?></td>
</tr>
<tr>
    <td><?= $first; ?></td>
    <td>-</td>
    <td><?= $second; ?></td>
    <td>=</td>
    <td><?= number_format(($first - $second), 2); ?></td>
</tr>
<tr>
    <td><?= $first; ?></td>
    <td>*</td>
    <td><?= $second; ?></td>
    <td>=</td>
    <td><?= number_format(($first * $second), 2); ?></td>
</tr>
<tr>
    <td><?= $first; ?></td>
    <td>/</td>
    <td><?= $second; ?></td>
    <td>=</td>
    <td><?= number_format(($first / $second), 2); ?></td>
</tr>
<tr>
    <td><?= $first; ?></td>
    <td>%</td>
    <td><?= $second; ?></td>
    <td>=</td>
    <td><?= number_format(($first % $second), 2); ?></td>
</tr>
<tr>
    <td><?= $first; ?></td>
    <td>^</td>
    <td><?= $second; ?></td>
    <td>=</td>
    <td><?= number_format(($first ** $second), 2); ?></td>
</tr>
<tr>
    <td><?= $first; ?></td>
    <td>+</td>
    <td>1</td>
    <td>=</td>
    <td><?= $first + 1; ?></td>
</tr>
<tr>
    <td><?= $second; ?></td>
    <td>+</td>
    <td>1</td>
    <td>=</td>
    <td><?= $second + 1; ?></td>
</tr>
<tr>
    <td><?= $first; ?></td>
    <td>-</td>
    <td>1</td>
    <td>=</td>
    <td><?= $first - 1; ?></td>
</tr>
<tr>
    <td><?= $second; ?></td>
    <td>-</td>
    <td>1</td>
    <td>=</td>
    <td><?= $second - 1; ?></td>
</tr>
<tr>
    <?php if ($first > $second) : ?>
        <td colspan="5">El primer valor "<?= $first; ?>" es mayor al segundo "<?= $second; ?>"</td>
    <?php elseif ($second > $first) : ?>
        <td colspan="5">El segundo valor "<?= $second; ?>" es mayor al primero "<?= $first; ?>"</td>
    <?php elseif ($first == $second) : ?>
        <td colspan="5">Ambos valores son iguales</td>
    <?php endif; ?>
</tr>