renderButtons();

function renderButtons() {
  
  tinymce.PluginManager.add( "mce_tinymce_button_functions_js", function (editor, url) {

      editor.addButton(`klc_add_banner`, {
        text: "Add Banner",
        icon: false,
        onclick: function () {
          editor.insertContent("[klc_banner_section]");
        },
        id: `klc-tinymce-add-banner`,
        classes: "klc-tinymce",
      });

    }
  );
}