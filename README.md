I am no longer actively working on this project, therefore I've archived it. You can use the code and make your own implementation as you like :)

-------------------

Simple WordPress Plugin that add a button that inserts a shorcode into your editor on posts or pages within the WordPress dashboard.

In this instance I am using it to add certain sections between content in my blog posts. I wanted to make a conversion magnet banner design that can be inserted within a blog post anywhere the user needs it.

Steps to add new buttons:
1. You need to init a new button key in the init-buttons.php file first before a button will render correctly. This function adds the button to the $buttons array with all the other icon buttons in line 1 of the editor.
2. Then you need to go and add the functionality and data fields for the button in the tinymce-button-functions.js file.

Done!
