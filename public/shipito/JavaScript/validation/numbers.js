var UNLIMITED=-5150;function fixNumber(val)
{if(val=='UNLIMITED')return val;if(val=='Unlimited')return val;var NUMBERS='-0123456789.';var temp='';for(var i=0;i<val.length;i++)
{if(NUMBERS.indexOf(val.charAt(i))!=-1)temp+=val.charAt(i);}
return temp;}
function aux_fixMoney(val)
{var s=fixNumber(''+val);if(s.indexOf('.')==-1)s+='.00';while(s.indexOf('.')>(s.length-3))s+='0';s=s.substring(0,s.indexOf('.')+3);if(s=='')s=0;return s;}
function aux_fixFloat(val,numdecimals)
{var s=fixNumber(''+val);if(s.indexOf('.')==-1)
{s+='.';for(var i=0;i<numdecimals;i++)s+='0';}
while(s.indexOf('.')>(s.length-(numdecimals+1)))s+='0';s=s.substring(0,s.indexOf('.')+(numdecimals+1));if(s=='')s=0;return s;}
function setMoney(inp,val)
{inp.value=aux_fixMoney(val);}
function fixMoney(inp)
{inp.value=aux_fixMoney(inp.value);}
function aux_fixQuantity(val)
{var s=fixNumber(''+val);if(s.indexOf('.')!=-1)s=s.substring(0,s.indexOf('.'));if(s=='')s=0;return s;}
function setQuantity(inp)
{inp.value=aux_fixQuantity(inp.value);}
function fixQuantity(inp)
{inp.value=aux_fixQuantity(inp.value);}
function setFloat(inp,val,numdecimals)
{inp.value=aux_fixFloat(val,numdecimals);}
function fixFloat(inp,numdecimals)
{if(numdecimals==0)
fixQuantity(inp);else
inp.value=aux_fixFloat(inp.value,numdecimals);}