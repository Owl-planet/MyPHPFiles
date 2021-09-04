<?php 
function fileRead($file){
    if(file_exists($file)){
        $handle = @fopen($file, 'r');
        if($handle){
            if(fwrite($handle, 'Deneme'))
                return true;
            else
                throw new Exception('Dosya yazılmadı', 3);
        } else
            throw new Exception('Dosya Açılmadı', 2);
    } else 
        throw new Exception('Dosya bulunmadı', 1);
}
function fileRead2($file){
    if(!file_exists($file)){
        throw new Exception('Dosya Bulunamadı', 1);
        $handle = @fopen($file, 'r');
        if(!$handle)
            throw new Exception('Dosya açılmadı', 2);
        if(!fwrite($handle, 'Deneme'))
            throw new Exception('Dosya Yazılamadı', 3);
        return true;
    }
    try {
        fileRead('../log.txt');
        fileRead2('../log.txt');
    } catch(Exception $e){
        echo $e->getMessage().' Line:'.$e->getLine();
    }

}
?>