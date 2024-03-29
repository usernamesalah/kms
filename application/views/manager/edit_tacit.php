<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Edit Tacit</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn btn-sm green dropdown-toggle" href="<?= base_url('admin/tacit') ?>" > <i class="fa fa-angle-left"></i> Kembali
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <?= form_open('admin/edit_tacit/'.$tacit->id_tacit, ['role' => 'form']) ?>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label>Judul Tacit</label>
                                                <input type="text" class="form-control" placeholder="masukan judul tacit" name="judul" value="<?= $tacit->judul_tacit?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Masalah</label>
                                                <textarea name="masalah" class="form-control" rows="5"><?= $tacit->masalah?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Solusi</label>
                                                <textarea name="solusi" class="form-control" rows="5"><?= $tacit->solusi?></textarea>
                                            </div>

                                        </div>
                                        <div class="form-actions">
                                            <input type="submit" class="btn blue" name='submit'>
                                            <button type="reset" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
    </div>
</div>