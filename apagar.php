<?php 
/** 
* Recursively delete a directory 
* 
* @param string $dir Nome do diretório 
* @param boolean $deleteRootToo Ponha True se quiser deletar a pasta (nao é seu caso) 
*/ 
function unlinkRecursive($dir, $deleteRootToo) 
{ 
    if(!$dh = @opendir($dir)) 
    { 
        return; 
    } 
    while (false !== ($obj = readdir($dh))) 
    { 
        if($obj == '.' || $obj == '..') 
        { 
            continue; 
        } 

        if (!@unlink($dir . '/' . $obj)) 
        { 
            unlinkRecursive($dir.'/'.$obj, true); 
        } 
    } 
    closedir($dh); 
    if ($deleteRootToo) 
    { 
        @rmdir($dir); 
    } 
    return; 
} 

unlinkRecursive( '/public_html/teste', true );
?>