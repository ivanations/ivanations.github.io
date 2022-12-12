
    

<!-- -->
<?php

// Libro 1
// paginas desde 0001 hasta 0145

function forma($x){
    if (($x <= 99)&&($x >= 0)) {
        return "00".$x;
    }else if (($x > 99)&&($x <= 145)) {
        return "0".$x;
    }else{
        return "0015";
    }
}

$dir = "https://d38l3k3yaet8r2.cloudfront.net/resources/products/epubs/generated/7F7DA8D7-441B-4142-8CC6-4E8E5F649A37/content/private/OEBPS/page".forma($_GET['page']).".xhtml";
$res = file_get_contents($dir);

$link1 = 'https://d38l3k3yaet8r2.cloudfront.net/resources/products/epubs/generated/7F7DA8D7-441B-4142-8CC6-4E8E5F649A37/content/public/OEBPS/images/';
$link2 = 'https://d38l3k3yaet8r2.cloudfront.net/resources/products/epubs/generated/7F7DA8D7-441B-4142-8CC6-4E8E5F649A37/content/public/OEBPS/css/';
$link3 = 'https://d38l3k3yaet8r2.cloudfront.net/resources/products/epubs/generated/7F7DA8D7-441B-4142-8CC6-4E8E5F649A37/content/public/OEBPS/js/';
$link4 = 'https://d38l3k3yaet8r2.cloudfront.net/resources/products/epubs/generated/7F7DA8D7-441B-4142-8CC6-4E8E5F649A37/content/public/OEBPS/audio/';

$res = str_replace("images/", $link1, $res);
$res = str_replace("css/", $link2, $res);
$res = str_replace("js/", $link3, $res);

$res = str_replace('<html xmlns="http://www.w3.org/1999/xhtml" xmlns:epub="http://www.idpf.org/2007/ops">', '<html><head xmlns="http://www.w3.org/1999/xhtml"><base href="https://d38l3k3yaet8r2.cloudfront.net/resources/products/epubs/generated/7F7DA8D7-441B-4142-8CC6-4E8E5F649A37/content/public/OEBPS/page'.$_GET['page'].'.xhtml">', $res);

echo $res;

?>

