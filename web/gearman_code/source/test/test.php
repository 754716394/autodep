<?php
//     $myfile = fopen("D:\\temp\\x.txt", "w");
//     fclose($myfile);
//       file_put_contents("D:\\temp\\a\\x.txt", "ddddddd\r\n\r\n", FILE_APPEND);


// if(file_exists("D:\\temp\\x.txt"))
// {
//     echo "�ļ�����";
// }
// else 
// {
//     echo "�ļ�������";    
// }


// $filename = "D:\\temp\\x.txt";
// $handle = fopen($filename, "r");//��ȡ�������ļ�ʱ����Ҫ���ڶ����������ó�'rb'

// //ͨ��filesize����ļ���С���������ļ�һ���Ӷ���һ���ַ�����
// $contents = fread($handle, filesize ($filename));
// fclose($handle);

// // echo $contents;

//  $pos=strpos($contents,"323");
//  $prev=substr($contents,0,$pos-1);
 
//  $next=substr($contents,$pos);
 
//  echo $prev."\r\n"."�����������"."\r\n".$next;
//  echo date('Y-m-d',time());

if(is_dir("D:\\temp\\reald"))
{
    echo "Ŀ¼����";
}
else 
{
    echo "Ŀ¼������";
}
?>