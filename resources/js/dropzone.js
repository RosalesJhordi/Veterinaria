// Verificar si Dropzone aún no está adjunto
if (!Dropzone.options.dropzone) {
    // Desactivar la auto-detección de Dropzone
    Dropzone.autoDiscover = false;

    // Inicializar Dropzone solo si no está adjunto
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

                imagenP.previewElement.classList.add('dz-success', 'dz-complete');

                // Ajustar estilos para que la imagen ocupe el 100% del contenedor
                imagenP.previewElement.querySelector('.dz-image img').style.width = "100%";
                imagenP.previewElement.querySelector('.dz-image img').style.height = "auto";
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
