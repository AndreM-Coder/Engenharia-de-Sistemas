# Engenharia-de-Sistemas
Descrição do Projeto
O V3ndas.pt foi desenvolvido para facilitar a venda de produtos, fornecendo assim uma forma fácil a pequenos comerciantes ou particulares de conseguirem vender produtos online de forma segura.
A principal vantagem deste sistema é que tem processadores de pagamento implementados que permite aos vendedores receberem os pagamentos diretos nas suas contas de forma automatizada.
Por exemplo, pode configurar a sua conta paypal e com isso recebe os pagamentos diretamente na sua conta paypal eliminando assim intermediários, alem de ter informação automatizada de todos os produtos que foram vendidos e quais os que realmente foram pagos.
Para os compradores temos a oferta de variados produtos que devem ter preços abaixo do mercado porque retira dos vendedores o custo de terem um loja online dedicada

Instalar Script:

- Fazer download dos ficheiros do repositório
- Renomear o ficheiro .env.example para .env
- Alterar os dados da base de dados
<pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=
</pre>
- Instalar as dependências do projeto, abrir linha de comandos na pasta do projeto e correr
<pre>
composer installer
</pre>
- Criar as tabelas e popular com os dados necessários
<pre>
php artisan key:generate
php artisan migrate
php artisan db:seed
</pre>
- Executar este código para usar o servidor embutido da Laravel e aceder com http://localhost:8000
<pre>
php artisan serve
</pre>
- Login
user@user.com
user
