Title: Requests
Date: 2016-11-11
Category: Libraries
Slug: requests
Tags: python, requests, libraries

*[API]: Application Program Interface
*[HTTP]: Hypertext Transfer Protocol

## Uma simples e elegante biblioteca para requisições HTTP

Nos dias de hoje, podemos imaginar algum software que não faça algum tipo de consulta na internet?

Conforme a integração tecnológica aumenta, surge também a necessidade de uma centralização cada vez maior a fim de otimizar todo um ecossistema de aplicações, evitar duplicações, aproveitar recursos, etc. Por consequência, o trabalho de pesquisar e extrair dados da rede, não apenas tornou-se uma ciência por si só, como se tranformou no "arroz com feijão" de qualquer desenvolvedor. Indepentendemente de plataforma ou linguagem, todos precisamos consumir esses dados, simplesmente devido ao fato de que a realidade hoje se baseia na conexão entre tudo e todos.

Já que essa é uma necessidade tão básica, qual seria a biblioteca que mais abstrai todas as funções necessárias para realizar essa conexão e comunicação no principal dialeto da web (HTTP) e nos trazer todo o tipo de informação nos mais simples passos possíveis, mesmo sem que precisemos entender tudo o que está envolvido nesse processo?

Sem dúvida alguma: [requests](http://docs.python-requests.org/en/master)

Para instalar essa biblioteca usamos o comando:

```bash
$ pip install requests
```

Abaixo um simples exemplo do uso da requests: fazer uma chamada à API do Google Maps e imprimir a resposta:

```python
import requests

params = {'sensor': 'false', 'address': 'Av. Paulista, 1000'}
r = requests.get("http://maps.googleapis.com/maps/api/geocode/json", params=params)
print(r.content)
```