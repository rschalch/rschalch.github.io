Title: Django - Aula 02 - Criando o projeto
Date: 2016-11-12
Category: Django
Slug: django-framework-aula-02-criando-projeto
Tags: django, python, web
Summary: Criando seu primeiro projeto Django

*[CLI]: Command Line Interface
*[RAD]: Rapid Application Development

[venv]: <{filename}../tools/2016-11-04_virtualenv.md> "Ambientes Virtuais"
[pip]: <{filename}../tools/2016-11-05_pip.md> "PIP"

## Pré-requisitos

Agora que conhecemos um pouquinho sobre a framework é hora de botar a mão na massa! Antes porém, é necessário preencher alguns requisitos do sistema:

1. **Controle de versão**: Vamos usar o GIT para essa finalidade, então certifique-se de que ele esteja instalado na sua máquina. Não conhece ou não sabe o que é GIT ainda? Urgente, atualize-se porque saber trabalhar com GIT é uma exigência na nossa área! Um bom tutorial pode ser achado [neste endereço](https://git-scm.com/book/pt-br/v1/Primeiros-passos-No%C3%A7%C3%B5es-B%C3%A1sicas-de-Git).

2. **Virtualenv**: Se você não sabe o que ambientes virtuais são, sua importância, ou como instalar, escrevi sobre esse assunto em um outro [artigo][venv].

3. **Virtualenvwrapper**: Uma série de extensões para tornar mais fácil o trabalho com o virtualenv. A instalação e utilização dessa ferramenta pode ser encontrada [aqui](#).

## Criação e ativação do ambiente

O primeiro passo é nos certificarmos de termos todo o ambiente virtual preparado para a instalação dos pacotes do projeto. Em apenas um comando criaremos um ambiente chamado "django_project" em Python 3 e instalaremos a última versão do Django.

```bash
$ mkvirtualenv --python=/usr/bin/python3 -i django django_project
```

Ativamos o nosso ambiente:

```bash
$ workon django_project
```

Devemos ter agora tudo pronto para começar. O prompt do terminal por padrão mostra qual o ambiente que está sendo utilizado da seguinte maneira (no nosso caso):

```bash
(django_project) $ 
```

## Iniciando um projeto Django

Sendo uma framework moderna e baseada em padrões RAD, Django possui uma CLI que facilita muitos processos comuns na criação e andamento de um projeto. Primeiramente vá até o seu diretório padrão de projetos (aqui usaremos como exemplo "/home/user/projetos"). Isso porque o Django irá criar dentro desse diretório uma pasta onde todo o seu projeto será contido. Digite os seguintes comandos:

```bash
(django_project) $ cd /home/user/projetos  
(django_project) /home/user/projetos $ django-admin startproject myproject  
```

O `django-admin` é um comando usado para funções administrativas como criar projetos e apps internos. Usando-o acima, criamos dentro da pasta "/home/user/projetos" um diretório com a seguinte estrutura:

```bash
myproject/
    myproject/
        __init__.py
        settings.py
        urls.py
        wsgi.py
    manage.py
```

Vamos explicar essa estrutura: A pasta "myproject" externa é uma pasta usada apenas pra conter o projeto. O Django realmente nao se importa como ela é chamada, ele a criou com esse nome porque foi o nome de projeto que especificamos. Agora, todos os arquivos que estão dentro dela são de suma importância para a aplicação. Dentro de "myproject" foi criada uma outra pasta com o mesmo nome. Essa pasta interna é o principal módulo do projeto, contendo importantes arquivos de configuração como:

1. **settings.py**: um dos arquivos mais usados, pois contém configurações globais da aplicação.
2. **urls.py**: arquivo usado para configurar as rotas (urls) do projeto e especificar suas respectivas views.
3. **wsgi.py**: usado para deploy.

E além desses temos o **manage.py**, localizado ao lado do módulo do projeto, que faz basicamente as mesmas coisas que o django-admin, mas além disso ele coloca o módulo do nosso projeto dentro de `sys.path` e seta uma importante variável de ambiente, "DJANGO\_SETTINGS\_MODULE", para que ela aponte para o arquivo settings.py descrito acima.

## Sincronizando o banco de dados

Por padrão, Django nos oferece a opção de criação de um banco SQLite. Vamos usar esse banco em nosso projeto, mas para isso é necessário que sincronizemos esse banco com a aplicação:

```bash
(django_project) /home/user/projetos $ python manage.py migrate  
```
Com esse comando, criamos um banco SQLite (db.sqlite3) na raiz do projeto:

```bash
myproject/
    myproject/
        __init__.py
        settings.py
        urls.py
        wsgi.py
    db.sqlite3
    manage.py
```

## Testando o projeto

Agora podemos ver se a aplicação está funcionando corretamente com o comando:

```bash
(django_project) /home/user/projetos $ python manage.py runserver  
```

Isso fará com que o Django rode a aplicação em um servidor local e sirva nosso projeto em "http://127.0.0.1:8000". Abra seu navegador e digite esse endereço.

Caso tudo esteja ok a seguinte página aparecerá (clique para ampliar):

<a href="images/django-1.jpg" data-uk-lightbox title=""><img src="images/django-1.jpg" /></a>

Parabéns! Temos nosso primeiro projeto em Django "up and running" ;)
