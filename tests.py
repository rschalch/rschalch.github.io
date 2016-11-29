import requests

params = {'sensor': 'false', 'address': 'Av. Paulista, 1000'}
r = requests.get("http://maps.googleapis.com/maps/api/geocode/json", params=params)
print(r.content)
