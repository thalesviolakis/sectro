<?php include "header.php"; ?>
<!-- Page content wrapper-->
<div id="page-content-wrapper">
    <!-- Page content-->
    <div class="container-fluid">
        <h1 class="mt-4">Novo Cliente</h1>
        <!--
        <form id="formulario" method="post" action="action_cadastrar.php">
            <label for="billing_nomecompleto">Nome: <input type="text" name="billing_nomecompleto" /></label>
            <label for="billing_email">Email: <input type="email" name="billing_email" /></label>
            <input type="submit" value="Salvar" />
        </form>
-->
        <form method="post" action="action_cadastrar.php" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Nome Completo</label>
                    <input type="text" class="form-control" id="billing_nomecompleto" name="billing_nomecompleto" placeholder="Nome" value="" required>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, informe um Nome Completo
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">CPF</label>
                    <input type="text" mascara-js="cpf" class="form-control" id="billing_cpf" name="billing_cpf" placeholder="000.000.000-00" required>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, informe um CPF válido
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02c">E-mail</label>
                    <input type="email" class="form-control" id="billing_email" name="billing_email" placeholder="email@example.com" required>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, informe um E-mail válido
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02t">Celular</label>
                    <input type="tel" mascara-js="tel" class="form-control" id="billing_telefone" name="billing_telefone" placeholder="(11) 99999-9999" required>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, informe um Celular Válido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">CEP</label>
                    <input type="text" class="form-control" id="billing_cep" name="billing_cep" maxlength="8" placeholder="CEP" required>
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
                    <input type="text" class="form-control" id="billing_cidade" name="billing_cidade" placeholder="Cidade" required>
                    <div class="invalid-feedback">
                        Por favor, informe uma cidade válida.
                    </div>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Estado</label>
                    <input type="text" class="form-control" id="billing_estado" name="billing_estado" placeholder="Estado" required>
                    <div class="invalid-feedback">
                        Por favor, informe um estado válido.
                    </div>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Bairro</label>
                    <input type="text" class="form-control" id="billing_bairro" name="billing_bairro" placeholder="Bairro" required>
                    <div class="invalid-feedback">
                        Por favor, informe um bairro válido.
                    </div>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Endereço (Rua)</label>
                    <input type="text" class="form-control" id="billing_rua" name="billing_rua" placeholder="Rua" required>
                    <div class="invalid-feedback">
                        Por favor, informe uma rua válida.
                    </div>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Número</label>
                    <input type="text" class="form-control" id="billing_numero" name="billing_numero" placeholder="Numero" required>
                    <div class="invalid-feedback">
                        Por favor, informe um numero válido.
                    </div>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Andar</label>
                    <input type="text" class="form-control" id="billing_complemento_andar" name="billing_complemento_andar" placeholder="Andar" required>
                    <div class="invalid-feedback">
                        Por favor, informe um Andar ou Casa
                    </div>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Complemento Apartamento</label>
                    <input type="text" class="form-control" id="billing_complemento_apartamento" name="billing_complemento_apartamento" placeholder="Complemento" required>
                    <div class="invalid-feedback">
                        Por favor, informe um complemento válido
                    </div>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="validationCustom11">Observacoes</label>
                    <textarea class="form-control" id="billing_observacoes" name="billing_observacoes"></textarea>
                </div>
            </div>

    </div>
    <button class="btn btn-primary" type="submit" value="Salvar">Enviar</button>
    </form>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
                var forms = document.getElementsByClassName('needs-validation');
                // Faz um loop neles e evita o envio
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            function buscarCEP() {

                /*
                Documentacao
                https://viacep.com.br/
                */

                const cep = document.getElementById('billing_cep').value.replace(/\D/g, '');
                const url = "https://viacep.com.br/ws/" + cep + "/json";

                if (cep.length !== 8)
                    return;

                const parametros = {};
                const fetchResponsePromise = fetch(url, parametros)
                    .then(response => response.json())
                    .then(data => {
                        if (data.erro) {
                            console.log(data);
                        } else {
                            preencherCamposEndereco(data);
                            console.log(data);
                        }
                    })
                    .catch(error => console.error('Erro na requisição:', error));
            }

            function preencherCamposEndereco(data) {
                document.getElementById('billing_cidade').value = data.localidade;
                document.getElementById('billing_estado').value = data.uf;
                document.getElementById('billing_bairro').value = data.bairro;
                document.getElementById('billing_rua').value = data.logradouro;
            }

            document.getElementById('billing_cep').addEventListener('input', function() {
                buscarCEP();
            });


            const $inputcel = document.querySelector('[mascara-js="tel"]')
            $inputcel.addEventListener('input', telefoneInput, false)

            const $inputcpf = document.querySelector('[mascara-js="cpf"]')
            $inputcpf.addEventListener('input', cpfInput, false)

            function telefoneInput(e) {
                e.target.value = mascaraTelefone(e.target.value)
            }

            function cpfInput(e) {
                e.target.value = mascaraCPF(e.target.value)
            }

            function mascaraTelefone(data) {
                return data.replace(/\D/g, '')
                    .replace(/^(\d)/, '($1')
                    .replace(/^(\(\d{2})(\d)/, '$1) $2')
                    .replace(/(\d{4})(\d{1,5})/, '$1-$2')
                    .replace(/(-\d{5})\d+?$/, '$1');
            }

            function mascaraCPF(data) {
                return data.replace(/\D/g, '')
                    .replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
            }

        });
    </script>


</div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>