function Vector_add(obj)
{this.elements[this.elements.length++]=obj;}
function Vector_addSorted(obj,index)
{if((this.elements.length==0)||(index==this.elements.length))
{this.elements[this.elements.length++]=obj;}
else
{this.elements.length++;for(var i=this.elements.length-1;i>index;i--)
this.elements[i]=this.elements[i-1];this.elements[index]=obj;}}
function Vector_firstElement()
{if(this.elements.length>0)return this.elements[0];return null;}
function Vector_lastElement()
{if(this.elements.length>0)return this.elements[this.elements.length-1];return null;}
function Vector_elementAt(ind)
{if(ind<0)return null;if(ind>=this.elements.length)return null;return this.elements[ind];}
function Vector_size()
{return this.elements.length;}
function Vector_indexOf(obj)
{for(var i=0;i<this.elements.length;i++)
{if(this.elements[i]==obj)return i;}
return-1;}
function Vector_contains(obj)
{return(this.indexOf(obj)!=-1);}
function Vector_containsAsString(obj)
{for(var i=0;i<this.elements.length;i++)
{if(this.elements[i].toString()==obj.toString())return true;}
return false;}
function Vector_clear()
{this.elements=new Array();}
function Vector_remove(obj)
{var nelements=new Array();for(var i=0;i<this.elements.length;i++)
{if(this.elements[i]!=obj)nelements[nelements.length++]=this.elements[i];}
this.elements=nelements;}
function Vector_removeElementAt(ind)
{var nelements=new Array();for(var i=0;i<this.elements.length;i++)
{if(i!=ind)nelements[nelements.length++]=this.elements[i];}
this.elements=nelements;}
function Vector()
{this.elements=new Array();this.add=Vector_add;this.addSorted=Vector_addSorted;this.firstElement=Vector_firstElement;this.lastElement=Vector_lastElement;this.elementAt=Vector_elementAt;this.size=Vector_size;this.indexOf=Vector_indexOf;this.contains=Vector_contains;this.containsAsString=Vector_containsAsString;this.clear=Vector_clear;this.remove=Vector_remove;this.removeElement=Vector_removeElementAt;return this;}