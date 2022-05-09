<div class="wrap">
    <h1 class="wp-heading-inline">Configurações do Redirecionador Back/Exit Plus</h1>
    <form method="POST">

        <?php wp_nonce_field('ber_nonce'); ?>

        <h2 class="wp-heading-inline">Configurações gerais</h2>

        <table class="form-table" id="general_settings">
            <tr>
                <th scope="row">
                    <label for="ber_default_url">URL padrão para redirecionamento</label>
                </th>
                <td>
                    <input name="ber_default_url" type="url" id="ber_default_url" placeholder="https://urldosite.com.br" class="regular-text ltr" value="<?php echo $ber_default_url; ?>" required>
                </td>
            </tr>
        </table>

        <hr>

        <h2 class="wp-heading-inline">Configurações do redirecionamento na homepage</h2>

        <table class="form-table" id="home_settings">
            <tr>
                <th scope="row" style="width: 20%;">
                    <label for="ber_home_redirect_status">Ativar redirecionamento na Homepage</label>
                </th>
                <td>
                    <label for="ber_home_redirect_true">
                        <input type="radio" name="ber_home_redirect_status" id="ber_home_redirect_true" value="true" <?php echo $ber_home_redirect_status == 'true' ? 'checked' : ''; ?>>
                        Sim
                    </label>
                    <label for="ber_home_redirect_false" style="margin-left:15px;">
                        <input type="radio" name="ber_home_redirect_status" id="ber_home_redirect_false" value="false" <?php echo $ber_home_redirect_status == 'false' ? 'checked' : ''; ?>>
                        Não
                    </label>
                </td>
            </tr>
            <tr>
                <th scope="row" style="width: 20%;">
                    <label for="ber_home_redirect_event">Disparar redirecionamento na Homepage quando:</label>
                </th>
                <td>
                    <label for="ber_home_redirect_event_onback">
                        <input type="checkbox" name="ber_home_redirect_event[]" id="ber_home_redirect_event_onback" value="back"
                            <?php echo in_array("back", $ber_home_redirect_event) ? 'checked' : ''; ?>>
                        O botão voltar for clicado
                    </label>
                    <label for="ber_home_redirect_event_onexitintent" style="margin-left:15px;">
                        <input type="checkbox" name="ber_home_redirect_event[]" id="ber_home_redirect_event_onexitintent" value="exit_intent"
                            <?php echo in_array("exit_intent", $ber_home_redirect_event) ? 'checked' : ''; ?>>
                        Quando for detectada uma exit intent
                    </label>
                </td>
            </tr>
            <tr>
                <th scope="row" style="width: 20%;">
                    <label for="ber_home_redirect_type">Tipo de redirecionamento na Homepage</label>
                </th>
                <td>
                    <select name="ber_home_redirect_type" id="ber_home_redirect_type">
                        <option value="default" <?php echo $ber_home_redirect_type == 'default' ? 'selected' : ''; ?> >URL Padrão</option>
                        <option value="custom" <?php echo $ber_home_redirect_type == 'custom' ? 'selected' : ''; ?> >Endereço customizado</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="ber_home_redirect_url">URL para redirecionamento customizado da Homepage</label>
                </th>
                <td>
                    <input name="ber_home_redirect_url" type="url" id="ber_home_redirect_url" placeholder="https://urldosite.com.br" class="regular-text ltr" value="<?php echo $ber_home_redirect_url; ?>">
                </td>
            </tr>
        </table>

        <p>
            <input type="submit" value="Pronto" class="button button-primary button-large">
        </p>

    </form>

</div>