document.getElementById('formFile').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profileImage').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});

function isNumberKey(evt){
  // Existing validation logic to allow only numbers
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  
  // Additional check for input length
  var inputField = document.getElementById("noHP");
  if (inputField.value.length > inputField.maxLength) {
    return false;
  }  
  return true;
}

function adjustTextareaHeight() {
    textarea.style.height = 'auto'; // Reset height to auto
    textarea.style.height = textarea.scrollHeight + 'px'; // Set height to scrollHeight
}

textarea.addEventListener('input', adjustTextareaHeight);