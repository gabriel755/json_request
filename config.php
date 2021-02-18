<?php

    /*$content = '
    <rss>
        <informacao>
            <item>
                <title>Gabriel</title>
                <idade>24</idade>
            </item>
        </informacao> 
    </rss>
    '
    $dir = mkdir('pasta_xml')

    if(isset($dir)){
        opendir($dir);
            file_put_contents('./pasta_xml/file.xml', $content);
        closedir($dir);
    }else{
        mkdir('pasta_xml');
            opendir('pasta_xml');
                file_put_contents('./pasta_xml/file.xml');
            closedir('pasta_xml');
    }*/

    //Request
    $arr = ['nome' => 'Gabriel', 'cidade' => 'Floripa'];

    $json = json_encode($arr);

    echo $json;

    
 
?>
