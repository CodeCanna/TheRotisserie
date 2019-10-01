import React from 'react';
import { Container, Button, Form, Row, Col } from 'react-bootstrap';

export default class UI extends React.Component {
    render(props) {
        return (
            <>
                <Row>
                    <Col>
                        <Button>Prev</Button>
                    </Col>
                    <Col>
                        <a href={this.props.url} download={this.props.id} className="btn btn-primary">Download</a>
                    </Col>
                    <Col>
                        <form>

                        </form>
                        <button action="submit" className="btn btn-primary">Next</button>
                    </Col>
                </Row>
            </>
        );
    }
}