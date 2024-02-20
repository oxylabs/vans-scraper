import requests
from pprint import pprint

# Structure payload.
payload = {
    'source': 'universal_ecommerce',
    'url': 'https://www.vans.ca/en-ca/categories/sale-c5410?f=gender,women&gad_source=1&gclid=cjwkcaiaungubhakeiwagid4auzyymbv7pagm7evcvelpcwxj9iaurxiyfu5skvbpwyrcj2n2q08ahocyjqqavd_bwe'
}

# Get response.
response = requests.request(
    'POST',
    'https://realtime.oxylabs.io/v1/queries',
    auth=('user', 'pass1'),
    json=payload,
)

# Instead of response with job status and results url, this will return the
# JSON response with the result.
pprint(response.json())