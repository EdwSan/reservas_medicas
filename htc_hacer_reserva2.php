<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Historias Cl�nicas y Psicol�gicas - UniBoyac�</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<META http-equiv="" content="text/html; charset=iso-8859-1"><LINK 
href="Link.css" type=text/css rel=stylesheet><LINK 
href="imagenes/estilo.css" 
type=text/css rel=stylesheet>
<META http-equiv="" content="text/html; charset=iso-8859-1">
<META http-equiv="" content="text/html; charset=iso-8859-1">
<META content="MSHTML 6.00.2800.1400" name=GENERATOR></HEAD>
<BODY text=#000000 vLink=#000000 aLink=#000000 link=#000000 bgColor=#ffffff 
leftMargin=0 topMargin=0 marginheight="0" marginwidth="0">
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD vAlign=top>
      <TABLE height=16 cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD 
          background="imagenes/Cipade_02.gif">&nbsp;</TD></TR></TBODY></TABLE>
      <TABLE height=130 cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD width=584 height=38><IMG height=38 
            src="imagenes/HClinicas_03.gif" 
            width=158><IMG height=38 
            src="imagenes/HClinicas_04.gif" 
            width=426></TD>
          <TD 
          background="imagenes/DeptoBasica_05.gif" 
          rowSpan=2>&nbsp;</TD>
          <TD width=206 height=38><IMG height=38 
            src="imagenes/Cipade_06.gif" 
            width=206></TD></TR>
        <TR>
          <TD width=584 height=128><IMG height=128 
            src="imagenes/HClinicas_07.gif" 
            width=118><IMG height=128 
            src="imagenes/HClinicas_08.gif" 
            width=133><IMG height=128 
            src="imagenes/HClinicas_09.gif" 
            width=212 useMap=#Map border=0><IMG height=128 
            src="imagenes/DeptoBasica_10.gif" 
            width=121 useMap=#Map2 border=0></TD>
          <TD width=206 height=128><IMG height=128 
            src="imagenes/HClinicas_11.gif" 
            width=206></TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD width=656 
          background="imagenes/Cipade_17.gif" 
          height=46><IMG height=46 
            src="imagenes/HClinicas_12.gif" 
            width=103 border=0><IMG height=46 
            src="imagenes/HClinicas_13.gif" 
            width=126 border=0><IMG height=46 
            src="imagenes/HClinicas_14.gif" 
            width=133 border=0></TD>
          <TD 
          background="imagenes/Cipade_17.gif">&nbsp;</TD>
          <TD width=132 height=46><IMG height=46 
            src="imagenes/Cipade_18.gif" 
            width=132></TD></TR></TBODY></TABLE>
      <TABLE height="74%" cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD vAlign=top width=177 bgColor=#d4d3d4><A 
            href="http://200.61.96.10/cgi-bin/openwebmail/openwebmail.pl"><IMG 
            height=20 
            src="imagenes/Cipade_19.gif" 
            width=177 border=0></A><A 
            href="mailto:informa@uniboyaca.edu.co"><IMG height=17 
            src="imagenes/Cipade_21.gif" 
            width=177 border=0></A><A 
            href="file:///D:/gios/Dintel/uniboyaca.edu.co/www.uniboyaca.edu.co/ultimasnoticias.htm"><IMG 
            height=18 
            src="imagenes/Cipade_22.gif" 
            width=177 border=0></A><A 
            href="file:///D:/gios/Dintel/uniboyaca.edu.co/www.uniboyaca.edu.co/motorlocal/BUSCADORJAVA3.htm"><IMG 
            height=18 
            src="imagenes/Cipade_23.gif" 
            width=177 border=0></A><A 
            href="file:///D:/gios/Dintel/uniboyaca.edu.co/www.uniboyaca.edu.co/mapasitio.htm"><IMG 
            height=19 
            src="imagenes/Cipade_24.gif" 
            width=177 border=0></A><A href="file:///D:/motor.asp"><IMG height=17 
            src="imagenes/Cipade_25.gif" 
            width=177 border=0></A><IMG height=124 
            src="imagenes/Cipade_26.gif" 
            width=177></TD>
          <TD vAlign=top>
            <TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" 
            border=0>
              <TBODY>
              <TR>
                <TD width=35 height=36><IMG height=36 
                  src="imagenes/1.gif" 
                  width=35></TD>
                <TD 
                background="imagenes/2.gif" 
                height=36>&nbsp;</TD>
                <TD width=34 height=36><IMG height=36 
                  src="imagenes/3.gif" 
                  width=34></TD></TR>
              <TR>
                <TD width=35 
                background="imagenes/4.gif">&nbsp;</TD>
                <TD vAlign=top bgColor=#eeeeee>

