Title: Ambientes Virtuais (virtualenv)
Date: 2016-11-04
Category: Tools
Slug: ambientes-virtuais-virtualenv
Tags: tools, virtualenv

[pip]: <{filename}2016-11-05_pip.md> "Gerenciador de Pacotes Python"

## Conceito e importância dos ambientes virtuais

Virtualenvs são ambientes Python isolados dentro do sistema. Muitas distribuições Linux vem com uma instalação Python padrão e atualmente a mais usada é a 2.7. Acontece que nem sempre essa instalação é a mais apropriada para nossos projetos. Ainda mais hoje que vivemos em plena transição para o Python 3. E quando cada um de nossos projetos precisa de uma versão diferente do Python ou de suas bibliotecas? Ainda, e se o ambiente de produção possui uma versão específica?

Para qualquer desenvolvedor isso seria uma situação muito complicada, tanto a nível de desenvolvimento, organização ou mesmo em se tratando de depuração de erros e testes. Claro que uma plataforma avançada e robusta como a nossa não deixaria de ter uma solução elegante para esses tipos de problemas. Apresentamos os ambientes virtuais, mais conhecidos como "virtualenvs".

## 1. Instalando o pacote virtualenv

O Python possui uma biblioteca específica para a criação desses ambientes separados e para instalar esse pacote basta:

```bash
$ pip install virtualenv
```

## 2. Criando o ambiente virtual

Agora que o pacote virtualenv foi instalado podemos começar a criar ambientes virtuais. É possível instalar ambientes em qualquer parte do nosso sistema, mas existem duas práticas mais usadas: Instalar no mesmo diretório do projeto ou ter uma pasta específica do sistema para armazená-los. Vamos criar um ambiente virtual com uma instalação para Python 3 dentro do diretório do nosso projeto, em uma pasta chamada "venv" (pode-se dar qualquer nome para ela, mas com a boa prática de evitar maiúsculas, caracteres especiais e espaços)

```bash
$ cd pasta_do_meu_projeto
$ virtualenv -p usr/bin/python3 venv
```
O último comando acima é explicado da seguinte forma: usando o comando virtualenv e a opção `-p` para especificar qual interpretador python (no caso o Python 3 que está localizado em usr/bin/python3), crie o ambiente virtual chamado "venv"

## 3. Ativando o ambiente virtual

**Importante**: antes de começar a trabalhar nesse ambiente precisamos ativá-lo com o seguinte comando:

```bash
$ source venv/bin/activate
```

## 4. Instalando bibliotecas dentro do ambiente

Temos um ambiente instalado, ativado e pronto para uso! Vamos agora usar o [PIP][pip] para instalar a biblioteca requests que viverá apenas dentro desse ambiente:

```bash
$ pip install requests
```

## 5. Desativando o ambiente

Terminamos de trabalhar no projeto, então podemos desativar o ambiente para que ele nao seja poluído com instalações que não sejam pertinentes a ele:

```bash
$ deactivate
```
Para excluir o ambiente definitivamente basta deletarmos a pasta venv pois tudo que foi instalado está dentro dela.

## 6. Dicas

Existem tarefas comuns que fazem parte da nossa rotina enquanto trabalhamos com os virtualenvs. Os comandos seguintes exigem que o ambiente virtual esteja funcionando (ativado). Por exemplo, para sabermos quais pacotes estão instalados dentro do ambiente, basta digitarmos:

```bash
$ pip freeze
```

Outra coisa bastante comum é criar um arquivo chamado requirements.txt, o qual especifica quais são as bibliotecas que estão instaladas no ambiente. Criar esse arquivo é muito fácil:

```bash
$ pip freeze > requirements.txt
```

Assim, quando outra pessoa do time for replicar o ambiente em sua máquina, tudo que ela precisará fazer é criar esse ambiente e instalar as bibliotecas que ele exige com o seguinte comando:

```bash
$ pip install -r requirements.txt
```

A opção `-r` especifica quais são os requerimentos do ambiente, os quais estão listados no arquivo requirements.txt.

Esse artigo foi [baseado](http://docs.python-guide.org/en/latest/dev/virtualenvs/) na documentação oficial. 

