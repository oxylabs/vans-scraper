import fetch from 'node-fetch';

const username = 'YOUR_USERNAME';
const password = 'YOUR_PASSWORD';
const body = {
  'source': 'universal_ecommerce',
  'url': 'https://www.vans.ca/en-ca/categories/sale-c5410?f=gender,women&gad_source=1&gclid=cjwkcaiaungubhakeiwagid4auzyymbv7pagm7evcvelpcwxj9iaurxiyfu5skvbpwyrcj2n2q08ahocyjqqavd_bwe',
};
const response = await fetch('https://realtime.oxylabs.io/v1/queries', {
  method: 'post',
  body: JSON.stringify(body),
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Basic ' + Buffer.from(`${username}:${password}`).toString('base64'),
  }
});

console.log(await response.json());