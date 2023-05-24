document.getElementById("fileInput").addEventListener("change", function(event) {
    var input = event.target;
    var preview = document.getElementById("previewImage");
    var customText = document.getElementById("customText");
  
    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function(e) {
        preview.setAttribute("src", e.target.result);
        customText.textContent = input.files[0].name;
      };
  
      reader.readAsDataURL(input.files[0]);
    } else {
      preview.setAttribute("src", "./assets/img/not-select.png");
      customText.textContent = "Sin archivos seleccionados";
    }
  });