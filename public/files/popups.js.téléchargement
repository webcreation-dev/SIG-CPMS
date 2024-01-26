function closeSuccessDialog(){$('#st-success-popup').modal('hide');}
function successDialog(caption,msg,timeout){var msgtxt=msg;while(msgtxt.indexOf('\\r\\n')!=-1)
msgtxt=msgtxt.replace('\\r\\n','<BR>');while(msgtxt.indexOf('\r')!=-1)
msgtxt=msgtxt.replace('\r','<BR>');while(msgtxt.indexOf('\n')!=-1)
msgtxt=msgtxt.replace('\n','<BR>');var txt='<DIV CLASS = \"modal st-popup st-popup-success fade\" ID = \"st-success-popup\" ROLE = \"dialog\">'+
' <DIV CLASS = \"modal-dialog\">'+
'  <DIV CLASS = \"modal-content\">'+
'   <DIV CLASS = \"modal-header\">'+
'    <BUTTON TYPE = \"BUTTON\" CLASS = \"close\" data-dismiss = \"modal\"><I CLASS = \"icon-close\"></I></BUTTON>'+
'    <H2 ID = \"st-success-popup-caption\"></H2>'+
'   </DIV>'+
'   <DIV CLASS = \"modal-body\" ID = \"st-success-popup-body\">'+
'   </DIV>'+
'  </DIV>'+
' </DIV>'+
'</DIV>';if(!document.getElementById('st-success-popup'))
$('body').append(txt);$('#st-success-popup-caption').html(caption);$('#st-success-popup-body').html(msgtxt);$('#st-success-popup').modal({keyboard:false,show:true});if(timeout>0)
setTimeout(closeSuccessDialog,timeout);}
function errorDialog(caption,msg,btncaption){var msgtxt=msg;while(msgtxt.indexOf('\\r\\n')!=-1)
msgtxt=msgtxt.replace('\\r\\n','<BR>');while(msgtxt.indexOf('\r')!=-1)
msgtxt=msgtxt.replace('\r','<BR>');while(msgtxt.indexOf('\n')!=-1)
msgtxt=msgtxt.replace('\n','<BR>');var txt='<DIV CLASS = \"modal st-popup st-popup-error fade\" ID = \"st-error-popup\" ROLE = \"dialog\">'+
' <DIV CLASS = \"modal-dialog\">'+
'  <DIV CLASS = \"modal-content\">'+
'   <DIV CLASS = \"modal-header\">'+
'    <BUTTON TYPE = \"BUTTON\" CLASS = \"close\" data-dismiss = \"modal\"><I CLASS = \"icon-close\"></I></BUTTON>'+
'    <H2 ID = \"st-error-popup-caption\"></H2>'+
'   </DIV>'+
'   <DIV CLASS = \"modal-body\" ID = \"st-error-popup-body\">'+
'   </DIV>'+
'   <DIV CLASS = \"modal-footer text-center\" ID = \"st-error-popup-footer\">'+
'    <BUTTON TYPE = \"BUTTON\" CLASS = \"btn btn-primary btn-lg\" data-dismiss = \"modal\" ID = \"st-error-button-caption\"></BUTTON>'+
'   </DIV>'+
'  </DIV>'+
' </DIV>'+
'</DIV>';if(!document.getElementById('st-error-popup'))
$('body').append(txt);$('#st-error-popup-caption').html(caption);$('#st-error-popup-body').html(msgtxt);$('#st-error-button-caption').html(btncaption);$('#st-error-popup').modal({backdrop:'static',keyboard:false,show:true});}
function warningDialog(caption,msg,btncaption){var msgtxt=msg;while(msgtxt.indexOf('\\r\\n')!=-1)
msgtxt=msgtxt.replace('\\r\\n','<BR>');while(msgtxt.indexOf('\r')!=-1)
msgtxt=msgtxt.replace('\r','<BR>');while(msgtxt.indexOf('\n')!=-1)
msgtxt=msgtxt.replace('\n','<BR>');var txt='<DIV CLASS = \"modal st-popup st-popup-warning fade\" ID = \"st-warning-popup\" ROLE = \"dialog\">'+
' <DIV CLASS = \"modal-dialog\">'+
'  <DIV CLASS = \"modal-content\">'+
'   <DIV CLASS = \"modal-header\">'+
'    <BUTTON TYPE = \"BUTTON\" CLASS = \"close\" data-dismiss = \"modal\"><I CLASS = \"icon-close\"></I></BUTTON>'+
'    <H2 ID = \"st-warning-popup-caption\"></H2>'+
'   </DIV>'+
'   <DIV CLASS = \"modal-body\" ID = \"st-warning-popup-body\">'+
'   </DIV>'+
'   <DIV CLASS = \"modal-footer text-center\" ID = \"st-warning-popup-footer\">'+
'    <BUTTON TYPE = \"BUTTON\" CLASS = \"btn btn-primary btn-lg\" data-dismiss = \"modal\" ID = \"st-warning-button-caption\"></BUTTON>'+
'   </DIV>'+
'  </DIV>'+
' </DIV>'+
'</DIV>';if(!document.getElementById('st-warning-popup'))
$('body').append(txt);$('#st-warning-popup-caption').html(caption);$('#st-warning-popup-body').html(msgtxt);$('#st-warning-button-caption').html(btncaption);$('#st-warning-popup').modal({backdrop:'static',keyboard:false,show:true});}
function confirmDialog(caption,msg,yesbtncaption,nobtncaption,callback){var msgtxt=msg;while(msgtxt.indexOf('\\r\\n')!=-1)
msgtxt=msgtxt.replace('\\r\\n','<BR>');while(msgtxt.indexOf('\r')!=-1)
msgtxt=msgtxt.replace('\r','<BR>');while(msgtxt.indexOf('\n')!=-1)
msgtxt=msgtxt.replace('\n','<BR>');var txt='<DIV CLASS = \"modal st-popup st-popup-confirm fade\" ID = \"st-confirm-popup\" ROLE = \"dialog\">'+
' <DIV CLASS = \"modal-dialog\">'+
'  <DIV CLASS = \"modal-content\">'+
'   <DIV CLASS = \"modal-header\">'+
'    <H2 ID = \"st-confirm-popup-caption\"></H2>'+
'   </DIV>'+
'   <DIV CLASS = \"modal-body\" ID = \"st-confirm-popup-body\">'+
'   </DIV>'+
'   <DIV CLASS = \"modal-footer text-center\" ID = \"st-confirm-popup-footer\">'+
'    <BUTTON TYPE = \"BUTTON\" CLASS = \"btn btn-secondary btn-lg\" data-dismiss = \"modal\" ID = \"st-confirm-no-button\"></BUTTON>'+
'    <BUTTON TYPE = \"BUTTON\" CLASS = \"btn btn-primary btn-lg\" data-dismiss = \"modal\" ID = \"st-confirm-yes-button\"></BUTTON>'+
'   </DIV>'+
'  </DIV>'+
' </DIV>'+
'</DIV>';if(!document.getElementById('st-confirm-popup'))
$('body').append(txt);$('#st-confirm-popup-caption').html(caption);$('#st-confirm-popup-body').html(msgtxt);$('#st-confirm-yes-button').html(yesbtncaption);$('#st-confirm-no-button').html(nobtncaption);$('#st-confirm-popup').modal({backdrop:'static',keyboard:false,show:true});$('#st-confirm-popup').on('hidden.bs.modal',function(){$('#st-confirm-popup').remove();});$('#st-confirm-yes-button').click(function(evt){$('#st-confirm-popup').modal('hide');callback();});}