jQuery.support.cors=true;var PM_REFRESH_RATE=500;var pmtimeout=null;var pmrefreshurl='';var pmcancelurl='';var T_INITIALIZING_PROCESS='Initializing Process . . .';var T_ERROR='ERROR!';var T_SUCCESS='SUCCESS!';var T_PLEASE_WAIT='Please Wait';var T_CANCEL='Cancel';var T_CLOSE='Close';var T_PROCESS_RUNNING='Process Running . . .';var T_PROCESS_COMPLETE='Process Complete!';var T_REDIRECTING='Redirecting. . .';var T_DOWNLOAD_READY='Download Ready';var T_DOWNLOADING='Downloading . . .';var T_DOWNLOAD_IN_PROGRESS='Download In Progress!';var T_PROCESS_ERROR='Process Error';var T_PROCESS_CANCELLED='Process Cancelled';var T_PROCESS_CANCELLED_NOTE='You sucessfully cancelled this process';var T_FIELD_IS_REQUIRED='Field is required';var T_INVALID_CHARACTER='Invalid character';var T_SHIPPING_DOCUMENTS_READY='Documents Ready';var T_PRINTER_ERROR='Printer Error';var T_TESTING_PRINTER='Connecting to printer(s). . .';var PRINTER_SPOOLER_URL="https://localhost:5758/"
var PRINTER_STATUS_SUCCESS=0;var PRINTER_STATUS_TIMEOUT=10;var PRINTER_STATUS_OTHER_ERROR=20;var PROGRESS_ACTIVE=false;function parseJSONObject(response)
{var responsetype=(typeof response);if(responsetype=='string')
return JSON.parse(response);if(responsetype=='object')
return response;throw('Invalid response type: '+responsetype);}
function ProgressMonitorError(msg)
{this.done=true;this.status=80;this.errormessage=msg;this.stacktrace='';return this;}
function focusField(el)
{var tab=$(el).closest('.tab-pane');if(tab.length>0)
{var tabid=$(tab).attr('ID');$('A[href=#'+tabid+']').tab('show');setTimeout(function(){el.focus();formvalidator.error(T_FIELD_IS_REQUIRED,el);},1000);}
else
el.focus();}
function ProgressMonitor_initializeProgressWindow()
{PROGRESS_ACTIVE=true;var progressbody='<DIV CLASS = \"modal progress-monitor\" ID = \"progress\" role = \"dialog\">'
+'	 <DIV CLASS = \"modal-dialog modal-lg\">'
+'      <DIV CLASS = \"modal-content\">'
+'       <DIV CLASS = \"modal-header\">'
+'        <A HREF = \"#\" CLASS = \"close\" data-dismiss = \"modal\" aria-label = \"close\" ID = \"PROGRESSCLOSERX\">&times;</A>'
+'        <H1 ID = \"PROGRESSCAPTION\">'+T_INITIALIZING_PROCESS+'</H1>'
+'       </DIV>'
+'	   <DIV CLASS = \"modal-body\" ID = \"PROGRESSBODY\">'
+'        <DIV CLASS = \"loader\"></DIV>'
+'        <DIV CLASS = \"throbbermessage\">'+T_PLEASE_WAIT+'</DIV>'
+'	   </DIV>'
+'	   <DIV CLASS = \"modal-footer\" ID = \"PROGRESSFOOTER\">'
+'        <A HREF = \"#\" onClick = \"return progressmonitor.cancelProgress();\" CLASS = \"btn btn-danger\" ID = \"PROGRESSCANCEL\">'+T_CANCEL+'</A>'
+'        <BUTTON TYPE = \"button\" CLASS = \"btn btn-default\" data-dismiss = \"modal\" ID = \"PROGRESSCLOSE\">'+T_CLOSE+'</BUTTON>'
+'	   </DIV>'
+'  	  </DIV>'
+'	 </DIV>'
+'	</DIV>';$('body').append(progressbody);$('#progress').modal({backdrop:'static',keyboard:false,show:true});$('#PROGRESSCAPTION').html(T_INITIALIZING_PROCESS);$('#PROGRESSBODY').html('<DIV CLASS = \"loader\"></DIV><DIV CLASS = \"throbbermessage\">'+T_PLEASE_WAIT+'</DIV>');$('#progress').modal('show');$(document).on('hide.bs.modal','#progress',function(){PROGRESS_ACTIVE=false;});$('#PROGRESSFOOTER').hide();$('#PROGRESSCANCEL').hide();$('#PROGRESSCLOSE').hide();$('#PROGRESSCLOSERX').hide();}
function ProgressMonitor_followLink(targeturl)
{this.initializeProgressWindow();$.ajax({url:targeturl,success:this.updateProgress,error:this.handleError});return false;}
function ProgressMonitor_submitForm(f)
{if(PROGRESS_ACTIVE)return;this.initializeProgressWindow();var methodval=$(f).attr('method');var actvalue=$(f).attr('action');if($(f).attr('ENCTYPE')=='multipart/form-data')
{if(!window.FormData)
{alert('Sorry, this page requires a newer browser to function correctly. Please update your browser to the latest version.');return;}
var dataval=new FormData($('#'+f.id)[0]);$.ajax({data:dataval,type:methodval,url:actvalue,mimeType:"multipart/form-data",contentType:false,cache:false,processData:false,success:this.updateProgress,error:this.handleError});}
else
{var dataval=$(f).serialize();$.ajax({data:dataval,type:methodval,url:actvalue,success:this.updateProgress,error:this.handleError});}}
function ProgressMonitor_retrieveProgress()
{$.get(pmrefreshurl,this.updateProgress);}
function ProgressMonitor_handleError(xhr,options,err)
{this.updateProgress('{\"errormessage\":\"'+err+'\",\"status\":80,\"done\":true,\"stacktrace\":\"\"}');}
function ProgressMonitor_updateProgress(response)
{var res=null;try
{res=parseJSONObject(response);}
catch(e)
{res=new ProgressMonitorError('Invalid Response From Server: '+response);}
if(res.refreshurl)
pmrefreshurl=res.refreshurl;var caption='';var bodycontent='';var showclose=false;var redirectto='';var ajaxtarget=null;switch(res.status)
{case 10:caption=T_INITIALIZING_PROCESS;bodycontent='<DIV CLASS = \"loader\"></DIV><DIV CLASS = \"throbbermessage\">'+T_INITIALIZING_PROCESS+'</DIV>';if(res.cancancel)
{$("#PROGRESSFOOTER").show();$("#PROGRESSCANCEL").show();pmcancelurl=res.cancelurl;}
break;case 20:caption=T_PROCESS_RUNNING;if(res.percentdone==-1)
bodycontent='<DIV CLASS = \"text-center"><DIV CLASS = \"progress\"><DIV CLASS = \"progress-bar progress-bar-striped active\" role = \"progressbar\" aria-valuenow = \"100\" aria-valuemin =\"0\" aria-valuemax = \"100\" STYLE = \"width: 100%\"></DIV></DIV><DIV CLASS = \"throbbermessage\">'+res.message+'</DIV></DIV>';else
bodycontent='<DIV CLASS = \"text-center"><DIV CLASS = \"progress\"><DIV CLASS = \"progress-bar\" role = \"progressbar\" aria-valuenow = \"'+res.percentdone+'\" aria-valuemin =\"0\" aria-valuemax = \"100\" STYLE = \"width: '+res.percentdone+'%\">'+res.percentdone+'%</DIV></DIV><DIV CLASS = \"throbbermessage\">'+res.message+'</DIV></DIV>';break;case 30:caption=T_PROCESS_COMPLETE;bodycontent='  <P>'+res.finalmessage+'</P>';showclose=true;break;case 40:caption=T_REDIRECTING;bodycontent='<DIV CLASS = \"loader\"></DIV><DIV CLASS = \"throbbermessage\"><STRONG>'+res.finalmessage+'</STRONG><BR>Redirecting . . . </DIV>';redirectto=res.redirecturl;if(res.ajaxtarget)
ajaxtarget=res.ajaxtarget;break;case 50:caption=T_DOWNLOAD_READY;bodycontent='<DIV CLASS = \"loader\"></DIV><DIV CLASS = \"throbbermessage\">'+T_DOWNLOADING+'</DIV>';$('#PROGRESSCANCEL').hide();PM_createDownloadIFrame(res.downloadurl);break;case 55:caption=T_DOWNLOAD_READY;bodycontent='<DIV CLASS = \"loader\"></DIV><DIV CLASS = \"throbbermessage\">'+T_DOWNLOADING+'</DIV>';$('#PROGRESSCANCEL').hide();PM_openPDF(res.downloadurl);break;case 60:caption=T_DOWNLOAD_IN_PROGRESS;$('#PROGRESSCANCEL').hide();bodycontent='<DIV CLASS = \"loader\"></DIV><DIV CLASS = \"throbbermessage\">'+T_DOWNLOADING+'</DIV>';break;case 70:$('#progress').modal('hide');return;case 80:caption=T_PROCESS_ERROR;bodycontent='  <STRONG>'+res.errormessage.split('\r\n').join('<BR>')+'</STRONG>'+
'  <DIV CLASS = \"text-center\"><A HREF = \"#\" TITLE = \"View Details\" onClick = \"$(\'#stacktrace\').toggle(); return false;\"><I CLASS = \"fa fa-search-plus fa-fw\"></I> Details</A></DIV>'+
'  <DIV ID = \"stacktrace\" STYLE = \"display: none; background-color: #CCCCCC; border: solid 1px #000000; padding: 10px;\">'+res.stacktrace.split('\r\n').join('<BR>')+'</DIV>';showclose=true;break;case 90:caption=T_PROCESS_CANCELLED;bodycontent='  <STRONG>'+T_PROCESS_CANCELLED+'</STRONG>'+
'  <P>'+T_PROCESS_CANCELLED_NOTE+'</P>';showclose=true;break;case 100:caption=T_SHIPPING_DOCUMENTS_READY;$('#PROGRESSCAPTION').html(caption);bodycontent='<DIV CLASS = \"loader\"></DIV><DIV CLASS = \"throbbermessage\">'+T_TESTING_PRINTER+'</DIV>';$('#PROGRESSBODY').html(bodycontent);printspooler.setDocuments(res.documents);printspooler.setHTMLDocuments(res.htmldocuments);var pc=printspooler.checkStatus();if(pc==PRINTER_STATUS_TIMEOUT)
{caption=T_PRINTER_ERROR;var msg='<P>The system was unable to communicate with the Global Access Web Printer. Please correct the problem and then click the button to try again.</P>';msg+='If you do not see the icon for the printer in the windows bar, click <A HREF = \"'+res.printerappurl+'\">here</A> to launch it.<BR>';msg+='If the program is running, click <A HREF = \"'+PRINTER_SPOOLER_URL+'\" TARGET = \"_blank\">here</A> to add an SSL exception<BR>';var apredirectto=res.redirecturl;var apajaxtarget=res.ajaxtarget;var apsummary=res.printsummary;var lnk="retryPrinting('"+apredirectto+"', '"+apajaxtarget+"', '"+apsummary+"');";msg+='<DIV CLASS = \"text-center\"><BUTTON TYPE = \"BUTTON\" CLASS = \"btn btn-primary\" onClick = \"return '+lnk+'\">Send To Printer</BUTTON></DIV>';bodycontent=msg;}
else if(pc==PRINTER_STATUS_OTHER_ERROR)
{bodycontent='There was an error with the printer';}
else if(pc==PRINTER_STATUS_SUCCESS)
{bodycontent='Request sent to printer';$('#PROGRESSBODY').html(bodycontent);if(printspooler.print())
{redirectto=res.redirecturl;ajaxtarget=res.ajaxtarget;if(redirectto=='')
{caption='Printing Complete';bodycontent=res.printsummary;}
else
{$('#progress').modal('hide');if(ajaxtarget!='popupcontent')
$('#popup').modal('hide');}}
else
{bodycontent='There was an error printing';var redirectto=res.redirecturl;var ajaxtarget=res.ajaxtarget;var summary=res.printsummary;var lnk="retryPrinting('"+redirectto+"', '"+ajaxtarget+"', '"+summary+"');"
bodycontent+='<DIV CLASS = \"text-center\"><BUTTON TYPE = \"BUTTON\" CLASS = \"btn btn-success\" onClick = \"return " + lnk + "\">Retry</BUTTON></DIV>';}}
showclose=true;break;default:alert('Unknown status: '+res.status)}
$('#PROGRESSCAPTION').html(caption);$('#PROGRESSBODY').html(bodycontent);if(showclose)
{$('#PROGRESSCANCEL').hide();$('#PROGRESSFOOTER').show();$('#PROGRESSCLOSERX').show();$('#PROGRESSCLOSE').show();}
if(redirectto!='')
{if((ajaxtarget!=null)&&(ajaxtarget!=''))
{$('#'+ajaxtarget).load(redirectto,function(response,status,xhr){if(status=="error")
{var msg="<H1>ERROR:</H1> ";$('#'+ajaxtarget).html(msg+xhr.status+" "+xhr.statusText);}});$('#progress').modal('hide');}
else
document.location.href=redirectto;return;}
if(!res.done)
{pmtimeout=setTimeout(pmRetrieveProgress,PM_REFRESH_RATE);}}
function ProgressMonitor_cancelProgress()
{if(pmtimeout!=null)
clearTimeout(pmtimeout);$.get(pmcancelurl,this.updateProgress);return false;}
function PM_createDownloadIFrame(url)
{var iframe=document.createElement('iframe')
iframe.style.border='none';iframe.style.height='0px';iframe.style.width='0px';document.body.appendChild(iframe);iframe.src=url;}
function PM_openPDF(url)
{var modal='<DIV ID = \"pdfModal\" CLASS = \"modal fullscreen\" ROLE = \"dialog\">'
+' <DIV CLASS = \"modal-dialog\">'
+'  <DIV CLASS = \"modal-content\" ID = \"pdfmodalbody\">'
+'   <DIV CLASS = \"modal-body\">'
+'    <IFRAME SRC = \"'+url+'\"/>'
+'   </DIV>'
+'   <DIV CLASS = \"modal-footer\">'
+'    <BUTTON data-dismiss = \"modal\" CLASS = "btn btn-default">Close</BUTTON>'
+'   </DIV>'
+'  </DIV>'
+' </DIV>'
+'</DIV>';$('body').append(modal);$('#pdfModal').modal('show');}
function ProgressMonitor()
{this.cancelurl='';this.followLink=ProgressMonitor_followLink;this.submitForm=ProgressMonitor_submitForm;this.initializeProgressWindow=ProgressMonitor_initializeProgressWindow;this.updateProgress=ProgressMonitor_updateProgress;this.retrieveProgress=ProgressMonitor_retrieveProgress;this.cancelProgress=ProgressMonitor_cancelProgress;this.handleError=ProgressMonitor_handleError;return this;}
var progressmonitor=new ProgressMonitor();function pmRetrieveProgress()
{progressmonitor.retrieveProgress();}
function findFormGroup(field)
{try
{var parent=$(field).parents('.ga-form-group').first();if(parent!=null)return parent;parent=$(field).parents('.form-group').first();if(parent!=null)return parent;return null;}
catch(e)
{alert(e);return null;}}
function FormValidator_setError(msg,field)
{var group=findFormGroup(field);if(group==null)
{alert(msg);if((field!=null)&&(field.focus))field.focus();return;}
this.clearErrors();if($(group).has('.ga-fa-error').length<=0)
{$(group).addClass('has-feedback has-error');$(field).after('<SPAN CLASS = \"small text-danger ga-fa-error\">'+msg+'</SPAN>');}
if((field!=null)&&(field.focus))field.focus();var tabpane=$(group).parents('.tab-pane');if(tabpane)
{var tabid=$(tabpane).attr('id');var tablnk=$('a[href="#'+tabid+'"][data-toggle="tab"]');$(tablnk).addClass('taberror');}}
function FormValidator_clearError(field)
{var group=findFormGroup(field);if(group!=null)
{$(group).removeClass("has-feedback has-error");}}
function FormValidator_clearErrors(f)
{$(".form-control-feedback").remove();$(".ga-fa-error").remove();if((!f)||(!f.elements))return;$('a[data-toggle="tab"]').removeClass("taberror");for(var i=0;i<f.elements.length;i++)
this.clearError(f.elements[i]);}
function FormValidator_makeRequired(f,fieldname)
{if((!f)||(!f.elements))return;for(var i=0;i<f.elements.length;i++)
{var el=f.elements[i];if(el.name==fieldname)
el.setAttribute("REQUIRED","REQUIRED");}}
function FormValidator_makeUnRequired(f,fieldname)
{if((!f)||(!f.elements))return;for(var i=0;i<f.elements.length;i++)
{var el=f.elements[i];if(el.name==fieldname)
el.removeAttribute("REQUIRED");}}
function FormValidator_enableField(f,fieldname)
{if((!f)||(!f.elements))return;for(var i=0;i<f.elements.length;i++)
{var el=f.elements[i];if(el.name==fieldname)
el.disabled=false;}}
function FormValidator_disableField(f,fieldname,clearit)
{if((!f)||(!f.elements))return;for(var i=0;i<f.elements.length;i++)
{var el=f.elements[i];if(el.name==fieldname)
el.disabled=true;}}
var DISALLOWED_CHARACTERS=new Array('<','>','=','%',';','^');var CHECK_FOR_DISALLOWED=true;function FormValidator_validateForm(f)
{var haserrors=false;this.clearErrors(f);if(!f)return true;for(var i=0;i<f.elements.length;i++)
{var el=f.elements[i];if((CHECK_FOR_DISALLOWED)&&(el.type)&&((el.type=='text')||(el.type=='password')||(el.type=='textarea')))
{var val=el.value;if(val.indexOf('http')!=0)
{for(var j=0;j<DISALLOWED_CHARACTERS.length;j++)
{if(val.indexOf(DISALLOWED_CHARACTERS[j])!=-1)
{this.setError(T_INVALID_CHARACTER+': '+DISALLOWED_CHARACTERS[j],el);haserrors=true;}}}}
if(el.getAttribute("required"))
{if(!this.checkRequiredField(el))
{this.setError(T_FIELD_IS_REQUIRED,el);focusField(el);haserrors=true;}}
var formatter=this.formatters.get(el.name);if((formatter!=null)&&(el.value!=''))
{if(!formatter.validateField(el))
{this.setError(formatter.getErrorMessage(),el);haserrors=true;}}}
var validatefunctions=this.validationhandlers.get(f.name);if(validatefunctions)
{for(var i=0;i<validatefunctions.size();i++)
{var validatefunc=validatefunctions.elementAt(i);if(!validatefunc(f))
{haserrors=true;}}}
if((!haserrors)&&(!FORM_SUBMISSION_CANCELLED))
{var ccvalidatefunctions=this.ccvalidationhandlers.get(f.name);if(ccvalidatefunctions)
{for(var i=0;i<ccvalidatefunctions.size();i++)
{var validatefunc=ccvalidatefunctions.elementAt(i);if(!validatefunc(f))
{haserrors=true;}}}}
if((haserrors)&&(!FORM_SUBMISSION_CANCELLED))
{try
{setError(T_ONE_OR_MORE_INVALID_INPUTS,null);}
catch(e)
{alert(T_ONE_OR_MORE_INVALID_INPUTS);}}
return(!haserrors);}
function FormValidator_enableAll(f)
{var disablesubmit=(((f.target==null)||(f.target==''))&&(this.ajaxtargets.get(f.name)==null));for(var i=0;i<f.elements.length;i++)
{var el=f.elements[i];if((el.type=='submit')&&(disablesubmit))
{el.disabled=true;}
else
el.disabled=false;}}
function FormValidator_addToGroup(fieldname,group)
{if(this.groups.get(group)==null)this.groups.put(group,new Vector());if(!this.groups.get(group).contains(fieldname))this.groups.get(group).add(fieldname);}
function FormValidator_removeFromGroup(fieldname,group)
{if(this.groups.get(group)==null)return;this.groups.get(group).remove(fieldname);}
function FormValidator_enableGroup(f,group)
{var names=this.groups.get(group);if(names==null)return;for(var i=0;i<names.size();i++)
{var name=names.elementAt(i);this.enableField(f,name);}}
function FormValidator_disableGroup(f,group,clearit)
{var names=this.groups.get(group);if(names==null)return;for(var i=0;i<names.size();i++)
{var name=names.elementAt(i);this.disableField(f,name,clearit);}}
function FormValidator_makeGroupRequired(f,group)
{var names=this.groups.get(group);if(names==null)return;for(var i=0;i<names.size();i++)
{var name=names.elementAt(i);this.makeRequired(f,name);}}
function FormValidator_makeGroupUnRequired(f,group,clearit)
{var names=this.groups.get(group);if(names==null)return;for(var i=0;i<names.size();i++)
{var name=names.elementAt(i);this.makeUnRequired(f,name);}}
function FormValidator_checkRequiredField(field)
{if(field==null)return false;if(field.type=='hidden')return true;if((field.type=='text')||(field.type=='password')||(field.type=='textarea')||(field.type=='number')||(field.type=='url')||(field.type=='email'))
{if((field.value=='')||(field.value==' '))return false;return true;}
if(field.type=='radio')
{var field2=field.form.elements[field.name];if(field2.length)
{for(var i=0;i<field2.length;i++)
{if(field2[i].checked)return true;}
return false;}
return field2.checked;}
if(field.type=='select-one')
{var val=field.options[field.selectedIndex].value;if(val=='')return false;return true;}
return false;}
function FormValidator_addFormatValidator(fieldname,validator,msg)
{validator.setErrorMessage(msg);this.formatters.put(fieldname,validator);}
function FormValidator_checkFormat(field,event)
{var formatter=this.formatters.get(field.name);if(formatter==null)return true;return formatter.updateField(field,event);}
function FormValidator_getSrcElement(e)
{var el=null;if(window.event)
{el=window.event.srcElement;}
else if(e)
{el=e.target;}
var res='';if(el!=null)res=el.name;return res;}
function FormValidator_error(msg,field)
{this.setError(msg,field);return false;}
function getRadioValue(f,fieldname)
{var el=f.elements[fieldname];if(!el)return-1;if(!el.length)
{if((el.type=='radio')&&(!el.checked))return-1;return el.value;}
for(var i=0;i<el.length;i++)
{if(el[i].checked)return el[i].value;}
return-1;}
function setRadioValue(f,fieldname,val)
{var el=f.elements[fieldname];if(!el)return-1;if(!el.length)return el.value;for(var i=0;i<el.length;i++)
{if(el[i].value==val)el[i].checked=true;}
return-1;}
function FormValidator_formUpdated(f,sender)
{this.clearErrors(f);var haserrors=false;if(sender!=null)
{var formatter=this.formatters.get(sender.name);if((formatter!=null)&&(sender.value!=''))
{if(!formatter.validateField(sender))
{this.setError(formatter.getErrorMessage(),sender);haserrors=true;}}}
var updatefunctions=this.updatehandlers.get(f.name);if(updatefunctions)
{for(var i=0;i<updatefunctions.size();i++)
{var updatefunc=updatefunctions.elementAt(i);if(!updatefunc(f,sender))
{haserrors=true;}}}
return(!haserrors);}
function FormValidator_initializeForms()
{var keys=this.initializationhandlers.getKeys();for(var i=0;i<keys.length;i++)
{var formname=keys[i];if(document.forms[formname])
{var f=document.forms[formname];for(var j=0;j<f.elements.length;j++)
{$(f.elements[j]).bind('invalid',function(evt){focusField($(this));});}
var initfunctions=this.initializationhandlers.get(formname);if(initfunctions)
{for(var k=0;k<initfunctions.size();k++)
{var initfunc=initfunctions.elementAt(k);initfunc(document.forms[formname]);}}}}
keys=this.updatehandlers.getKeys();for(var i=0;i<keys.length;i++)
{var formname=keys[i];if(document.forms[formname])
{var updatefunctions=this.updatehandlers.get(formname);if(updatefunctions)
{for(var j=0;j<updatefunctions.size();j++)
{var updatefunc=updatefunctions.elementAt(j);updatefunc(document.forms[formname],null);}}}}
$('.floating-point, .integer-field').focus(function(evt){this.select();});}
function FormValidator_addInitializationHandler(f,s)
{var v=this.initializationhandlers.get(f.name);if(!v)
v=new Vector();if(!v.containsAsString(s))
v.add(s);this.initializationhandlers.put(f.name,v);}
function FormValidator_addUpdateHandler(f,s)
{var v=this.updatehandlers.get(f.name);if(!v)
v=new Vector();if(!v.containsAsString(s))
v.add(s);this.updatehandlers.put(f.name,v);}
function FormValidator_addValidationHandler(f,s)
{var v=this.validationhandlers.get(f.name);if(!v)
v=new Vector();if(!v.containsAsString(s))
v.add(s);this.validationhandlers.put(f.name,v);}
function FormValidator_addCCValidationHandler(f,s)
{var v=this.ccvalidationhandlers.get(f.name);if(!v)
v=new Vector();if(!v.containsAsString(s))
v.add(s);this.ccvalidationhandlers.put(f.name,v);}
function FormValidator_setAJAXTarget(f,target)
{if((target=='')||(target==null))
this.ajaxtargets.remove(f.name);else
this.ajaxtargets.put(f.name,target);}
function FormValidator_setThrobberMessage(f,msg)
{if((msg=='')||(msg==null))
this.throbbermessages.remove(f.name);else
this.throbbermessages.put(f.name,msg);}
function FormValidator_setShowProgress(f,val)
{if(!(val))
this.showprogress.remove(f.name);else
this.showprogress.put(f.name,val);}
function FormValidator_setTimeOut(f,val)
{if(val==null)
this.timeouts.remove(f.name);else
this.timeouts.put(f.name,val);}
function ajaxProgressHandler(evt)
{if(evt.lengthComputable)
{var percentComplete=Math.round((evt.loaded/evt.total)*100);if(percentComplete>=100)
{$('#form-progress-label').html('<I CLASS = \"fa fa-spinner fa-spin fa-3x fa-fw\"></I> Submitted. Waiting on Server . . .');$('#form-progress').attr('VALUE',percentComplete);}
else
{$('#form-progress-label').html("Submitting ("+percentComplete+'%)');$('#form-progress').attr('VALUE',percentComplete);}}}
function ajaxXHR()
{var xhr=new window.XMLHttpRequest();xhr.upload.addEventListener("progress",ajaxProgressHandler,false);xhr.upload.onprogress=ajaxProgressHandler;xhr.addEventListener("progress",ajaxProgressHandler,false);return xhr;}
function FormValidator_submitForm(f)
{if(FORM_SUBMISSION_CANCELLED)
{FORM_SUBMISSION_CANCELLED=false;return;}
this.enableAll(f);var ajaxtarget=this.ajaxtargets.get(f.name);var throbbermsg=this.throbbermessages.get(f.name);var showprogress=this.showprogress.get(f.name);var formtimeout=this.timeouts.get(f.name);if(formtimeout==null)formtimeout=0;if(ajaxtarget!=null)
{if(ajaxtarget=='progresswindow')
{progressmonitor.submitForm(f);return;};if(ajaxtarget=='newpopup')
{var popup='<DIV CLASS = \"modal popup fade\" ID = \"popup\" role = \"dialog\">'
+'     <DIV CLASS = \"modal-dialog modal-lg\">'
+'      <DIV CLASS = \"modal-content\" ID = \"popupcontent\">'
+'       <DIV CLASS = \"modal-header\">'
+'        <H1>'+T_PLEASE_WAIT+'</H1>'
+'       </DIV>'
+'	    <DIV CLASS = \"modal-body\">'
+'        <DIV CLASS = \"loader\"></DIV>'
+'        <DIV CLASS = \"throbbermessage\">';if((throbbermsg==null)||(throbbermsg=='null'))
popup+='Loading . . .';else
popup+=throbbermsg;popup+='        </DIV>'
+'       </DIV>'
+'	    <DIV CLASS = \"modal-footer\">'
+'        <BUTTON TYPE = \"button\" CLASS = \"btn btn-default\" data-dismiss = \"modal\">Close</BUTTON>'
+'	    </DIV>'
+'  	   </DIV>'
+'	  </DIV>'
+'	 </DIV>';if(!document.getElementById('popup'))
$('body').append(popup);$('#popup').modal({backdrop:'static',keyboard:false,show:true});$('#popup').on('hidden.bs.modal',function(){$('#popup').remove();});ajaxtarget='popupcontent';}
var methodval=$(f).attr('method');var actvalue=$(f).attr('action');if($(f).attr('ENCTYPE')=='multipart/form-data')
{if(!window.FormData)
{alert('Sorry, this page requires a newer browser to function correctly. Please update your browser to the latest version.');return;}
var dataval=new FormData($('#'+f.id)[0]);var msg=T_PLEASE_WAIT;if((throbbermsg!=null)&&(throbbermsg!='null'))
msg=throbbermsg;if(showprogress)
{$('#'+ajaxtarget).html('<SPAN CLASS = \"formprogress\"><LABEL ID = \"form-progress-label\">Submitting . . .</LABEL> <progress ID = \"form-progress\" VALUE = \"0\" MAX = \"100\"></PROGRESS></SPAN>');}
else
{var loader='  <DIV CLASS = \"throbberbody\">'
+'        <H1>'+T_PLEASE_WAIT+'</H1>'
+'        <DIV CLASS = \"loader\"></DIV>'
+'        <DIV CLASS = \"throbbermessage\">';if((msg==null)||(msg=='null'))
loader+='Loading . . .';else
loader+=msg;loader+='        </DIV>'
+'       </DIV>';$('#'+ajaxtarget).html(loader);}
$.ajax({data:dataval,type:methodval,url:actvalue,mimeType:"multipart/form-data",contentType:false,cache:false,processData:false,xhr:ajaxXHR,success:function(response)
{$('#'+ajaxtarget).html(response);},error:function(xhr,status,errmsg)
{alert(status+':'+errmsg);},timeout:formtimeout});$('#throbber').hide();}
else
{var dataval=$(f).serialize();var msg=T_PLEASE_WAIT;if((throbbermsg!=null)&&(throbbermsg!='null'))
msg=throbbermsg;if(showprogress)
{$('#'+ajaxtarget).html('<SPAN CLASS = \"formprogress\"><LABEL ID = \"form-progress-label\">Submitting . . .</LABEL> <progress ID = \"form-progress\" VALUE = \"0\" MAX = \"100\"></PROGRESS></SPAN>');}
else
{var loader='  <DIV CLASS = \"throbberbody\">'
+'        <H1>'+T_PLEASE_WAIT+'</H1>'
+'        <DIV CLASS = \"loader\"></DIV>'
+'        <DIV CLASS = \"throbbermessage\">';if((msg==null)||(msg=='null'))
loader+='Loading . . .';else
loader+=msg;loader+='        </DIV>'
+'       </DIV>';$('#'+ajaxtarget).html(loader);}
$.ajax({data:dataval,type:methodval,url:actvalue,xhr:ajaxXHR,success:function(response)
{$('#'+ajaxtarget).html(response);},error:function(xhr,status,errmsg)
{alert(status+':'+errmsg);},timeout:formtimeout});$('#throbber').hide();}}
else
{if(throbbermsg!=null)
{var throbberbody='<DIV CLASS = \"throbbercontainer\" ID = \"throbber\">'
+' <DIV CLASS = \"throbberbackdrop\"></DIV>'
+' <DIV CLASS = \"throbberbody\">'
+'  <H1>'+T_PLEASE_WAIT+'</H1>'
+'  <DIV CLASS = \"loader\"></DIV>'
+'  <DIV CLASS = \"throbbermessage\">'
+throbbermsg
+'  </DIV>'
+' </DIV>'
+'</DIV>';if(!document.getElementById('throbbercontainer'))
$('body').append(throbberbody);$('#throbber').show();}
f.submit();}}
function showFormConfirm(f,title,message,yescaption,nocaption)
{var popup='<DIV CLASS = \"modal fade ga-custom-confirm\" ID = \"gaconfirm\" role = \"dialog\">'
+'     <DIV CLASS = \"modal-dialog modal-sm\">'
+'      <DIV CLASS = \"modal-content\" ID = \"gaconfirmcontent\">'
+'       <DIV CLASS = \"modal-header\">'
+'        <H1>'+title+'</H1>'
+'       </DIV>'
+'	    <DIV CLASS = \"modal-body\">'
+'        <P>'
+message
+'        </P>'
+'       </DIV>'
+'	    <DIV CLASS = \"modal-footer text-center\">'
+'        <BUTTON TYPE = \"button\" CLASS = \"btn btn-secondary\" data-dismiss = \"modal\" ID = \"ga-custom-confirm-no-btn\">'+nocaption+'</BUTTON>'
+'        <BUTTON TYPE = \"button\" CLASS = \"btn btn-primary\" data-dismiss = \"modal\" ID = \"ga-custom-confirm-yes-btn\">'+yescaption+'</BUTTON>'
+'	    </DIV>'
+'  	   </DIV>'
+'	  </DIV>'
+'	 </DIV>';$('body').remove('#gaconfirm');$('body').append(popup);$('#gaconfirm').modal({backdrop:'static',keyboard:false,show:true});$('#gaconfirm').on('hidden.bs.modal',function(){$('#gaconfirm').remove();});$('#ga-custom-confirm-yes-btn').click(function(evt){FORM_SUBMISSION_CANCELLED=false;$('#gaconfirm').modal('hide');formvalidator.submitForm(f);});}
function FormValidator_confirm(f,title,message,yescaption,nocaption)
{showFormConfirm(f,title,message,yescaption,nocaption);return cancelFormSubmission();}
function FormValidator()
{this.groups=new Hashtable();this.formatters=new Hashtable();this.initializationhandlers=new Hashtable();this.updatehandlers=new Hashtable();this.validationhandlers=new Hashtable();this.ccvalidationhandlers=new Hashtable();this.ajaxtargets=new Hashtable();this.throbbermessages=new Hashtable();this.showprogress=new Hashtable();this.timeouts=new Hashtable();this.initializeForms=FormValidator_initializeForms;this.validateForm=FormValidator_validateForm;this.submitForm=FormValidator_submitForm;this.confirm=FormValidator_confirm;this.addInitializationHandler=FormValidator_addInitializationHandler;this.addUpdateHandler=FormValidator_addUpdateHandler;this.addValidationHandler=FormValidator_addValidationHandler;this.addCCValidationHandler=FormValidator_addCCValidationHandler;this.setAJAXTarget=FormValidator_setAJAXTarget;this.setThrobberMessage=FormValidator_setThrobberMessage;this.setShowProgress=FormValidator_setShowProgress;this.setTimeOut=FormValidator_setTimeOut;this.formUpdated=FormValidator_formUpdated;this.setError=FormValidator_setError;this.clearErrors=FormValidator_clearErrors;this.clearError=FormValidator_clearError;this.makeRequired=FormValidator_makeRequired;this.makeUnRequired=FormValidator_makeUnRequired;this.checkRequiredField=FormValidator_checkRequiredField;this.enableField=FormValidator_enableField;this.disableField=FormValidator_disableField;this.enableAll=FormValidator_enableAll;this.addToGroup=FormValidator_addToGroup;this.removeFromGroup=FormValidator_removeFromGroup;this.enableGroup=FormValidator_enableGroup;this.disableGroup=FormValidator_disableGroup;this.makeGroupRequired=FormValidator_makeGroupRequired;this.makeGroupUnRequired=FormValidator_makeGroupUnRequired;this.addFormatValidator=FormValidator_addFormatValidator;this.checkFormat=FormValidator_checkFormat;this.getSrcElement=FormValidator_getSrcElement;this.error=FormValidator_error;return this;}
function saveCheckBoxes(f,realname,fieldname)
{var els=f.elements[fieldname];if(!els)return;var val='-';if(els.length)
{for(var i=0;i<els.length;i++)
{if(els[i].checked)
val+=":"+els[i].value;}}
else if(els.checked)
val+=":"+els.value;val+=":";f.elements[realname].value=val;}
function bsPostToDiv(f,divname,placeholder)
{var loader='  <DIV CLASS = \"throbberbody\">'
+'        <H1>'+T_PLEASE_WAIT+'</H1>'
+'        <DIV CLASS = \"loader\"></DIV>'
+'        <DIV CLASS = \"throbbermessage\">';if((placeholder==null)||(placeholder=='null'))
loader+='Loading . . .';else
loader+=placeholder;loader+='        </DIV>'
+'       </DIV>';$('#'+divname).html(loader);$.ajax({data:$(f).serialize(),type:$(f).attr('method'),url:$(f).attr('action'),success:function(response)
{$('#'+divname).html(response);}});return false;}
var formvalidator=new FormValidator();var FORM_SUBMISSION_CANCELLED=false;function cancelFormSubmission()
{FORM_SUBMISSION_CANCELLED=true;return true;}
function bsValidateForm(event)
{event.preventDefault();FORM_SUBMISSION_CANCELLED=false;var f=event.target;if(formvalidator.validateForm(f))
formvalidator.submitForm(f);}
function bsSubmitForm(event)
{event.preventDefault();FORM_SUBMISSION_CANCELLED=false;var f=event.target.form;if(formvalidator.validateForm(f))
formvalidator.submitForm(f);}
function bsOpenLinkInProgress(event)
{event.preventDefault();var target=(event.target.tagName=='A')?event.target:$(event.target).closest('a')[0];progressmonitor.followLink(target.href);}
function bsExpandTextArea(event)
{event.preventDefault();var target=event.target;var formname=$(target).attr('data-formname');var fieldname=$(target).attr('data-fieldname');var form=document.forms[formname];var el=form.elements[fieldname];$(el).toggleClass('etaexpanded');}
function PrintSpooler_sendCommandToPrinter(data)
{try
{var res="UNKNOWN ERROR";$.ajax({url:PRINTER_SPOOLER_URL,type:"POST",data:{json:JSON.stringify(data)},async:false,timeout:500,success:function(data){res=data;},error:function(hdr,txtstatus,err){res='TIMEOUT';}});return res;}
catch(e)
{return e;}}
function PrintSpooler_checkStatus()
{var data={act:'checkstatus'};var rawres=this.sendCommandToPrinter(data);if(rawres=='TIMEOUT')return PRINTER_STATUS_TIMEOUT;var res=parseJSONObject(rawres);if(res.status=='OK')return PRINTER_STATUS_SUCCESS;return PRINTER_STATUS_OTHER_ERROR;}
function PrintSpooler_print()
{if(this.htmldocuments)
{for(var i=0;i<this.htmldocuments.length;i++)
{var xml=$($.parseXML(this.htmldocuments[i]));var html=xml.find('RawData').text();html=atob(html);var iframe=document.createElement("iframe");iframe.style.display='none';document.body.appendChild(iframe);iframe.contentWindow.document.open();iframe.contentWindow.document.write(html);iframe.contentWindow.document.close();}}
if((this.documents)&&(this.documents.length>0))
{var printdata={act:'printdata',data:this.documents};var rawres=this.sendCommandToPrinter(printdata);if(rawres=='ERROR')return false;var res=parseJSONObject(rawres);if(res.status!='OK')
return false;}
return true;}
function PrintSpooler_setDocuments(docs)
{this.documents=docs;}
function PrintSpooler_setHTMLDocuments(docs)
{this.htmldocuments=docs;}
function PrintSpooler()
{this.sendCommandToPrinter=PrintSpooler_sendCommandToPrinter;this.checkStatus=PrintSpooler_checkStatus;this.setDocuments=PrintSpooler_setDocuments;this.setHTMLDocuments=PrintSpooler_setHTMLDocuments;this.print=PrintSpooler_print;return this;}
var printspooler=new PrintSpooler();function retryPrinting(redirectto,ajaxtarget,summary)
{if(printspooler.print())
{var caption='';var bodycontent='';if(redirectto=='')
{caption='Printing Complete';bodycontent=summary;}
else
{$('#progress').modal('hide');if(ajaxtarget!='popupcontent')
$('#popup').modal('hide');}
$('#PROGRESSCAPTION').html(caption);$('#PROGRESSBODY').html(bodycontent);if(redirectto!='')
{if((ajaxtarget!=null)&&(ajaxtarget!=''))
{$('#'+ajaxtarget).load(redirectto,function(response,status,xhr){if(status=="error")
{var msg="<H1>ERROR:</H1> ";$('#'+ajaxtarget).html(msg+xhr.status+" "+xhr.statusText);}});$('#progress').modal('hide');}
else
document.location.href=redirectto;return;}}
else
alert('Unable to send documents to printer');return false;}
var LOWER_CASE_CHARACTERS='abcdefghijklmnopqrstuvwxyz';var UPPER_CASE_CHARACTERS='ABCDEFGHIJKLMNOPQRSTUVWXYZ';var NUMERIC_CHARACTERS='0123456789';var SPECIAL_CHARACTERS='~!@#$&*()+-,.|';function passwordContains(pass,characterlist)
{for(var i=0;i<characterlist.length;i++)
{var c=characterlist.charAt(i);if(pass.indexOf(c)!=-1)return true;}
return false;}
function checkPasswordComplexity(pass)
{if((pass==null)||(pass.length<8))return 'Password must be 8 characters or more';if(!passwordContains(pass,LOWER_CASE_CHARACTERS))return 'Password must contain at least 1 lower-case Roman alphabetical character';if(!passwordContains(pass,UPPER_CASE_CHARACTERS))return 'Password must contain at least 1 upper-case Roman alphabetical character';if(!passwordContains(pass,NUMERIC_CHARACTERS))return 'Password must contain at least 1 number';if(!passwordContains(pass,SPECIAL_CHARACTERS))return 'Password must contain at least 1 special character ('+SPECIAL_CHARACTERS+')';return '';}
function generateComplexPassword()
{var res='';while(res.length<8)
{var cindex=Math.round(Math.random()*4)-1;cindex=Math.max(cindex,0);var arr=null;if(cindex==0)arr=LOWER_CASE_CHARACTERS;if(cindex==1)arr=UPPER_CASE_CHARACTERS;if(cindex==2)arr=NUMERIC_CHARACTERS;if(cindex==3)arr=SPECIAL_CHARACTERS;var arrindex=Math.round(Math.random()*arr.length)-1;arrindex=Math.max(arrindex,0);var c=arr[arrindex];res+=c;}
if(checkPasswordComplexity(res)=='')return res;return generateComplexPassword();}
function doPostalCodeLookup(f,sender)
{if((sender==null)||(sender.value==''))return;var fieldname=sender.name;var countryfield=fieldname;countryfield=countryfield.replace('zipcode','country');if(!f.elements[countryfield])return;var country=f.elements[countryfield].value;var url=$(f).attr('ACTION');url=url.replace('/Admin','/FrontEnd');url=url.replace('/Account','/FrontEnd');$.ajax({data:{act:'Distributor.postalCodeLookup',zipcode:sender.value,country:country},type:'POST',url:url,success:function(rawresponse)
{var response=parseJSONObject(rawresponse);if(response.success)
{var add2=f.elements[fieldname.replace('zipcode','address2')];if(add2)
{add2.value=response.address2;formvalidator.formUpdated(f,add2);}
var add3=f.elements[fieldname.replace('zipcode','address3')];if(add3)
{add3.value=response.address3;formvalidator.formUpdated(f,add3);}
var add4=f.elements[fieldname.replace('zipcode','address4')];if(add4)
{add4.value=response.address4;formvalidator.formUpdated(f,add4);}}
else
{console.log('Postal code lookup failed');}}});}
