function Hashtable_put(key,val)
{for(var i=0;i<this.keys.length;i++)
{if(this.keys[i]==key)
{this.vals[i]=val;return val;}}
this.keys[this.keys.length++]=key;this.vals[this.vals.length++]=val;return val;}
function Hashtable_get(key)
{for(var i=0;i<this.keys.length;i++)
{if(this.keys[i]==key)return this.vals[i];}
return null;}
function Hashtable_remove(key)
{var newkeys=new Array();var newvals=new Array();for(var i=0;i<this.keys.length;i++)
{if(this.keys[i]!=key)
{newkeys[newkeys.length++]=this.keys[i];newvals[newvals.length++]=this.vals[i];}}
this.keys=newkeys;this.vals=newvals;}
function Hashtable_getKeys()
{return this.keys;}
function Hashtable_getValues()
{return this.vals;}
function Hashtable()
{this.keys=new Array();this.vals=new Array();this.put=Hashtable_put;this.get=Hashtable_get;this.remove=Hashtable_remove;this.getKeys=Hashtable_getKeys;this.getValues=Hashtable_getValues;return this;}