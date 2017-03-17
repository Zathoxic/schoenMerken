<?php
    include('common/header.php');
    require('logic/index.logic.php');
?>
    <div id="container">
        <table class="table">
            <tr>
                <th>Id:</th>
                <th>Brand:</th>
                <th>Sizes:</th>
                <th>Stock:</th>
            </tr>
            <?php
            foreach ($shoeBrands as $shoeBrand) {
            ?>
            <tr>
                <td>
                    <?= $shoeBrand['id'] ?>
                </td>
                <td>
                    <?= $shoeBrand['brand'] ?>
                </td>
                <td>
                    <select class="shoeSizes" name="shoeSize">
                        <?php
                            foreach ($shoeSizes as $shoeSize) {
                                if($shoeSize['brand_id'] == $shoeBrand['id']){
                            ?>
                            <option value=""><?=$shoeSize['size']?></option>
                            <?php
                                }
                            }
                        ?>
                    </select>
                </td>
                <td>
                    <?php 
                        var_dump($shoeBrand['id']);
                        var_dump($stock);
                    ?>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
<?php
    include('common/footer.php');
?>
