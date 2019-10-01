import React from 'react';
import { Container, Button, Form } from 'react-bootstrap';

export default class UI extends React.Component {
    render(props) {
        return (
            <>
                <a href={this.props.url} download={this.props.id} className="btn btn-primary">Download</a>
            </>
        );
    }
}