import React from 'react';
import { Container, Button, Form, Row, Col } from 'react-bootstrap';

export default class UI extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            isShow: true,
            url: props.url,
            id: props.id
        }
    }

    render() {
        console.log(this.state.url);
        return (
            <>
                <Row>
                    <Col>
                        <a href={this.state.url} className="btn btn-primary">Download</a>
                    </Col>
                    <Col>
                        <a href="/" className="btn btn-primary">Next</a>
                    </Col>
                </Row>
            </>
        );
    }
}