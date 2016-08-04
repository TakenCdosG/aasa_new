<div class="col-lg-12">
    <div class="mod-info">
        <div class="titulo-box">
            <h2><span class="glyphicon glyphicon-signal"></span><span class="break"></span><?php echo $params['title']; ?></h2>
            <div class="botones">
                <a href="<?php echo $params['edit_link']; ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span> <span class="txt-btn">Edit Registration</span></a>
            </div>
        </div>
        <div class="content-box">
            <div class="img-left">
                <?php echo $params['image_event']; ?>
                <!--
                <a class="btn btn-danger btn-xs" href="http://etc-visitas.dev/usuario/aviso/vivienda/2690/editar#block-profile-etc-profile-etc-agregar-foto-video">Edit Conference</a>
                -->
            </div>
            <div class="info-right">
                <p><b>Event Date:</b> <?php echo $params['date_event']; ?> </p>
                <p><b>Event Location:</b> <?php echo $params['date_location']; ?> </p>
                <p><b>Event Description:</b> <?php echo $params['description']; ?></p>
                <hr>
                <h3>General Sessions</h3>
                <p style="margin: 5px 0px;"><b>Registration type:</b> <?php echo $params["general_sessions"]->title; ?> - <b>$<?php echo floatval($params["general_sessions"]->sell_price); ?>.00</b> </p>
                <p style="margin: 5px 0px;"><b>Registration Date:</b>  <?php echo date("j F Y", $params["general_sessions"]->changed); ?>  </p>
                <?php $general_sessions_status = ""; ?> 
                <?php if ($params["general_sessions"]->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                    <?php $general_sessions_status = "Confirmed"; ?> 
                <?php elseif ($params["general_sessions"]->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                    <?php $general_sessions_status = " Pending Confirmation."; ?>
                <?php endif; ?> 
                <p style="margin: 5px 0px;"><b>Registration Status:</b>  <?php echo $general_sessions_status; ?></p>
                <?php $general_sessions_payment_method = ""; ?> 
                <?php if ($params["general_sessions"]->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                    <?php $general_sessions_payment_method = "Credit Card"; ?>
                <?php elseif ($params["general_sessions"]->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                    <?php $general_sessions_payment_method = "Mail in Check"; ?>
                <?php endif; ?>
                <p style="margin: 5px 0px 15px 0px;"><b>Registration Payment Method:</b>  <?php echo $general_sessions_payment_method; ?>  </p>

                <div class="alert alert-warning">
                    <p><h3>Add-ons</h3></p>
                    <hr>
                    <table class="table">
                        <thead><tr><th>Product</th><th>Date</th><th>Total</th><th>Status</th><th>Payment Method</th></tr></thead>
                        <tbody>
                            <?php foreach ($params['addons'] as $key => $node): ?>
                                <tr>
                                    <td>
                                        <small><?php echo $node->title; ?></small>
                                    </td>
                                    <td>
                                        <a href="/conference/<?php echo $params['nid']; ?>/registration/<?php echo $params['sid']; ?>/edit">
                                            <small> <?php echo date("j F Y", $node->changed); ?></small>
                                        </a>
                                    </td>
                                    <td>
                                        <small>
                                            <b>$<?php echo number_format((float) $node->sell_price, 2, '.', ''); ?></b>
                                        </small>
                                    </td>
                                    <td>
                                        <?php $node_status = ""; ?> 
                                        <?php if ($node->field_confirmed['und'][0]['value'] == "confirmed"): ?>
                                            <?php $node_status = "Confirmed"; ?> 
                                        <?php elseif ($node->field_confirmed['und'][0]['value'] == "not-confirmed"): ?>
                                            <?php if ($node->field_transaction_type['und'][0]['value'] == "remove"): ?>
                                                <?php $node_status = "Pending Confirmation the remove request."; ?>
                                            <?php else: ?>
                                                <?php $node_status = "Pending Confirmation."; ?>
                                            <?php endif; ?>

                                        <?php endif; ?>
                                        <small><?php echo $node_status; ?></small>
                                    </td>
                                    <td>
                                        <?php $node_payment_method = ""; ?> 
                                        <?php if ($node->field_payment_method['und'][0]['value'] == "credit_card"): ?>
                                            <?php $node_payment_method = "Credit Card"; ?>
                                        <?php elseif ($node->field_payment_method['und'][0]['value'] == "mail_check"): ?>
                                            <?php $node_payment_method = "Mail in Check"; ?>
                                        <?php endif; ?>
                                        <small><?php echo $node_payment_method; ?></small>
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