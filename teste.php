<!DOCTYPE html>
<html>
<body>

Checkbox: <input type="checkbox" id="myCheck">


<script>

Array.prototype.inArray = function (value)
{
 // Returns true if the passed value is found in the
 // array. Returns false if it is not.
 var i;
 for (i=0; i < this.length; i++)
 {
 if (this[i] == value)
 {
 return true;
 }
 }
 return false;
};


var testArr= ["Shrek","Feona","Donkey"];
//use of inArray
if(testArr.inArray("Donkey"))
   document.getElementById("myCheck").checked = true;
else
   document.getElementById("myCheck").checked = false;

</script>

</body>
</html>
