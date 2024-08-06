# Sistema de Login com Google e Registro

## Visão Geral

Este é um projeto de sistema de login com google e registro desenvolvido em PHP com MySQL, utilizando Docker para simplificar a configuração e execução. Este projeto demonstra habilidades em desenvolvimento web, gerenciamento de sessões e containerização.

## Funcionalidades

- **Registro de Usuários**: Permite que novos usuários se registrem com validação de senha.
- **Login convencional de Usuários**: Verifica credenciais e gerencia sessões de usuário utilizando login tradicional.
- **Login com Google de Usuários**: Autenticação utilizando contas do Google, integrando-se facilmente com o serviço Google Login.
- **Interface de Usuário**: Simples e moderna, com design responsivo.

## Tecnologias e Ferramentas

- **PHP 8.3**: Utilizado para o desenvolvimento do backend, incluindo a lógica de autenticação e gerenciamento de sessões.
- **MySQL 8.0**: Banco de dados relacional utilizado para armazenar as informações dos usuários.
- **Docker**: Ferramenta de containerização utilizada para criar um ambiente de desenvolvimento isolado e consistente.
- **Apache**: Servidor web utilizado para servir a aplicação PHP.
- **HTML/CSS**: Utilizados para criar a interface do usuário, garantindo um design responsivo e amigável.
- **JavaScript**: Utilizado para adicionar interatividade à interface do usuário.

## Instalação e Execução

Para rodar o projeto localmente:

1. **Clone o Repositório**

    ```bash
    git clone https://github.com/seu-usuario/login-registration-system.git
    cd sistema-login-com-google-registro
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

    Navegue até `http://localhost` para acessar a aplicação.


## Capturas de Tela

![Captura de Tela do Login](https://github.com/user-attachments/assets/e9c78e33-1f08-438a-9355-4f8058bd86a3)

![Captura de Tela do Login](https://github.com/user-attachments/assets/eeb093db-b68d-4dad-90a7-d5a869517cdb)

![Captura de Tela do Login](https://github.com/user-attachments/assets/001d37dc-c9ea-4a5a-87bd-976bd5fb6b0c)

![Captura de Tela do Login](https://github.com/user-attachments/assets/ec668220-a7fc-464e-8f04-50d4f4667ed0)

![Captura de Tela do Login](https://github.com/user-attachments/assets/7a9791f1-41ad-4707-9570-c5a8096acf89)

![Captura de Tela do Login](https://github.com/user-attachments/assets/61c24d1d-1f94-40c3-8aca-df82fe0fefb3)

![Captura de Tela do Login](https://github.com/user-attachments/assets/b00a85dc-1351-44ef-acf8-aa70985789fd)

![Captura de Tela do Login](https://github.com/user-attachments/assets/a0618da6-8f5b-40eb-9ddc-cfacf50d03e3)

![Captura de Tela do Login](https://github.com/user-attachments/assets/78ab3e18-2765-4047-838a-3685350ab746)

![Captura de Tela do Login](https://github.com/user-attachments/assets/531e94fc-41e6-4f3f-9664-abb2ab12d10c)

![Captura de Tela do Login](https://github.com/user-attachments/assets/60b0d5be-093b-46f8-bc52-0a76b7e2c3b9)

![Captura de Tela do Login](https://github.com/user-attachments/assets/ddba6122-31a0-42bd-be66-df0125e7c57a)

![Captura de Tela do Login](https://github.com/user-attachments/assets/bd74488a-c367-483b-8d7f-7f67ea510851)

![Captura de Tela do Login](https://github.com/user-attachments/assets/ac48d618-68f6-4b58-90cc-5554e89049c4)

![Captura de Tela do Login](https://github.com/user-attachments/assets/d92699f3-fd6f-404d-90d8-20732166c9ae)

![Captura de Tela do Login](https://github.com/user-attachments/assets/36a13ba4-55b8-4a14-9340-ba59248d1bdd)

![Captura de Tela do Login](https://github.com/user-attachments/assets/c7f50596-133d-41be-b6ff-41e20db02ec6)

![Captura de Tela do Login](https://github.com/user-attachments/assets/2a0f052e-8e19-43de-b226-7b370ce8dae4)

## Problemas Resolvidos e Habilidades Demonstradas

### Problemas Resolvidos

1. **Gerenciamento de Sessões**:
    - **Problema**: Garantir que apenas usuários autenticados possam acessar determinadas páginas.
    - **Solução**: Implementação de sessões PHP para gerenciar o estado do usuário autenticado, com redirecionamentos apropriados para páginas de login quando necessário.

2. **Validação de Entradas**:
    - **Problema**: Necessidade de validar e sanitizar entradas do usuário para evitar SQL Injection e outros ataques.
    - **Solução**: Uso de prepared statements com PDO para prevenir SQL Injection, além de validação e sanitização de dados no backend..

3. **Ambiente de Desenvolvimento Consistente**:
    - **Problema**: Garantir que o ambiente de desenvolvimento seja consistente em diferentes máquinas.
    - **Solução**: Utilização do Docker para criar um ambiente de desenvolvimento isolado e consistente, facilitando a configuração e evitando problemas de compatibilidade.

4. **URLs Inelegíveis para Visitantes**:
    - **Problema**: URLs longas e complexas, como http://localhost/views/auth/register.php, são difíceis de lembrar e não são amigáveis para o usuário.
    - **Solução**: Configuração de URLs amigáveis e limpas utilizando o .htaccess do Apache para redirecionar requisições, tornando as URLs mais simples e intuitivas, como http://localhost/register.

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

Para mais informações, entre em contato **[linkedin](https://www.linkedin.com/in/brunoopetri)**.

---

Agradeço por visitar meu projeto. Estou disponível para discutir qualquer feedback ou colaborar em novos projetos!