<head>
  <script src="<?php echo base_url();?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">tinymce.init({selector : 'textarea'});</script>

   <script type="text/javascript">
    tinyMCE.init({
      mode : "textareas",
      theme : "advanced",
      plugins : "pagebreak,style,table,save,advhr,advimage,advlink,emotions,inlinepopups,insertdatetime,preview,media,searchreplace,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,wordcount,advlist",

      // Theme options
      theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
      theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
      theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
      theme_advanced_buttons4 : "visualchars,nonbreaking,template,pagebreak,restoredraft",
      theme_advanced_toolbar_location : "top",
      theme_advanced_toolbar_align : "left",
      theme_advanced_statusbar_location : "bottom",
      theme_advanced_resizing : true,

      // Example content CSS (should be your site CSS)
      content_css : "css/content.css",

      // Drop lists for link/image/media/template dialogs
      template_external_list_url : "lists/template_list.js",
      external_link_list_url : "lists/link_list.js",
      external_image_list_url : "lists/image_list.js",
      media_external_list_url : "lists/media_list.js",

      // Style formats
      style_formats : [
        {title : 'Bold text', inline : 'b'},
        {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
        {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
        {title : 'Example 1', inline : 'span', classes : 'example1'},
        {title : 'Example 2', inline : 'span', classes : 'example2'},
        {title : 'Table styles'},
        {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
      ],

      // Replace values for the template plugin
      template_replace_values : {
        username : "Some User",
        staffid : "991234"
      }
    });
  </script>
</head>

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Kelola Beranda</h2>
            </div>
          </header>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Beranda Alumni</h3>
                      <button type="button" class="btn btn-primary ml-auto btn-sm">Simpan</button>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                          <label class="form-control-label">Judul</label>
                          <input type="email" placeholder="Tuliskan Judul" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="fileInput"  class="form-control-label">Foto</label>
                            <input id="fileInput" type="file" class="form-control-file">
                        </div>
                      <textarea name="isi" rows="100" style="height: 500px"></textarea>
                    </div>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </section>
