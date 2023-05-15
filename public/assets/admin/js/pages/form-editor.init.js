$(document).ready(function() {
    0 < $("#form-editor").length && tinymce.init({
        selector: "textarea#form-editor",
        height: 300,
        plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [{
            title: "Bold text",
            inline: "b"
        }, {
            title: "Red text span",
            inline: "span",
            styles: {
                color: "#ff0000"
            }
        }, {
            title: "h1 Başlık",
            block: "h1",
            styles: {
                color: "#000000"
            }
        }, {
            title: "h2 Başlık",
            block: "h2",
            classes: "exampleh2"
        }, {
            title: "h3 Başlık",
            block: "h3",
            classes: "exampleh3"
        }, {
            title: "Table styles"
        }, {
            title: "Table row 1",
            selector: "tr",
            classes: "tablerow1"
        }]
    })
});