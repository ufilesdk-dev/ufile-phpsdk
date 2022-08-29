<?php
if (isset($_GET['dir'])) { //设置文件目录 
    $basedir = $_GET['dir']; 
    }else{ 
    $basedir = '.'; 
} 
$auto = true; //定义是否去掉文件中的BOM头，如果为 false 则只检测是否含有 BOM 头
checkdir($basedir);//检测目录
function checkdir($basedir){
    if ($dh = opendir($basedir)) {
        while (($file = readdir($dh)) !== false) {
            if($file{0} == '.'){
                continue;
            }
            if($file != '.' && $file != '..'){
                if (!is_dir($basedir."/".$file)) {
                    echo "filename: $basedir/$file ".checkBOM("$basedir/$file")." <br>";
                }else{
                    $dirname = $basedir."/".$file;
                    checkdir($dirname);
                }
            }
        }
        closedir($dh);
    }
}
//检查文件是否有BOM头，通过 全局变量 $auto 来控制是否删除文件中的BOM头
function checkBOM ($filename) {
    global $auto;
    $contents = file_get_contents($filename);
    $charset[1] = substr($contents, 0, 1);
    $charset[2] = substr($contents, 1, 1);
    $charset[3] = substr($contents, 2, 1);
    if (ord($charset[1]) == 239 && ord($charset[2]) == 187 && ord($charset[3]) == 191) {
        if ($auto) {
            $rest = substr($contents, 3);
            rewrite ($filename, $rest);
            return ("<font color=red>BOM found, automatically removed.</font>");
        } else {
            return ("<font color=red>BOM found.</font>");
        }
    }else{
        return ("BOM Not Found.");
    }    
}
//重写文件，以达到删除BOM头的目的
function rewrite ($filename, $data) {
    $filenum = fopen($filename, "w");
    flock($filenum, LOCK_EX);
    fwrite($filenum, $data);
    fclose($filenum);
}
?>
