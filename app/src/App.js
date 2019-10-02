import React from 'react';
import logo from './logo.svg';
import './App.css';
import Sphynx from './components/Sphynx';
import { Container, Row, Col } from 'react-bootstrap';
import Footer from './components/Footer';
import { Switch, BrowserRouter, Route, Link } from "react-router-dom";
import { applyMiddleware, createStore } from "redux";
import { Provider } from 'react-redux';
import thunk from 'redux-thunk';
import UI from './components/UI';

function App() {
    return (
        <div className='App' fluid>
            <BrowserRouter>
                <Switch>
                    <Row>
                        <Col>
                            <Route exact path='/' component={Sphynx} />
                        </Col>
                    </Row>
                    <Row>
                        <Col>
                            <Footer />
                        </Col>
                    </Row>
                </Switch>
            </BrowserRouter>
        </div>
    );
}

export default App;