import React from 'react';
import logo from './logo.svg';
import './App.css';
import Sphynx from './components/Sphynx';
import { Container } from 'react-bootstrap';

function App() {
    return (
        <div as={Container} className='App' fluid>
            <Sphynx />
        </div>
    );
}

export default App;