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
  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Update Berita Saya</h2>
            </div>
          </header>
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Berita') ?>">Berita Saya</a></li>
            </ul>
          </div>

                   <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"></h3>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form method="post" action="<?php echo base_url();?>alumni/Berita/exeAddBerita"  enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Judul</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="judul">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kategori Berita</label>
                          <div class="col-sm-9">
                            <select name="kategori" class="form-control mb-3">
                              <option value=""></option>
                              <option value="Info Alumni">Info Alumni</option>
                              <option value="Tips Karir">Tips Karir</option>
                              <option value="Lowongan Kerja">Lowongan Kerja</option>
                            </select>
                          </div>
                        </div>
                         <div class="line"></div>
                         <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pilih File Gambar</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="userfile">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Isi</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" rows="15" name="isi"></textarea>
                          </div>
                      </div>
                         <div class="line"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
         

  </body>
</html>