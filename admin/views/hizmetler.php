<?php include 'header.php'; ?>
    <div class="content-page rtl-page">

<div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Hizmetler</h4>
                     </div>
                  </div>
                  <div class="card-body">

   <table class="table table-striped table-bordered">
      <thead>
         <tr>
            <th>Hizmet ID</th>
            <th>Görsel</th>
            <th>Hizmet</th>
            <th>Son Güncelleme</th>
            <th></th>
         </tr>
      </thead>
        <tbody>
          <?php 
          
          foreach( $orders as $order ): 
             
             $id = $order["page_id"];            

              ?>
              <tr>
                 <td><?php echo $id; ?></td>
                                                   <td class="text-center"><img class="rounded img-fluid avatar-40" src="<?php if( $order["page_image"] ): echo $order["page_image"]; else: echo "admin/no-image.png"; endif;  ?>"  alt="profile"></td>

                 
                 <td><?php echo $order["page_name"]; ?> </td>
                 <td><?php echo $order["page_date"]; ?></td>
                 <td>
                     <a href="<?=site_url("admin/hizmet_detay/$id")?>"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i>Düzenle</button></a>
                                                           <a href="<?=site_url("admin/hizmet_detay/sil/$id")?>"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i>Sil</button></a>

                 </td>
              </tr>
            <?php endforeach; ?>
        </tbody>
   </table>
  
</div></div></div></div></div>


<?php include 'footer.php'; ?>
