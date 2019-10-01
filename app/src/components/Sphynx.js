import React from 'react';
import axios from 'axios';
import {Container} from 'react-bootstrap';
import UI from './UI';
import getApiKey from '../.something.js';

/**
 * This Component sends a GET request to The Cat API and returns a picture of a sphinx cat.
 */
export default class PersonList extends React.Component {
    state = {
        cats: '',
        id: ''
    }

    componentDidMount() {
        let config = axios.create({
            timeout: 1000,
            headers: {
                "x-api-key": getApiKey()
            }
        });
        axios.get(`https://api.thecatapi.com/v1/images/search?breed_ids=sphy`, config)
            .then(response => {
                const cat = response.data[0].url;
                const id = response.data[0].id;

                this.setState({ cat });
                this.setState({ id });
            });
    }

    render() {
        return (
            <Container fluid>
                <img id="chimkin" src={this.state.cat} alt="Chimkin"/>
                <UI url={this.state.cat} imageId={this.state.id}/>
            </Container>
        )
    }
}