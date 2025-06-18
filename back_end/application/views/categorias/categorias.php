<?php $this->load->view('layout/navbar'); ?>

<div class="page-wrap">
    <?php $this->load->view('layout/sidebar'); ?>
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="ik ik-grid bg-dark"></i>
                            <div class="d-inline">
                                <h5><?php echo $titulo; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a data-toggle="tooltip" data-placement="bottom" title="Home"
                                        href="<?php echo base_url(); ?>"><i class="ik ik-home"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <?php if ($message = $this->session->flashdata('sucesso')): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert bg-success alert-success text-white alert-dismissible fade show" role="alert">
                            <strong><?php echo $message; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ik ik-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($message = $this->session->flashdata('error')): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert bg-danger alert-danger text-white alert-dismissible fade show" role="alert">
                            <strong><?php echo $message; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ik ik-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#insertcategoria">+ Novo</a></button>
                        </div>
                        <!----- Início do modal inserir !---->
                        <div class="modal fade" id="insertcategoria" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterLabel">Inserir Nova Categoria</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="forms-sample" action="<?php echo base_url('categorias/insert') ?>"
                                            method="post">
                                            <div class="form-group">
                                                <label for="Inputcate_descricao">Descrição da Categoria</label>
                                                <input type="text" class="form-control" id="Inputcate_descricao"
                                                    placeholder="Ex.: Bebidas, Sobremesas, Humburgers"
                                                    name="cate_descricao">
                                            </div>

                                            <button type="submit" class="btn btn-success mr-2">Salvar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----- Fim do modal inserir categorias !---->
                        <div class="card-body">
                            <table class="table data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Descrição</th>
                                        <th>Imagem</th>
                                        <th class="nosort text-right pr-25">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categorias as $categoria): ?>
                                        <!----- Início do modal edit !---->
                                        <div class="modal fade" id="editcategoria<?php echo $categoria->cate_id ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterLabel">Editar
                                                            Categoria</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="forms-sample"
                                                            action="<?php echo base_url('categorias/edit/') . $categoria->cate_id ?>"
                                                            method="post">
                                                            <div class="form-group">
                                                                <label for="Inputcate_descricao">Descrição da
                                                                    Categoria</label>
                                                                <input type="text" class="form-control"
                                                                    id="Inputcate_descricao"
                                                                    placeholder="Ex.: Bebidas, Sobremesas, Humburgers"
                                                                    name="cate_descricao"
                                                                    value="<?php echo $categoria->cate_descricao ?>">
                                                            </div>

                                                            <button type="submit"
                                                                class="btn btn-success mr-2">Salvar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!----- Fim do modal editar categorias !---->
                                        <!----- Início do modal upload Imagem !---->
                                        <div class="modal fade" id="uploadimagem<?php echo $categoria->cate_id ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterLabel">Enviar imagem
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="forms-sample"
                                                            action="<?php echo base_url('categorias/upload_imagem/').$categoria->cate_id ?>"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label>Enviar arquivo</label>
                                                                <input type="file" name="cate_imagem" class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text" class="form-control file-upload-info"
                                                                        disabled placeholder="Upload Image">
                                                                    <span class="input-group-append">
                                                                        <button class="file-upload-browse btn btn-primary"
                                                                            type="button">Enviar</button>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <button type="submit"
                                                                class="btn btn-success mr-2">Salvar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!----- Fim do modal upload Imagem !---->
                                        <!----- Início do modal delete !---->
                                            <div class="modal fade" id="deletecategoria<?php echo $categoria->cate_id ?>"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterLabel">Deletar
                                                                Categoria</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="forms-sample"
                                                                action="<?php echo base_url('categorias/delete/').$categoria->cate_id ?>"
                                                                method="post">
                                                                <div class="form-group">
                                                                    <label for="Inputcate_descricao">Descrição da
                                                                        Categoria</label>
                                                                    <input type="text" class="form-control"
                                                                        id="Inputcate_descricao"
                                                                        name="cate_descricao"
                                                                        readonly
                                                                        value="<?php echo $categoria->cate_descricao ?>">
                                                                </div>

                                                                <button type="submit"
                                                                    class="btn btn-danger mr-2">Deletar</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!----- Fim do modal deletar categorias !---->
                                        <tr>
                                            <td><?php echo $categoria->cate_id ?></td>
                                            <td><?php echo $categoria->cate_descricao ?></td>
                                            <td><?php 
                                                $path = 'uploads/img/categorias/'.$categoria->cate_id.'/'.$categoria->cate_imagem;
                                            ?>
                                            <img src="<?php echo $path?>" alt="" width="100" height="100">
                                            </td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#editcategoria<?php echo $categoria->cate_id ?>"><i
                                                        class="ik ik-edit-2"></i>
                                                    Editar</button>
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#uploadimagem<?php echo $categoria->cate_id ?>"><i
                                                        class="ik ik-upload"></i>Imagem</button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deletecategoria<?php echo $categoria->cate_id ?>"><i
                                                    class="ik ik-delete"></i>Deletar</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('layout/footer'); ?>
</div>