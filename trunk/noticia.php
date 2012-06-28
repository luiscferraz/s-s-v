<HTML>
<HEAD>
<TITLE>SSV</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1250">
<!-- ImageReady Preload Script (index.psd) -->
<SCRIPT TYPE="text/javascript">
<!--

function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}



// -->
</SCRIPT>
<!-- End Preload Script -->
</HEAD>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 ONLOAD="preloadImages();"><center>

<!-- ImageReady Slices (index.psd) -->
<TABLE WIDTH=775 BORDER=0 CELLPADDING=0 CELLSPACING=0 class="frame">
	<TR>
		<TD COLSPAN=10 ROWSPAN=3>
			<IMG SRC="images/title.jpg" height=60 style="margin-left: 40px" ALT=""></TD>
		<TD COLSPAN=5>
			<IMG SRC="images/top1.gif" WIDTH=127 HEIGHT=27 ALT=""></TD>
		<TD COLSPAN=6 ROWSPAN=4>
			<IMG SRC="images/top2.gif" WIDTH=236 HEIGHT=249 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=27 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=5 align="center" valign="top">			<a href="#" class="a">home</a> &nbsp;&nbsp; | &nbsp;&nbsp;<a href="#" class="a">info</a> &nbsp;&nbsp;| &nbsp;&nbsp;<a href="#" class="a">contact</a> </TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=19 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=5>
			<IMG SRC="images/top3.gif" WIDTH=127 HEIGHT=15 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=15 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=15>
			<IMG SRC="images/top4.png" WIDTH=539 HEIGHT=188 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=188 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/m1.gif" WIDTH=21 HEIGHT=42 ALT=""></TD>
		<TD COLSPAN=2>
			<A HREF="#"
				ONMOUSEOVER="window.status='company'; changeImages('company', 'images/company-over.gif'); return true;"
				ONMOUSEOUT="window.status=''; changeImages('company', 'images/company.gif'); return true;">
				<IMG NAME="company" SRC="images/company.gif" WIDTH=119 HEIGHT=42 BORDER=0 ALT="company"></A></TD>
		<TD COLSPAN=4>
			<A HREF="#"
				ONMOUSEOVER="window.status='services'; changeImages('services', 'images/services-over.gif'); return true;"
				ONMOUSEOUT="window.status=''; changeImages('services', 'images/services.gif'); return true;">
				<IMG NAME="services" SRC="images/services.gif" WIDTH=123 HEIGHT=42 BORDER=0 ALT="services"></A></TD>
		<TD COLSPAN=2>
			<A HREF="#"
				ONMOUSEOVER="window.status='partners'; changeImages('partners', 'images/partners-over.gif'); return true;"
				ONMOUSEOUT="window.status=''; changeImages('partners', 'images/partners.gif'); return true;">
				<IMG NAME="partners" SRC="images/partners.gif" WIDTH=128 HEIGHT=42 BORDER=0 ALT="partners"></A></TD>
		<TD COLSPAN=5>
			<A HREF="#"
				ONMOUSEOVER="window.status='support'; changeImages('support', 'images/support-over.gif'); return true;"
				ONMOUSEOUT="window.status=''; changeImages('support', 'images/support.gif'); return true;">
				<IMG NAME="support" SRC="images/support.gif" WIDTH=131 HEIGHT=42 BORDER=0 ALT="support"></A></TD>
		<TD COLSPAN=3>
			<A HREF="#"
				ONMOUSEOVER="window.status='news'; changeImages('news', 'images/news-over.gif'); return true;"
				ONMOUSEOUT="window.status=''; changeImages('news', 'images/news.gif'); return true;">
				<IMG NAME="news" SRC="images/news.gif" WIDTH=119 HEIGHT=42 BORDER=0 ALT="news"></A></TD>
		<TD COLSPAN=3>
			<A HREF="#"
				ONMOUSEOVER="window.status='contact'; changeImages('contact', 'images/contact-over.gif'); return true;"
				ONMOUSEOUT="window.status=''; changeImages('contact', 'images/contact.gif'); return true;">
				<IMG NAME="contact" SRC="images/contact.gif" WIDTH=114 HEIGHT=42 BORDER=0 ALT="contact"></A></TD>
		<TD>
			<IMG SRC="images/m2.gif" WIDTH=20 HEIGHT=42 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=42 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=21 >
             <?php
        include('php/noticia.php');
        $bdnoticia = new bdnoticia;
        $not  = $bdnoticia -> GetNoticiaIdUnico($_GET['id']);
        $i = 1;
        $tabela = '';


        echo  '
               <div style="padding:10px"> <span class="text1">11.04.05</span> <h2>'.stripslashes(base64_decode($not['titulo'])).'</h2><br><br><br>
                      '.stripslashes(base64_decode($not['conteudo'])).'
               </a><br></div>';
                          
                            
                        
            ?>            
        
			<IMG SRC="images/down.gif" WIDTH=775 HEIGHT=22 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=22 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=22 align="center" valign="middle" class="text6" height="50">
			<a href="#">Home</a> | <a href="#">Sobre nés</a> | <a href="#">Serviçoes</a> | <a href="#">Suporte</a> | <a href="#">Parceiros</a> | <a href="#">Novas</a> | <a href="#">Contato</a>&nbsp;</TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=21 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=21 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=98 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=70 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=24 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=13 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=59 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=69 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=21 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=9 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=22 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=21 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=58 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=17 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=53 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=49 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=76 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=22 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=20 HEIGHT=1 ALT=""></TD>
		<TD></TD>
	</TR>
</TABLE>
<!-- End ImageReady Slices -->
</center></BODY>

</HTML>