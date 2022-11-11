# Aplicação para gerenciamento da discografia da dupla Tião Carreiro e Pardinho

<p align="left">O usuário deve conseguir: </p>

##### 1) Ver lista de álbuns e faixas
##### 2) Pesquisar álbuns por nome
##### 3) Adicionar um novo álbum
##### 4) Adicionar uma nova faixa em um álbum
##### 5) Excluir uma faixa
##### 6) Excluir um álbum

#

## 👨‍💻 Tecnologias

#### Este sistema foi desenvolvido com as seguintes tecnologias e bibliotecas:

- **Linguagem:** [PHP](https://www.php.net/)
- **Framework:** [Laravel](https://laravel.com/)
- **Framework CSS:** [Tailwind CSS](https://tailwindcss.com/)
- **Banco de dados:** [MySQL](https://www.mysql.com/)

#

## ℹ️ Como usar a aplicação

### Pré-requisitos

Para clonar e rodar a aplicação, é necessário ter instalado em sua máquina o [Composer](https://getcomposer.org/), [Laravel](https://laravel.com/docs/4.2), [Git](https://git-scm.com), [MySQL](https://www.mysql.com/) e [NodeJS](https://nodejs.org/en/).
Além disso, é legal ter um bom editor de código, como o [VSCode](https://code.visualstudio.com/).

### 🎲 Rodando a aplicação

```bash
# Clone este repositório
$ git clone <https://github.com/joaovtmarques/laravel-discografia.git>
# Dentro da pasta 'laravel-discografia', crie um .env com e defina as variáveis para o banco de dados.
# Acesse a pasta 'laravel-discografia' no terminal e rode as migrations
$ cd laravel-discografia
$ php artisan migrate
# Em outro terminal, rode
$ npm run dev
# Após rodar as migrations
$ php artisan serve
# O projeto deverá ser executado em alguns segundos em <http://localhost:8000/albums>
```
