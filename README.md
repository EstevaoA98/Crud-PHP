# Eventdev - Projeto de Gerenciamento de Eventos

Este projeto é um sistema web para gerenciamento de eventos, desenvolvido com Laravel, Composer, Vite e Bootstrap. Ele permite que os usuários realizem cadastro, login, criem eventos, editem eventos, marquem presença, desmarquem presença e acompanhem a lista de participantes por meio de uma dashboard interativa.

## Requisitos

- PHP 7.4 ou superior
- Composer
- Node.js e npm
- MySQL/phpmyadmin

## Instalação

1. Clone o repositório para o seu ambiente local:
    ```bash
    git clone https://github.com/seu-usuario/event-management-system.git
    cd event-management-system
    ```

2. Instale as dependências do PHP usando o Composer:
    ```bash
    composer install
    ```

3. Instale as dependências do JavaScript usando npm:
    ```bash
    npm install
    ```

4. Copie o arquivo `.env.example` para `.env` e configure suas credenciais de banco de dados:
    ```bash
    cp .env.example .env
    ```

5. Gere a chave da aplicação Laravel:
    ```bash
    php artisan key:generate
    ```

6. Execute as migrações do banco de dados:
    ```bash
    php artisan migrate
    ```

7. Compile os arquivos de frontend usando Vite:
    ```bash
    npm run dev
    ```

## Funcionalidades
![Home](/fotosProjeto/home.png)
### 1. Integração com Banco de Dados
   - Conecte-se ao banco de dados MySQL/phpmyadmin configurando o arquivo `.env` com suas credenciais.
   - Execute `php artisan migrate` para criar as tabelas necessárias.
   ![Banco de dados](/fotosProjeto/bdo.png)

### 2. Login/Cadastro
   - O sistema utiliza autenticação do Laravel. Os usuários podem se registrar e fazer login para acessar a dashboard.
    ![Cadastro](/fotosProjeto/cadastro.png)
    ![Login](/fotosProjeto/login.png)

### 3. Criação de Evento
   - Os usuários autenticados podem criar eventos preenchendo um formulário com detalhes do evento, como nome, descrição, data e local.
    ![Pag criação de evento](/fotosProjeto/criaca.png)
    ![Sucesso na criação de evento](/fotosProjeto/criasuu.png)
    ![Preencher os campos na criação de evento](/fotosProjeto/errocria.png)

### 4. Edição de Evento
   - Os eventos existentes podem ser editados pelos criadores para atualizar informações.
    ![Página de edição de evento](/fotosProjeto/editevent.png)

### 5. Excluir  Evento
   - Os eventos existentes podem ser excluidos pelos criadores que o criou.
    ![Deletar evento](/fotosProjeto/deletevent.png)

### 6. Marcar Presença no Evento
   - Os usuários podem marcar presença em eventos e visualizar a lista de eventos nos quais marcaram presença.
    ![Marca presença no evento](/fotosProjeto/pre_confirmada.png)

### 7. Desmarcar Presença no Evento
   - Os usuários podem desmarcar presença em eventos, removendo-se da lista de participantes.
    ![Desmarcando presença no evento](/fotosProjeto/pre_remo.png)
    ![Desmarcando presença no evento](/fotosProjeto/rem_presenca.png)

### 8. Desmarcar Presença no Evento
   - Os usuários podem ver a presença na paginas dos eventos, informando-o que já está participando.
    ![Já está confirmando no evento](/fotosProjeto/participoando.png)
    

### 9. Visualizar Contagem de Participantes
   - A dashboard exibe o número de pessoas que confirmaram presença em cada evento.
    ![Na informação do evento da para ver quantos participantes terá](/fotosProjeto/con_presença.png)

### 10. Busca de eventos
   - A dashboard exibe o lugar a onde o usuário consegue buscar os eventos cadastrados por outros usuários.
    ![Buscando evento por nome](/fotosProjeto/busca1.png)
    ![Buscando evento por nome](/fotosProjeto/busca1.png)


### 11. Lista os eventos ativos na navbar
   - Na Navbar exibe os eventos cadastrados por outros usuários.
    ![Eventos que estão disponiveis direto na navbar](/fotosProjeto/listaevent.png)

## Como Executar

1. Inicie o servidor de desenvolvimento do Laravel:
    ```bash
    php artisan serve
    ```

2. Acesse o sistema pelo navegador em `http://localhost:8000`


## Licença

Este projeto está licenciado sob a Licença MIT.

