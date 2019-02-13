<?php
/**
 * User: ejx
 * Date: 2015/6/23
 * Time: 9:54
 */
createThumbnail('a.jpg',120,120,'tmp/'.time().'.jpg');
function createThumbnail($srcFile='', $toW=120, $toH=120, $toFile="") {
    $info = "";
    //返回含有4个单元的数组，0-宽，1-高，2-图像类型，3-宽高的文本描述。
    //失败返回false并产生警告。
    $data = getimagesize($srcFile, $info);
    if (!$data){
        return false;
    }
    if ($toFile == ""){
        $toFile = $srcFile;
    }
    //将文件载入到资源变量im中
    switch ($data[2]) { //1-GIF，2-JPG，3-PNG
        case 1:
            if (!function_exists("imagecreatefromgif")) {
                echo "the GD can't support .gif, please use .jpeg or .png! <a href='javascript:history.back();'>back</a>";
                exit();
            }
            $im = imagecreatefromgif($srcFile);
            break;
        case 2:
            if (!function_exists("imagecreatefromjpeg")) {
                echo "the GD can't support .jpeg, please use other picture! <a href='javascript:history.back();'>back</a>";
                exit();
            }
            $im = imagecreatefromjpeg($srcFile);
            break;
        case 3:
            $im = imagecreatefrompng($srcFile);
            break;
    }

    //计算缩略图的宽高
    $srcW = imagesx($im);
    $srcH = imagesy($im);
    $toWH = $toW / $toH;
    $srcWH = $srcW / $srcH;
    if ($toWH <= $srcWH) {
        $ftoW = $toW;
        $ftoH = (int)($ftoW * ($srcH / $srcW));
    } else {
        $ftoH = $toH;
        $ftoW = (int)($ftoH * ($srcW / $srcH));
    }

    if (function_exists("imagecreatetruecolor")) {
        $ni = imagecreatetruecolor($ftoW, $ftoH); //新建一个真彩色图像
        if ($ni) {
            //重采样拷贝部分图像并调整大小 可保持较好的清晰度
            imagecopyresampled($ni, $im, 0, 0, 0, 0, $ftoW, $ftoH, $srcW, $srcH);
        } else {
            //拷贝部分图像并调整大小
            $ni = imagecreate($ftoW, $ftoH);
            imagecopyresized($ni, $im, 0, 0, 0, 0, $ftoW, $ftoH, $srcW, $srcH);
        }
    } else {
        $ni = imagecreate($ftoW, $ftoH);
        imagecopyresized($ni, $im, 0, 0, 0, 0, $ftoW, $ftoH, $srcW, $srcH);
    }
    //保存到文件 统一为.png格式
    imagepng($ni, $toFile); //以 PNG 格式将图像输出到浏览器或文件
    ImageDestroy($ni);
    ImageDestroy($im);
    return true;
}
