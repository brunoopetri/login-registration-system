# Sistema de Login e Registro

## Visão Geral

Este é um projeto de sistema de login e registro desenvolvido em PHP com MySQL, utilizando Docker para simplificar a configuração e execução. Este projeto demonstra habilidades em desenvolvimento web, gerenciamento de sessões e containerização.

## Funcionalidades

- **Registro de Usuários**: Permite que novos usuários se registrem com validação de senha.
- **Login de Usuários**: Verifica credenciais e gerencia sessões de usuário.
- **Interface de Usuário**: Simples e moderna, com design responsivo.

## Tecnologias e Ferramentas

- **PHP 8.3**: Utilizado para o desenvolvimento do backend, incluindo a lógica de autenticação e gerenciamento de sessões.
- **MySQL 5.7**: Banco de dados relacional utilizado para armazenar as informações dos usuários.
- **Docker**: Ferramenta de containerização utilizada para criar um ambiente de desenvolvimento isolado e consistente.
- **Apache**: Servidor web utilizado para servir a aplicação PHP.
- **HTML/CSS**: Utilizados para criar a interface do usuário, garantindo um design responsivo e amigável.
- **JavaScript**: Utilizado para adicionar interatividade à interface do usuário.

## Instalação e Execução

Para rodar o projeto localmente:

1. **Clone o Repositório**

    ```bash
    git clone https://github.com/seu-usuario/login-registration-system.git
    cd login-registration-system
    ```

2. **Configure o Ambiente Docker**

    Certifique-se de ter [Docker](https://docs.docker.com/get-docker/) e [Docker Compose](https://docs.docker.com/compose/install/) instalados.

3. **Crie um Arquivo `.env`**

    Copie o arquivo de exemplo e ajuste as configurações:

    ```bash
    cp .env.example .env
    ```

4. **Inicie os Containers**

    ```bash
    docker-compose up -d
    ```

5. **Acesse o Sistema**

    Navegue até `http://localhost:8080` para acessar a aplicação.


## Capturas de Tela

![Captura de Tela do Login](https://github.com/user-attachments/assets/b6e33b56-7e8e-4ba5-a02e-411c55801024)

![Captura de Tela do Login](https://github.com/user-attachments/assets/ace19868-27b6-4376-99ac-313ca23e4cb3)

![Captura de Tela do Login](https://github.com/user-attachments/assets/c960df16-1547-41da-b50e-f24b6e7cc3c7)

![Captura de Tela do Login](https://github.com/user-attachments/assets/92088c82-55c9-4d68-9b6b-9a559bdd8c01)

![Captura de Tela do Login](https://github.com/user-attachments/assets/d6aa94ee-9d89-4221-911a-1656241af7fd)

![Captura de Tela do Login](https://github.com/user-attachments/assets/18c20bc0-8e49-4fbc-945d-c575c4e33343)

![Captura de Tela do Login](https://github.com/user-attachments/assets/562e093e-e6ce-420a-b5cf-268e26294634)

![Captura de Tela do Login](https://github.com/user-attachments/assets/05d5c441-cc0e-4980-a625-c5137b538b68)

![Captura de Tela do Login](https://github.com/user-attachments/assets/b9785f60-14e5-4d18-8c51-f702f15fa795)

![Captura de Tela do Login](https://github.com/user-attachments/assets/706f7b09-57d7-4c5d-84a3-adfeb6c6ea89)

![Captura de Tela do Login](https://github.com/user-attachments/assets/91d196ae-4919-42ce-9650-c7d78506b89c)

## Problemas Resolvidos e Habilidades Demonstradas

### Problemas Resolvidos

1. **Gerenciamento de Sessões**:
    - **Problema**: Garantir que apenas usuários autenticados possam acessar determinadas páginas.
    - **Solução**: Implementação de sessões PHP para gerenciar o estado do usuário autenticado, com redirecionamentos apropriados para páginas de login quando necessário.

2. **Validação de Entradas**:
    - **Problema**: Necessidade de validar e sanitizar entradas do usuário para evitar SQL Injection e outros ataques.
    - **Solução**: Uso de prepared statements com MySQLi para prevenir SQL Injection, além de validação e sanitização de dados no backend.

3. **Ambiente de Desenvolvimento Consistente**:
    - **Problema**: Garantir que o ambiente de desenvolvimento seja consistente em diferentes máquinas.
    - **Solução**: Utilização do Docker para criar um ambiente de desenvolvimento isolado e consistente, facilitando a configuração e evitando problemas de compatibilidade.

4. **URLs Inelegíveis para Visitantes**:
    - **Problema**: URLs longas e complexas, como http://localhost:8080/templates/register.html, são difíceis de lembrar e não são amigáveis para o usuário.
    - **Solução**: Configuração de URLs amigáveis e limpas utilizando o .htaccess do Apache para redirecionar requisições, tornando as URLs mais simples e intuitivas, como http://localhost:8080/register.

### Habilidades Demonstradas

- **Desenvolvimento Backend**: Implementação de lógica de autenticação e gerenciamento de sessões utilizando PHP.
- **Gerenciamento de Banco de Dados**: Criação e manipulação de bancos de dados MySQL, incluindo o uso de prepared statements para segurança.
- **Containerização**: Configuração e uso de Docker para desenvolvimento.
- **Desenvolvimento Frontend**: Criação de interfaces responsivas e intuitivas utilizando HTML, CSS e JavaScript.
- **Resolução de Problemas**: Identificação e solução de problemas comuns em desenvolvimento web, como segurança de dados e gerenciamento de estado.
- **Configuração de Servidor Web:**:Uso de arquivos .htaccess para configurar reescrita de URLs e melhorar a navegabilidade do site.

## Contribuição

Contribuições são bem-vindas! Siga estas etapas para contribuir:

1. **Fork o Repositório**
2. **Crie uma Branch**
3. **Faça suas Alterações**
4. **Submeta um Pull Request**

## Licença

Este projeto é licenciado sob a Licença MIT - veja o link **[license](https://opensource.org/license/MIT)** para detalhes.

## Contato

Para mais informações, entre em contato com eng.software.petri@gmail.com.

---

Agradeço por visitar meu projeto. Estou disponível para discutir qualquer feedback ou colaborar em novos projetos!
