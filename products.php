<?php

require_once('init.php');
loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isGET()) {
        $pm = new ProductManager();
        $rows = $pm->listProducts();

        $html = "";
        foreach($rows as $row) {
            $sku = $row['id'];
            $price = $row['price'];
            $desc = $row['description'];
            $type = $row['type'];
            $name = $row['name'];
            $url = $row['url'];
            $html .= "<tr>
                        <td data-sku-desc='$sku'>$type<br>$name<br><img src='$url' height='90px' width='100px'></td>
                        <td><input data-sku-qty='$sku' type='number' value='1' min='1' max='10' step='1'/></td>
                        <td data-sku-price='$sku'>$price</td>
                        <td><input data-sku-add='$sku' type='button' value='Add'/></td>
                      </tr>";
        }
        echo $html;
        return;

    } else {
        $data = array("status" => "error", "msg" => "Only GET allowed.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
