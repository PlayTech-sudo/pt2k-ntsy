function isOneChecked() {
  // All <input> tags...
  var chx = document.getElementsByTagName('input');
  for (var i=0; i<chx.length; i++) {
    // If you have more than one radio group, also check the name attribute
    // for the one you want as in && chx[i].name == 'choose'
    // Return true from the function on first match of a checked item
    if (chx[i].type == 'radio' && chx[i].checked) {
      document.alert("enter the purpose");
    } 
  }
  // End of the loop, return false
  
}
