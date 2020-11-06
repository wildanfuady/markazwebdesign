<h3 class="judul garis"><?php echo $jenis; ?></h3>
<br>
  <div class="col-sm-12">
      <div class="panel-body">
        <ul class="breadcrumb" style="">
          <li><a href="<?php echo base_url('markaz_admin'); ?>">Home</a></li>
          <li>Page Builder</li>
        </ul>
       </div>
  </div>
<br>
<div class="scrool">
  <ul id="myTabs" class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#style" id="home-tab" role="tab" data-toggle="tab" aria-controls="style" aria-expanded="true">Style</a></li>
    <li role="presentation"><a href="#pagebuilder" role="tab" id="profile-tab" data-toggle="tab" aria-controls="instansi">Page Builder</a></li>
    <li role="presentation"><a href="#instansi" role="tab" id="profile-tab" data-toggle="tab" aria-controls="instansi">Instansi</a></li>
    <li role="presentation"><a href="#blokfooter" role="tab" id="profile-tab" data-toggle="tab" aria-controls="blokfooter">Blok Footer</a></li>
  </ul>

  <div id="myTabContent" class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="style" aria-labelledBy="home-tab">
    <br />
      <?php
      foreach($style->result() as $row){
      echo form_open_multipart('markaz_admin/ubah_style/'.$row->id_style);
      ?>
      <div class="form-group">
        <?php 
          echo form_label('Header', 'header_color'); 
          $header_color = array('name' => 'header_color', 'class' => 'form-control', 'type' => 'color', 'size' => '5', 'value' => $row->header_color);
          echo form_input($header_color);
          echo form_error('header_color');
        ?>
      </div>
      <div class="form-group">
        <?php 
          echo form_label('Button', 'button_color'); 
          $button_color = array('name' => 'button_color', 'class' => 'form-control', 'type' => 'color', 'size' => '5', 'value' => $row->button_color);
          echo form_input($button_color);
          echo form_error('button_color');
        ?>
      </div>
      <div class="form-group">
        <?php 
          echo form_label('Footer 1', 'footer1_color'); 
          $footer1_color = array('name' => 'footer1_color', 'class' => 'form-control', 'type' => 'color', 'size' => '5', 'value' => $row->footer1_color);
          echo form_input($footer1_color);
          echo form_error('footer1_color');
        ?>
      </div>
      <div class="form-group">
        <?php 
          echo form_label('Footer 2', 'footer2_color'); 
          $footer2_color = array('name' => 'footer2_color', 'class' => 'form-control', 'type' => 'color', 'size' => '5', 'value' => $row->footer2_color);
          echo form_input($footer2_color);
          echo form_error('footer2_color');
        ?>
      </div> 
        <?php
          $kembali = array('type' => 'button', 'onclick' => 'history.go(-1);', 'class' => 'btn btn-default');
        echo form_submit($kembali,'Kembali');
        echo " ";
        $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary btn-sm');
        echo form_submit($btn,'Simpan');
        echo form_close();
      }
      ?>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="pagebuilder" aria-labelledBy="profile-tab">
    <?php
    foreach($page_builder->result() as $row){
    echo $editor; 
    echo form_open_multipart('markaz_admin/page_builder/'.$row->id_page_builder);
    ?>
    <br />
    <div class="form-group">
      <?php 
  	    echo form_label('Status Slide', 'status_slide');
  	 ?>
    <select name="status_slide" class="form-control">
      <option value="<?php echo $row->status_slide; ?>"><?php echo $row->status_slide; ?></option>
      <option value="ON">ON</option>
      <option value="OFF">OFF</option>
    </select> 
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Status Perkenalan', 'status_perkenalan');
     ?>
    <select name="status_perkenalan" class="form-control">
      <option value="<?php echo $row->status_perkenalan; ?>"><?php echo $row->status_perkenalan; ?></option>
      <option value="ON">ON</option>
      <option value="OFF">OFF</option>
    </select> 
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Judul Perkenalan', 'judul_perkenalan'); 
        $judul_perkenalan = array('name' => 'judul_perkenalan', 'class' => 'form-control input-sm', 'rows' => '3', 'placeholder' => 'Tulis Judul Perkenalan', 'value' => $row->judul_perkenalan);
        echo form_input($judul_perkenalan);
      ?>
    </div>
    <div class="form-group">
      <?php 
  	    echo form_label('Deskripsi Perkenalan', 'desc_perkenalan'); 
  	    $desc_perkenalan = array('name' => 'desc_perkenalan', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Deskripsi Perkenalan', 'value' => $row->desc_perkenalan);
  	    echo form_textarea($desc_perkenalan);
  	  ?>
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Status Our Value', 'status_our_value');
     ?>
    <select name="status_our_value" class="form-control">
      <option value="<?php echo $row->status_our_value; ?>"><?php echo $row->status_our_value; ?></option>
      <option value="ON">ON</option>
      <option value="OFF">OFF</option>
    </select> 
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Judul Our Value', 'judul_our_value'); 
        $judul_our_value = array('name' => 'judul_our_value', 'class' => 'form-control input-sm', 'rows' => '3', 'placeholder' => 'Tulis Judul Our Value', 'value' => $row->judul_our_value);
        echo form_input($judul_our_value);
      ?>
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Deskripsi Our Value', 'desc_our_value'); 
        $desc_our_value = array('name' => 'desc_our_value', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Deskripsi Our Value', 'value' => $row->desc_our_value);
        echo form_textarea($desc_our_value);
      ?>
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Status Whyme', 'status_whyme');
     ?>
    <select name="status_whyme" class="form-control">
      <option value="<?php echo $row->status_whyme; ?>"><?php echo $row->status_whyme; ?></option>
      <option value="ON">ON</option>
      <option value="OFF">OFF</option>
    </select> 
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Judul Whyme', 'judul_whyme'); 
        $judul_whyme = array('name' => 'judul_whyme', 'class' => 'form-control input-sm', 'rows' => '3', 'placeholder' => 'Tulis Judul Whyme', 'value' => $row->judul_whyme);
        echo form_input($judul_whyme);
      ?>
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Deskripsi Whyme', 'desc_whyme'); 
        $desc_whyme = array('name' => 'desc_whyme', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Deskripsi Whyme', 'value' => $row->desc_whyme);
        echo form_textarea($desc_whyme);
      ?>
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Status Portofolio', 'status_portofolio');
     ?>
    <select name="status_portofolio" class="form-control">
      <option value="<?php echo $row->status_portofolio; ?>"><?php echo $row->status_portofolio; ?></option>
      <option value="ON">ON</option>
      <option value="OFF">OFF</option>
    </select> 
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Judul Portofolio', 'judul_portofolio'); 
        $judul_portofolio = array('name' => 'judul_portofolio', 'class' => 'form-control input-sm', 'rows' => '3', 'placeholder' => 'Tulis Judul Portofolio', 'value' => $row->judul_portofolio);
        echo form_input($judul_portofolio);
      ?>
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Deskripsi Portofolio', 'desc_portofolio'); 
        $desc_portofolio = array('name' => 'desc_portofolio', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Deskripsi Portofolio', 'value' => $row->desc_portofolio);
        echo form_textarea($desc_portofolio);
      ?>
    </div>
      <div class="form-group">
      <?php 
        echo form_label('Status Testimoni', 'status_testimoni');
     ?>
    <select name="status_testimoni" class="form-control">
      <option value="<?php echo $row->status_testimoni; ?>"><?php echo $row->status_testimoni; ?></option>
      <option value="ON">ON</option>
      <option value="OFF">OFF</option>
    </select> 
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Judul Testimoni', 'judul_testimoni'); 
        $judul_testimoni = array('name' => 'judul_testimoni', 'class' => 'form-control input-sm', 'rows' => '3', 'placeholder' => 'Tulis Judul Testimoni', 'value' => $row->judul_testimoni);
        echo form_input($judul_testimoni);
      ?>
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Deskripsi Testimoni', 'desc_testimoni'); 
        $desc_testimoni = array('name' => 'desc_testimoni', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Deskripsi Testimoni', 'value' => $row->desc_testimoni);
        echo form_textarea($desc_testimoni);
      ?>
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Status Product', 'status_product');
     ?>
    <select name="status_product" class="form-control">
      <option value="<?php echo $row->status_product; ?>"><?php echo $row->status_product; ?></option>
      <option value="ON">ON</option>
      <option value="OFF">OFF</option>
    </select> 
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Judul Product', 'judul_product'); 
        $judul_product = array('name' => 'judul_product', 'class' => 'form-control input-sm', 'rows' => '3', 'placeholder' => 'Tulis Judul Whyme', 'value' => $row->judul_product);
        echo form_input($judul_product);
      ?>
    </div>  
    <div class="form-group">
      <?php 
        echo form_label('Deskripsi Product', 'desc_product'); 
        $desc_product = array('name' => 'desc_product', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Deskripsi Product', 'value' => $row->desc_product);
        echo form_textarea($desc_product);
      ?>
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Status Contact', 'status_contact');
     ?>
    <select name="status_contact" class="form-control">
      <option value="<?php echo $row->status_contact; ?>"><?php echo $row->status_contact; ?></option>
      <option value="ON">ON</option>
      <option value="OFF">OFF</option>
    </select> 
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Judul Contact', 'judul_contact'); 
        $judul_contact = array('name' => 'judul_contact', 'class' => 'form-control input-sm', 'rows' => '3', 'placeholder' => 'Tulis Judul Contact', 'value' => $row->judul_contact);
        echo form_input($judul_contact);
      ?>
    </div>
    <div class="form-group">
      <?php 
        echo form_label('Deskripsi Contact', 'desc_contact'); 
        $desc_contact = array('name' => 'desc_contact', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Deskripsi Contact', 'value' => $row->desc_whyme);
        echo form_textarea($desc_contact);
      ?>
    </div>
    
    <?php
    $kembali = array('type' => 'button', 'onclick' => 'history.go(-1);', 'class' => 'btn btn-default');
    echo form_submit($kembali,'Kembali');
    echo " ";
    $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary btn-sm');
    echo form_submit($btn,'Simpan');
  
    echo form_close();
    }
    ?>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="instansi" aria-labelledBy="profile-tab">
    <br />
      <?php
      
      foreach($instansi->result() as $row) {
      echo $editor; 
      echo form_open_multipart('markaz_admin/ubah_instansi/'.$row->id_instansi);
      ?>
      <div class="form-group">
        <?php 
          echo form_label('Nama Instansi', 'nama_instansi');
          $nama_instansi = array('name' => 'nama_instansi', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Instansi', 'value' => $row->nama_instansi);
          echo form_input($nama_instansi);
        ?>
      </div>
      <div class="form-group">
        <?php 
          echo form_label('Tagline Instansi', 'tagline_instansi');
          $tagline_instansi = array('name' => 'tagline_instansi', 'class' => 'form-control', 'placeholder' => 'Masukan Tagline Instansi', 'value' => $row->tagline_instansi);
          echo form_input($tagline_instansi);
        ?>
      </div>
      <div class="form-group">
        <?php 
          echo form_label('About Instansi', 'about_instansi'); 
          $about_instansi = array('name' => 'about_instansi', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis About Instansi', 'value' => $row->about_instansi);
          echo form_textarea($about_instansi);
        ?>
      </div>
      <div class="form-group">
        <?php 
          echo form_label('Visi Instansi', 'visi_instansi'); 
          $visi_instansi = array('name' => 'visi_instansi', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Visi Instansi', 'value' => $row->visi_instansi);
          echo form_textarea($visi_instansi);
        ?>
      </div>
      <div class="form-group">
        <?php 
          echo form_label('Misi Instansi', 'misi_instansi'); 
          $misi_instansi = array('name' => 'misi_instansi', 'class' => 'form-control input-sm', 'id' => 'markaz_editor', 'rows' => '3', 'placeholder' => 'Tulis Misi Instansi', 'value' => $row->misi_instansi);
          echo form_textarea($misi_instansi);
        ?>
      </div>
      <div class="form-group">
        <?php 
          echo form_label('Alamat Instansi', 'alamat_instansi'); 
          $alamat_instansi = array('name' => 'alamat_instansi', 'class' => 'form-control input-sm', 'rows' => '3', 'placeholder' => 'Tulis Alamat Instansi', 'value' => $row->alamat_instansi);
          echo form_textarea($alamat_instansi);
        ?>
      </div>
      <div class="form-group">
        <?php 
          echo form_label('Email Instansi', 'email_instansi');
          $email_instansi = array('name' => 'email_instansi', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Masukan Email Instansi', 'value' => $row->email_instansi);
          echo form_input($email_instansi);
        ?>
      </div>
      <div class="form-group">
        <?php 
          echo form_label('No Telp', 'no_hp');
          $no_hp = array('name' => 'no_hp', 'class' => 'form-control', 'placeholder' => 'Masukan No Telp Instansi', 'value' => $row->no_hp);
          echo form_input($no_hp);
        ?>
      </div>
      <div class="form-group">
        <img class="media-object img-rounded" src="<?php echo base_url();?>foto/foto_instansi/<?php echo $row->favicon_instansi; ?>" width="50" />
        <br />
        <?php
        echo form_label('Ganti Favicon', 'favicon');
        echo form_upload('favicon_instansi');
        ?>
        <small class="text-muted" style="color:red;">* Ukuran favicon maksimal 50 px x 50 px.</small>
      </div>
      <div class="form-group">
        <img class="media-object img-rounded" src="<?php echo base_url();?>foto/foto_instansi/<?php echo $row->logo_instansi; ?>" width="130" />
        <br />
        <?php
        echo form_label('Ganti Logo', 'favicon');
        echo form_upload('logo_instansi');
        ?>
        <small class="text-muted" style="color:red;">* Ukuran logo maksimal 151 px x 50 px.</small>
      </div>
    
      <?php
      $kembali = array('type' => 'button', 'onclick' => 'history.go(-1);', 'class' => 'btn btn-default');
      echo form_submit($kembali,'Kembali');
      echo " ";
      $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary btn-sm');
      echo form_submit($btn,'Simpan');
    
      echo form_close();
      } 
      ?>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="blokfooter" aria-labelledBy="profile-tab">
    <br />
      <?php
      echo form_open_multipart('markaz_admin/ubah_blok/1');
      
      foreach ($blok_footer->result() as $row) {

        if($row->blok1 == 111){
          $blok1 = "Second Menu";
        } else if($row->blok1 == 112){
          $blok1 = "Social Media";
        } else if($row->blok1 == 113){
          $blok1 = "Statistik";
        } else { 
          $blok1 = "Tidak ditemukan data";
        }

        if($row->blok2 == 111){
          $blok2 = "Second Menu";
        } else if($row->blok2 == 112){
          $blok2 = "Social Media";
        } else if($row->blok2 == 113){
          $blok2 = "Statistik";
        } else { 
          $blok2 = "Tidak ditemukan data";
        }

        if($row->blok3 == 111){
          $blok3 = "Second Menu";
        } else if($row->blok3 == 112){
          $blok3 = "Social Media";
        } else if($row->blok3 == 113){
          $blok3 = "Statistik";
        } else { 
          $blok3 = "Tidak ditemukan data";
        }

        if($row->blok4 == 111){
          $blok4 = "Second Menu";
        } else if($row->blok4 == 112){
          $blok4 = "Social Media";
        } else if($row->blok4 == 113){
          $blok4 = "Statistik";
        } else { 
          $blok4 = "Tidak ditemukan data";
        }
        
      ?>
      <div class="form-group">
        <?php 
          echo form_label('Nama Blok 1', 'nama_blok1');
          $nama_blok1 = array('name' => 'nama_blok1', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Blok', 'value' => $row->nama_blok1);
          echo form_input($nama_blok1);
        ?>
      </div>
      <div class="form-group">
          <?php 
          echo form_label('Isi Blok 1', 'blok1');
          ?>
          <select name="blok1" class="form-control">
          <option value="<?php echo $row->blok1; ?>"><?php echo $blok1; ?></option>
          <?php
            foreach ($blok->result() as $rows_blok) {
              ?>
              <option value="<?php echo $rows_blok->kode_blok; ?>"><?php echo $rows_blok->nama_blok; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
        <?php 
          echo form_label('Nama Blok 2', 'nama_blok1');
          $nama_blok2 = array('name' => 'nama_blok2', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Blok', 'value' => $row->nama_blok2);
          echo form_input($nama_blok2);
        ?>
        </div>
        <div class="form-group">
          <?php 
          echo form_label('Isi Blok 2', 'blok2');
          ?>
          <select name="blok2" class="form-control">
          <option value="<?php echo $row->blok2; ?>"><?php echo $blok2; ?></option>
          <?php
            foreach ($blok->result() as $rows_blok) {
              ?>
              <option value="<?php echo $rows_blok->kode_blok; ?>"><?php echo $rows_blok->nama_blok; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
        <?php 
          echo form_label('Nama Blok 3', 'nama_blok3');
          $nama_blok3 = array('name' => 'nama_blok3', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Blok', 'value' => $row->nama_blok3);
          echo form_input($nama_blok3);
        ?>
        </div>
        <div class="form-group">
          <?php 
          echo form_label('Isi Blok 3', 'blok3');
          ?>
          <select name="blok3" class="form-control">
          <option value="<?php echo $row->blok1; ?>"><?php echo $blok3; ?></option>
          <?php
            foreach ($blok->result() as $rows_blok) {
              ?>
              <option value="<?php echo $rows_blok->kode_blok; ?>"><?php echo $rows_blok->nama_blok; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
        <?php 
          echo form_label('Nama Blok 4', 'nama_blok4');
          $nama_blok4 = array('name' => 'nama_blok4', 'class' => 'form-control', 'placeholder' => 'Masukan Nama Blok', 'value' => $row->nama_blok4);
          echo form_input($nama_blok4);
        ?>
      </div>
        <div class="form-group">
          <?php 
          echo form_label('Isi Blok 4', 'blok4');
          ?>
          <select name="blok4" class="form-control">
          <option value="<?php echo $row->blok4; ?>"><?php echo $blok4; ?></option>
          <?php
            foreach ($blok->result() as $rows_blok) {
              ?>
              <option value="<?php echo $rows_blok->kode_blok; ?>"><?php echo $rows_blok->nama_blok; ?></option>
            <?php } ?>
          </select>
        </div>
      <?php
      $kembali = array('type' => 'button', 'onclick' => 'history.go(-1);', 'class' => 'btn btn-default');
      echo form_submit($kembali,'Kembali');
      echo " ";
      $btn = array('type' => 'submit', 'name' => 'simpan', 'class' => 'btn btn-primary btn-sm');
      echo form_submit($btn,'Simpan');
    
      echo form_close();
      } 
      ?>   
    </div>

  </div>
</div>