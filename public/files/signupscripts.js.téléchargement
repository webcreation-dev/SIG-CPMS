function gaAlert(msg,btncaption)
{var modalbody='<DIV ID = "ga-alert" CLASS = "modal fade">'
+' <DIV CLASS = "modal-dialog ga-alert-modal">'
+'  <DIV CLASS = "modal-content">'
+'   <DIV CLASS = "modal-body ga-alert-body">'
+'    <DIV CLASS = "row">'
+'     <DIV CLASS = "col-xs-12 text-center">'
+'      <SPAN ID = "ga-alert-msg"></SPAN>'
+'     </DIV>'
+'    </DIV>'
+'    <DIV CLASS = "row">'
+'     <DIV CLASS = "col-xs-12 text-center">'
+'      <BUTTON TYPE = "button" CLASS = "btn btn-primary" data-dismiss = "modal" ID = "ga-alert-btn"></BUTTON>'
+'     </DIV>'
+'    </DIV>'
+'   </DIV>'
+'  </DIV>'
+' </DIV>'
+' </DIV>';if(!document.getElementById('ga-alert'))
{$('body').append(modalbody);}
$('#ga-alert-msg').html('<IMG SRC = "../imgs/alerts/note.svg">'+msg);$('#ga-alert-btn').html(btncaption);$('#ga-alert').modal('show');}
function setError(msg,target)
{if((target)&&(document.getElementById(target)))
{var contents=$('#'+target);$(contents).html(msg);$(contents).show();return;}
$('#alert').modal('hide');$('#errordlg').modal('hide');var msgtxt=msg;msgtxt=msgtxt.replace('\\r\\n','<BR>');var txt='<DIV CLASS = \"modal st-alert st-alert-error fade\" ID = \"errordlg\" ROLE = \"dialog\">'+
' <DIV CLASS = \"modal-dialog\">'+
'  <DIV CLASS = \"modal-content\">'+
'   <DIV CLASS = \"modal-header\">'+
'    <H2><A HREF = \"#\" CLASS = \"close\" data-dismiss = \"modal\" aria-label = \"close\"><I CLASS=\"icon-close\">&nbsp;</I></A> Error!</H2>'+
'   </DIV>'+
'   <DIV CLASS = \"modal-body\"><TABLE><TR><TD><I CLASS = "fa fa-warning fa-fw"></I></TD><TD>'+msgtxt+' </TD></TR></TABLE></DIV>'+
'  </DIV>'+
' </DIV>'+
'</DIV>';$('body').append(txt);$('#errordlg').modal({keyboard:false,show:true});}
function setAlert(msg)
{$('#alert').modal('hide');$('#errordlg').modal('hide');var msgtxt=msg;msgtxt=msgtxt.replace('\\r\\n','<BR>');var txt='<DIV CLASS = \"modal st-alert st-alert-success fade\" ID = \"alert\" ROLE = \"dialog\">'+
' <DIV CLASS = \"modal-dialog\">'+
'  <DIV CLASS = \"modal-content\">'+
'   <DIV CLASS = \"modal-header bottom-border\">'+
'    <BUTTON TYPE = \"BUTTON\" CLASS = \"close\" data-dismiss = \"modal\"><I CLASS = \"icon-close\"></I></BUTTON>'+
'    <H2>Success!</H2>'+
'   </DIV>'+
'   <DIV CLASS = \"modal-body\"><TABLE><TR><TD><I CLASS = "icon-check-circle"></I></TD><TD>'+msgtxt+' </TD></TR></TABLE></DIV>'+
'  </DIV>'+
' </DIV>'+
'</DIV>';$('body').append(txt);$('#alert').modal({keyboard:false,show:true});}
function showThrobber(f,message)
{var throbberbody='<DIV CLASS = \"throbbercontainer\" ID = \"throbber\">'
+' <DIV CLASS = \"throbberbackdrop\"></DIV>'
+' <DIV CLASS = \"throbberbody\">'
+'  <H1>Please Wait . . .</H1>'
+'  <TABLE><TR>'
+'	<TD ALIGN = \"center\"><I CLASS = \"fa fa-spinner fa-spin fa-3x fa-fw\"></I></TD>'
+'    <TD ALIGN = \"left\">'+message+'</TD>'
+'  </TR></TABLE>'
+' </DIV>'
+'</DIV>';if(!document.getElementById('throbbercontainer'))
$('body').append(throbberbody);$('#throbber').show();return true;}
function gaPopUpDisplay(lnk)
{var popup='<DIV CLASS = \"modal popup fade\" ID = \"popup" role = \"dialog\">'
+'	 <DIV CLASS = \"modal-dialog modal-lg\">'
+'      <DIV CLASS = \"modal-content\" ID = \"popupcontent\">'
+'  	  </DIV>'
+'	 </DIV>'
+'	</DIV>';if(!document.getElementById('popup'))
$('body').append(popup);var loading='	   <DIV CLASS = \"modal-body\">'
+'	    <SPAN>'
+'	     <I CLASS = \"fa fa-spinner fa-spin fa-3x fa-fw\"></I> '
+'Loading . . .'
+'        </SPAN>'
+'	   </DIV>'
+'	   <DIV CLASS = \"modal-footer\">'
+'        <BUTTON TYPE = \"button\" CLASS = \"btn btn-default\" data-dismiss = \"modal\">Close</BUTTON>'
+'	   </DIV>';$('#popupcontent').html(loading);$('#popup').modal('show');$('#popupcontent').load(lnk.href,function(response,status,xhr){if(status=="error")
{var msg="<H1>ERROR:</H1> ";$("#popupcontent").html(msg+xhr.status+" "+xhr.statusText);}});return false;}
$(document).ready(function(evt){$('.checkbox-selector').off('click');$('.checkbox-selector').click(function(evt){$(this).find('input:checkbox').each(function(){if(!$(this).prop('checked'))
{if(!$(this).prop('disabled'))
{$(this).prop('checked',true);$(this).click();formvalidator.formUpdated(this.form,this);}}
else
{if(!$(this).prop('disabled'))
{$(this).prop('checked',false);$(this).click();formvalidator.formUpdated(this.form,this);}}});});$('.checkbox-selector input:checkbox').click(function(evt){evt.stopPropagation();return false;});$('.radio-selector input:radio').click(function(evt){evt.stopPropagation();});$('.radio-selector').click(function(evt){$(this).find('input:radio').each(function(){if(!$(this).prop('checked'))
{$(this).prop('checked',true);formvalidator.formUpdated(this.form,this);}});});$('label').click(function(){var field=$(this).attr('FOR');if(field)
{var f=document.forms['registerform'];if(f.elements[field])
f.elements[field].focus();}});$('.ga-form-submit').off();$('.ga-form-submit').click(function(evt){evt.preventDefault();var formname=$(evt.target).attr('ga-form-name');if(!formname)return;var f=document.forms[formname];if(!f)return;if(formvalidator.validateForm(f))
formvalidator.submitForm(f);});});