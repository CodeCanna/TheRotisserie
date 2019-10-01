const axios = require('axios');
const wrangle = require('express');

function chimkinWrangler(url) {
    axios({
        method: 'get',
        url: url,
        responseType: 'json',
        headers: {
            "x-api-key": "7446e3a4-068f-45cd-bf4a-4da200970f1d"
        }
    }).then(function(response) {



    }).catch(function(err) {
        throw new Error(err);
    });
}

let catUrl = "https://api.thecatapi.com/v1/images/search?breed_ids=sphy";

let chimkins = chimkinWrangler(catUrl);

console.log(chimkins);