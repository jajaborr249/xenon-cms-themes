<?php @include('header.php'); ?>


<?php 	 foreach($ruris as $ruri) {
$id=$ruri;
}
?>

<script>
var iu=15,catycat="<?php echo $id; ?>",lu=0;;
function loadCat() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Loading More Adds...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; loadCat(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
str22=document.getElementById("cat").value;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		if(xmlhttp.responseText=="") {
		document.getElementById("atext").innerHTML = 'Nothing to show';
		cleardivloadercall('All Adds Loaded Already.<br>Nothing to show.');
		}
		else {
			document.getElementById("loadadd").innerHTML=document.getElementById("loadadd").innerHTML+xmlhttp.responseText;
			iu=iu+15;
			cleardivloadercall('New Adds Loaded Succeefully');
		}	
    }
   }
xmlhttp.open("GET","<?php echo home_url(); ?>/core?action=loadcat&start="+iu+"&cat="+str22,true);
xmlhttp.send();
}
}




function showCom(cat) {
document.getElementById('com').style.display = 'none';
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i,lan;
<?php
if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'lan="en"; '; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'lan="ar"; '; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'lan="ku"; '; }
else { echo'lan="en"; '; }
?>
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		if(xmlhttp.responseText=="no") {
			document.getElementById('com').style.display = 'none';
			document.getElementById("showcom1").innerHTML='<option value=""></option>';
			if ( lu==0 ) {  } else { searchFurrat(); }
		}
		else {
			document.getElementById('com').style.display = 'block';
			document.getElementById("showcom1").innerHTML=xmlhttp.responseText;
			if ( lu==0 ) {  } else { searchFurrat(); }
		}	
    }
   }
xmlhttp.open("GET","http://<?php echo @$_SERVER['SERVER_NAME']; ?>/core?action=showcom&com="+cat+"&lan="+lan,true);
xmlhttp.send();
}



function showCat(cat) {
document.getElementById('subcat').style.display = 'none';
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		if(xmlhttp.responseText=="no") {
			document.getElementById('subcat').style.display = 'none';
		}
		else {
			document.getElementById('subcat').style.display = 'block';
			document.getElementById("subcat").innerHTML=xmlhttp.responseText;
		}
	showCom(cat);		
    }
   }
xmlhttp.open("GET","http://<?php echo @$_SERVER['SERVER_NAME']; ?>/core?action=showcat&cat="+cat,true);
xmlhttp.send();
}





function openDivcat() {
var NAME;
if(xcc<=catH) {
document.getElementById('catchange').style.height=(catH-xcc)+"px";
xcc++;
}
else {
xcc--;
clearInterval(myVar);
}
}
function closeDivcat() {
if(xcc>=0) {
document.getElementById('catchange').style.height=(catH-xcc)+"px";
xcc--;
}
else {
document.getElementById('catchange').style.height="auto";
xcc++;
clearInterval(myVar);
}
}

function catchange() {
if(document.getElementById('catchange').clientHeight>0) {
catH = document.getElementById('catchange').clientHeight;
xcc=0;
myVar = setInterval(function(){openDivcat()},1);
}
else if(document.getElementById('catchange').clientHeight==0) {
xcc=catH;
myVar = setInterval(function(){closeDivcat()},1);
}
}

function catselect(cat,catid) {
document.getElementById("en").value='';
showCom(catid);
document.getElementById("showcat1").value=catid;
document.getElementById("catTxt").innerHTML=cat;
document.getElementById("add-cont").className = "add-cont-css";
catH = document.getElementById('catchange').clientHeight;
xcc=0;
if ( lu==0 ) { lu=1; searchFurrat(); }
myVar = setInterval(function(){openDivcat()},1);
}


function searchFurrat() {
iu=15;
document.getElementById("atext").innerHTML = 'رؤية المزيد';
var xmlhttp;
var txt,id,un,msg,en,ar,ku,endes,ardes,kudes,city,cat,com,ione,itwo,ithree,owner,cell,email,price,i,min,max,lan;
<?php
if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'lan="en"; '; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'lan="ar"; '; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'lan="ku"; '; }
else { echo'lan="en"; '; }
?>
cat=catycat;
if(document.getElementById("showcom1").value!='') { com=document.getElementById("showcom1").value; } else { com='bittotheboss' }
city=document.getElementById("city").value;
if(document.getElementById("en").value!='') { en=document.getElementById("en").value; } else { en='bittotheboss' }
if(document.getElementById("min").value!='') { min=document.getElementById("min").value; } else { min='bittotheboss' }
if(document.getElementById("max").value!='') { max=document.getElementById("max").value; } else { max='bittotheboss' }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	if(xmlhttp.responseText=="no") {
		document.getElementById("searchload").innerHTML="<div style=\"float:left; margin-left:10px;\">Nothing Found</div>";
		
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Addvertise Added Successfully</h2>";
		document.getElementById("add-new").style.display = 'none';
		cleardivloadercall('Addvertise Added Successfully');
	}
	else {
		document.getElementById("searchload").innerHTML=xmlhttp.responseText;
	}
    }
   }
