Title: Django - Aula 03 - Criando o seu primeiro app
Date: 2016-11-13
Category: Django
Slug: django-framework-aula-03-criando-app
Tags: django, python, web
Summary: Criando seu primeiro app em Django
status: draft

*[CLI]: Command Line Interface
*[RAD]: Rapid Application Development

[venv]: <{filename}../tools/2016-11-04_virtualenv.md> "Ambientes Virtuais"
[pip]: <{filename}../tools/2016-11-05_pip.md> "PIP"

## Conceito de App

App (ou módulo) é um dos conceitos que constuma confundir bastante os iniciantes em Django. Quando criamos um projeto o Django cria a estrutura principal para nós, mas deixa conosco a responsabilidade da criação dos módulos que irão compor o funcionamento desse projeto. Um projeto pode conter vários módulos, cada um com suas funcionalidades ou papéis específicos. Podemos instalar apps de terceiros. Essa é uma das grandes vantagens da framework, permitindo o "loose coupling" (baixo acoplamento) para que possamos ter vários apps funcionando em conjunto, mas independentes um do outro. E como criamos esses apps?

```bash
(django_project) /home/user/projetos $ django-admin startapp myapp  
```
