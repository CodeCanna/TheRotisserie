import React from 'react';
import logo from './logo.svg';
import './App.css';
//import axios from 'axios';
import http from 'http';
import getChimkin from './GetChimkins';

function App() {

  let chim = getChimkin();

  console.log(chim);
  

  // GET request for remote image
  /*
  axios({
    method: 'get',
    url: 'https://api.thecatapi.com/v1/images/search?breed_ids=sphy',
    responseType: 'json',
    headers: {
      "x-api-key": "7446e3a4-068f-45cd-bf4a-4da200970f1d"
    }
  })
    .then(function (response) {
      chimken = response;
      console.log(response);
    });

    console.log(chimken);
    */


  return (
    <div className="App">
      <header className="App-header">
        <p>{getChimkin()}</p>
      </header>
    </div>
  );
}

export default App;
