<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Novo Evento</h3>
            </div>
            <?php echo form_open('evento/add', array('id'=>'form-evento')); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-3">
                        <label for="data_inicio" class="control-label"><span class="text-danger">*</span>Data de
                            Início</label>
                        <div class="form-group">
                            <input type="text" name="data_inicio"
                                value="<?php echo $this->input->post('data_inicio'); ?>"
                                class="form-control" id="data_inicio" />
                            <span class="text-danger"><?php echo form_error('data_inicio');?></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="data_fim" class="control-label"><span class="text-danger">*</span>Data Fim</label>
                        <div class="form-group">
                            <input type="text" name="data_fim" value="<?php echo $this->input->post('data_fim'); ?>"
                                class="form-control" id="data_fim" />
                            <span class="text-danger"><?php echo form_error('data_fim');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="local" class="control-label"><span class="text-danger">*</span>Local do
                            Evento</label>
                        <div class="form-group">
                            <select id="local" name="local" class="form-control">
                                <option value="">Selecione</option>
                                <?php 
								    foreach($locais as $local) {
										echo '<option value="'.$local['id'].'" data-tipo="'.$local['id_tipo_local'].'">'.$local['nome'].' ('.$local['nome_tipo_local'].')</option>';
									}
								?>
                            </select>
                            <span class="text-danger"><?php echo form_error('local');?></span>
                        </div>
                    </div>
                    <div class="col-md-3" id="divQtdBeneficiados" style="display:none;">
                        <label for="quantidade_beneficiados" class="control-label">Quantidade de Crianças por Sala</label>
                        <div class="form-group">
                            <input type="text" name="quantidade_beneficiados"
                                value="<?php echo $this->input->post('quantidade_beneficiados'); ?>"
                                class="form-control" id="quantidade_beneficiados" value="50" />
                            <span class="text-danger"><?php echo form_error('quantidade_beneficiados');?></span>
                        </div>
                    </div>
                    <div class="col-md-3" id="divQtdResponsaveis" style="display:none;">
                        <label for="quantidade_responsaveis" class="control-label">Quantidade de Responsáveis por Sala
                            (Palestras)</label>
                        <div class="form-group">
                            <input type="text" name="quantidade_responsaveis"
                                value="<?php echo $this->input->post('quantidade_responsaveis'); ?>"
                                class="form-control" id="quantidade_responsaveis" value="0" />
                            <span class="text-danger"><?php echo form_error('quantidade_responsaveis');?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Salvar
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>