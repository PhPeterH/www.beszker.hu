<?php
//print_r($_POST);
$sysmess = "";
$hiba	= false;
$successMsg = "";

if(isset($_POST['k_name']))	   $k_name    = htmlentities($_POST['k_name']);    else $k_name    = "";
if(isset($_POST['k_email']))   $k_email   = htmlentities($_POST['k_email']);   else $k_email   = "";
//if(isset($_POST['k_subject'])) $k_subject = htmlentities($_POST['k_subject']); else $k_subject = "";
if(isset($_POST['k_phone']))   $k_phone   = htmlentities($_POST['k_phone']);   else $k_phone  = "";
if(isset($_POST['k_text']))    $k_text    = htmlentities($_POST['k_text']);    else $k_text   = "";
if(isset($_POST['k_reply']))   $k_reply   = htmlentities($_POST['k_reply']);   else $k_reply  = "";
if(isset($_POST['k_copy']))    $k_copy    = htmlentities($_POST['k_copy']);    else $k_copy   = "";


if (isset($_POST['k_send'])) {

	if($k_name=="")		{$hiba = true; $sysmess .= "<b>Add meg a Nevedet!</b><br/>";}
	if($k_email=="")	{$hiba = true; $sysmess .= "<b>Add meg az Email címet!</b><br/>";}	
	//if($k_subject=="")	{$hiba = true; $sysmess .= "<b>Add meg a tárgyat!</b><br/>";}
	if($k_text=="")		{$hiba = true; $sysmess .= "<b>Add meg az üzenet szövegét</b><br/>";}
	
	//email ellenőrzés
	if($k_email!=""){
		//$pattern_email = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$";
		$pattern_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		if(!preg_match($pattern_email, $k_email)){		
			$sysmess .= "<b>Nem megfelelő formátumú Email cím!</b><br/>";
			$hiba = true;
		}
	}

	if(!$hiba){
		
		//EMAIL

		// HTML levél küldése esetén, a Content-type fejlécet be kell állítani
		$fejlecek  = 'MIME-Version: 1.0' . "\r\n";
		$fejlecek .= 'Content-type: text/html; charset=utf-8' . "\r\n";		
		// további fejlécek - ezek opcionálisak!
		//$fejlecek .= 'To:'.$lastname.' '.$firstname.' <'.$email.'>' . "\r\n";	
		$fejlecek .= 'From:  <'.$k_email.'>' . "\r\n";		
		//$fejlecek .= 'Cc: ' . $k_email . "\r\n";		
		//$fejlecek .= 'Bcc: birthdaycheck@example.com' . "\r\n";
		$targy = "Otthonodért.hu - Kapcsolatfelvétel";
		//$targy = iconv("UTF-8","ISO-8859-2",$targy);
		
		$br   = "<br />";		
		$uzenet  = "";
		$uzenet .= "Feladó adatai: " . $br . $br;		
		$uzenet .= "Név: " . $k_name . $br;		
		$uzenet .= "Email: " . $k_email . $br;		
		$uzenet .= "Telefonszám: " . (empty($k_phone) ? " Nincs megadva" : $k_phone) . $br;
		$uzenet .= "Visszajelzés: " . $k_reply . $br;	
		$uzenet .= "Másolat: " . ($k_copy==0 ? "Nem kért" : "Kért másolatot") . $br;			
		$uzenet .= "Küldés dátuma: " . date("Y-m-d H:i:s", time()) . $br;			
		$uzenet .= $br.$br;
		$uzenet .= "Üzenet szövege: " .$br . $br;
		$uzenet .= nl2br($k_text);

		
		//$uzenet = iconv("UTF-8","ISO-8859-2",$uzenet);
		//mail($email,'=?utf-8?B?'.base64_encode($targy).'?=',$uzenet,$fejlecek);		
		//$email = "info@otthonodert.hu";
		$email = "hpeti@opnet.hu";
		//$email = "norbertgalli@gmail.com";

		$sent = mail($email,$targy,$uzenet,$fejlecek);
		if($sent){
			//copy
			if($k_copy){
				mail($k_email,$targy,$uzenet,$fejlecek);
			}
			$successMsg = "Sikeresen elküldte a levelet!";
			$k_name = $k_email = $k_phone = $k_text = "";
		}


		//header('Location: elerhetosegeink.html');
	}

}//k_send


?>
<a href="#" name="k"></a>

  	<p style="color:red;font-size:14px;"><?php echo $sysmess; ?></p>
  	<p style="color:red;font-weight:bold;" class="text-center"><?php echo $successMsg;?> </p>
    <form name="k" action="#k" method="post">
    	<div class="small-4 columns">
				<label for="k_name" class="right inline">Név</label>
				<label for="k_email" class="right inline">Email cím</label>
				<?php //<label for="k_subject" class="right inline">Tárgy</label> ?>
				<label for="k_email" class="right inline">Telefonszám</label>
				<label for="k_text" class="right inline">Szöveg</label>
				<br/>
				<br/>
				<br/>				
				<label for="k_reply" class="right inline">Visszajelzést</label>				
				<label for="k_copy" class="right inline" style="margin-top:22px;">Másolatot</label>
				
		</div>
        <div class="small-8 columns">
           <input type="text" id="k_name" name="k_name" value="<?=$k_name;?>" placeholder="" required />
           <input type="email" id="k_email" name="k_email" value="<?=$k_email;?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
           <input type="text" id="k_phone" name="k_phone" value="<?=$k_phone;?>" pattern="[0-9]{2,11}$" />	
	          	           
           <textarea id="k_text" name="k_text" style="min-height:109px;max-height:109px;min-width:100%;" required><?=$k_text;?></textarea>
          
          <br/>
            <select id="k_reply" name="k_reply">
		          <option value="Nem kér">Nem kérek</option>
		          <option value="Telefonon">Telefonon kérek</option>
		          <option value="Emailben">Emailen kérek</option>		          
	        </select>	
	       
	        <br/>
	        <br/>

	         <select id="k_copy" name="k_copy">
		          <option value="0">Nem kérek</option>
		          <option value="1">Kérek</option>		                   
	        </select>	

	        <br/>
	        <br/>

           <p class="text-center">
           		<button type='submit' class="button success radius" name='k_send' value='1'>Küldés</button>
           </p>
        </div>

    </form>