<Script language='JavaScript'>
		function validar(formulario)
		{	var x = 0;
		
    		//alert(formulario);
					
			while (x < document.forms[formulario].elements.length)
    		{
      			if (document.forms[formulario].elements[x].value == '')
      			{ 
        			alert('Por Favor llene el campo '+document.forms[0].elements[x].name +' e intente de nuevo.');
        			document.forms[formulario].elements[x].focus();
        			return false;
      			}
    			x++;
  			}
  			return true;
		}		

		function IrA(Pagina) {
			window.location.href= Pagina
			return true;
		}
</Script>		
	<?php 
		include("libreria.php");
		require_once("funciones.php");
		$profesional_salud = get_param("profesional_salud");		

		session_start();

		if (!isset($_SESSION['profesional_salud'])) $_SESSION['profesional_salud']=$profesional_salud;	
		if (isset($_SESSION['fecha'])) unset($_SESSION['fecha']);	
		
		//echo "profesional_salud=".$profesional_salud."<br>";
		
		$sql = "select * from V_DIA_RESERVA where profesional_salud=".$profesional_salud;	
	?>
	<form name="htc_hacer_reserva2" method="POST" action="htc_listado_reservas.php" onsubmit="return validar('htc_hacer_reserva2');"   >
	
  <table border="0" width=37%  bgcolor="#CCCCCC" >
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Dia: </td>
      <td> 
        <?php
					$rs = $db->Execute($sql);
					print $rs->GetMenu('fecha');
			?>
      </td>
    </tr>
    <tr valign="top" >
      <td colspan="2"  align="right">&nbsp;</td>
    </tr>
    <tr valign="top" > 
      <td colspan="2"  align="right"> <input type="submit" value="Listado citas"  /> 
        <input type='button'  value='Regresar'  onClick='IrA("htc_hacer_reserva.php")' />	
      </td>
    </tr>
  </table>
	</form>

		
		</TD>
                <TD 
                background="imagenes/6.gif">&nbsp;</TD></TR>
              <TR>
                <TD align=right width=35 height=39><IMG height=39 
                  src="imagenes/7.gif" 
                  width=34></TD>
                <TD 
                background="imagenes/8.gif" 
                height=39>&nbsp;</TD>
                <TD width=34 height=39><IMG height=39 
                  src="imagenes/9.gif" 
                  width=34></TD></TR></TBODY></TABLE></TD></TR>
        <TR background="ImagStand/Cipade_28.gif">
          <TD vAlign=top colSpan=2 
  height=32>&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE><MAP 
name=Map><AREA shape=CIRCLE coords=182,96,17 
  href="mailto:informa@uniboyaca.edu.co"></MAP><MAP name=Map2><AREA shape=CIRCLE 
  coords=35,97,17 
  href="javascript:window.external.AddFavorite('../cipade.htm','cipade%20-%20UniBoyac�')"><AREA 
  shape=CIRCLE coords=98,96,17 
  href="file:///D:/gios/Dintel/uniboyaca.edu.co/www.uniboyaca.edu.co/index.html"></MAP></BODY></HTML>
