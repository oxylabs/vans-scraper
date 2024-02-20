# Vans Scraper API

[![Oxylabs promo code](https://user-images.githubusercontent.com/129506779/250792357-8289e25e-9c36-4dc0-a5e2-2706db797bb5.png)](https://oxylabs.go2cloud.org/aff_c?offer_id=7&aff_id=877&url_id=112)

Oxylabs' [Vans Scraper](https://oxylabs.io/products/scraper-api/ecommerce/vans?utm_source=github&utm_medium=repositories&utm_campaign=product) is a data gathering solution allowing you to extract real-time information from an Vans website effortlessly. This brief guide showcases how Vans Scraper works, along with code examples to help you better understand how to use it hassle-free.

### How it works

You can get Vans results by providing your own URLs to our service. We can return the HTML for any page you like.

#### Python code example

The example below illustrates how you can get HTML of Vans page.

```python
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
```
Find code examples for other programming languages [**here**](https://github.com/oxylabs/vans-scraper/tree/main/code%20examples)

#### Output Example
```json
{
  "results": [
    {
      "content": "<!doctype html>\n<html data-n-head-ssr lang=\"en-CA\" data-n-head=\"%7B%22lang%22:%7B%22ssr%22:%22en-CA% ... </html>",
      "created_at": "2024-02-20 12:58:14",
      "updated_at": "2024-02-20 12:58:16",
      "page": 1,
      "url": "https://www.vans.ca/en-ca/categories/sale-c5410?f=gender,women&gad_source=1&gclid=cjwkcaiaungubhakeiwagid4auzyymbv7pagm7evcvelpcwxj9iaurxiyfu5skvbpwyrcj2n2q08ahocyjqqavd_bwe",
      "job_id": "7165691118808501249",
      "status_code": 200
    }
  ]
}
```
With our Vans Scraper, you can seamlessly acquire public data from any Vans webpage. Gather the necessary product details, including styles, color options, or sizes, to gauge the market and always stay a step ahead of your rivals. If there's anything you're unclear about, feel free to reach out to our support team through live chat or by sending an email to hello@oxylabs.io.