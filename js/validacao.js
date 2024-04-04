(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
        var forms = document.getElementsByClassName('needs-validation');
        // Faz um loop neles e evita o envio
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

document.addEventListener('DOMContentLoaded', function () {

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

    document.getElementById('billing_cep').addEventListener('input', function () {
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
            .replace(/(\d{4})(\d{1, 5})/, '$1-$2')
            .replace(/(-\d{5})\d+?$/, '$1');
    }

    function mascaraCPF(data) {
        return data.replace(/\D/g, '')
            .replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
    }

});