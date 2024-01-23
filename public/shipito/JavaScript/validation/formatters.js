var BACKSPACE=new CharSet(8,8);var ENTER=new CharSet(13,13);var INTEGERS=new CharSet(48,57);var UPPERCASE_ROMAN=new CharSet(65,90);var LOWERCASE_ROMAN=new CharSet(97,122);var MINUS=new CharSet(45,45);var ROMAJI=new CharSet(0,255);var KANJI_PUNCTUATION=new CharSet(12288,12351);var KANJI_CHARACTERS=new CharSet(19968,65518);var SINGLE_BYTE_KATAKANA=new CharSet(65376,65439);var DOUBLE_BYTE_KATAKANA=new CharSet(12448,12543);var HIRAGANA=new CharSet(12352,12447);var CYRILLIC=new CharSet(1024,1279);var FLOATS=new CharSet(46,46);var NUMBERSYMBOL=new CharSet(35,35);var STARSYMBOL=new CharSet(42,42);var DASHES=new CharSet(45,45);var SPACES=new CharSet(32,32);var PUNCTUATION=new CharSet(32,64);var INJECTED_CHARACTERS=new Array('<','>','%',';','^');function CharSet_inSet(val)
{if(val<this.low)return false;if(val>this.high)return false;return true;}
function CharSet(low,high)
{this.low=low;this.high=high;this.inSet=CharSet_inSet;return this;}
function Formatter_setErrorMessage(msg)
{this.errormessage=msg;}
function Formatter_getErrorMessage()
{return this.errormessage;}
function Formatter_addCharSet(range)
{this.charsets.add(range);}
function Formatter_checkCharacter(c)
{for(var i=0;i<INJECTED_CHARACTERS.length;i++)
{if(c==INJECTED_CHARACTERS[i].charCodeAt(0))
{alert('Disallowed character: '+String.fromCharCode(c));return false;}}
if(this.charsets.size()==0)return true;if(c==0)return true;for(var i=0;i<this.charsets.size();i++)
{if(this.charsets.elementAt(i).inSet(c))return true;}
window.status='Invalid character: '+String.fromCharCode(c)+' ('+c+')';return false;}
function Formatter_checkCharSet(field)
{if(this.charsets.size()==0)return true;var val=field.value;for(var i=0;i<val.length;i++)
{var c=val.charCodeAt(i);var ok=false;if(!this.checkCharacter(c))return false;}
return true;}
function Formatter_updateField(field,e)
{var key;if(window.event)
{key=window.event.keyCode;}
else
{key=e.which;}
return this.checkCharacter(key);}
function Formatter_validateField(field)
{return this.checkCharSet(field);}
function Formatter()
{this.cnt=0;this.errormessage='Invalid Format!';this.charsets=new Vector();this.checkCharacter=Formatter_checkCharacter;this.updateField=Formatter_updateField;this.addCharSet=Formatter_addCharSet;this.checkCharSet=Formatter_checkCharSet;this.setErrorMessage=Formatter_setErrorMessage;this.getErrorMessage=Formatter_getErrorMessage;this.validateField=Formatter_validateField;this.addCharSet(BACKSPACE);this.addCharSet(ENTER);return this;}
function IntegerFormatter_validateField(field)
{if(!this.checkCharSet(field))return false;if(this.digits<0)return true;return(field.value.length==this.digits);}
function IntegerFormatter(digits)
{this.inheritsFrom=Formatter;this.inheritsFrom();this.setErrorMessage('Incorrect # of digits');if(digits==null)
this.digits=-1;else
this.digits=digits;this.validateField=IntegerFormatter_validateField;this.addCharSet(INTEGERS);this.addCharSet(MINUS);return this;}
function PositiveIntegerFormatter(digits)
{this.inheritsFrom=Formatter;this.inheritsFrom();this.setErrorMessage('Incorrect # of digits');if(digits==null)
this.digits=-1;else
this.digits=digits;this.validateField=IntegerFormatter_validateField;this.addCharSet(INTEGERS);return this;}
function ZipCodeFormatter_validateField(field)
{if(!this.checkCharSet(field))return false;if(this.digits<0)return true;return(field.value.length==this.digits);}
function ZipCodeFormatter(digits)
{this.inheritsFrom=Formatter;this.inheritsFrom();this.setErrorMessage('Invalid Zip Code');if(digits==null)
this.digits=-1;else
this.digits=digits;this.validateField=ZipCodeFormatter_validateField;this.addCharSet(INTEGERS);return this;}
function FloatFormatter_validateField(field)
{fixFloat(field,this.decimals)
if(!this.checkCharSet(field))return false;return true;}
function FloatFormatter(decimals)
{this.inheritsFrom=Formatter;this.inheritsFrom();this.setErrorMessage('Incorrect floating-point format');this.decimals=decimals;this.validateField=FloatFormatter_validateField;this.addCharSet(INTEGERS);this.addCharSet(FLOATS);this.addCharSet(MINUS);return this;}
function PositiveFloatFormatter(decimals)
{this.inheritsFrom=Formatter;this.inheritsFrom();this.setErrorMessage('Incorrect floating-point format');this.decimals=decimals;this.validateField=FloatFormatter_validateField;this.addCharSet(INTEGERS);this.addCharSet(FLOATS);return this;}
function RomajiFormatter()
{this.inheritFrom=Formatter;this.inheritFrom();this.addCharSet(ROMAJI);return this;}
function StandardAsciiFormatter()
{this.inheritFrom=Formatter;this.inheritFrom();this.addCharSet(UPPERCASE_ROMAN);this.addCharSet(LOWERCASE_ROMAN);this.addCharSet(INTEGERS);this.addCharSet(MINUS);this.addCharSet(SPACES);this.addCharSet(PUNCTUATION);return this;}
function URLFormatter()
{this.inheritFrom=Formatter;this.inheritFrom();this.addCharSet(INTEGERS);this.addCharSet(UPPERCASE_ROMAN);this.addCharSet(LOWERCASE_ROMAN);return this;}
function KanjiFormatter()
{this.inheritFrom=Formatter;this.inheritFrom();this.addCharSet(ROMAJI);this.addCharSet(KANJI_CHARACTERS);this.addCharSet(KANJI_PUNCTUATION);this.addCharSet(SINGLE_BYTE_KATAKANA);this.addCharSet(DOUBLE_BYTE_KATAKANA);this.addCharSet(HIRAGANA);return this;}
function CyrillicFormatter()
{this.inheritFrom=Formatter;this.inheritFrom();this.addCharSet(PUNCTUATION);this.addCharSet(INTEGERS);this.addCharSet(CYRILLIC);return this;}
function KatakanaFormatter(width)
{this.inheritFrom=Formatter;this.inheritFrom();this.addCharSet(ROMAJI);if(width=='Single')
this.addCharSet(SINGLE_BYTE_KATAKANA);else
this.addCharSet(DOUBLE_BYTE_KATAKANA);return this;}
function MaskedIntegerFormatter_validateField(field)
{if(!this.checkCharSet(field))return false;if(this.digits<0)return true;return(field.value.length==this.digits);}
function MaskedIntegerFormatter(digits)
{this.inheritsFrom=Formatter;this.inheritsFrom();this.setErrorMessage('Incorrect # of digits');if(digits==null)
this.digits=-1;else
this.digits=digits;this.validateField=IntegerFormatter_validateField;this.addCharSet(INTEGERS);this.addCharSet(NUMBERSYMBOL);this.addCharSet(DASHES);this.addCharSet(STARSYMBOL);return this;}
function deleteObject(f)
{if(confirm('Are you sure you want to delete this object?'))
{var act=f.elements['act'];var newval=act.value;newval=newval.substring(0,newval.indexOf('.'))+".deleteIt";act.value=newval;try
{showThrobber(f,'Deleting object . . .');}
catch(e)
{}
f.submit();}}