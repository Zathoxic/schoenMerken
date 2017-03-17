<?php
    include('common/header.php');
    require('logic/index.logic.php');
?>
    <div id="container">
        <table class="table">
            <tr>
                <th>Id:</th>
                <th>Brand:</th>
                <th>Size:</th>
            </tr>
            <?php foreach ($shoeMerken as $shoeMerk) { ?>
            <tr>
                <td>
                    <?= $shoeMerk['id'] ?>
                </td>
                <td>
                    <?= $shoeMerk['brand'] ?>
                </td>
                <td>
                    <select class="shoeSizes" name="shoeSize">
                        <?php foreach ($shoeSizes as $shoeSize){ ?>
                        <option value="">
                            <?= $shoeSize['size'] ?>
                        </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

<?php
    include('common/footer.php');
?>
