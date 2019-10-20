<div class="col-md-12">
    <h4 class="m-b-lg">
        Yeni Kategori Ekle
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <form action="<?php echo base_url("kategori/save"); ?>" method="post">
                    <div class="form-group">

                        <label>Kategori Adı</label>
                        <input  class="form-control" name="kategori_adi">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("kategori_adi"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("kategori"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>

            </div>
        </div>

    </div>
</div>

