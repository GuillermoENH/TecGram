import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage:'da clic para subir una fotografia',
    acceptedFiles:'.ong, .jpg, .jpeg, .gif',
    addRemoveLinks:true,
    dictRemoveFile: 'Borrar fotografia',
    maxFiles:1,
    uploadMultiple:false,
})