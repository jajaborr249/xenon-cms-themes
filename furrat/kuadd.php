<?php @include('header.php'); ?><script></script><div id="new_arival">         </div> <?phpforeach($ruris as $ruri) {$id=$ruri;}$result = @mysql_query("SELECT * FROM furrat_product WHERE id='$id'");		if ( @mysql_num_rows($result) > 0 ) {		while($pages = @mysql_fetch_array($result)) {		$edate=$pages['date'];$edate1=strtotime($edate);$edate=date("dm",$edate1);$datey=date("Y",$edate1);echo'<div class="Kurdshopping_recent_ad_main_adpage" style="padding-top:10px;">        <!-- ads view section start   -->                <div class="correct"><div class="inermainright"><div class="Kurdshopping_iner_ad_main">				<div id="photos" class="clearfix">        				<a  class="popup photo1" id="hover">            <img  height="100px" width="100px" src="../../xenon-upload/'.$pages['ione'].'" alt="furrat">        <div class="tooltip"><img src="../../xenon-upload/'.$pages['ione'].'" alt="furrat"><b><br>'.$pages['enname'].' | پرايس: $'.$pages['price'].'</b><br></div>        </a>';              		if($pages['itwo']!='') { echo'<a class="popup photo1" id="hover">            <img height="100px" width="100px" src="../../xenon-upload/'.$pages['itwo'].'" alt="furrat">		 <div class="tooltip"><img src="../../xenon-upload/'.$pages['itwo'].'" alt="furrat"><b><br>'.$pages['enname'].' | پرايس: $'.$pages['price'].'</b><br></div>        </a>'; }              		if($pages['ithree']!='') { echo'<a class="popup photo1" id="hover">            <img height="100px" width="100px" src="../../xenon-upload/'.$pages['ithree'].'" alt="furrat">        <div class="tooltip"><img src="../../xenon-upload/'.$pages['ithree'].'" alt="furrat"><b><br>'.$pages['enname'].' | پرايس: $'.$pages['price'].'</b><br></div>        </a>'; }                   		echo'</div>		       <div style="clear:both; text-align:center;">	   <a  class="popup photo1" id="hover1">     <img src="../../xenon-upload/'.$pages['ione'].'" alt="furrat" class="bigimg"> 	   <div class="tooltip1"><img src="../../xenon-upload/'.$pages['ione'].'" alt="furrat"><b><br>'.$pages['enname'].' | Price: $'.$pages['price'].'</b><br></div>	   </a>             	   </div>	   	   	   	   	   <p></p>    <div id="ad_descr" bgcolor="#8B0302" style="border:1px solid #ccc;border: 1px solid #CCCCCC;text-align: right;">            	                												<p class="publisher_price"><span id="p_tit">$'.$pages['price'].'</span> <span id="p_price">   پرايس <span></span></span></p>                <div class="iner_bar">                '.$pages['kuname'].'</div>        												            <p style=" margin-right:20px; padding-top: 5px; color:#FFF; font-size:18px; font-family:Arial, Helvetica, sans-serif;"> 			            </p>    </div> <table width="538" style="margin-left:auto;margin-right:auto;  margin-top:-1px; border-bottom-left-radius: 3px; border-bottom-right-radius:3px;"> <tbody><tr class="tborder">        																		<td colspan="2" class="deletecolors">      '.$edate.''.$pages['id'].'         </td>        																		<td width="100" class="deletecolor">      <div style="color:#8B0302;font-size:12px; font-weight:bold;">    ئاد كەود    </div>        </td>						<td width="136" class="deletecolors">            </td> 						<td width="127" class="deletecolor">           <div style="color:#8B0302;font-size:12px; font-weight:bold;">        </div>        </td>  </tr>  <tr class="tborder">           <td colspan="2" class="deletecolors">      <div style="color:#8B0302;font-size:12px; font-weight:bold;">';       $city=$pages['city'];	 $result1 = @mysql_query("SELECT * FROM furrat_city WHERE id='$city' ORDER by id desc");	 if ( @mysql_num_rows($result1) > 0 ) {		while($pages1 = @mysql_fetch_array($result1)) {		echo $pages1['kuname'];		}		}  echo'</div>               </td>            <td width="100" class="deletecolor">        شار         </td> <td width="136" class="deletecolors">   '.$pages['date'].'     </td>          <td width="127" class="deletecolor">         <div style="color:#8B0302;font-size:12px; font-weight:bold;"> 	    دێيت     </div>         </td> 		</tr>		<tr class="tborder">      		<td colspan="2" class="deletecolors">    '.$pages['kuname'].'       </td>        <td width="100" class="deletecolor"><div style="color:#8B0302;font-size:12px; font-weight:bold;">     مێيك / مۆدەل    </div></td>  				<td class="deletecolors">  '.$datey.'      </td>        				<td class="deletecolor"><div style="color:#8B0302;font-size:12px; font-weight:bold;">  ييەر   </div></td>    				</tr></tbody></table>		</div><!-- text data--><div class="Kurdshopping_iner_ad_main" style="margin-top:10px; margin-bottom:10px; padding-top:15px; width:645px; clear:both;"><div class="iner_sub">    <p class="iner_ad_text"></p>														<pre style=" white-space: pre-wrap; padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right:10px; overflow:hidden;    font-size:18px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#4A4C4C !important;">            '.$pages['kudescrip'].'            </pre>    <p></p></div>    </div><!--end similar adds--><!-- publisher price--><div class="publisher_price_main" style="height: 178px;"><!--<div class="publisher_price_header"> </div>-->    <div class="publisher_contact">   		<p class="publisher_price_det">كۆنتاكت پەبليشە</p>    </div>    <hr class="peblish_line">        <div class="seller" style="float: left;    margin-left: 14px;    width: 74%;">        			<div id="ph_title">     	'.$pages['owner'].'           </div>        										<div id="ph_number">       	ناو       </div> 		</div>    <div class="publisher_contact_phone" style="height:70px;"><!--<img src="images/phone_03.png" class="leftpara">--><!--    <p class="leftpara_1">-->   		<div id="ph_title" style="width:103px;"> '.$pages['cell'].'</div><div id="ph_number">    فەون نەمبەر   <!--</p--></div>		<div id="ph_title">  '.$pages['email'].'    ئيمێل    </div> <div id="ph_number">  ئيمێل   </div>               </div>  <!--  </p>-->  <!--    <div class="Additional-info"><p>Please note that under our Motor section you can find all kind of cars such as BMW, AUDI, VW, Toyota, Honda, Ferrari, Volkswagen, Cadillac, Chevrolet, Chrysler, Dodge, Opel, Ford, Hummer, Hyundai, Isuzu, Jaguar, Jeep, KIA, Land Rover, Lexus, Lincoln, Lotus, Mazda, Mitsubishi, Nissan, Peugeot, Porsche, Renault, Subaru, Suzuki, Volvo, Mercedes Benz, Skoda, Infinity, Fiat, Bentley, Sunny, Proton, Scania, GMC, Deer, Sang yong, Gerry, Mercury and all kinds of car parts. This section of ads is a mix of Cars, Parts, Motorbikes, Tractors, Buses, Trucks, Trailers, Boats and Car registration numbers.<br><br>We have ads from different city’s such as Dohuk, Ninewa, Erbil (Hawler), Salahaldin, Kerkuk, Sulaymaniyah, Al Anbar, Baghdad, Diyala, Karbala, Babil, Wasit, An Najaf, Al Qadissiyah, Dhi Qar, Maysan, Al Muthanna, Al Basrah, Ranya, Akre, Halabja, Kalar, Amedi, Rawandiz, Xanaqin, Zaxo, A diyaman, Agri, Batman, Bingol, Bitlis, Elazig, Hakkari, Merdin, Shaqlawa, Koya, Choman, Soran, Panjwin, Europe, qaladze, chemchamal, Samawah, Tikrit,  Al Diwaniyah.</p></div>    --></div><div id="mail_contact" style="display:none;"><form name="form3" method="post"><div id="mail_contact_text_input"><input type="hidden" name="to" id="to" value=""></div><div id="mail_contact_text">From</div><div id="mail_contact_text_input"><input type="text" name="from" id="from"></div><div id="mail_contact_text">Subject</div><div id="mail_contact_text_input"><input type="text" name="subject" id="sub"></div><div id="mail_contact_text">Message</div><div id="mail_contact_text_input"><textarea name="message" id="msg_me"></textarea></div><div id="mail_contact_button"><input type="submit" name="submit" id="submit" value=" Send "></div></form></div><!--comment section starts --><div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=159130254250410";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));</script><div class="kurdshoppinglikebox" style="float: left;    margin-left: 15px;    width: 100%;"><div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/KurdShoppingKurdistan" data-send="true" data-width="450" data-show-faces="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=159130254250410&amp;href=https%3A%2F%2Fwww.facebook.com%2FKurdShoppingKurdistan&amp;locale=en_US&amp;sdk=joey&amp;send=true&amp;show_faces=true&amp;width=450"><span style="vertical-align: bottom; width: 0px; height: 0px;"><iframe name="fcaefdd64" width="450px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/plugins/like.php?app_id=159130254250410&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FDhmkJ2TR0QN.js%3Fversion%3D41%23cb%3Df1b9c5138c%26domain%3Dwww.kurdshopping.com%26origin%3Dhttp%253A%252F%252Fwww.kurdshopping.com%252Ff126f206c8%26relation%3Dparent.parent&amp;href=https%3A%2F%2Fwww.facebook.com%2FKurdShoppingKurdistan&amp;locale=en_US&amp;sdk=joey&amp;send=true&amp;show_faces=true&amp;width=450" style="border: none; visibility: visible; width: 0px; height: 0px;" class=""></iframe></span></div>		<a href="https://www.facebook.com/sharer/sharer.php?u=http://furrat.com" target="_blank">	<img src="'.theme_location().'/images/hare.png" class="test_img" height="26px" width="76px"></a>		</div><div class="kurdshoppingcommentbox" style="float: left;    height: auto;    margin-left: 15px;    width: 100%;"><div class="fb-comments fb_iframe_widget" data-href="'.home_url().'/ku/add/'.$pages['id'].'" data-width="545" data-num-posts="10" min-height="100" fb-xfbml-state="rendered"><span style="height: 160px; width: 545px;"><iframe id="f12b673a54" name="fd29aa97" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=159130254250410&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FDhmkJ2TR0QN.js%3Fversion%3D41%23cb%3Df2c2cad0c%26domain%3Dwww.kurdshopping.com%26origin%3D'.home_url().'/ku/add/'.$pages['id'].'&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;width=545" style="border: none; overflow: hidden; height: 160px; width: 545px;"></iframe></span></div></div><!--comment section ends --></div></div>        <!--   ads view section end  -->  		</div>	';	}	}	?></div>	 	 	 	 	 	 	 	 	 <?php @include('footer.php'); ?>