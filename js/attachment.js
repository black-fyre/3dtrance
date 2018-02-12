const attachmentInputObject = $("#attachment");
const attachmentInput = document.getElementById("attachment");

attachmentInputObject.on("change", function () {
    const attachedFiles = attachmentInput.files;
    if (validFileType(attachedFiles[0])) {
        $("#attachmentLabel").removeClass('text-danger').addClass('text-success').html(attachedFiles[0].name + ' ' + returnFileSize(attachedFiles[0].size));
    } else {
        const error = document.createElement('p');
        error.textContent = attachedFiles[0].name + ' Not a valid file type, please update';
        $("#attachmentLabel")
            .html('')
            .removeClass('text-success')
            .addClass('text-danger')
            .append(error);
    }
});

var fileTypes = [
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'application/pdf',
    'application/msword'
];
// This function checks the file type of the submitted document by comparing the type of the file with the array file types
//@param file is a file object
// return true is the type is valid

function validFileType(file) {
    for (var i = 0; i < fileTypes.length; i++) {
        if (file.type === fileTypes[i]) {
            return true;
        }
    }

    return false;
}

function returnFileSize(number) {
    if (number < 1024) {
        return number + 'bytes';
    } else if (number > 1024 && number < 1048576) {
        return (number / 1024).toFixed(1) + 'KB';
    } else if (number > 1048576) {
        return (number / 1048576).toFixed(1) + 'MB';
    }
}