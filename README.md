# Teste Prático Sistema de Cadastro - Usina Santa Rita
 # Projeto Usuários

Este é um projeto simples de cadastro de usuários com funcionalidades de criar, atualizar e excluir usuários, utilizando PHP, MySQL e JS.

Após fazer o download do arquivo e descompactar, siga esses passos:

## 📋 Passos para Rodar o Projeto

### 1️⃣ Criação do Banco MySQL

Para começar, crie o banco de dados e a tabela no MySQL:

```bash
# Acesse o MySQL na sua ferramenta de preferência
mysql -u root -p
```

Execute o seguinte comando para criar o banco de dados:

```sql
CREATE DATABASE users;
```

Crie a tabela `usuarios` com o seguinte comando:

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
```

### 2️⃣ Configuração do Ambiente Local

Coloque a pasta do seu projeto no diretório do servidor web para que ele seja acessível via navegador:

```bash
# Exemplo de caminho em servidores Apache (como o XAMPP ou WAMP)
C:/caminho/do/servidor/htdocs/nome-do-projeto
```

### 3️⃣ Acessar o Projeto no Navegador

Abra o navegador e acesse o seguinte endereço:

```bash
http://localhost/nome-do-projeto
```

Agora você pode acessar a pasta do projeto no navegador e rodar as funcionalidades do sistema.

## 🗂️ Estrutura da Tabela de Usuários

O usuário possui apenas os seguintes campos:

- `id`
- `nome`
- `email`
- `senha`

🔒 **Segurança:** A senha é criptografada para garantir maior proteção dos dados dos usuários.

---

💡 **Observação:** Certifique-se de que o servidor e o banco de dados estejam configurados corretamente para o bom funcionamento do projeto.


