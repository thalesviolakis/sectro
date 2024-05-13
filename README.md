# sectro

O sistema utiliza um banco de dados MYSQL com uma tabela nomeada como CLIENTES

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billing_nomecompleto` varchar(255) DEFAULT NULL,
  `billing_cpf` varchar(20) DEFAULT NULL,
  `billing_email` varchar(255) DEFAULT NULL,
  `billing_telefone` varchar(15) DEFAULT NULL,
  `billing_cep` varchar(10) DEFAULT NULL,
  `billing_rua` varchar(255) DEFAULT NULL,
  `billing_estado` varchar(255) DEFAULT NULL,
  `billing_cidade` varchar(255) DEFAULT NULL,
  `billing_bairro` varchar(255) DEFAULT NULL,
  `billing_numero` varchar(10) DEFAULT NULL,
  `billing_complemento_andar` varchar(10) DEFAULT NULL,
  `billing_complemento_apartamento` varchar(255) DEFAULT NULL,
  `billing_observacoes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
