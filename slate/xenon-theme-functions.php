<?phpxenon_custom_link('hoga','xenon-signup.php');register_xenon_menu('upper-menu');register_xenon_widget('side-bar');register_xenon_widget('footer-left');register_xenon_widget('footer-center-left');register_xenon_widget('footer-center-right');register_xenon_widget('footer-right');function slate_admin() {      add_menu('slate-admin.php', 'slate-admin', 'themepage','1');  }xenon_core('xenon_add_menu', 'slate_admin');//file uploadfunction upload_slate_media($ii) {$headerlocadd=defence_sql_injection($_GET['h_add']);$header=defence_sql_injection($_GET['location_slate']);if($header=='slider') {$_FILES['file']['name']=$ii;function getExtension($str) {         $i = strrpos($str,".");         if (!$i) { return ""; }         $l = strlen($str) - $i;         $ext = substr($str,$i+1,$l);         return $ext; }$filename = stripslashes($_FILES['file']['name']); 	  		$extension = getExtension($filename); 		$extension = strtolower($extension);		echo $extension.'/'.$ii;if ($extension == "bmp" || $extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif")  {    if ($_FILES["file"]["error"] > 0)    {    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";    }  else    {	echo'a';	move_uploaded_file($_FILES["file"]["tmp_name"],      "../xenon-themes/".current_theme_name()."/images/slider/".$headerlocadd);echo $_FILES['file']['name'].' was successfully uploaded';  }    }else  {  echo "Invalid file extention";  }  }  else{ $_FILES['file']['name']=$ii;function getExtension($str) {         $i = strrpos($str,".");         if (!$i) { return ""; }         $l = strlen($str) - $i;         $ext = substr($str,$i+1,$l);         return $ext; }$filename = stripslashes($_FILES['file']['name']); 	  		$extension = getExtension($filename); 		$extension = strtolower($extension);		echo $extension.'/'.$ii;if ($extension == "bmp" || $extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif")  {    if ($_FILES["file"]["error"] > 0)    {    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";    }  else    {	echo'a';	move_uploaded_file($_FILES["file"]["tmp_name"],      "../xenon-themes/".current_theme_name()."/images/".$headerlocadd);echo $_FILES['file']['name'].' was successfully uploaded';  }    }else  {  echo "Invalid file extention";  }   }  }//finish//file editfunction file_edit_slate() {$i=$_POST['filename'];echo $i.'<br>';$contentst=$_POST['text'];$contentst=str_replace('\"','"',$contentst);$contentst=str_replace("\'","'",$contentst);$contentst = stripslashes($contentst);$file = fopen('../xenon-themes/'.current_theme_name().'/content/'.$i.".txt","w");$stringData = "$contentst";fwrite($file,$stringData);fclose($file);echo'updated successfully';}function file_edit_slate1() {if(isset($_GET['set']) && $_GET['set']=='text') {$contentst='<?php $slate_title_custom="text"; ?>';$contentst=str_replace('\"','"',$contentst);$contentst=str_replace("\'","'",$contentst);$contentst = stripslashes($contentst);$file = fopen("../xenon-themes/".current_theme_name()."/content/title.php","w");$stringData = "$contentst";fwrite($file,$stringData);fclose($file);echo 'updated successfully to text<br>';}elseif(isset($_GET['set']) && $_GET['set']=='image') {$contentst='<?php $slate_title_custom="image"; ?>';$contentst=str_replace('\"','"',$contentst);$contentst=str_replace("\'","'",$contentst);$contentst = stripslashes($contentst);$file = fopen("../xenon-themes/".current_theme_name()."/content/title.php","w");$stringData = "$contentst";fwrite($file,$stringData);fclose($file);echo 'updated successfully to image<br>';}echo 'update successful<br>';}//finishfunction header_slate_slider_upload1() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=upload&location_slate=slider&h_add=01.jpg" method="post"enctype="multipart/form-data"><label for="file">Select a theme(allowed extentions: .zip file only) :</label><input type="file" name="file" id="file" /><input type="submit" name="submit" value="Submit" /></form></h4>';}function header_slate_slider_upload2() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=upload&location_slate=slider&h_add=02.jpg" method="post"enctype="multipart/form-data"><label for="file">Select a theme(allowed extentions: .zip file only) :</label><input type="file" name="file" id="file" /><input type="submit" name="submit" value="Submit" /></form></h4>';}function header_slate_slider_upload3() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=upload&location_slate=slider&h_add=03.jpg" method="post"enctype="multipart/form-data"><label for="file">Select a theme(allowed extentions: .zip file only) :</label><input type="file" name="file" id="file" /><input type="submit" name="submit" value="Submit" /></form></h4>';}function header_slate_slider_upload4() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=upload&location_slate=slider&h_add=04.jpg" method="post"enctype="multipart/form-data"><label for="file">Select a theme(allowed extentions: .zip file only) :</label><input type="file" name="file" id="file" /><input type="submit" name="submit" value="Submit" /></form></h4>';}function header_slate_logo_upload() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=upload&location_slate=block&h_add=logo.png" method="post"enctype="multipart/form-data"><label for="file">Select a theme(allowed extentions: .zip file only) :</label><input type="file" name="file" id="file" /><input type="submit" name="submit" value="Submit" /></form></h4>';}function header_slate_block_upload1() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=upload&location_slate=block&h_add=templatemo_image_01.jpg" method="post"enctype="multipart/form-data"><label for="file">Select a theme(allowed extentions: .zip file only) :</label><input type="file" name="file" id="file" /><input type="submit" name="submit" value="Submit" /></form></h4>';}function header_slate_block_upload2() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=upload&location_slate=block&h_add=templatemo_image_05.jpg" method="post"enctype="multipart/form-data"><label for="file">Select a theme(allowed extentions: .zip file only) :</label><input type="file" name="file" id="file" /><input type="submit" name="submit" value="Submit" /></form></h4>';}function header_slate_block_upload3() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=upload&location_slate=block&h_add=templatemo_image_02.jpg" method="post"enctype="multipart/form-data"><label for="file">Select a theme(allowed extentions: .zip file only) :</label><input type="file" name="file" id="file" /><input type="submit" name="submit" value="Submit" /></form></h4>';}function header_slate_block_upload4() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=upload&location_slate=block&h_add=templatemo_image_03.jpg" method="post"enctype="multipart/form-data"><label for="file">Select a theme(allowed extentions: .zip file only) :</label><input type="file" name="file" id="file" /><input type="submit" name="submit" value="Submit" /></form></h4>';}function header_slate_block_upload5() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=upload&location_slate=block&h_add=templatemo_image_04.jpg" method="post"enctype="multipart/form-data"><label for="file">Select a theme(allowed extentions: .zip file only) :</label><input type="file" name="file" id="file" /><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_slider_text1() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="slider_text1"><textarea name="text">'; @include("content/slider_text1.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_slider_text2() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="slider_text2"><textarea name="text">'; @include("content/slider_text2.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_slider_text3() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="slider_text3"><textarea name="text">'; @include("content/slider_text3.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_slider_text4() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="slider_text4"><textarea name="text">'; @include("content/slider_text4.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_slider_link1() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="slider_link1"><textarea name="text">'; @include("content/slider_link1.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_slider_link2() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="slider_link2"><textarea name="text">'; @include("content/slider_link2.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_slider_link3() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="slider_link3"><textarea name="text">'; @include("content/slider_link3.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_slider_link4() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="slider_link4"><textarea name="text">'; @include("content/slider_link4.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block_title1() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block_title1"><textarea name="text">'; @include("content/index_block_title1.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block_title2() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block_title2"><textarea name="text">'; @include("content/index_block_title2.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block_title3() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block_title3"><textarea name="text">'; @include("content/index_block_title3.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block_content1() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block_content1"><textarea name="text">'; @include("content/index_block_content1.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block_content2() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block_content2"><textarea name="text">'; @include("content/index_block_content2.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block_content3() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block_content3"><textarea name="text">'; @include("content/index_block_content3.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block2_title1() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block2_title1"><textarea name="text">'; @include("content/index_block2_title1.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block2_title2() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block2_title2"><textarea name="text">'; @include("content/index_block2_title2.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block2_title3() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block2_title3"><textarea name="text">'; @include("content/index_block2_title3.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block2_title4() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block2_title4"><textarea name="text">'; @include("content/index_block2_title4.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block2_content1() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block2_content1"><textarea name="text">'; @include("content/index_block2_content1.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block2_content2() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block2_content2"><textarea name="text">'; @include("content/index_block2_content2.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block2_content3() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block2_content3"><textarea name="text">'; @include("content/index_block2_content3.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}function slate_index_block2_content4() {echo ' <h4><form action="xenon-theme-settings.php?theme=slate-admin&slate=text" method="post"><input type="hidden" name="filename" value="index_block2_content4"><textarea name="text">'; @include("content/index_block2_content4.txt"); echo'</textarea><input type="submit" name="submit" value="Submit" /></form></h4>';}?>