xmlhttp.open("POST","http://<?php echo @$_SERVER['SERVER_NAME']; ?>/core?action=searchfurrat&lan="+lan,true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("en="+en+"&city="+city+"&cat="+cat+"&com="+com+"&min="+min+"&max="+max);
}

var iu=15;
function searchFurratmore() {
var xmlhttp;
var txt,id,un,msg,en,ar,ku,endes,ardes,kudes,city,cat,com,ione,itwo,ithree,owner,cell,email,price,i,min,max;
cat=catycat;
if(document.getElementById("showcom1").value!='') { com=document.getElementById("showcom1").value; } else { com='bittotheboss' }
city=document.getElementById("city").value;
if(document.getElementById("en").value!='') { en=document.getElementById("en").value; } else { en='bittotheboss' }
if(document.getElementById("min").value!='') { min=document.getElementById("min").value; } else { min='bittotheboss' }
if(document.getElementById("max").value!='') { max=document.getElementById("max").value; } else { max='bittotheboss' }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	if(xmlhttp.responseText=="no") {
		document.getElementById("atext").innerHTML = '<div style=\"float:left; margin-left:10px;\">العثور على أي شيء</div>';
	}
	else {
		document.getElementById("searchload").innerHTML=document.getElementById("searchload").innerHTML+xmlhttp.responseText;
			iu=iu+15;

	}
    }
   }
xmlhttp.open("POST","http://<?php echo @$_SERVER['SERVER_NAME']; ?>/core?action=searchfurratmore&start="+iu,true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("en="+en+"&city="+city+"&cat="+cat+"&com="+com+"&min="+min+"&max="+max);
}
</script>


<?php 
echo '<input type="hidden" value="'.$id.'" id="cat"/>';
?>
<div id="new_arival">        <div class="inttext">        <span class="seelink"><?php
 $result = @mysql_query("SELECT * FROM furrat_cat WHERE id='$id' ORDER by id desc LIMIT 0,15");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) { 
		echo $pages['arname'];

}
}		?></span></div>        </div> 



  




	    
	 
	 <?php
	 if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") {
	 if(if_furrat_cat_parent($id)) {
		$result = @mysql_query("SELECT * FROM furrat_cat Where parent='$id' ORDER by id desc");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
echo'
<div style="cursor:pointer" class="category_page_img_main show_hide3"><a href="'.home_url().'/ar/category/'.$pages['id'].'">
													<div class="catergory_page_img" style="'; 
													if(have_image($pages['id'])!='0') {
													echo'background-image:url(http://'.have_image($pages['id']).'); ';
													}
													else {
													echo'background-image:url('.theme_location().'/images/Kurdshopping4f86ee45496243.03075391.png); ';
													}
													echo' background-position:center; background-repeat:no-repeat; background-size: 120px 70px;;">  
                                                        </div>
<div class="category_img_name" style="cursor:pointer">'.$pages['arname'].'</div></a></div>';
}
}
	 } 
	 else {
	 	 //search section
	 
	 
	 echo' <div id="add-new" class="add-new-c">



<div id="kurd_pladead_all_content">
<div class="kurdshopping_pament_page_sub">                <p class="kurdshopping_pament_all_sub_left_text" style="display:none;"><input type="text" required="" name="subCatId" id="subCatId" style="visibility:hidden;"><br><label for="catId"></label>  <input type="hidden" name="catId" id="catId" value="15"></p>


<div class="selectcat show_hide3 tTip" onclick="catchange()"><div style="float: left;
    margin-right: 10px;padding-left: 4px;" id="catImg"><img id="catImgsrc" height="35"></div><div id="catTxt">Select A Category</div></div>


	
                    <p></p>
					<div style="clear:both;"></div>
					
					<div class="slidingDiv3" style="width: 871px; display: block;" id="catchange">    <div class="additional-background-allcat"><span class="add-back1"></span><span class="empty-back"></span><span class="add-back2"></span></div>                        <div id="toplistbar"></div>
					
					
					
					<div class="leftmenu_main"><ul id="verticalNav">  
';
					
$result = @mysql_query("SELECT * FROM furrat_cat Where parent='0' ORDER by id desc");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
echo'<li onclick="showCat(this.value)" rel="panel" id="parentcat" cl="#16" style="cursor:pointer" class="" value="'.$pages['id'].'"><a>'.$pages['enname'].'</a></li>';
}
}													
echo'
</ul></div>
													
													









													<div id="sections"> 								       
													<div class="section" id="subcat" style="display: block;"></div>        						    
														
														</div>                    
														
														
														</div>                <p></p>
														</div>
