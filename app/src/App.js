import React from 'react';
import logo from './logo.svg';
import './App.css';
import Sphynx from './components/Sphynx';
import { Container } from 'react-bootstrap';
import Footer from './components/Footer';
import {Switch, BrowserRouter, Route, Link} from "react-router-dom";
import {applyMiddleware, createStore} from "redux";
import {Provider} from 'react-redux';
import thunk from 'redux-thunk';


function App() {
    return (
        <div as={Container} className='App' fluid>
            <Sphynx />
            <Footer/>
        </div>
    );
}

export default App;