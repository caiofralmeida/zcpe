
Pode utilizar um campo input hidden com o nome MAX_FILE_SIZE no <form> para o browser entender o tamanho
limite do arquivo.

O upload só funciona se no <form> tiver a propriedade enctype="multipart/form-data" definida

userfile = <input type="file" />

$_FILES['userfile']['name']
O nome original do arquivo no computador do usuário.

$_FILES['userfile']['type']
O tipo mime do arquivo, se o browser deu esta informação. Um exemplo pode ser "image/gif".

$_FILES['userfile']['size']
O tamanho, em bytes, do arquivo.

$_FILES['userfile']['tmp_name']
O nome temporário do arquivo, como foi guardado no servidor.

$_FILES['userfile']['error']
O código de erro associado a este upload de arquivo.

upload_tmp_dir = pode especificar o local para fazer o upload do arquivo temporario

Códigos de erros em um upload
============

UPLOAD_ERR_OK
Valor: 0; não houve erro, o upload foi bem sucedido.

UPLOAD_ERR_INI_SIZE
Valor 1; O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.

UPLOAD_ERR_FORM_SIZE
Valor: 2; O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML.

UPLOAD_ERR_PARTIAL
Valor: 3; o upload do arquivo foi feito parcialmente.

UPLOAD_ERR_NO_FILE
Valor: 4; Não foi feito o upload do arquivo.
