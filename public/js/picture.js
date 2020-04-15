

$(document).ready(function () {
    $('#picture').fileinput({
        language: 'es',
        allowedFileExtensions: ['jpg', 'jpeg', 'png'],
        maxFileSize: 1000,
        showUpload: false,
        showClose: false,
        showCancel: false,
        initialPreviewAsData: true,
        dropZoneEnabled: false,
        theme: "fas",
    });
});