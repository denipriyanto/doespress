console.log('tinymce editor');

tinymce.init({
    selector: '#mytextarea',
    menubar: false,
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
    branding: false,
    statusbar: false,
    height: 600
});