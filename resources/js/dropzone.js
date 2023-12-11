if (!Dropzone.options.dropzone) {
    Dropzone.autoDiscover = false;

    const dropzone = new Dropzone("#dropzone", {
        dictDefaultMessage: "Sube una imagen",
        acceptedFiles: ".png,.jpg,.jpeg,.gif,.bmp,.tiff,.WebP",
        addRemoveLinks: true,
        dictRemoveFile: "Borrar archivo",
        maxFiles: 1,
        uploadMultiple: false,
        init: function(){
            if(document.querySelector('[name="imagen"]').value.trim()){
                const imagenP = {};
                imagenP.size = 1234;
                imagenP.name = document.querySelector('[name="imagen"]').value;

                this.options.addedfile.call(this, imagenP);
                this.options.thumbnail.call(this, imagenP, '/Productos/' + imagenP.name);

                imagenP.previewElement.classList.add('dz-succes', 'dz-complete');
            }
        }
    });

    dropzone.on("success", function(file, response){
        document.querySelector('[name="imagen"]').value = response.imagen;
    });

    dropzone.on("error", function(file, message){
        console.log("Error al subir imagen");
    });

    dropzone.on("removedfile", function(){
        document.querySelector('[name="imagen"]').value = "";
    });
}
