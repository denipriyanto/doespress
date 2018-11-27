console.log('tinymce editor');

tinymce.init({
    selector: '#mytextarea',
    menubar: false,
    branding: false,
    statusbar: false,
    height: 400,
    image_advtab: true,
    paste_data_images: true,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table directionality",
        "emoticons template paste textpattern"
    ]
});