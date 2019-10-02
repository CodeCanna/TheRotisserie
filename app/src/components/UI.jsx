import React from 'react';
import { Container, Button, Form, Row, Col } from 'react-bootstrap';

export default class UI extends React.Component {
    constructor(props) {
        super(props);
    }

    render(props) {
        return (
            <>
                <Row>
                    <Col>
                        <a href={this.props.url} className="btn btn-success" target="_blank" rel="noopener noreferrer">Save</a>
                    </Col>
                    <Col>
                        <a href="/" className="btn btn-secondary">Next</a>
                    </Col>
                </Row>
            </>
        );
    }
}