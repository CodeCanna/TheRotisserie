import React from 'react';
import logo from './logo.svg';
import './App.css';
import Sphynx from './components/Sphynx';
import { Container } from 'react-bootstrap';
import Footer from './components/Footer';
import { Switch, BrowserRouter, Route, Link } from "react-router-dom";
import { applyMiddleware, createStore } from "redux";
import { Provider } from 'react-redux';
import thunk from 'redux-thunk';

function App() {
    return (
        <div className='App' fluid>
            <BrowserRouter>
                <Switch>
                    <Route className="mt-4" exact path='/' component={Sphynx} />
                </Switch>
            </BrowserRouter>
            <Footer />
        </div>
    );
}

export default App;