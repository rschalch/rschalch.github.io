Title: Jupyter Notebook
Date: 2016-11-07
Category: Tools
Slug: jupyter-notebook
Tags: tools, notebooks

[pip]: <{filename}2016-11-05_pip.md> "Gerenciador de Pacotes Python"

## Sobre a ferramenta

Segundo os criadores: O Jupyter Notebook é um aplicativo web que permite criar e compartilhar documentos que contêm live code, equações, visualizações e texto explicativos. Usos incluem: filtragem e transformação de dados, simulação numérica, modelagens estatística, machine learning e muito mais.

## O que são notebooks?

Nos meus primeiros dias com Python comecei usando o terminal rodando o interpretador. Imprimia umas mensagens, concatenava variáveis, construia listas e dicionários, aquelas coisas todas de quem está descobrindo os ifs e elses de uma linguagem. Logo após passei para os editores, escrevendo scripts mais complexos e criando projetos apenas para experimentar a standard library e algumas bibliotecas. Algo de errado com isso? Absolutamente, é o processo pelo qual todo mundo inicia. No entanto, meu aprendizado poderia ter sido muito mais rápido e efetivo se eu tivesse conhecido os notebooks, uma das mais poderosas ferramentas da plataforma Python!

Notebooks são arquivos com extensão **.ipynb**, nos quais podemos armazenar não apenas código, mas também texto, html (via markdown), imagens, etc., que podem nos ajudar a documentar nosso scripts de uma forma bem poderosa. Os notebooks são muito usados na área de ciência e análise de dados pois permitem a medição da performance de um script, armazenagem de resultados, apresentação de gráficos e muitos outros recursos. Além de tudo isso podemos ainda compartilhar esses arquivos, permitindo que outras pessoas rodem todo o conteúdo de um notebook em seu próprio ambiente tendo a facilidade das informações e ilustrações incluídas para o entendimento do código.

O estranho é que o próprio [site do desenvolvedor](http://jupyter.org/index.html) até pouco tempo atrás não deixava muito claras as vantagens que essa ferramenta tem para os iniciantes, por isso resolvi escrever esse post. Fala-se muito lá em data science, data analysis, mas infelizmente pecam por não fazerem uma introdução amigável a respeito! Bom, já temos o básico, vamos à prática!

Os criadores do Jupyter Notebook recomendam fortemente a instalação do pacote [Anaconda](https://www.continuum.io/downloads), uma distribuição Python que vem com muitas bibliotecas e ferramentas integradas em um único pacote otimizado para desenvolvimento em data science. Vou escrever sobre esse pacote no futuro, mas como é uma distro um pouco pesada para os nossos propósitos, vamos de [PIP][pip] mesmo ;)

## Instalando e iniciando o Jupyter Notebook

Em primeiro lugar é uma boa idéia fazer o upgrade do gerenciador de pacotes pip, pois o Jupyter tem uma quantidade grande de dependências.

```bash
$ pip3 install --upgrade pip
```

A instalação é simples:

```bash
$ pip3 install jupyter
```

E para rodar o Jupyter o comando mais óbvio possível:

```bash
$ jupyter-notebook
```

## Conceitos e funções

Quando iniciamos o servidor Jupyter ele nos abre uma página (http://localhost:8888/tree) onde podemos criar novos notebooks baseados nos seguintes kernels: IPython, R e Julia, sendo que apenas o IPython vem com a instalação padrão. Abaixo um preview dessa página já com alguns notebooks criados como exemplo. Esses arquivos encontram-se no mesmo diretório onde inserimos o comando `jupyter-notebook` dentro do terminal. (Clique nas imagens abaixo para ampliá-las)

<a href="images/jupyter-1.jpg" data-uk-lightbox title=""><img src="images/jupyter-1.jpg" /></a>

Clicando no botão "New", temos a opção de criar uma das seguintes opções: arquivos de texto, pastas, terminais ou um novo notebook baseado no kernel do Python. Vamos criar um novo notebook:

<a href="images/jupyter-2.jpg" data-uk-lightbox title=""><img src="images/jupyter-2.jpg" /></a>

Logo ao criar vemos um ambiente parecido com um terminal, com menus, barra de ferramentas, bem intuitivo.

Um notebook pode conter uma ou mais células (na figura acima, envolta na cor verde), que são locais onde podemos inserir 3 tipos de conteúdo: código, markdown ou raw input (conteúdo que não será interpretado). Células no formato código (padrão) rodam um prompt com o interpetador IPython, com todas as suas "magic functions" incluídas. Insira o código abaixo na primeira célula e, para rodar e imprimir o resultado, use o comando CTRL + Enter.

```python
from IPython.display import YouTubeVideo
YouTubeVideo('7YcW25PHnAA')
```
Resultado:

<a href="images/jupyter-3.jpg" data-uk-lightbox title=""><img src="images/jupyter-3.jpg" /></a>

Apenas por esse exemplo podemos ver o quão útil e poderoso pode ser o Jupyter para todos os tipos de usuários e desenvolvedores, iniciantes ou não. Para saber mais consulte a [documentação oficial](https://jupyter.readthedocs.io/en/latest/index.html) ou visite a [Notebook Gallery](http://nb.bianp.net/)