</div>
<div id="add-cont" class="add-cont-css-hide" style="float:right; text-align:right;"><form action="xenon-theme-settings.php?theme=furrat-admin&action=add-cat" method="post"
enctype="multipart/form-data">';
echo'<div style="float:right; text-align:right; margin-right: 0px; margin-top:10px;">&nbsp; : عنوان البحث  </div><div style="float:right; text-align:right;"><input type="text" id="en" value="" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"  onkeyup="searchFurrat()"/></div>';

echo'<div style="float:right; text-align:right;  margin-top:10px;">&nbsp; : اختر المدينة  &nbsp;</div><div style="float:right; text-align:right;"><select id="city" style="height: 40px; width:205px; margin-left:10px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;" onchange="searchFurrat()">';
$result = @mysql_query("SELECT * FROM furrat_city ORDER by id desc");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
echo'<option value="'.$pages['id'].'">'.$pages['arname'].'</option>';
}
}
echo'</select></div><div style="clear:both;"></div><br><br>';

echo'<div style="float:right; text-align:right; margin-right: 20px;  margin-top:10px;">: دقيقة ($) </div><div style="float:right; text-align:right;"><input type="text" id="min" value="" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"  onkeyup="searchFurrat()"/></div>';
echo'<div style="float:right; text-align:right;  margin-top:10px;">: ماكس ($) &nbsp;&nbsp;</div><div style="float:right; text-align:right;"><input type="text" id="max" value="" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"  onkeyup="searchFurrat()"/></div>';
echo'<br><br>';
echo'<div id="com" style="float:right; text-align:right; margin-top:30px;"><div style="float:right; text-align:right;  margin-top:10px;">&nbsp;&nbsp&nbsp; : شركة &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div style="float:right; text-align:right;"><select onchange="searchFurrat()" id="showcom1" style="height: 40px; width:200px; margin-left:19px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">';
echo'</select></div></div><br><br><br>';
echo'';
echo'<br>
<input type="hidden" id="showcat1" value=""/><div style="clear:both;"></div>
';
echo'<div style="clear:both;"></div>';
echo'
</form></div>';


echo'</div>


<div id="searchload">';
	 
	 
	 
	 
	 //end search section
	 
	 
	 
	 $result = @mysql_query("SELECT * FROM furrat_product WHERE cat='$id' ORDER by id desc LIMIT 0,15");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		echo'
		 <a href="'.home_url().'/ar/add/'.$pages['id'].'">         <div class="recent_ad_pic_main">            
                 <div class="recent_ad_pic">                                   				
                <img src="'.home_url().'/xenon-upload/'.$pages['ione'].'">                    
                   

                 

         <!--</div>-->         
         </div>     
     <div class="recent_ad_name">'.$pages['arname'].'</div><div id="recent"><!--<div id="recent_title">Title:</div>--><div class="recent_ad_city">';
	 $city=$pages['city'];
	 $result1 = @mysql_query("SELECT * FROM furrat_city WHERE id='$city' ORDER by id desc");
	 if ( @mysql_num_rows($result1) > 0 ) {
		while($pages1 = @mysql_fetch_array($result1)) {
		echo $pages1['arname'];
		}
		}
	 echo'</div></div><div id="recent2">    <!--<div id="recent_price">Price:</div>--><div class="recent_ad_price"> '.$pages['price'].'$</div></div></div></a>
		';
		}
		}
		echo'</div>';
	 }
	 }
	 ?>
	 
	 


	 
	 
	 <script>function show_more()
{
	//alert('I am working');
	document.getElementById('kurdshopping_show_more').style.display="block";
	document.getElementById('show_more_button').style.display="none";
}
document.getElementById('kurd_pladead_all_content').style.display = 'none';
document.getElementById('add-new').style.display = 'block';
catselect('Mobile',catycat);
</script><div id="new_arival">        <div class="inttext" id="intext">        <span class="seelink"><a id="atext" style="cursor:pointer; color:white; text-decoration:none;" onclick="searchFurratmore()">رؤية المزيد</a></span></div></div><div id="kurdshopping_show_more" style="display:none;">   


	 
	 <div id="new_arival_bottom">        <div class="inttext">        <a href="http://www.kurdshopping.com/en/index.php/recent/ads">        <span class="seelink">New Arrivals</span></a></div>        </div></div></div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
<?php @include('footer.php'); ?>