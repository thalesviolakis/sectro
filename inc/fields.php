<div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nome Completo</label>
        <input type="text" class="form-control" id="billing_nomecompleto" name="billing_nomecompleto" placeholder="Nome" value="<?= isset($clientes["billing_nomecompleto"]) ? $clientes["billing_nomecompleto"] : "" ?>" required>
        <div class=" valid-feedback">
            Tudo certo!
        </div>
        <div class="invalid-feedback">
            Por favor, informe um Nome Completo
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationCustom01">CPF</label>
        <input type="text" mascara-js="cpf" class="form-control" id="billing_cpf" name="billing_cpf" placeholder="000.000.000-00" value="<?= isset($clientes["billing_cpf"]) ? $clientes["billing_cpf"] : "" ?>" required>
        <div class="valid-feedback">
            Tudo certo!
        </div>
        <div class="invalid-feedback">
            Por favor, informe um CPF válido
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationCustom02c">E-mail</label>
        <input type="email" class="form-control" id="billing_email" name="billing_email" placeholder="email@example.com" value="<?= isset($clientes["billing_email"]) ? $clientes["billing_email"] : "" ?>" required>
        <div class="valid-feedback">
            Tudo certo!
        </div>
        <div class="invalid-feedback">
            Por favor, informe um E-mail válido
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationCustom02t">Celular</label>
        <input type="tel" mascara-js="tel" class="form-control" id="billing_telefone" name="billing_telefone" placeholder="(11) 99999-9999" value="<?= isset($clientes["billing_telefone"]) ? $clientes["billing_telefone"] : "" ?>" required>
        <div class="valid-feedback">
            Tudo certo!
        </div>
        <div class="invalid-feedback">
            Por favor, informe um Celular Válido
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationCustom05">CEP</label>
        <input type="text" class="form-control" id="billing_cep" name="billing_cep" maxlength="8" placeholder="CEP" value="<?= isset($clientes["billing_cep"]) ? $clientes["billing_cep"] : "" ?>" required>
        <div class="invalid-feedback">
            Por favor, informe um CEP válido.
        </div>
        <div class="valid-feedback">
            Tudo certo!
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-3 mb-3">
        <label for="validationCustom03">Cidade</label>
        <input type="text" class="form-control" id="billing_cidade" name="billing_cidade" placeholder="Cidade" value="<?= isset($clientes["billing_cidade"]) ? $clientes["billing_cidade"] : "" ?>" required>
        <div class="invalid-feedback">
            Por favor, informe uma cidade válida.
        </div>
        <div class="valid-feedback">
            Tudo certo!
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationCustom04">Estado</label>
        <input type="text" class="form-control" id="billing_estado" name="billing_estado" placeholder="Estado" value="<?= isset($clientes["billing_estado"]) ? $clientes["billing_estado"] : "" ?>" required>
        <div class="invalid-feedback">
            Por favor, informe um estado válido.
        </div>
        <div class="valid-feedback">
            Tudo certo!
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationCustom04">Bairro</label>
        <input type="text" class="form-control" id="billing_bairro" name="billing_bairro" placeholder="Bairro" value="<?= isset($clientes["billing_bairro"]) ? $clientes["billing_bairro"] : "" ?>" required>
        <div class="invalid-feedback">
            Por favor, informe um bairro válido.
        </div>
        <div class="valid-feedback">
            Tudo certo!
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationCustom04">Endereço (Rua)</label>
        <input type="text" class="form-control" id="billing_rua" name="billing_rua" placeholder="Rua" value="<?= isset($clientes["billing_rua"]) ? $clientes["billing_rua"] : "" ?>" required>
        <div class="invalid-feedback">
            Por favor, informe uma rua válida.
        </div>
        <div class="valid-feedback">
            Tudo certo!
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="validationCustom04">Número</label>
        <input type="text" class="form-control" id="billing_numero" name="billing_numero" placeholder="Numero" value="<?= isset($clientes["billing_numero"]) ? $clientes["billing_numero"] : "" ?>" required>
        <div class="invalid-feedback">
            Por favor, informe um numero válido.
        </div>
        <div class="valid-feedback">
            Tudo certo!
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="validationCustom04">Andar</label>
        <input type="text" class="form-control" id="billing_complemento_andar" name="billing_complemento_andar" placeholder="Andar" value="<?= isset($clientes["billing_complemento_andar"]) ? $clientes["billing_complemento_andar"] : "" ?>" required>
        <div class="invalid-feedback">
            Por favor, informe um Andar ou Casa
        </div>
        <div class="valid-feedback">
            Tudo certo!
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="validationCustom04">Complemento Apartamento</label>
        <input type="text" class="form-control" id="billing_complemento_apartamento" name="billing_complemento_apartamento" placeholder="Complemento" value="<?= isset($clientes["billing_complemento_apartamento"]) ? $clientes["billing_complemento_apartamento"] : "" ?>" required>
        <div class="invalid-feedback">
            Por favor, informe um complemento válido
        </div>
        <div class="valid-feedback">
            Tudo certo!
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="validationCustom11">Observacoes</label>
        <textarea class="form-control" id="billing_observacoes" name="billing_observacoes" value="<?= isset($clientes["billing_observacoes"]) ? $clientes["billing_observacoes"] : "" ?>"></textarea>
    </div>
</div>

</div>