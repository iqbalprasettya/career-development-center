window.addEventListener("DOMContentLoaded", (event) => {
  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector("#sidebarToggle");
  if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener("click", (event) => {
      event.preventDefault();
      document.body.classList.toggle("sb-sidenav-toggled");
      localStorage.setItem("sb|sidebar-toggle", document.body.classList.contains("sb-sidenav-toggled"));
    });
  }
});


// tinymce
tinymce.init({
    selector:'#editor1',
    menubar: false,
    statusbar: false,
    plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
    skin: 'bootstrap',
    toolbar_drawer: 'floating',
    min_height: 200,           
    autoresize_bottom_margin: 16,
    setup: (editor) => {
        editor.on('init', () => {
            editor.getContainer().style.transition="border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
        });
        editor.on('focus', () => {
            editor.getContainer().style.boxShadow="0 0 0 .2rem rgba(0, 123, 255, .25)",
            editor.getContainer().style.borderColor="#80bdff"
        });
        editor.on('blur', () => {
            editor.getContainer().style.boxShadow="",
            editor.getContainer().style.borderColor=""
        });
    }
});
tinymce.init({
  selector:'#editor2',
  menubar: false,
  statusbar: false,
  plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
  toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
  skin: 'bootstrap',
  toolbar_drawer: 'floating',
  min_height: 250,           
  autoresize_bottom_margin: 16,
  setup: (editor) => {
      editor.on('init', () => {
          editor.getContainer().style.transition="border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
      });
      editor.on('focus', () => {
          editor.getContainer().style.boxShadow="0 0 0 .2rem rgba(0, 123, 255, .25)",
          editor.getContainer().style.borderColor="#80bdff"
      });
      editor.on('blur', () => {
          editor.getContainer().style.boxShadow="",
          editor.getContainer().style.borderColor=""
      });
  }
});
tinymce.init({
    selector:'#editor3',
    menubar: false,
    statusbar: false,
    plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
    skin: 'bootstrap',
    toolbar_drawer: 'floating',
    min_height: 450,           
    autoresize_bottom_margin: 16,
    setup: (editor) => {
        editor.on('init', () => {
            editor.getContainer().style.transition="border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
        });
        editor.on('focus', () => {
            editor.getContainer().style.boxShadow="0 0 0 .2rem rgba(0, 123, 255, .25)",
            editor.getContainer().style.borderColor="#80bdff"
        });
        editor.on('blur', () => {
            editor.getContainer().style.boxShadow="",
            editor.getContainer().style.borderColor=""
        });
    }
  });
// end tinymce